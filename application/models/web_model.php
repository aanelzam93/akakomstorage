<?php 
	/**
	* 
	*/
	class Web_model extends CI_Model
	{
		
		function simpandaftar($tabelName,$data_input){
			$res  = $this->db->insert($tabelName,$data_input);
			return $res;
		}
		function login(){

		}
		function data_login($email,$password){
			$query=$this->db->query("select*from user where email='$email' and password='$password'");
			return $query;
		}
		function simpan_upload($in)
		{
			$kat=$this->db->insert('download',$in);
			return $kat;
		}
		function Tampil_File($email)
		{
			$t=$this->db->query("select * from download where author='$email' ");
			return $t;
		}
	}

 ?>