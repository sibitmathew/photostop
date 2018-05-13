<?php
class logout extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));		

	}
	function index(){
		$this->session->sess_destroy();
		$this->session->unset_userdata('uname');
		$this->session->unset_userdata('userFullName');
		$this->session->unset_userdata('userId');	
		$this->session->unset_userdata('orderidarray');			
		$this->session->unset_userdata('grandtotalprice');	
		redirect(site_url());
	}
	
	
	
 
}
