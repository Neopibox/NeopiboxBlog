<?php
$title = 'Affichage d\'une news';
$news = $data;
?>

	<article>
		<header>
			<h1><?php echo $news['title']; ?></h1>
			<h6><em>Publié le <?php echo $news['creation_date_fr']; ?></em></h6>
		</header>
		
		<div id="content"><?php echo $news['content']; ?></div>
	</article>