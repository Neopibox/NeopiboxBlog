<?php

$pages_displayable = 1;

/* Start - Get news */
require_once('model/news/news.php');
$number_pages = get_pages_news(5);

// Never trust user input
if(isset($_GET['id_page']))
{
	if($_GET['id_page'] < 1)
	{
		$_GET['id_page'] = 1;
	}
	else if($_GET['id_page'] > $number_pages)
	{
		$_GET['id_page'] = $number_pages;
	}
}
else
{
	$_GET['id_page'] = 1;
}

$news = get_all_news($_GET['id_page'], 5);
/* End - Get news */

/*foreach($news as $cle => $element)
{
    $news[$cle]['title'] = $element['title'];
    $news[$cle]['content'] = $element['content'];
}*/

if(($_GET['id_page'] - $pages_displayable) < 1)
{
	$i = 1;
}
else
{
	$i = $_GET['id_page'] - $pages_displayable;
}

if(($_GET['id_page'] + $pages_displayable) > $number_pages)
{
	$i_max = $number_pages;
}
else
{
	$i_max = $_GET['id_page'] + $pages_displayable;
}

// Call view
require_once('view/news/news.php');