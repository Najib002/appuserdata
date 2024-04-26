<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start('ob_gzhandler');
error_reporting(0);
ini_set('max_execution_time', 0);
ini_set('memory_limit','2048M');

class Dashboard extends CI_Controller {

    //Method pertama yang dijalankan oleh codeigniter, semua pemanggilan ada di sini termasuk hak akses
    public function __construct() {
        parent::__construct();

        $this->load->model('model_dashboard');

        if($this->session->userdata('username') == '') {
            redirect(base_url('login'));
        }
    }

    public function index() {
        $this->load->library('lit_app_lib');
        $error = '';
        $location = $this->uri->segment(1);
        $id=$this->session->userdata('ses_periode');
        $data_user = $this->model_dashboard->get_all_data();

            $data = array('judul'=>$this->lit_app_lib->nama_aplikasi(),
                          'error'=>$error,
                          'location'=>$location,
                          'data_user'=>$data_user,
                          'user'=>$this->model_dashboard->jumlah_user(),
                          'footer'=>$this->lit_app_lib->nama_pengembang());

            $this->load->view('dashboard/user_view', $data);
    }

    public function add_user() {
        $this->load->library('lit_app_lib');
        $error = '';
        $location = $this->uri->segment(1);

            $data = array('judul'=>$this->lit_app_lib->nama_aplikasi(),
                          'error'=>$error,
                          'location'=>$location,
                          'footer'=>$this->lit_app_lib->nama_pengembang());

            $this->load->view('dashboard/user_add', $data);
    }

    public function pro_add_user() {
		$name_user= $this->input->post('name_user');
		$email= $this->input->post('email');
		$address= $this->input->post('address');
		$nik= $this->input->post('nik');
		$gender= $this->input->post('gender');

        $link = base_url('dashboard');

		$sqlinsert = $this->model_dashboard->pro_add_user($name_user, $email, $address, $nik, $gender);

		echo "<script language=javascript>
				alert('User Added Successfully');
		        window.location='$link';
		      </script>";
    }

    public function user_update() {
        $id = $this->uri->segment(3);
        $location = $this->uri->segment(1);
        $data_user = $this->model_dashboard->user_update($id);
        $error = '';
            $data = array('judul'=>$this->lit_app_lib->nama_aplikasi(),
                            'error'=>$error,
                            'id'=>$id,
                            'location'=>$location,
                            'data_user'=>$data_user,
                            'footer'=>$this->lit_app_lib->nama_pengembang());

            $this->load->view('dashboard/user_edit', $data);
    }

    public function pro_edit_user(){
		$name_user= $this->input->post('name_user');
		$email= $this->input->post('email');
		$address= $this->input->post('address');
		$nik= $this->input->post('nik');
		$gender= $this->input->post('gender');

		$id= $this->input->post('id');

		$sqlupdate = $this->model_dashboard->pro_edit_user($id, $name_user, $email, $address, $nik, $gender);

		$link = base_url('dashboard');
		echo "<script language=javascript>
				alert('Change User Data Successfully');
				window.location='$link';
		      </script>";
	}

    public function user_delete() {
        $id = $this->uri->segment(3);
        $this->model_dashboard->user_delete($id);
        $link = base_url('dashboard');
            echo "<script language=javascript>
                    alert('User Deleted Successfully');
                    window.location = '$link';
                 </script>";
    }

    public function excel_user() {
        $data_user = $this->model_dashboard->get_all_data();
        $data = array('data_user'=>$data_user);
        $this->load->view('dashboard/user_excel', $data);
    }

    public function pdf_user() {
        $query = $this->model_dashboard->get_all_data();
        if($query == false) {
            $this->session->set_flashdata('flsh_msg', 'Data tidak ditemukan');
            header('location: '.$_SERVER['HTTP_REFERER']);
            die;
        }

        $data = array('data_user'=>$query);

        $this->load->library('M_pdf');
        $pdf = new mPdf('utf-8', 'A4', 9, 'helvetica', 5, 5, 2, 5, 2, 2);
        $html1 = $this->load->view('user_excel', $data, TRUE);
        $pdf->addPage('L');
        $pdf->writeHTML($html1);
        return $pdf->Output('data_user.pdf', 'I');
    }
}