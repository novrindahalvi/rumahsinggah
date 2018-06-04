<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {
			function __construct(){
		parent::__construct();
	$this->load->library('fpdf/fpdf.php');
		$this->load->model('M_Reservation');
	}
		public function index()
	{
		$id=$this->input->get('id');
		$data['detail'] = $this->M_Reservation->getreservationid($id);
		$this->load->view('admin/reservation_slip', $data);
	}

}