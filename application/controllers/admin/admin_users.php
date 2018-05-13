<?php
class admin_users extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photoadminmodel','',true);
		$this->load->library(array('session','photo'));
	}
	function index(){
		
	}
	
	function getmyprofile()
	{
		$null=$this->input->post('');
		if($this->session->userdata('id')!=""){
			$session="1";
			$adminId=$this->session->userdata('id');
			$data['admin_user']=$this->photoadminmodel->getadminuserbyid($adminId);
			$str=$this->load->view('admin/admin_users/myprofileview',$data,true);
		}else{
			$session="0";
		}

		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	function submitmyprofile()
	{
		$data="";
		$admin=$this->input->post();
		foreach ($admin as $k=>$v){
				$data[$k]=$v;
	
		}
		$new=$this->photoadminmodel->submitadminuser($data);
		$value=array(
			'result'=>$new
		);
		echo json_encode($value);
	}
	function getmysettings()
	{
		$null=$this->input->post('');
		if($this->session->userdata('id')!=""){
			$session="1";
			$adminId=$this->session->userdata('id');
			$data['admin_user']=$this->photoadminmodel->getadminuserbyid($adminId);
			$str=$this->load->view('admin/admin_users/mysettingsview',$data,true);
		}else{
			$session="0";
		}

		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	
	
	function getcontents()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		$roleId="";
		$status="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['content']=$this->photoadminmodel->getallcontents();
			$str=$this->load->view('admin/admin_users/contentsview',$data,true);
			
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	function editcontent()
	{
		$contentid=$this->input->post('contentid');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['contents']=$this->photoadminmodel->getcontentbyid($contentid);
			$str=$this->load->view('admin/admin_users/editcontentview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function submitcontents()
	{
		$data="";
		$admin=$this->input->post();
		foreach ($admin as $k=>$v){
			
				$data[$k]=$v;
			
			
		}
		
		$co=$this->photoadminmodel->submitcontent($data);
		$value=array(
			'result'=>$co
		);
		echo json_encode($value);
	}
	
	
	
//FAQ
	function getfaq()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		$roleId="";
		$status="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['faqs']=$this->photoadminmodel->getfaq();
			$str=$this->load->view('admin/admin_users/faqview',$data,true);
			
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	function faqactions() 
	{
		$faqid=$this->input->post('faqid');
		$act=$this->input->post('act');
		$data="";
		$a="";
		$data['faqId']=$faqid;
		if ($act=="delete"){
			$a=$this->photoadminmodel->deletefaq($faqid);
		}
		else{
			if ($act=="show"){
				$data['display']="true";
				$a=$this->photoadminmodel->saveupdatefaq($data);
			}
			else{
				$data['display']="false";
				$a=$this->photoadminmodel->saveupdatefaq($data);
			}
		}
		
		$value=array(
			'result'=>$a
		);
		echo json_encode($value);
	}
	
	
	function addeditfaq()
	{
		$faqid=$this->input->post('faqid');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['faq']=$this->photoadminmodel->getfaqbyid($faqid);
			$str=$this->load->view('admin/admin_users/editfaqview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	function submitfaq()
	{
		$data="";
		$fa=$this->input->post();
		foreach ($fa as $k=>$v){
			
				$data[$k]=$v;
			
			
		}
		$data['status']='1';
		$data['createdDate']=$this->photo->getCustomDate("%Y-%m-%d",now());
		$co=$this->photoadminmodel->saveupdatefaq($data);
		$value=array(
			'result'=>$co
		);
		echo json_encode($value);
	}

//FAQ	

//Shippers
	function getshippers()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		$roleId="";
		$status="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['shippers']=$this->photoadminmodel->getshippers();
			$str=$this->load->view('admin/admin_users/shippersview',$data,true);
			
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	function deleteshippers()
	{
		$shipperId=$this->input->post('shipperId');
		$del=$this->photoadminmodel->deleteshipper($shipperId);
		$value=array(
			'result'=>$del
		);
		echo json_encode($value);
	}
	
	function addeditshippers()
	{
		$shipperId=$this->input->post('shipperId');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['shipper']=$this->photoadminmodel->getshipperbyid($shipperId);
			$str=$this->load->view('admin/admin_users/addeditshipperview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	function submitshipper()
	{
		$data="";
		$fa=$this->input->post();
		foreach ($fa as $k=>$v){
			
				$data[$k]=$v;
			
			
		}
		
		$data['createdDate']=$this->photo->getCustomDate("%Y-%m-%d",now());
		$co=$this->photoadminmodel->saveupdateshipper($data);
		$value=array(
			'result'=>$co
		);
		echo json_encode($value);
	}
//Shippers	
	function getadminusers()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		$roleId="";
		$status="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['admin']=$this->photoadminmodel->getalladminusers();
			$str=$this->load->view('admin/admin_users/adminusersview',$data,true);
			
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function addeditusers()
	{
		$adminId=$this->input->post('adminId');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['admin_user']=$this->photoadminmodel->getadminuserbyid($adminId);
			$str=$this->load->view('admin/admin_users/addeditusersview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function checkun()
	{
		$un=trim($this->input->post("userName"));
		$edit=$this->input->post("edit");
		$adminId=$this->input->post("adminId");
	//	if($adminId==""){
			$que="";
		if(strtolower($edit)!=strtolower($un)){
			$que=$this->photoadminmodel->testuserid($un);
		}
		$result="";
		
		if($que>0){
			$result="false";
		}
		else{
			$result="true";
		}
		
	
		echo $result;
	}
	
	function checksername()
	{
		$un=trim($this->input->post("userName"));
		$edit=$this->input->post("edit");
		
		$result="";
		
			$que="";
		if(strtolower($edit)!=strtolower($un)){
			$que=$this->photoadminmodel->testuserid($un);
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
	
	function submitadminusers()
	{
		$data="";
		$admin=$this->input->post();
		foreach ($admin as $k=>$v){
			if($k!="confirm_password"){
				$data[$k]=$v;
			}
			
		}
		$data["status"]="1";
		$new=$this->photoadminmodel->submitadminuser($data);
		$value=array(
			'result'=>$new
		);
		echo json_encode($value);
	}
	function deleteadminusers()
	{
		$adminId=$this->input->post('adminId');
		$del=$this->photoadminmodel->deleteadminuser($adminId);
		$value=array(
			'result'=>$del
		);
		echo json_encode($value);
	}
	function getadminroles()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['roles']=$this->photoadminmodel->getadminroles();
			$str=$this->load->view('admin/admin_users/adminrolesview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function editadminroles()
	{
		$roleId=$this->input->post('roleId');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['modules']=$this->photoadminmodel->getadminmodules();
			$data['role']=$this->photoadminmodel->getrolebyid($roleId);
			$str=$this->load->view('admin/admin_users/roleseditview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	function saveadminroles()
	{
		$d=$this->input->post();
		$roleId="";
		$data=array(
			'roleId'=>$roleId,
			'roleName'=>$d['roleName'],
			'roleType'=>$d['roleType'],
			'roleLimit'=>$d['roleLimit'],
			'rolesDescription'=>$d['rolesDescription'],
			'createdDate'=>$this->photo->getCustomDate("%Y-%m-%d",now()),
			'roleStatus'=>1
		);
		$roleId=$this->photoadminmodel->saverole($data);
		$setblank=$this->photoadminmodel->setblank($roleId);
		$arr=array();
		foreach ($d as $k=>$y){
		
			$arr=explode("_",$k);			
			
			if($arr[0]=="view"){
				$moduleId=$arr[1];
				$save=$this->photoadminmodel->savepermission($roleId,$moduleId,"view");
			}
			if($arr[0]=="add"){
				$moduleId=$arr[1];
				$save=$this->photoadminmodel->savepermission($roleId,$moduleId,"add");
			}
			if($arr[0]=="edit"){
				$moduleId=$arr[1];
				$save=$this->photoadminmodel->savepermission($roleId,$moduleId,"edit");
			}
			if($arr[0]=="delete"){
				$moduleId=$arr[1];
				$save=$this->photoadminmodel->savepermission($roleId,$moduleId,"delete");
			}
		}		
		
		$value=array(
			'result'=>$roleId,
			
		);
		
		echo json_encode($value);
	}
	
	function updateroles()
	{
		$r=$this->input->post();
		$roleid=$this->input->post('roleId');
		$setblank=$this->photoadminmodel->resetrole($roleid);
		$data["roleType"]=$this->input->post('roleType');
		$data["roleName"]=$this->input->post('roleName');
		$data["rolesDescription"]=$this->input->post('rolesDescription');
		$data["roleLimit"]=$this->input->post('roleLimit');
		$data["roleId"]=$roleid;
		$data["updatedDate"]=$this->photo->getCustomDate("%Y-%m-%d",now());
		$s=$this->photoadminmodel->updaterolename($data);
		$save="";
		$arr=array();
		foreach ($r as $k=>$y){
		
			$arr=explode("_",$k);			
			
			if($arr[0]=="view"){
				$moduleId=$arr[1];
				$save=$this->photoadminmodel->savepermission($roleid,$moduleId,"view");
			}
			if($arr[0]=="add"){
				$moduleId=$arr[1];
				$save=$this->photoadminmodel->savepermission($roleid,$moduleId,"add");
			}
			if($arr[0]=="edit"){
				$moduleId=$arr[1];
				$save=$this->photoadminmodel->savepermission($roleid,$moduleId,"edit");
			}
			if($arr[0]=="delete"){
				$moduleId=$arr[1];
				$save=$this->photoadminmodel->savepermission($roleid,$moduleId,"delete");
			}
		}		
		$value=array(
			'result'=>$save,
			
		);
		
		echo json_encode($value);
	}
	
	function deleteroles()
	{
		$id=$this->input->post('id');
		$del=$this->photoadminmodel->deleterole($id);
		$reset=$this->photoadminmodel->resetadminrole($id);
		$reset_permission=$this->photoadminmodel->deleterolepermissions($id);
		$value=array(
			'result'=>$del
			
		);
		
		echo json_encode($value);
	}
	function setrolestatus()
	{
		$id=$this->input->post('id');
		$status=$this->input->post('status');
		$inactive="";
		$res="";
		$data="";
		$in="";
		$set="";
		if($status=="activate"){
			$data["roleStatus"]="1";
			$res=$this->photoadminmodel->setstatus($id,$data);
		}
		else{
			$data["roleStatus"]="0";
			$res=$this->photoadminmodel->setstatus($id,$data);
			$inactive=$this->photoadminmodel->getinactiveroleusers($id);
			if ($inactive->num_rows>0){
					foreach ($inactive->result() as $in){
						$set=$this->photoadminmodel->setinactiveroleusers($in->adminId);
					}
			}
			
		}
		
		$value=array(
			'result'=>$res
			
		);
		
		echo json_encode($value);
	}
	function getadminpermissions()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data["permissions"]=$this->photoadminmodel->getallpermissions();
			$str=$this->load->view('admin/admin_users/adminpermissionview',$data,true);
		}else{
			$session="0";
		}	
		
		//print_r($data["permission"]);
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function editadminpermissions()
	{
		$adminId=$this->input->post('adminId');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			if($adminId==""){
				$data["admin_current"]=$this->photoadminmodel->getadminuserbyid("0");
				$data["admin"]=$this->photoadminmodel->getnonassignedadmins();
				$data["roles"]=$this->photoadminmodel->getpermittedadminroles();
				$str=$this->load->view('admin/admin_users/permissioneditview',$data,true);
			}
			else{
				$data["admin_current"]=$this->photoadminmodel->getadminuserbyid($adminId);
				$data["admin"]=$this->photoadminmodel->getalladminusers();
				$data["roles"]=$this->photoadminmodel->getpermittedadminroles();
				$str=$this->load->view('admin/admin_users/permissioneditview',$data,true);
			}
			
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function updatepermission()
	{
		$data['adminId']=$this->input->post('adminId');
		$data['roleId']=$this->input->post('roleId');
		$permit=$this->photoadminmodel->updatepermission($data);
		$value=array(
			'result'=>$permit
		);
		echo json_encode($value);
	}
}