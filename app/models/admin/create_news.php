<?php

function create_news($title, $content)
{
	global $db;
	
	//Request execution
	$request = $db->prepare("INSERT INTO news(title, content, creation_date) VALUES (:title, :content, NOW())");
	$request->execute(array('title' => $title, 'content' => $content));
}