<?php

if(!isset($_SESSION['login']) or !isset($_SESSION['id']))
{
	exit();
}
else
{
	session_destroy();
	
	require_once('view/member/log_out.php');
}