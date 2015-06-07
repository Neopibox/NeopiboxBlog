<?php

// HTML page start
$title = 'Modification de la configuration du site';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');
?>

<div id="page">
	<h1>Modification de la configuration du site</h1>
	
	<form method="post" action="index.php?page=admin/configuration">
		<select name="boolMaintenance" id="boolMaintenance" size="1">
			<option>Activer la maintenance</option>
			<option>Désactiver la maintenance</option>
		</select>
		<input type="text" name="title" id="title" value="<?php echo $titleMaintenance; ?>" placeholder="Site en Maintenance" required>																		</br>
		<textarea id="contentMaintenance" name="contentMaintenance" required><?php echo $contentMaintenance; ?></textarea> <script type="text/javascript"> CKEDITOR.replace('contentMaintenance'); </script></br>
		<textarea id="contentAboutMe" name="contentAboutMe" required><?php echo $contentAboutMe; ?></textarea> <script type="text/javascript"> CKEDITOR.replace('contentAboutMe'); </script></br>
		
		<input type="submit" value="Valider !">
	</form>
</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>