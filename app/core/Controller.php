<?php

class Controller
{
	public function model($model, $path = "")
	{
		$model = 'model_' . $model;
		$path = strtolower($path);

		if($path != "")
			require_once '../app/models/' . $path . '/' . $model . '.php';
		else
			require_once '../app/models/' . $model . '.php';

		return new $model();
	}

	public function view($view, $data = [], $ajax = false)
	{
		if(!$ajax)	// If it's not a ajax request, send the entire page
		{
			ob_start();
			require_once '../app/views/' . $view . '.php';
			$content = ob_get_clean();

			require_once('../app/views/template.php');
		}
		else // If it's a ajax request, send only data with a small representation
		{
			require_once '../app/views/' . $view . '.php';
		}
	}

	// Re-route to sub-controllers if necessary
	public function route($controller, $path, $action, $params = [])
	{
		require_once '../app/controllers/' . $path . '/' . $controller . '.php';

		// Create a instance of the controller
		$controller = new $controller;

		// If the method exist, execute it
		if(method_exists($controller, $action))
		{
			$method = $action;
		}

		call_user_func_array([$controller, $method], $params);
	}
}