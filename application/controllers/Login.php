<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('m_data');
	}

	public function index(){
		$this->load->view('v_login');
    }
    
    public function konfirmasi(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'password' => md5($password)
        );
        $get_data = $this->m_data->get_data($data, 'pengguna')->result();
        $count_get_data = $this->m_data->get_data($data, 'pengguna')->num_rows();
        if ($count_get_data > 0) {
            $user_data = array(
                'nama_lengkap' => $get_data[0]->nama,
                'status' => $get_data[0]->status,
                'logged' => true
            );
            $this->session->set_userdata($user_data);
            redirect('dasbor');
        }else{
            $this->session->set_flashdata('failed_msg', 'Username atau Password anda salah.');
            redirect(base_url());
        }
    }

}