<?php

function check_already_login() {
	$ci =& get_instance();
	$user_session = $ci->session->userdata('id_petugas');
	if($user_session) {
		redirect('dashboard');
	}
}

function check_not_login() {
	$ci =& get_instance();
	$user_session = $ci->session->userdata('id_petugas');
	if(!$user_session) {
		redirect('v_welcome');
	}
}