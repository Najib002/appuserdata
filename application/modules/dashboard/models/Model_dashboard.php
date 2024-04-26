<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function get_all_data() {
        $query = $this->db->query("SELECT * FROM tab_user ORDER BY id");

        return $query;
    }

    public function pro_add_user($name_user, $email, $address, $nik, $gender){
        $query = $this->db->query("INSERT INTO tab_user (name, email, address, nik, gender)
                 VALUES ('$name_user', '$email', '$address', '$nik', '$gender')");

        return $query;
    }


    public function user_update($id) {
        $query = $this->db->query("SELECT * FROM tab_user WHERE id = '$id'");
        return $query;
    }

    public function pro_edit_user($id, $name_user, $email, $address, $nik, $gender){
        $query = $this->db->query("UPDATE tab_user SET name = '$name_user',
                                                           email = '$email',
                                                           address = '$address',
                                                           nik = '$nik',
                                                           gender = '$gender'
                                                           WHERE id = '$id'");
        return $query;
    }

    public function user_delete($id) {
        $query = $this->db->query("DELETE FROM tab_user WHERE id = '$id'");
        return $query;
    }

    public function jumlah_user() {
        $user = $this->db->query("SELECT * FROM tab_user");
            return $user->num_rows();
    }
}