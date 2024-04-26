<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	//semua kueri SQL akan dijalankan disini
	public function __construct(){
		parent ::__construct();
	}

	public function cek_auth($username,$password)	{
 		 $query = $this->db->query("SELECT * FROM tab_admin WHERE username = '$username' AND password = '$password'");
 		 $queryku = $query->num_rows();
 		 return $queryku;
	}

	public function get_account_info($username,$password){
		$queryacc = $this->db->query("SELECT a.* FROM tab_admin a where a.username = '$username' AND a.password = '$password'");

		if($queryacc->num_rows()==0)
		{
		  $getqueryacc = $queryacc->row();
		} else {
		  $getqueryacc = $queryacc->row();
		}

		return $getqueryacc;
	}

	// public function pro_add_akun($nim,$passwd,$email,$no_hp) {
	// 	$query = $this->db->query("insert into tab_admin (nim, username, password,no_hp,isadmin,lastlogin,tglinsert) VALUES ('$nim','$email','$passwd','$no_hp','0',now(),now())");
    // 	return $query;
    // }

	public function update_user_logon($username){
		$query = $this->db->query("update tab_admin set lastlogin=now() where username = '$username'");
		return $query;
	}
}
