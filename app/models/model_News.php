<?php

class model_News extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_list_news($page, $news_per_page)
	{
		$offset = (int) ($page - 1) * $news_per_page; //Compute the right value for LIMIT
		$limit = (int) $news_per_page;
		
		//Request execution
		$request = $this->PDO->prepare('SELECT id, title, category, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM news ORDER BY creation_date DESC LIMIT :offset, :limit');
		$request->bindParam(':offset', $offset, PDO::PARAM_INT);
		$request->bindParam(':limit', $limit, PDO::PARAM_INT);
		$request->execute();
		
		$news = $request->fetchAll();
		
		return $news;
	}

	public function get_number_news()
	{
		//Request execution
		$request = $this->PDO->prepare('SELECT COUNT(*) AS number_news FROM news');
		$request->execute();
		
		$result = $request->fetch();
		
		return $result['number_news'];
	}

	public function get_pages_news($news_per_page)
	{
		$number_pages = ceil($this->get_number_news() / $news_per_page);
		
		return $number_pages;
	}

	public function check_id_news($id_news)
	{
		//Request execution
		$request = $this->PDO->prepare("SELECT * FROM news WHERE id=:id");
		$request->bindParam(':id', $id_news, PDO::PARAM_INT);
		$request->execute();
		
		if($request->fetch())
			return true;
		else
			return false;
	}

	public function get_news($id_news)
	{
		//Request execution
		$request = $this->PDO->prepare("SELECT id, title, category, content, DATE_FORMAT(creation_date, \"%d/%m/%Y à %Hh%i\") AS creation_date_fr FROM news WHERE id=:id");
		$request->bindParam(':id', $id_news, PDO::PARAM_INT);
		$request->execute();
		
		$news = $request->fetch();
		
		return $news;
	}
}