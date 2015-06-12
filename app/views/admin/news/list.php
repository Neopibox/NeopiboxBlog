<?php

$title = 'Administration - News';
$news = $data;

?>

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
			<td><a href="admin/news/modify/<?php echo $entry['id']?>">Modifier</a></td>
			<td><a href="admin/news/delete/<?php echo $entry['id']?>">Supprimer</a></td>
		</tr>
<?php
}
?>

	</table>