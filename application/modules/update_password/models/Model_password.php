<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_password extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default',TRUE);
    }

    public function password_update(){
        $username = $this->session->userdata('username');
        $query = $this->db->query("SELECT * FROM tab_admin WHERE username = '$username'");
        return $query;
    }

    public function pro_edit_password($id, $data){
        $this->db->where('id',$id);
        $this->db->update('tab_admin',$data);
        return $this->db->affected_rows() > 0 ? 1 : 0;
    }
}
