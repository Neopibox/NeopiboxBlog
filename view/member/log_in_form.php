<?php

// HTML page start
$title = 'Connexion';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');

?>

<div id="page">
	<h1>Connexion</h1>

	<div class="form">
		<form method="post" action="index.php?page=member/log_in">
			
			<label for="login">Pseudo : </label>			<input type="text" name="login" id="login" placeholder="Ex : Neopibox" required>				<br/>
			<label for="password">Mot de passe : </label>	<input type="password" name="password" id="password" placeholder="Ex : T0pS4cr4t" required>		<br/>
			
			<input type="submit" value="Valider !">
			
		</form>
	</div>

</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>