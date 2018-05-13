<?php
class logout extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));		

	}
	function index(){
		$this->session->sess_destroy();
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('loc');			
		redirect(site_url().'admin/login/');
	}
	
	
	
 
}
