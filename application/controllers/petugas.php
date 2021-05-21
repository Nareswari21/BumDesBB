<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas extends CI_Controller {

    public function index($error = NULL) {
        $data = array(
            'title' => 'Login Page',
            'action' => site_url('petugas/login'),
            'error' => $error
        );
	    check_already_login();
        $this->load->view('v_welcome', $data);
    }
    public function login() {
        $this->load->model('model_data');
        $login = $this->model_data->login($this->input->post('id_petugas'), md5($this->input->post('password')));
        if ($login == 1) {
            $row = $this->model_data->data_login($this->input->post('id_petugas'), md5($this->input->post('password')));
            $data = array(
                'logged' => TRUE,
                'id_petugas' => $row->id_petugas,
                'level' => $row->level
            );
            $this->session->set_userdata($data);
            redirect(site_url('dashboard'));
        } else {
            $error = 'id_petugas / password salah';
            $this->index($error);
        }
    }
    function register(){
        $this->load->view('v_welcome');
    }
    function tambah_aksi(){
            $id = $this->input->post('id');
            $id_petugas = $this->input->post('id_petugas');
            $nama_petugas = $this->input->post('nama_petugas');
            $password = $this->input->post('password');
            $level = $this->input->post('level');
     
            $data = array(
                'id' => $id,
                'id_petugas' => $id_petugas,
                'nama_petugas' => $nama_petugas,
                'password' => md5($password),
                'level' => $level
                );
            $this->model_data->input_data_register($data,'petugas_tb');
            redirect('petugas');
        }
    function logout() {
        $this->session->sess_destroy();
        redirect(site_url('petugas'));
    }
}