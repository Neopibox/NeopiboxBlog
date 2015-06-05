<?php
// Configuration
require 'config/general.php';

// MySQL connection
try
{
	$db = new PDO('mysql:host=localhost;dbname=blog', 'root', '', array(PDO::ATTR_PERSISTENT => true));
	$db->query('SET NAMES UTF8');
}
catch(PDOException $e)
{
	die('Erreur : '.$e->getMessage());
}

// Session
session_start();

if($maintenance == 1)
{
	if(!empty($_GET['page']) && is_file('controller/' . $_GET['page'] . '.php'))
	{
		if(strpos($_GET['page'], 'member') !== false || strpos($_GET['page'], 'admin') !== false)
		{
			require 'controller/' . $_GET['page'] . '.php';
		}
		else
		{
			require 'maintenance.php';
		}
	}
	else
	{
		require 'maintenance.php';
	}
}
else
{
	if(!empty($_GET['page']) && is_file('controller/' . $_GET['page'] . '.php')) // Route to the right controller if it exists and if it is specified. If it is not specified, it routes to the default controller
	{
		require 'controller/' . $_GET['page'] . '.php';
	}
	else
	{
		require 'controller/news/news.php';
	}
}
