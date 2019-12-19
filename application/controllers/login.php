<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Login extends CI_Controller
	 {
 
	function __construct()
		{
		parent::__construct();
		$this->load->database();
		$this->load->model('login_model');
	
		$this->load->helper('url');
		$this->load->helper('form','url');
		$this->load->helper('html');
		$this->load->library('form_validation');
		}
 
	function index()
		{
		$this->load->view('login/vlogin');
		}
 
	function login_progress()
		{
		$this->load->helper('url');

		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$cek=$this->login_model->prologin($username,$password);
		
        if($cek->num_rows() > 0)
			{
			$data=$cek->row_array();
        	$this->session->set_userdata('masuk',TRUE);
			if($data['akses']=='administrator')
				{
		        $this->session->set_userdata('akses','administrator');
		        $this->session->set_userdata('iduser',$data['iduser']);
		        $this->session->set_userdata('namauser',$data['namauser']);
		        redirect(base_url().'index.php/mda/index?alert=administrator', 'refresh');
				}
			elseif($data['akses']=='kl')
				{
				$this->session->set_userdata('akses','kl');
		        $this->session->set_userdata('iduser',$data['iduser']);
				$this->session->set_userdata('ketuser',$data['ketuser']);
		        $this->session->set_userdata('namauser',$data['namauser']);
		        redirect(base_url().'index.php/kl/index?alert=kl', 'refresh');
				}
			elseif($data['akses']=='kp')
				{
				$this->session->set_userdata('akses','kp');
		        $this->session->set_userdata('ses_id',$data['iduser']);
		        $this->session->set_userdata('ses_nama',$data['namauser']);
		        redirect(base_url().'index.php/login/index?alert=pst', 'refresh');
				}
			else
				{redirect(base_url().'index.php/login/index?alert=gk ktm', 'refresh');
				}
			}
		else
			{
			redirect(base_url().'index.php/login/index?alert=GAGAL', 'refresh');
			}
		
		/*
		if($this->login_model->prologin($username, $password))
			{
			$this->load->library('session');
			$this->session->set_userdata('username', $username);
			redirect(base_url().'index.php/mda/index', 'refresh');
			}
		else
		{redirect(base_url().'index.php/login/index?alert=GAGAL', 'refresh');}
		*/
		}
 
	function logout()
		{
		$this->session->sess_destroy();
		redirect(base_url('login'));
		}
	}
?>