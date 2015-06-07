<nav>
	<ul>
		<li><a href="/">Accueil</a></li>
		<li><a href="projects/index">Projets</a></li>
		<li><a href="me/about_me">A propos de moi</a></li>
<?php
if(!isset($_SESSION['id']))
{
?>
		<li><a href="member/log_in">Connexion</a></li>
		<li><a href="member/register">Inscription</a></li>
<?php
}
else
{
	if($_SESSION['power'] >= 1000)
	{
?>
		<li><a href="admin/index">Panel d'administration (<?php echo $_SESSION['login']; ?>)</a></li>
<?php
	}
?>
		<li><a href="member/log_out">Déconnexion</a></li>
<?php
}
?>
	</ul>
</nav>