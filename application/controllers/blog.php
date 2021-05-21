<?php

class blog extends CI_Controller{

	public function index()
	{
		$this->load->view('v_blog');
	}
}