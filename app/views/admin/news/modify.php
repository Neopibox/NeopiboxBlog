<?php

$title = 'Modification d\'une news';
$id = $data[0];
$title = $data[1];
$content = $data[2];

?>

	<form method="post" action="admin/news/modify/<?php echo $id; ?>">
		<input type="text" name="title" id="title" value="<?php echo $title ?>" required>																</br>
		<textarea id="content" name="content"><?php echo $content ?></textarea> <script type="text/javascript"> CKEDITOR.replace('content'); </script>	</br>
		
		<input type="submit" value="Valider !">
	</form>