<?php
require_once('framework/text/truncate.php');

// HTML page start
$title = '';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');
?>

<div id="page">
	<h1>News récentes</h1>

<?php
//Display news
foreach($news as $entry)
{
?>

	<article>
		<header>
			<h1><?php echo $entry['title']; ?></h1>
			<h6><em>Publié le <?php echo $entry['creation_date_fr']; ?></em></h6>
		</header>
		
		<div class="content"><?php echo truncate($entry['content']); ?> <a href="index.php?page=news/news_details&amp;id_news=<?php echo $entry['id']; ?>">Lire la suite</a></div>
	</article>

<?php
}
?>

	<ul>

<?php
// Display pagination
while($i <= $i_max)
{
?>

		<li><a href="index.php?page=news/news&amp;id_page=<?php echo $i ?>"><?php echo $i ?></a></li>

<?php
$i++;
}
?>

	</ul>

</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>