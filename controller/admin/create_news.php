<?php
require_once('model/admin/create_news.php');

if(!isset($_POST['title']) or !isset($_POST['content'])) // Display the form if it's the first time
{
	require_once('view/admin/create_news.php');
}
else
{
	$title = $_POST['title'];
	$content = $_POST['content'];
	
	/* Start - Checking ... */
	if($title == '' or $content == '')
	{
		require_once('view/admin/create_news.php');
		exit();
	}
	/* End - Checking ... */
	
	create_news($title, $content);
	
	require_once('view/admin/create_news_complete.php');
}