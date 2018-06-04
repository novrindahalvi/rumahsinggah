<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Records extends CI_Model {
	
	function __construct(){
		parent::__construct();
		
	}
	public function getrecords (){
		$this->db->from('reservations');
		$query=$this->db->get();
		return $query->result_array();
	}
}