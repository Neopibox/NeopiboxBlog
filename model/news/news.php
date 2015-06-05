<?php
function get_all_news($page, $news_per_page)
{
	global $db;
	$offset = (int) ($page - 1) * $news_per_page; //Compute the right value for LIMIT
	$limit = (int) $news_per_page;
	
	//Request execution
	$request = $db->prepare('SELECT id, title, category, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM news ORDER BY creation_date DESC LIMIT :offset, :limit');
	$request->bindParam(':offset', $offset, PDO::PARAM_INT);
	$request->bindParam(':limit', $limit, PDO::PARAM_INT);
	$request->execute();
	
	$news = $request->fetchAll();
	
	return $news;
}

function get_number_news()
{
	global $db;
	
	//Request execution
	$request = $db->prepare('SELECT COUNT(*) AS number_news FROM news');
	$request->execute();
	
	$result = $request->fetch();
	
	return $result['number_news'];
}

function get_pages_news($news_per_page)
{
	$number_pages = ceil(get_number_news() / $news_per_page);
	
	return $number_pages;
}