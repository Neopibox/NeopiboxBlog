<?php

// HTML page start
$title = 'Ecriture d\'une news';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');
?>

<div id="page">
	<h1>Ecriture d'une news</h1>
	
	<form method="post" action="index.php?page=admin/create_news">
		<input type="text" name="title" id="title" placeholder="Ma super news !" required>														</br>
		<textarea id="content" name="content"></textarea> <script type="text/javascript"> CKEDITOR.replace('content'); </script>				</br>
		
		<input type="submit" value="Valider !">
	</form>
</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>