<?php
class papers extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photoadminmodel','',true);
		$this->load->library(array('session','photo'));
	}
	function index(){
		
	}
	function getpapers()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['papers']=$this->photoadminmodel->getallpapers();
			$str=$this->load->view('admin/papers/papersview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function addnewpaper()
	{
		$paperId=$this->input->post('paperId');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data["paper"]=$this->photoadminmodel->getpaperbyid($paperId);
			$str=$this->load->view('admin/papers/addpaperview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function savenewpaper()
	{
		$p=$this->input->post();
		$data="";
		foreach ($p as $k=>$v)
		{
			
				$data[$k]=$v;
			
			
		}
		$data['createdDate']=$this->photo->getCustomDate("%Y-%m-%d",now());
		$data['status']="1";
		$res=$this->photoadminmodel->submitpaper($data);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
	function deletepaper()
	{
		$paperId=$this->input->post('paperId');
		$res=$this->photoadminmodel->deletepaper($paperId);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
}	