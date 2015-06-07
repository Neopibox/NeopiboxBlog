<?php

class Database
{
	private static $instance = null;
	private $PDO_object;

	private function __construct()
	{
		$this->PDO_object = $this->connectDb();
	}

	private function connectDb()
	{
		$credentials = require_once '../app/config/database.php';
		
		$host = $credentials['host'];
		$database = $credentials['database'];

		$user = $credentials['user'];
		$password = $credentials['password'];
		
		// Connection
		try
		{
			$db = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $password);
			$db->query('SET NAMES UTF8');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e)
		{
			echo 'Échec lors de la connexion : ' . $e->getMessage();
		}

		return $db;
	}

	public static function getInstance()
	{
		if(is_null(self::$instance))
		{
			self::$instance = new Database();
		}
 
		return self::$instance;
	}

	public function getPDO()
	{
		return $this->PDO_object;
	}
}