<?php
class shop extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photoadminmodel','',true);
		$this->load->library(array('session','photo'));
	}
	function index(){
		
	}
	function getshop()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['shop']=$this->photoadminmodel->getallorders();
			$str=$this->load->view('admin/shop/shopview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function editprocessing(){
		$id=$this->input->post('id');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data["order"]=$this->photoadminmodel->getorderbyid($id);
			$data["shipper"]=$this->photoadminmodel->getallshippers();
			$str=$this->load->view('admin/shop/editorderview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	
	function updateorder()
	{
		$i=$this->input->post();
		$data="";
		foreach ($i as $k=>$v)
		{
			
				$data[$k]=$v;
			
			
		}
		
		$data["status"]=1;
		$data['createdDate']=$this->photo->getCustomDate("%Y-%m-%d",now());
		$res=$this->photoadminmodel->updateorder($data);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
	function updatedeliverystatus()
	{
		$data="";
		$data["orderId"]=$this->input->post('id');
		$data["deliveryStatus"]="delivered";
		$res=$this->photoadminmodel->updateorder($data);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
	function deleteorder()
	{
		
		$orderId=$this->input->post('id');
		$res=$this->photoadminmodel->deleteorder($orderId);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
}	