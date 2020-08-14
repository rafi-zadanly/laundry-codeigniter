<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Pengguna extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('m_data');
		$this->checkLogin();
	}

	public function checkLogin(){
		if (!($this->session->has_userdata('logged') && $this->session->userdata('logged') == true)) {
			$this->session->set_flashdata('failed_msg', 'Login terlebih dahulu untuk melanjutkan.');
			redirect(base_url());
		}else{
			if ($this->session->userdata('status') != 'admin') {
				$this->session->set_flashdata('failed_msg', 'Tidak dapat mengakses halaman tersebut, bukan akun admin. Klik <a href="'.site_url().'/dasbor">disini</a> untuk kembali');
				redirect(base_url());
			}
		}
	}

	public function get_data_pengguna(){
		return $this->m_data->get_all_data('pengguna')->result();
	}

	public function index(){
		$data['page_name'] = "data_pengguna";
		$data['data_pengguna'] = $this->get_data_pengguna();
		$this->load->view('v_base_header', $data);
		$this->load->view('v_data_pengguna', $data);
		$this->load->view('v_base_footer');
	}
	
	public function tambah(){
		$data['page_name'] = "data_pengguna";
		$data['data_pengguna'] = $this->get_data_pengguna();
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'required');
		$this->form_validation->set_rules('kata_sandi', 'Kata Sandi', 'required');
		$this->form_validation->set_rules('cabang_toko', 'Cabang Toko', 'callback_select_check');
		$this->form_validation->set_rules('status_pengguna', 'Status Pengguna', 'callback_select_check');
		$this->form_validation->set_message('required', '{field} Harus diisi');
		if ($this->form_validation->run() == false){
			$data['form_open'] = 'add_data_pengguna';
			$this->load->view('v_base_header', $data);
			$this->load->view('v_data_pengguna', $data);
			$this->load->view('v_base_footer');
		}
		else{
			$nama_lengkap = $this->input->post('nama_lengkap');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$kata_sandi = $this->input->post('kata_sandi');
			$cabang_toko = $this->input->post('cabang_toko');
			$status_pengguna = $this->input->post('status_pengguna');

			$data = array(
				'nama' => $nama_lengkap,
				'username' => $nama_pengguna,
				'password' => md5($kata_sandi),
				'id_outlet' => $cabang_toko,
				'status' => $status_pengguna
			);
			$tabel = 'pengguna';

			$insert_data = $this->m_data->insert_data($data, $tabel);
			if ($insert_data) {
				$this->session->set_flashdata('success_msg', 'Berhasil mendaftarkan pengguna baru, pengguna sudah dapat masuk.');
			}else{
				$this->session->set_flashdata('failed_msg', 'Gagal mendaftarkan pengguna baru, mohon di coba lagi.');
			}
			redirect('data_pengguna');
		}
	}

	public function hapus($id){
		$where = array('id' => $id);
		$delete_data = $this->m_data->delete_data($where, 'pengguna');
		if ($delete_data) {
			$this->session->set_flashdata('success_msg', 'Berhasil menghapus, pengguna tidak dapat masuk kembali.');
		}else{
			$this->session->set_flashdata('failed_msg', 'Gagal menghapus pengguna baru, mohon di coba lagi.');
		}
		redirect('data_pengguna');
	}

	public function select_check($data){
		if ($data == "NULL") {
			$this->form_validation->set_message('select_check', '{field} Harus di Pilih');
			return false;
		}else{
			return true;
		}
	}
}
