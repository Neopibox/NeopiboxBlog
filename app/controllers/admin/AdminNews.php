<?php

class AdminNews extends Controller
{
	public function index()
	{
		$this->list_news();
	}

	public function list_news()
	{
		$model = $this->model('News');

		$news = $model->get_list_news(1, 30);

		$this->view('admin/news/list', $news);
	}

	public function create()
	{
		$model = $this->model('AdminNews', 'Admin');

		if(!isset($_POST['title']) or !isset($_POST['content'])) // Display the form if it's the first time
		{
			$this->view('admin/news/create');
		}
		else
		{
			$title = $_POST['title'];
			$content = $_POST['content'];
			
			/* Start - Checking ... */
			if($title == '' or $content == '')
			{
				$this->view('admin/news/create');
				exit();
			}
			/* End - Checking ... */
			
			$model->create_news($title, $content);
			
			$this->view('admin/news/create_complete');
		}
	}

	public function modify($id)
	{
		if(!isset($_POST['title']) or !isset($_POST['content'])) // Display the form if it's the first time
		{
			$model = $this->model('News');

			$news = $model->get_news($id);
			
			// Prepare data for the view
			$id = $news['id'];
			$title = $news['title'];
			$content = $news['content'];

			$data = array($id, $title, $content);
			
			$this->view('admin/news/modify', $data);
		}
		else
		{
			$model = $this->model('AdminNews', 'Admin');

			$title = $_POST['title'];
			$content = $_POST['content'];
			
			/* Start - Checking ... */
			if($title == '' or $content == '')
			{
				exit();
			}
			/* End - Checking ... */
			
			$model->modify_news($title, $content, $id);
			
			$this->view('admin/news/modify_complete');
		}
	}

	public function delete($id)
	{
		$model = $this->model('AdminNews', 'Admin');

		if($model->news_exist($id))
		{
			$model->delete_news($id);
			$this->view('admin/news/delete_complete');
		}
		else
		{
			$this->view('admin/news/delete_complete');
		}
	}
}