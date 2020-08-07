<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['page_name'] = "dasbor";
		$this->load->view('v_base_header', $data);
		$this->load->view('v_dasbor');
		$this->load->view('v_base_footer');
	}

}
