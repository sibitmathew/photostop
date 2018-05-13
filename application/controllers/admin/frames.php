<?php
class frames extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photoadminmodel','',true);
		$this->load->library(array('session','photo'));
	}
	function index(){
		
	}
	function getframes()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['frames']=$this->photoadminmodel->getallframes();
			$str=$this->load->view('admin/frames/framesview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function addnewframe()
	{
		$frameId=$this->input->post('frameId');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data["frame"]=$this->photoadminmodel->getframebyid($frameId);
			$str=$this->load->view('admin/frames/addframeview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function savenewframe()
	{
		$f=$this->input->post();
		$data="";
		foreach ($f as $k=>$v)
		{
			
				$data[$k]=$v;
			
			
		}
		$data['createdDate']=$this->photo->getCustomDate("%Y-%m-%d",now());
		$res=$this->photoadminmodel->submitframe($data);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
	function deleteframe()
	{
		$frameId=$this->input->post('frameId');
		$res=$this->photoadminmodel->deleteframe($frameId);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
}	