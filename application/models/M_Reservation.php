<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Reservation extends CI_Model {
	
	function __construct(){
		parent::__construct();
		
	}
	public function addReservation ($data){
		$this->db->insert('reservations',$data);
		return $this->db->insert_id();
	}
	public function getreservationid ($id){
		$this->db->from('reservations');
		$this->db->where('rsrv_id', $id);
		$query=$this->db->get();
		return $query->row();

	}
	public function updateReservation ($where, $data){
		$this->db->where('rsrv_id', $where);
		$this->db->update('reservations', $data);
		return $this->db->affected_rows();
	}
	public function deletereservation ($where){
		$this->db->where('rsrv_id', $where);
		$this->db->delete('reservations');

	}
	// public function getbyid($id){
		
	// }
}