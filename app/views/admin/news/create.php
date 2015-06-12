<?php

$title = 'Ecriture d\'une news';

?>
	
	<form method="post" action="admin/news/create">
		<input type="text" name="title" id="title" placeholder="Ma super news !" required>														</br>
		<textarea id="content" name="content"></textarea> <script type="text/javascript"> CKEDITOR.replace('content'); </script>				</br>
		
		<input type="submit" value="Valider !">
	</form>