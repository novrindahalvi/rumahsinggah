<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Users extends CI_Model {
	
	function __construct(){
		parent::__construct();
		
	}
	public function getusers (){
		$this->db->from('user');
		$query=$this->db->get();
		return $query->result_array();
	}
	public function addUser ($data){
		$this->db->insert('user',$data);
		return $this->db->insert_id();
	}
}