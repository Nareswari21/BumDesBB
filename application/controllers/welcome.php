<?php

class welcome extends CI_Controller{

	public function index()
	{
		$this->load->view('v_welcome');
	}
}