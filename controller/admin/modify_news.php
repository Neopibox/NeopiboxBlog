<?php
require_once('model/news/news_details.php');
require_once('model/admin/modify_news.php');

$id_news = $_GET['id_news'];

if(!isset($_POST['title']) or !isset($_POST['content'])) // Display the form if it's the first time
{
	$news = get_news($id_news);
	
	require_once('view/admin/modify_news.php');
}
else
{
	$title = $_POST['title'];
	$content = $_POST['content'];
	
	/* Start - Checking ... */
	if($title == '' or $content == '')
	{
		exit();
	}
	/* End - Checking ... */
	
	modify_news($title, $content, $id_news);
	
	require_once('view/admin/modify_news_complete.php');
}