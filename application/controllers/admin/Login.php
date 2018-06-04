<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
		function __construct(){
		parent::__construct();
		$this->load->model('M_Login');
	}
			public function index()
	
	{
		$this->load->view('admin/index');
	}
	function proseslogin(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$query=$this->M_Login->proseslogin($username, $password);
		if ($query){
			redirect('admin/Dashboard');
		} else {
			echo 'Login Gagal';
		}
	}
	function logout(){
		// $this->session_destroy();
		redirect('admin/Login');
	}
}