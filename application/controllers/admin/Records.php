<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Records extends CI_Controller {
		function __construct(){
		parent::__construct();
		$this->load->model('M_Records');
		
	}
		public function index()
	{
		$data['reservation']=$this->M_Records->getrecords();
		$this->load->view('admin/records', $data);
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
	}
}