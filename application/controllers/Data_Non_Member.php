<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Non_Member extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['page_name'] = ["data_pelanggan", "data_non_member"];
		$this->load->view('v_base_header', $data);
		$this->load->view('v_data_non_member');
		$this->load->view('v_base_footer');
	}
	
}
