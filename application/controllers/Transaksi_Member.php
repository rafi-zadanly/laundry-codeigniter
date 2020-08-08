<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_Member extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['page_name'] = ["data_transaksi", "transaksi_member"];
		$this->load->view('v_base_header', $data);
		$this->load->view('v_transaksi_member');
		$this->load->view('v_base_footer');
	}
	
}
