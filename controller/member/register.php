<?php

require_once('model/member/register.php');

if(!isset($_POST['login']) or !isset($_POST['password']) or !isset($_POST['email'])) // Display the form if it's the first time
{
	require_once('view/member/register_form.php');
}
else
{
	/* Start - Checking ... */
	if($_POST['login'] == '' or $_POST['password'] == '' or $_POST['email'] == '')
	{
		require_once('view/member/register_form.php');
		exit();
	}
	
	if($_POST['password'] != $_POST['confirm_password'] or $_POST['email'] != $_POST['confirm_email'])
	{
		require_once('view/member/register_form.php');
		exit();
	}
	
	if(!check_login($_POST['login']))
	{
		require_once('view/member/register_form.php');
		exit();
	}
	/* End - Checking ... */
	
	// Password encryption (SHA-256 for more security :))
	$password_encrypted = hash('sha256', $_POST['password']);
	
	create_member($_POST['login'], $password_encrypted, $_POST['email']);
	
	require_once('view/member/register_complete.php');
}