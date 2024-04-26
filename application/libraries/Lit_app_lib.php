<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lit_app_lib {

	function nama_aplikasi()
		{
			$CI =& get_instance();
			$sql = $CI->db->query("SELECT judul FROM tab_setting where id='1'");
			foreach ($sql->result() as $row){
			    $uv = $row->judul;
			}
			return $uv;
		}

	public function nama_pengembang()
	{
		$CI =& get_instance();
			$sql = $CI->db->query("SELECT footer FROM tab_setting where id='1'");
			foreach ($sql->result() as $row){
			    $uv = $row->footer;
			}
			return $uv;
	}

	public function logo()
	{
		$CI =& get_instance();
			$sql = $CI->db->query("SELECT logo FROM tab_setting where id='1'");
			foreach ($sql->result() as $row){
			    $uv = $row->logo;
			}
			return $uv;
	}

	public function pavicon()
	{
		$CI =& get_instance();
			$sql = $CI->db->query("SELECT pavicon FROM tab_setting where id='1'");
			foreach ($sql->result() as $row){
			    $uv = $row->pavicon;
			}
			return $uv;
	}

	function getUserIP()
		{
			$client  = @$_SERVER['HTTP_CLIENT_IP'];
			$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
			$remote  = $_SERVER['REMOTE_ADDR'];

			if(filter_var($client, FILTER_VALIDATE_IP))
				{
					$ip = $client;
				}
			elseif(filter_var($forward, FILTER_VALIDATE_IP))
				{
					$ip = $forward;
				}
			else
				{
					$ip = $remote;
				}
			return $ip;
		}

			function tanggal($tgl){
				if(!empty($tgl)){
				$extgstart_date = substr($tgl,0,2);
                $exblstart_date = substr($tgl,3,2);
                $exthstart_date = substr($tgl,6,4);
                $tanggal = $exthstart_date.$exblstart_date.$extgstart_date;
				return $tanggal;
				}
	}
}
