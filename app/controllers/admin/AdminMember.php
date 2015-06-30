<?php

class AdminMember extends Controller
{
	public function index()
	{
		$this->list_member();
	}

	public function list_member($id = 1)
	{
		$model = $this->model('AdminMember', 'Admin');

		$members = $model->get_list_members($id, 30);

		$this->view('admin/member/list', $members);
	}

	public function modify($id)
	{
		if(!isset($_POST['login']) or !isset($_POST['email']) or !isset($_POST['group'])) // Display the form if it's the first time
		{
			$model = $this->model('AdminMember', 'Admin');

			$member = $model->get_member($id);
			$groups = $model->get_list_groups();

			$data = array($member, $groups);
			
			$this->view('admin/member/modify', $data);
		}
		else
		{
			$model = $this->model('AdminMember', 'Admin');

			$login = $_POST['login'];
			$email = $_POST['email'];
			$group = $_POST['group'];
			
			/* Start - Checking ... */
			if($login == '' or $email == '' or $group == '')
			{
				exit();
			}
			/* End - Checking ... */

			$id_group = $model->get_group_by_name($group);
			$model->modify_member($id, $id_group, $login, $email);
			
			$this->view('admin/member/modify_complete');
		}
	}

	public function delete($id)
	{
		$model = $this->model('AdminMember', 'Admin');

		if($model->member_exist($id))
		{
			$model->delete_member($id);
			$this->view('admin/member/delete_complete');
		}
		else
		{
			$this->view('admin/member/delete_complete');
		}
	}
}