<?php

class Model
{
	protected $PDO = null;

	public function __construct()
	{
		$this->PDO = Database::getInstance()->getPDO();
	}
}