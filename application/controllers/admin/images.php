<?php
class images extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photoadminmodel','',true);
		$this->load->library(array('session','photo'));
	}
	function index(){
		
	}
	function getimages()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['img']=$this->photoadminmodel->getallimages();
			$str=$this->load->view('admin/images/imagesview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	function getcategories()
	{
		$null=$this->input->post('');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['category']=$this->photoadminmodel->getallcategories();
			$str=$this->load->view('admin/images/categoryview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	function addnewcategory(){
		$categoryId=$this->input->post('categoryId');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data["category"]=$this->photoadminmodel->getcategorybyid($categoryId);
			$data['parent']=$this->photoadminmodel->getallparentcategories();
			$str=$this->load->view('admin/images/addcategoryview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	
	function savecategory()
	{
		$c=$this->input->post();
		$data="";
		foreach ($c as $k=>$v)
		{	
				$data[$k]=$v;
		}
		$data['createdDate']=$this->photo->getCustomDate("%Y-%m-%d",now());
		$data['status']="1";
		$res=$this->photoadminmodel->submitcategory($data);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
	
	function deletecategory()
	{
		$categoryId=$this->input->post('categoryId');
		$res="";
		
			$res=$this->photoadminmodel->deletecategory($categoryId);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
	
	function addnewimage(){
		$imageId=$this->input->post('imageId');
		$owner=$this->input->post('owner');
		$data="";
		$str="";
		$session="";
		if($this->session->userdata('id')!=""){
			$session="1";
			$data['category']=$this->photoadminmodel->getallcategories();
			$data["image"]=$this->photoadminmodel->getimagebyid($imageId,$owner);
			$str=$this->load->view('admin/images/addimageview',$data,true);
		}else{
			$session="0";
		}	
		$value=array(
			'result'=>$str,
			'session'=>$session
		);
		echo json_encode($value);
	}
	function imageactions()
	{
		$imageId=$this->input->post('imageId');
		$action=$this->input->post('action');
		$res="";
		if ($action=="delete"){
			$res=$this->photoadminmodel->deleteimage($imageId);
		}
		else{
			$res=$this->photoadminmodel->actionperform($imageId,$action);
			$st=$this->photoadminmodel->setviewstatus($imageId);
		}
		
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
	function setviewstatus()
	{
		$imageId=$this->input->post('imageId');
		$st=$this->photoadminmodel->setviewstatus($imageId);
		$value=array(
			'result'=>$st
			
		);
		echo json_encode($value);
	}
	function savenewimage()
	{
		$i=$this->input->post();
		$data="";
		$j="0";
		$cat_str="";
		$cat=array();
		foreach ($i as $k=>$v)
		{
			if ($k=="imageId"||$k=="imageName"||$k=="imageResolution"||$k=="a1imagePrice"||$k=="a2imagePrice"
			||$k=="a3imagePrice"||$k=="a4imagePrice"||$k=="fileId"||$k=="fileName"
			||$k=="takenDate"||$k=="imageDescription"||$k=="imageTags"||$k=="imageType"||$k=="uploadedBy"||$k=="uploadedId"){
			
				$data[$k]=$v;
			}
			if ($k=="categoryId"){
				$cat=$v;
			
			}
			
			
		}
		
		$data["categoryId"]= implode(",", $cat);
		//$data["uploadedId"]=$this->session->userdata('id');
		//$data["uploadedBy"]="admin";
		$data['createdDate']=$this->photo->getCustomDate("%Y-%m-%d",now());
		$res=$this->photoadminmodel->submitimage($data);
		$value=array(
			'result'=>$res
			
		);
		echo json_encode($value);
	}
}	