<?php
class photographers extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photoadminmodel','',true);
		$this->load->library(array('session','photo','email'));
	}
	function index(){
		
	}
	function getphotographers()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['photograpers']=$this->photoadminmodel->getphotographers();
			$str=$this->load->view('admin/photographers/photographersview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function editphotographers()
	{
		$id=$this->input->post('id');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['photographer']=$this->photoadminmodel->getphotographerbyid($id);
			$str=$this->load->view('admin/photographers/editphotographersview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function submitphotographer()
	{
		$p=$this->input->post();
		$data="";
		$path="";
		foreach ($p as $k=>$v)
		{
			if($k!="confirm_password"){
				$data[$k]=$v;
			}
			
		}
		$res=$this->photoadminmodel->submitphotographer($data);
		if ($data["photographerId"]==""){
			$to=$data["photographerEmail"];
			$photographeFullName=$data["photographerFullName"];
			$photographerUserName=$data["photographerUserName"];
			$photographerPassword=$data["photographerPassword"];
			$msg="Hi $photographeFullName,<br><br>";
			$msg.="Welcome to Photostop! Your one stop studio.<br>";
			$msg.="You have successfully created your account in Photostop as a Photographer. You can now fruitfully make use of our website to <br>";
			$msg.="sell your amazing photographs. Please follow the link below to verify your account.<br><br>";
			$msg.="Your login details are given below.<br><br>";
			$msg.="User name :$photographerUserName<br>";
			$msg.="Password :$photographerPassword<br>";
			$msg.="<a href='http://photostop.in/home/verify?uid=$res.&type=artist'>Click here.</a> to verify your email id.<br><br>";
			$msg.="Thank you and Regards.<br>";
			$msg.="Team Photostop.<br>";
			//$send=$this->photo->sendmail("info@photostop.in","Photostop",$to,"Register-Acknowledgement",$msg);
			$send=$this->photo->sendmailattachments("info@photostop.in","Photostop-info",$to,"Register-Acknowledgement",$msg,$path);
		}
			
		
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
	function deletephotographer()
	{
		$id=$this->input->post('id');
		$res=$this->photoadminmodel->deletephotographer($id);
		$res1=$this->photoadminmodel->deletephotographermapping($id);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
	function getgallery()
	{
		$id=$this->input->post('id');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['gallery']=$this->photoadminmodel->getphotographergallery($id);
			$str=$this->load->view('admin/photographers/viewimagesview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function deletephotographerimage()
	{
		$id=$this->input->post('id');
		$res1=$this->photoadminmodel->deletephotographerimage($id);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
}	