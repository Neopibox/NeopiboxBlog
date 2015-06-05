<?php

require_once('model/member/log_in.php');

if(!isset($_POST['login']) or !isset($_POST['password'])) // Display the form if it's the first time
{
	require_once('view/member/log_in_form.php');
}
else
{
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	/* Start - Checking ... */
	if($login == '' or $password == '')
	{
		require_once('view/member/log_in_form.php');
		exit();
	}
	
	$password_encrypted = hash('sha256', $password);
	$id = check_connection($login, $password_encrypted);
	
	if($id == 0)
	{
		require_once('view/member/log_in_form.php');
		exit();
	}
	/* End - Checking ... */
	
	$power = get_power($id);
	
	// Start Session
	$_SESSION['id'] = $id;
	$_SESSION['login'] = $login;
	$_SESSION['power'] = $power;
	
	require_once('view/member/log_in_complete.php');
}