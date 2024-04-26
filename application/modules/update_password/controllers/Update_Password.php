<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('max_execution_time', 0);
ini_set('memory_limit','2048M');

class Update_Password extends CI_Controller {

	//ini method yang pertama kali di jalankan oleh codeginiter,semua pemanggilan ada disini termasuk hak akses
	public function __construct(){
		parent ::__construct();
		//panggil model pendaftaran jika memang controller butuh transaksi data
		$this->load->model('model_password');
		if($this->session->userdata('username') == ''){
			redirect(base_url('login'));
		}
	}

	public function index(){
        $this->load->library('lit_app_lib');
        $error = '';
        $location = $this->uri->segment(1);
	 	$data_employee = $this->model_password->password_update();
	 		$data = array('judul'=>$this->lit_app_lib->nama_aplikasi(),
					    'error'=>$error,
                        'location'=>$location,
                        'data_employee'=>$data_employee,
                        'footer'=>$this->lit_app_lib->nama_pengembang());
	 	$this->load->view('update_password/password_view',$data);
	}

	public function pro_edit_password(){
		$id                  = $this->input->post('id');
		$data['password']    = md5($this->input->post('password_baru'));

        $password_baru          = $this->input->post('password_baru');
		$konfirmasi_password    = $this->input->post('konfirmasi_password');

        if($password_baru != $konfirmasi_password) {
            $error .= 'Password baru dan konfirmasi password tidak cocok';

			$this->session->set_flashdata('error',$error);
			redirect(base_url().'update_password');
        } else {
            $sqlupdate = $this->model_password->pro_edit_password($id, $data);
            $this->session->set_flashdata('success', 'Success - Password Berhasil Di Perbarui');
            redirect(base_url('update_password'));
        }
	}
}
