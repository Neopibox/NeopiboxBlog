<?php

class model_AdminNews extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function create_news($title, $content)
	{
		//Request execution
		$request = $this->PDO->prepare("INSERT INTO news(title, content, creation_date) VALUES (:title, :content, NOW())");
		$request->execute(array('title' => $title, 'content' => $content));
	}

	function modify_news($title, $content, $id_news)
	{
		//Request execution
		$request = $this->PDO->prepare("UPDATE news SET title=:title, content=:content WHERE id=:id_news");
		$request->bindParam(':id_news', $id_news, PDO::PARAM_INT);
		$request->bindParam(':title', $title);
		$request->bindParam(':content', $content);
		$request->execute();
	}

	function news_exist($id_news)
	{
		//Request execution
		$request = $this->PDO->prepare("SELECT COUNT(*) AS number_news FROM news WHERE id=:id_news");
		$request->bindParam(':id_news', $id_news, PDO::PARAM_INT);
		$request->execute();

		$number_news = $request->fetch()['number_news'];
		return ($number_news == 1) ? true : false;
	}

	function delete_news($id_news)
	{
		//Request execution
		$request = $this->PDO->prepare("DELETE FROM news WHERE id=:id_news");
		$request->bindParam(':id_news', $id_news, PDO::PARAM_INT);
		$request->execute();
	}
}