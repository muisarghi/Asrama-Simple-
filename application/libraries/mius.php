<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mius 
{
	function Mius()
	{
	$CI =& get_instance();
	$CI->load->database();
	$CI->load->library("session");
	}

	function view()
	{
	$CI =& get_instance();
	$data['doto']= $CI->db->get("coba");
	return $data;
	}

	function masterkl()
	{
	$CI =& get_instance();
	$data['doto']= $CI->db->get("cabbg");
	return $data;
	}

	function viewdet($id=NULL)
	{
	$CI =& get_instance();
	
	$CI->db->where('id', $id);
	$query= $CI->db->get("coba");
	$result=$query->result_array();
	return $result;
	}

}
