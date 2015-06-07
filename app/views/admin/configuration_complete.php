<?php

// HTML page start
$title = 'Modification de la configuration du site';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');

?>

<div id="page">
	<h1>Modification de la configuration du site</h1>
	
	<p>La configuration a bien été modifiée.</p>

	<a href="index.php?page=admin/index">Retour au panel d'administration.</a>
</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>