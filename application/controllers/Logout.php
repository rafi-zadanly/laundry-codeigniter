<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    public function __construct(){
		parent::__construct();
    }
    
	public function index(){
        $this->session->set_userdata('logged', false);
        $this->session->set_flashdata('success_msg', 'Berhasil keluar akun.');
        redirect(base_url());
    }

}