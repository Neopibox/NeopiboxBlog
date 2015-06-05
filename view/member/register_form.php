<?php

// HTML page start
$title = 'Inscription';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');

?>

<div id="page">
	<h1>Inscription</h1>

	<div class="form">
		<p>Cette page vous permet de vous inscrire au blog de Neopibox, vous permettant d'accéder à des fonctionnalités comme la rédaction de commentaires sur les news, de participer au forum et bien plus encore !</p>
		
		<form method="post" action="index.php?page=member/register">
			
			<label for="login">Pseudo : </label>									<input type="text" name="login" id="login" placeholder="Ex : Neopibox" required>								<br/>
			<label for="password">Mot de passe : </label>							<input type="password" name="password" id="password" placeholder="Ex : T0pS4cr4t" required>						<br/>
			<label for="confirm_password">Confirmation du mot de passe : </label>	<input type="password" name="confirm_password" id="confirm_password" placeholder="Ex : T0pS4cr4t" required>		<br/>
			<label for="email">Adresse e-mail : </label>							<input type="email" name="email" id="email" placeholder="Ex : nom.prenom@gmail.com" required>					<br/>
			<label for="confirm_email">Confirmation de l'adresse e-mail : </label>	<input type="email" name="confirm_email" id="confirm_email" placeholder="Ex : nom.prenom@gmail.com" required>	<br/>
			
			<input type="submit" value="Valider !">
			
		</form>
	</div>

</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>