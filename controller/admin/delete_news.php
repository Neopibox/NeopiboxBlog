<?php

require_once('model/admin/delete_news.php');

$id_news = $_GET['id_news'];

if(news_exist($id_news))
{
	delete_news($id_news);
	require_once('view/admin/delete_news_complete.php');
}
else
{
	require_once('view/admin/delete_news_complete.php');
}