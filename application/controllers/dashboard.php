<?php

class dashboard extends CI_Controller{

	public function index()
	{
		check_not_login();
		$this->load->view('v_dashboard');
	}
}