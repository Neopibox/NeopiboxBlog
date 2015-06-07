<?php
// HTML page start
$title = 'Administration - News';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');
?>

<div id="page">
	<h1>Liste des news</h1>

	<table>
		<tr>
			<th>ID</th>
			<th>Titre</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</tr>
<?php
//Display news
foreach($news as $entry)
{
?>
		<tr>
			<td><?php echo $entry['id']?></td>
			<td><?php echo $entry['title']?></td>
			<td><a href="index.php?page=admin/modify_news&amp;id_news=<?php echo $entry['id']?>">Modifier</a></td>
			<td><a href="index.php?page=admin/delete_news&amp;id_news=<?php echo $entry['id']?>">Supprimer</a></td>
		</tr>
<?php
}
?>

	</table>

</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>