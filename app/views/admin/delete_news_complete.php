<?php

// HTML page start
$title = 'Suppression d\'une news';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');

?>

<div id="page">
	<h1>Suppression d'une news</h1>
	
	<p>La news a bien été supprimé.</p>

	<a href="index.php?page=admin/list_news">Retour à la liste des news.</a>
</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>