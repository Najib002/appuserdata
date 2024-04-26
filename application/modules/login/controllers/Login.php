<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent ::__construct();

		$this->load->model('model_login');
		if($this->session->userdata('username') != ''){
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}
	}

	public function index()	{
		$this->load->library('lit_app_lib');
		$error = '';
		$data = array('judul'=>$this->lit_app_lib->nama_aplikasi(),
					  'footer'=>$this->lit_app_lib->nama_pengembang(),
					  'logo'=>$this->lit_app_lib->logo(),
					  'pavicon'=>$this->lit_app_lib->pavicon(),
					  'error'=>$error);

		$this->load->view('login_view',$data);
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

	    $sql_login = $this->model_login->cek_auth($username,$password);

		if($sql_login < 1){
			$this->session->set_flashdata('pesan','Username atau Password salah, cek kembali!');
            $error = 'Username atau Password salah';
            redirect(base_url('login'));
		}else{
			$error = '';
			$this->session->set_flashdata('pesan','Login Sukses!');

		    $sql_accinfo = $this->model_login->get_account_info($username,$password);

			$data = array('username'=>$sql_accinfo->username);
			$this->model_login->update_user_logon($username);
			$this->session->set_userdata($data);

			//pindah ke halaman dashboard
			if($sql_accinfo->jml_inv>0)
			{
				$link = base_url('login');
				echo "<script language=javascript>
				alert('Silahkan Hubungi Pengembang');
				window.location='$link';
		      </script>";
				}
			else
			{
			redirect(base_url('dashboard'));
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy($data);
		redirect(base_url('login'));
	}
}
