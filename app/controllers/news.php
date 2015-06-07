<?php

class News extends Controller
{
	private $pages_displayable = 2;

	public function index()
	{
		// By default, show lastest news
		$this->list_news(1);
	}

	public function list_news($id_page = 1)
	{
		$model =  $this->model('News');

		$number_pages = $model->get_pages_news(5);

		// Check id
		if($id_page < 1)
			$id_page = 1;
		else if($id_page > $number_pages)
			$id_page = $number_pages;

		$news = $model->get_list_news($id_page, 5);

		// Ranging index pages to display
		if($id_page - $this->pages_displayable < 1)
			$begin_index = 1;
		else
			$begin_index = $id_page - $this->pages_displayable;
		
		if($id_page + $this->pages_displayable > $number_pages)
			$end_index = $number_pages;
		else
			$end_index = $id_page + $this->pages_displayable;

		$data = array
		(
			'news' => $news,
			'begin_index' => $begin_index,
			'end_index' => $end_index
		);

		$this->view('news/list', $data);
	}

	public function show($id_news = 1)
	{
		$model =  $this->model('News');

		if(!$model->check_id_news($id_news))
		{
			throw 'Erreur : ID de news invalide';
			return;
		}

		$data = $model->get_news($id_news);

		$this->view('news/show', $data);
	}
}