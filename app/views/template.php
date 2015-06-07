<?php
// HTML page start
require_once('includes/start.php');
require_once('includes/header.php');
require_once('includes/nav.php');
?>

<div id="page">
	<h1><?php echo $title; ?></h1>

	<div id="page_content">
		<?php echo $content; ?>
	</div>
</div>

<?php
require_once('includes/footer.php');
require_once('includes/end.php');
?>