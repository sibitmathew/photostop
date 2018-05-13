<?php
class users extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photoadminmodel','',true);
		$this->load->library(array('session','photo','email'));
	}
	function index(){
		
	}
	function getusers()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['users']=$this->photoadminmodel->getallusers();
			$str=$this->load->view('admin/users/usersview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function checksername()
	{
		$un=trim($this->input->post("userName"));
		$edit=$this->input->post("edit");
		
		$result="";
		
			$que="";
		if(strtolower($edit)!=strtolower($un)){
			$que=$this->photoadminmodel->testfrontendusername($un);
		}
		//$result="true";
		
		if($que>0){
			$result="false";
		}else{
			$result="true";
		}
		
	
		
		
		//print_r($que);	
		echo $result;
	}
	function editusers()
	{
		$id=$this->input->post('id');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['user']=$this->photoadminmodel->getuserbyid($id);
			$str=$this->load->view('admin/users/edituserview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function submituser()
	{
		$u=$this->input->post();
		$data="";
		$path="";
		foreach ($u as $k=>$v)
		{
			if($k!="confirm_password"){
				$data[$k]=$v;
			}
			
		}
		$res=$this->photoadminmodel->submituser($data);
		if ($data["userId"]==""){
				$userName=$data["userName"];
				$password=$data["password"];
				$userFullName=$data["userFullName"];
				$to=$data["Email"];
				$msg="Hi $userFullName,<br><br>";
				$msg.="Welcome to Photostop! Your one stop studio.<br>";
				$msg.="You have successfully created your account in Photostop as a Buyer. You can now fruitfully make use of our website to buy .<br>";
				$msg.="amazing framed photographs. Please follow the link below to verify your account..<br>";
				$msg.="Your login details are given below.<br><br>";
				$msg.="User name :.$userName<br>";
				$msg.="Password :.$password<br>";
				$msg.="<a href='http://photostop.in/index.php/home/verify?uid=$res.&type=user'>Click here.</a><br><br>";
				$msg.="Thank you and Regards.<br>";
				$msg.="Team Photostop.<br>";
			//	$send=$this->photo->sendmail("info@photostop.in","Photostop",$to,"Register-Acknowledgement",$msg);
			$send=$this->photo->sendmailattachments("info@photostop.in","Photostop-info",$to,"Register-Acknowledgement",$msg,$path);
		}
		
		
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
	function deleteuser()
	{
		$id=$this->input->post('id');
		$res=$this->photoadminmodel->deleteuser($id);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
}	