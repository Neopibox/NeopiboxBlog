<?php

class Member extends Controller
{
	public function index()
	{

	}

	public function log_in()
	{
		$model =  $this->model('Member');

		if(!isset($_POST['login']) or !isset($_POST['password'])) // Display the form if it's the first time
		{
			$this->view('member/log_in_form');
		}
		else
		{
			$login = $_POST['login'];
			$password = $_POST['password'];
			
			/* Start - Checking ... */
			if($login == '' or $password == '')
			{
				$this->view('member/log_in_form');
				exit();
			}
			
			$password_encrypted = hash('sha256', $password);
			$id = $model->check_connection($login, $password_encrypted);
			
			if($id == 0)
			{
				$this->view('member/log_in_form');
				exit();
			}
			/* End - Checking ... */
			
			$power = $model->get_power($id);
			
			// Start Session
			$_SESSION['id'] = $id;
			$_SESSION['login'] = $login;
			$_SESSION['power'] = $power;
			
			$this->view('member/log_in_complete');
		}
	}

	public function log_out()
	{
		if(!isset($_SESSION['login']) or !isset($_SESSION['id']))
		{
			exit();
		}
		else
		{
			session_destroy();
			
			$this->view('member/log_out');
		}
	}

	public function register()
	{
		$model =  $this->model('Member');

		if(!isset($_POST['login']) or !isset($_POST['password']) or !isset($_POST['email'])) // Display the form if it's the first time
		{
			$this->view('member/register_form');
		}
		else
		{
			/* Start - Checking ... */
			if($_POST['login'] == '' or $_POST['password'] == '' or $_POST['email'] == '')
			{
				$this->view('member/register_form');
				exit();
			}
			
			if($_POST['password'] != $_POST['confirm_password'] or $_POST['email'] != $_POST['confirm_email'])
			{
				$this->view('member/register_form');
				exit();
			}
			
			if(!$model->check_login($_POST['login']))
			{
				$this->view('member/register_form');
				exit();
			}
			/* End - Checking ... */
			
			// Password encryption (SHA-256 for more security :))
			$password_encrypted = hash('sha256', $_POST['password']);
			
			$model->create_member($_POST['login'], $password_encrypted, $_POST['email']);
			
			$this->view('member/register_complete');
		}
	}
}