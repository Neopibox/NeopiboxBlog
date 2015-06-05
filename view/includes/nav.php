<nav>
	<ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="index.php?page=projects/index">Projets</a></li>
		<li><a href="index.php?page=me/aboutme">A propos de moi</a></li>
<?php
if(!isset($_SESSION['id']))
{
?>
		<li><a href="index.php?page=member/log_in">Connexion</a></li>
		<li><a href="index.php?page=member/register">Inscription</a></li>
<?php
}
else
{
	if($_SESSION['power'] >= 1000)
	{
?>
		<li><a href="index.php?page=admin/index">Panel d'administration (<?php echo $_SESSION['login']; ?>)</a></li>
<?php
	}
?>
		<li><a href="index.php?page=member/log_out">Déconnexion</a></li>
<?php
}
?>
	</ul>
</nav>