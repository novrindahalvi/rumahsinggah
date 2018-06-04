<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {
	
	function __construct(){
		parent::__construct();
		
	}
	public function proseslogin ($username, $password){
		$this->db->from('user');
		$this->db->where('user_name',$username);
		$this->db->where('user_pw',$password);
		$query=$this->db->get();
		return $query->result_array();
	}
}