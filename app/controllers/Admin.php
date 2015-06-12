<?php

class Admin extends Controller
{
	public function index()
	{
		$this->view('admin/index');
	}

	public function dashboard($action = 'index')
	{
		require_once '../app/controllers/admin/AdminDashboard.php';
		
		// Create a instance of the controller
		$controller = new AdminDashboard();

		if (isset($action))	// If there is a method called
		{
			// If the method exist, execute it
			if (method_exists($controller, $action))
			{
				$method = $action;
			}
		}

		call_user_func_array([$controller, $method], []);
	}

	public function news($action = 'index', $id = null)
	{
		require_once '../app/controllers/admin/AdminNews.php';
		
		// Create a instance of the controller
		$controller = new AdminNews();

		if (isset($action))	// If there is a method called
		{
			// If the method exist, execute it
			if (method_exists($controller, $action))
			{
				$method = $action;
			}
		}

		call_user_func_array([$controller, $method], array($id));
	}

	public function member($action = 'index', $id = null)
	{
		require_once '../app/controllers/admin/AdminMember.php';
		
		// Create a instance of the controller
		$controller = new AdminMember();

		if (isset($action))	// If there is a method called
		{
			// If the method exist, execute it
			if (method_exists($controller, $action))
			{
				$method = $action;
			}
		}

		call_user_func_array([$controller, $method], array($id));
	}
}