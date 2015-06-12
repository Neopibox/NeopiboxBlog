<?php

class AdminDashboard extends Controller
{
		public function index()
	{
		$this->list_news();
	}

	public function refresh()
	{
		//$model = $this->model('Dashboard');
		$CPU_usage = mt_rand(0, 100);
		$RAM_usage = mt_rand(0, 100);
		$SWAP_usage = mt_rand(0, 100);
		$HDD_usage = mt_rand(0, 100);

		// Prepare data for the view
		$data['CPU_usage'] = $CPU_usage;
		$data['RAM_usage'] = $RAM_usage;
		$data['SWAP_usage'] = $SWAP_usage;
		$data['HDD_usage'] = $HDD_usage;

		$this->view('ajax/json', $data, true);
	}
}