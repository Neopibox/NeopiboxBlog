<?php

function modify_news($title, $content, $id_news)
{
	global $db;
	
	//Request execution
	$request = $db->prepare("UPDATE news SET title=:title, content=:content WHERE id=:id_news");
	$request->bindParam(':id_news', $id_news, PDO::PARAM_INT);
	$request->bindParam(':title', $title);
	$request->bindParam(':content', $content);
	$request->execute();
}