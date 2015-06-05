<?php

/* Start - Get news */
require_once('model/news/news.php');
require_once('model/news/news_details.php');

// Never trust user input
if(isset($_GET['id_news']))
{
	if(check_id_news($_GET['id_news']))
	{
		$id = $_GET['id_news'];
	}
}
else
{
	$id = 1;
}

$news = get_news($id);
/* End - Get news */

// Call view
require_once('view/news/news_details.php');