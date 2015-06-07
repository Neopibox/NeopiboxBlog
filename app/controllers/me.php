<?php

class Me extends Controller
{
	public function index()
	{
		about_me();
	}

	public function about_me()
	{
		$this->view('me/about_me');
	}
}