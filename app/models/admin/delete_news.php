<?php

function news_exist($id_news)
{
	global $db;
	
	//Request execution
	$request = $db->prepare("SELECT COUNT(*) AS number_news FROM news WHERE id=:id_news");
	$request->bindParam(':id_news', $id_news, PDO::PARAM_INT);
	$request->execute();

	$number_news = $request->fetch()['number_news'];
	return ($number_news == 1) ? true : false;
}

function delete_news($id_news)
{
	global $db;
	
	//Request execution
	$request = $db->prepare("DELETE FROM news WHERE id=:id_news");
	$request->bindParam(':id_news', $id_news, PDO::PARAM_INT);
	$request->execute();
}