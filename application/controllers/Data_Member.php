<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Member extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['page_name'] = ["manajemen_data", "data_member"];
		$this->load->view('v_base_header', $data);
		$this->load->view('v_data_member');
		$this->load->view('v_base_footer');
	}
	
}
