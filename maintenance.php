<?php

// HTML page start
$title = 'Maintenance';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');
?>

<div id="page">
	<h1><?php echo $titleMaintenance; ?></h1>
	
	<?php echo $contentMaintenance; ?>
</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>