<?php
class contactus extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photomodel','',true);
		$this->load->library(array('session','photo'));
	}
	function index()
	{
		$data="";
		$data["title"]=" Contact us | Photostop";
		$this->load->view('headerview',$data);
		$this->load->view('home/contactusview');
		$this->load->view('footerview');
	}
	
}	