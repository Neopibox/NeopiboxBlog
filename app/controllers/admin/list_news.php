<?php
/* Start - Get news */
require_once('model/news/news.php');
$news = get_all_news(1, 5);
/* End - Get news */

// Call view
require_once('view/admin/list_news.php');