<?php

// HTML page start
$title = 'Connexion';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');

?>

<div id="page">
	<h1>Connexion</h1>
	
	<p>Bienvenue <?php echo $_SESSION['login']; ?> !</p>

	<a href="index.php">Retour à l'accueil</a>
</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>