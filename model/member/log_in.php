<?php

function check_connection($login, $password_encrypted)
{
	global $db;
	$id = 0;
	
	//Request execution
	$request = $db->prepare("SELECT * FROM members WHERE login=:login AND password=:password");
	$request->execute(array('login' => $login, 'password' => $password_encrypted));
	
	$result = $request->fetch();
	
	$id = $result['id'];
	
	return $id;
}

function get_power($id)
{
	global $db;
	
	//Request execution
	$request = $db->prepare("SELECT id_rank FROM members WHERE id=:id");
	$request->execute(array('id' => $id));
	
	$result = $request->fetch();
	
	$id_rank = $result['id_rank'];
	
	//Request execution
	$request = $db->prepare("SELECT power FROM rank WHERE id=:id");
	$request->execute(array('id' => $id_rank));
	
	$result = $request->fetch();
	
	$power = $result['power'];
	
	return $power;
}