<?php

// HTML page start
$title = '';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');

?>

<div id="page">
	<h1>Détails d'une news</h1>

	<article>
		<header>
			<h1><?php echo $news['title']; ?></h1>
			<h6><em>Publié le <?php echo $news['creation_date_fr']; ?></em></h6>
		</header>
		
		<div id="content"><?php echo $news['content']; ?></div>
	</article>

</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>