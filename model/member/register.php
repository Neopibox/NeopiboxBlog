<?php

function create_member($login, $password_encrypted, $email)
{
	global $db;
	
	//Request execution
	$request = $db->prepare("INSERT INTO members(id_rank, login, password, email) VALUES (:id_rank, :login, :password, :email)");
	$request->execute(array('id_rank' => 1, 'login' => $login, 'password' => $password_encrypted, 'email' => $email));
}

function check_login($login)
{
	global $db;
	
	//Request execution
	$request = $db->prepare("SELECT COUNT(*) AS number_login FROM members WHERE login=:login");
	$request->execute(array('login' => $login));
	
	$result = $request->fetch();
	
	return ($result['number_login'] == 0) ? true : false;
}