<?php
class dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photoadminmodel','',true);
		$this->load->library(array('session'));
	}
	function index(){
		$data1 = "";
		$orders = $this->photoadminmodel->getallorders();
		foreach ($orders->result() as $value) {
			$data1 = "";
			$today = date("Ymd");
			$rand = strtoupper(substr(uniqid(sha1(time().rand())),0,4));
			$data1['orderNo'] = $today.$rand;
			$data1['orderId'] = $value->orderId;
			$v=$this->photoadminmodel->updateorder($data1);
		}

		$data="";
		if($this->session->userdata('id')!=""){
			$this->load->view('admin/dashboard');
		}
		else{
			redirect(site_url().'/admin/login/');
		}
	}
	function getdashboard()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$str=$this->load->view('admin/dashboardtempview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	
}