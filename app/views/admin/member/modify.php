<?php

$title = 'Modification du profil d\'un membre';
$member = $data[0];
$groups = $data[1];

?>

	<form method="post" action="admin/member/modify/<?php echo $member['id']; ?>">
		<input type="text" name="login" id="login" value="<?php echo $member['login']; ?>" required>	</br>
		
		<select name="group" id "group" size="1">

<?php
foreach($groups as $group):
?>
			<option><?php echo $group['name']; ?></option>
<?php
endforeach;
?>

		</select>

		<input type="text" name="email" id="email" value="<?php echo $member['email']; ?>" required>	</br>
		
		<input type="submit" value="Valider !">
	</form>