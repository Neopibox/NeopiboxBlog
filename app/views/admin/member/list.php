<?php

$title = 'Administration - Membres';
$members = $data;

?>

	<table>
		<tr>
			<th>ID</th>
			<th>Pseudo</th>
			<th>Groupe</th>
			<th>E-mail</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</tr>
		
<?php
//Display members
foreach($members as $entry)
{
?>
		<tr>
			<td><?php echo $entry['id']?></td>
			<td><?php echo $entry['login']?></td>
			<td><?php echo $entry['name']?></td>
			<td><?php echo $entry['email']?></td>
			<td><a href="admin/member/modify/<?php echo $entry['id']?>">Modifier</a></td>
			<td><a href="admin/member/delete/<?php echo $entry['id']?>">Supprimer</a></td>
		</tr>
<?php
}
?>

	</table>