<?php

class Admin extends Controller
{
	public function index()
	{
		$this->view('admin/index');
	}

	public function dashboard($action = 'index')
	{
		$this->route('AdminDashboard', 'admin', $action);
	}

	public function news($action = 'index', $id = null)
	{
		$this->route('AdminNews', 'admin', $action, array($id));
	}

	public function member($action = 'index', $id = null)
	{
		$this->route('AdminMember', 'admin', $action, array($id));
	}
}