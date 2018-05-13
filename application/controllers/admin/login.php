<?php
class login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photoadminmodel','',true);
		$this->load->library(array('session'));
	}
	function index(){
		
		$this->load->view('admin/loginview');
	}
	function adminauthentication()
	{
		$uname=$this->input->post('userName');
		$pwd=$this->input->post('password');
		$msg='';
		$res='';
		$userdata='';
		$str='';
		$loc='';
		$data='';
		$res=$this->photoadminmodel->getadminauthentication($uname,$pwd);
		if($res->num_rows()>0){
			$loc=$this->session->userdata('loc');
			$loc=$loc!=null?$loc:'users';
			$userdata=array(				
				'uname'=>$uname,
				'adminFullName'=>$res->row()->adminFullName,
				'id'=>$res->row()->adminId,
				'rId'=>$res->row()->roleId,
				'loc'=>$loc				
			);
			$this->session->set_userdata($userdata);
			$str=1;
			$data["alertmessage"]="Successfully Logged in!!";
			$res=$this->load->view('admin/adminloginsuccess',$data,true);
		}
		else{
			$data["alertmessage"]="User Name or Password is wrong!!";
			$str=0;
			$res=$this->load->view('admin/adminloginfail',$data,true);
		}
		
		$value=array(
			'msg'=>$msg,
			'loc'=>$loc,
			'sts'=>$str,
			'uname'=>$uname,
			'view'=>$res
		);
		echo json_encode($value);
	}
	function forgotpassword()
	{
		$data="";
		$this->load->view('admin/forgotpasswordview',$data);
	}
	
	function uservalidation()
	{
		$un=trim($this->input->post("userName"));
		$edit=$this->input->post("edit");
		$result="";
			$que="";
			$que=$this->photoadminmodel->testuserid($un);
		if($que>0){
			$result="true";
		}else{
			$result="false";
		}

		echo $result;
	}
	function submituname()
	{
		$userName=$this->input->post('userName');
		$p=$this->photoadminmodel->getpwd($userName);
		$adminFullName=$p->row()->adminFullName;
		$to=$p->row()->email;
		$pwd=$p->row()->password;
		$header = "From:admin@photostop.in";
		//$to = "sibi@inertiainc.co.in";
  		 $subject = "Forgot Password-Photo stop.";
   
   		$message = "";
   		$message="Dear ".strip_tags($adminFullName)."\r\n";
					$message.="Please find your login details below\r\n";
					$message.="Your Login details.\r\n\r\n";
					$message.="User Name: ".strip_tags($userName)."\r\n";
					$message.="Password: ".strip_tags($pwd)."\r\n";
					$message.="Click below link to login:\r\n";
					$message.="<a href='http://68.67.72.7/~photosto/index.php/admin/login/' target='_blank'>Login Here</a>\r\n\r\n";
					
					$message.="Regards\r\n";
					$message.="Photostop\r\n";

  		 $result="";
  		 $retval = mail ($to,$subject,$message,$header);
  		 $res="";
  		 $sts="";
   if( $retval == true )  
   {
   		$sts="1";
   		$data["alertmessage"]="A mail has been sent to ".strip_tags($to)." Please check the mail and login!!";
		$res=$this->load->view('admin/adminloginsuccess',$data,true);
   }
   else
   {
   		$sts="0";
   		$data["alertmessage"]="Unable to retrieve the password!!";
			$res=$this->load->view('admin/adminloginfail',$data,true);
   }
	$value=array(
		'view'=>$res,
		'sts'=>$sts
	);
	echo json_encode($value);
	}
	
}	