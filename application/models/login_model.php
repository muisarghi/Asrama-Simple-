<?php
  
  class login_model extends CI_Model
	  {	
		function prologin($username,$password)
		{
		//$this->db->select('*');
		//$this->db->from('user');
		//$this->db->where(array ('username'=>$username, 'password'=>$password));
		//$this->db->where("username='".$username."' and password='".$password."'");
		//$log=$this->db->get('user');
		$pass=md5($password);
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$pass' LIMIT 1");
		return $query;

		}
	}
?>