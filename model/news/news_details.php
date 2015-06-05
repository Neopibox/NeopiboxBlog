<?php

function check_id_news($id_news)
{
	global $db;
	
	//Request execution
	$request = $db->prepare("SELECT * FROM news WHERE id=:id");
	$request->bindParam(':id', $id_news, PDO::PARAM_INT);
	$request->execute();
	
	if($request->fetch())
		return true;
	else
		return false;
}

function get_news($id_news)
{
	global $db;
	
	//Request execution
	$request = $db->prepare("SELECT id, title, category, content, DATE_FORMAT(creation_date, \"%d/%m/%Y à %Hh%i\") AS creation_date_fr FROM news WHERE id=:id");
	$request->bindParam(':id', $id_news, PDO::PARAM_INT);
	$request->execute();
	
	$news = $request->fetch();
	
	return $news;
}