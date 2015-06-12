<?php

class App
{
	protected $controller = 'news';
	protected $method = 'index';
	protected $params = [];

	public function run()
	{
		$url = $this->parseUrl();
		$this->route($url);
	}

	protected function parseUrl()
	{
		if(isset($_GET['url']))
		{
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));	//return an array of $_GET['url'] without / and suspect characts
		}
	}

	public function route($url)
	{
		$url[0] = ucfirst($url[0]);

		//If the controller file exist, go to it
		if (file_exists('../app/controllers/' . $url[0] . '.php'))
		{
			$this->controller = $url[0];
			unset($url[0]);
		}

		//If it doesn't exist, go to default controller
		require_once '../app/controllers/' . $this->controller . '.php';
		
		// Create a instance of it
		$this->controller = new $this->controller;

		if (isset($url[1]))	//If there is a method called
		{
			//If the method exist, execute it
			if (method_exists($this->controller, $url[1]))
			{
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		//If there is param so create empty array
		$this->params = $url ? array_values($url) : [];
		call_user_func_array([$this->controller, $this->method], $this->params);
	}
}