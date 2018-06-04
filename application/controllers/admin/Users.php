<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
		function __construct(){
		parent::__construct();
		$this->load->model('M_Users');
	}
		public function index()
	{
		$data['user']=$this->M_Users->getusers();
		$this->load->view('admin/users', $data);
}
	public function addUser (){
		$data=array(
			"user_name"=>$this->input->post('user_name'),
			"user_pw"=>$this->input->post('user_pw'),
			"user_full"=>$this->input->post('user_full'),
			"user_role"=>$this->input->post('user_role'),
			);
		$query=$this->M_Users->addUser($data);
		if($query){
			redirect('admin/Users');
		}
		else{
			echo 'Gagal';
		}
	}
	public function tambahUser(){
		$this->load->view('admin/add_user.php');
	}
}