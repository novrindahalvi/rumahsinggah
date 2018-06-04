<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserve extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Reservation');
	}
		public function index()
	
	{
		$this->load->view('reserve');
	}
	public function addReservation (){
		$data=array(
			"rsrv_first_name"=>$this->input->post('rsrv_first_name'),
			"rsrv_last_name"=>$this->input->post('rsrv_last_name'),
			"rsrv_email"=>$this->input->post('rsrv_email'),
			"rsrv_contact"=>$this->input->post('rsrv_contact'),
			"rsrv_room"=>$this->input->post('rsrv_room'),
			"rsrv_bed"=>$this->input->post('rsrv_bed'),
			"rsrv_towel"=>$this->input->post('rsrv_towel'),
			"rsrv_pillow"=>$this->input->post('rsrv_pillow'),
			"rsrv_kit"=>$this->input->post('rsrv_kit'),
			"rsrv_start"=>$this->input->post('rsrv_start'),
			"rsrv_end"=>$this->input->post('rsrv_end'),
			"rsrv_guest"=>$this->input->post('rsrv_guest'),
			"rsrv_notes"=>$this->input->post('rsrv_notes'),
			);
		$query=$this->M_Reservation->addReservation($data);
		if($query){
			redirect('Reserve');
		}
		else{
			echo 'Gagal';
		}
	}
	public function reservationslip (){

	}
	public function editreservation ($id){
		$data['reservasi']=$this->M_Reservation->getreservationid($id);
		$this->load->view('admin/edit_reserve', $data);
	}
	public function updateReservation (){
		$data=array(
			"rsrv_first_name"=>$this->input->post('rsrv_first_name'),
			"rsrv_last_name"=>$this->input->post('rsrv_last_name'),
			"rsrv_email"=>$this->input->post('rsrv_email'),
			"rsrv_contact"=>$this->input->post('rsrv_contact'),
			"rsrv_room"=>$this->input->post('rsrv_room'),
			"rsrv_bed"=>$this->input->post('rsrv_bed'),
			"rsrv_towel"=>$this->input->post('rsrv_towel'),
			"rsrv_pillow"=>$this->input->post('rsrv_pillow'),
			"rsrv_kit"=>$this->input->post('rsrv_kit'),
			"rsrv_start"=>$this->input->post('rsrv_start'),
			"rsrv_end"=>$this->input->post('rsrv_end'),
			"rsrv_guest"=>$this->input->post('rsrv_guest'),
			"rsrv_notes"=>$this->input->post('rsrv_notes'),
			);
		$where=$this->input->post('rsrv_id');
		$query=$this->M_Reservation->updateReservation($where, $data);
		if($query){
			redirect('admin/Records');
		}
		else{
			echo 'Gagal';
		}
	}

	public function deletereservation ($id){
		$this->M_Reservation->deletereservation($id);
		redirect('admin/Records');
	}
}