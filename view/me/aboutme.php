<?php

// HTML page start
$title = 'A propos de moi';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');
?>

<div id="page">
	<h1>A propos de moi</h1>
	
	<?php echo $contentAboutMe; ?>
</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>