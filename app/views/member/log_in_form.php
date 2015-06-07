<?php

$title = 'Connexion';

?>

	<div class="form">
		<form method="post" action="member/log_in">
			
			<label for="login">Pseudo : </label>			<input type="text" name="login" id="login" placeholder="Ex : Neopibox" required>				<br/>
			<label for="password">Mot de passe : </label>	<input type="password" name="password" id="password" placeholder="Ex : T0pS4cr4t" required>		<br/>
			
			<input type="submit" value="Valider !">
			
		</form>
	</div>