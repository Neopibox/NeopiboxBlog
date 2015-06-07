<?php

class model_Member extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function check_connection($login, $password_encrypted)
	{
		$id = 0;
		
		//Request execution
		$request = $this->PDO->prepare("SELECT * FROM members WHERE login=:login AND password=:password");
		$request->execute(array('login' => $login, 'password' => $password_encrypted));
		
		$result = $request->fetch();
		
		$id = $result['id'];
		
		return $id;
	}

	public function get_power($id)
	{
		//Request execution
		$request = $this->PDO->prepare("SELECT id_rank FROM members WHERE id=:id");
		$request->execute(array('id' => $id));
		
		$result = $request->fetch();
		
		$id_rank = $result['id_rank'];
		
		//Request execution
		$request = $this->PDO->prepare("SELECT power FROM rank WHERE id=:id");
		$request->execute(array('id' => $id_rank));
		
		$result = $request->fetch();
		
		$power = $result['power'];
		
		return $power;
	}

	public function create_member($login, $password_encrypted, $email)
	{
		//Request execution
		$request = $this->PDO->prepare("INSERT INTO members(id_rank, login, password, email) VALUES (:id_rank, :login, :password, :email)");
		$request->execute(array('id_rank' => 1, 'login' => $login, 'password' => $password_encrypted, 'email' => $email));
	}

	public function check_login($login)
	{
		//Request execution
		$request = $this->PDO->prepare("SELECT COUNT(*) AS number_login FROM members WHERE login=:login");
		$request->execute(array('login' => $login));
		
		$result = $request->fetch();
		
		return ($result['number_login'] == 0) ? true : false;
	}
}