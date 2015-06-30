<?php

class model_AdminMember extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function get_list_members($id_page, $members_per_page)
	{
		$offset = (int) ($id_page - 1) * $members_per_page; //Compute the right value for LIMIT
		$limit = (int) $members_per_page;

		//Request execution
		$request = $this->PDO->prepare('SELECT members.id, members.login, rank.name, members.email FROM members INNER JOIN rank ON members.id_rank = rank.id ORDER BY members.id LIMIT :offset, :limit');
		$request->bindParam(':offset', $offset, PDO::PARAM_INT);
		$request->bindParam(':limit', $limit, PDO::PARAM_INT);
		$request->execute();
		
		$members = $request->fetchAll();
		
		return $members;
	}

	function get_member($id_member)
	{
		$request = $this->PDO->prepare("SELECT members.id, members.login, rank.name, members.email FROM members INNER JOIN rank ON members.id_rank = rank.id WHERE members.id=:id");
		$request->bindParam(':id', $id_member, PDO::PARAM_INT);
		$request->execute();

		$member = $request->fetch();

		return $member;
	}

	function get_list_groups()
	{
		$request = $this->PDO->prepare("SELECT * FROM rank");
		$request->execute();

		$groups = $request->fetchAll();

		return $groups;
	}

	function get_group_by_name($name)
	{
		$request = $this->PDO->prepare("SELECT id FROM rank WHERE name=:name");
		$request->bindParam(':name', $name);
		$request->execute();

		$id_group = $request->fetch()['id'];

		return $id_group;
	}

	function modify_member($id_member, $id_group, $login, $email)
	{
		$request = $this->PDO->prepare("UPDATE members SET login=:login, email=:email, id_rank=:id_group WHERE id=:id_member");
		$request->bindParam(':id_member', $id_member, PDO::PARAM_INT);
		$request->bindParam(':id_group', $id_group, PDO::PARAM_INT);
		$request->bindParam(':login', $login);
		$request->bindParam(':email', $email);
		$request->execute();
	}

	function member_exist($id_member)
	{
		//Request execution
		$request = $this->PDO->prepare("SELECT COUNT(*) AS number_member FROM members WHERE id=:id_member");
		$request->bindParam(':id_member', $id_member, PDO::PARAM_INT);
		$request->execute();

		$number_member = $request->fetch()['number_member'];
		return ($number_member == 1) ? true : false;
	}

	function delete_member($id_member)
	{
		//Request execution
		$request = $this->PDO->prepare("DELETE FROM members WHERE id=:id_member");
		$request->bindParam(':id_member', $id_member, PDO::PARAM_INT);
		$request->execute();
	}
}