<?php
class products extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photomodel','',true);
		$this->load->library(array('session','photo'));
	}
	function index()
	{
		
		
		
	}
	
	function productdetails($id)
	{
		$data="";
		$uid="";
		$utp="";
		$data["title"]="Product Details";
		$data["product"]=$this->photomodel->getimagebyid($id);
		$data["frames"]=$this->photomodel->getallframes();
		$data["papers"]=$this->photomodel->getallpapers();		
		$uid=$data["product"]->row()->uploadedId;
		$utp=$data["product"]->row()->uploadedBy;
		$data["uploaded"]=$this->photomodel->getartistdetailsbyimage($uid,$utp);
		$data["other"]=$this->photomodel->getsameproductsofartist($uid,$utp,$id);
		$this->load->view('headerview',$data);
		$this->load->view('products/productdetails',$data);
		$this->load->view('footerview');
	}
	
	function getpaperprice()
	{
		
		$totalPrice="0";
		$image_price="0";
		$frame_price="0";
		$paper_price="0";
		$paperid=$this->input->post('paperid');
		$frametype=$this->input->post('frametype');
		$size=$this->input->post('size');
		$imageId=$this->input->post('imageId');
		$paper=$this->photomodel->getpaperbyid($paperid);
		$image=$this->photomodel->getimagebyid($imageId);
		
		
		
		foreach ($image->result() as $i){
			if ($size=="a1"){
				$image_price=$i->a1imagePrice;
			}
			if ($size=="a2"){
				$image_price=$i->a2imagePrice;
			}
			if ($size=="a3"){
				$image_price=$i->a3imagePrice;
			}
			if ($size=="a4"){
				$image_price=$i->a4imagePrice;
			}
			if ($size=="0"){
				$image_price="0";
			}
			
		}
		
		foreach ($paper->result() as $p){
			if ($size=="a1"){
				if ($frametype=="omount"){
					$paper_price=$p->a1withoutmouldedPrice;
				}
				elseif ($frametype=="mount"){
					$paper_price=$p->a1mouldedPrice;
				}
				elseif($frametype=="wrap"){
					$paper_price=$p->a1wrapPrice;
				}
				else{
					$paper_price="0";
				}
				
			}
			
			if ($size=="a2"){
				if ($frametype=="omount"){
					$paper_price=$p->a2withoutmouldedPrice;
				}
				elseif ($frametype=="mount"){
					$paper_price=$p->a2mouldedPrice;
				}
				elseif($frametype=="wrap"){
					$paper_price=$p->a2wrapPrice;
				}
				else{
					$paper_price="0";
				}
				
			}
			
			if ($size=="a3"){
				if ($frametype=="omount"){
					$paper_price=$p->a3withoutmouldedPrice;
				}
				elseif ($frametype=="mount"){
					$paper_price=$p->a3mouldedPrice;
				}
				elseif($frametype=="wrap"){
					$paper_price=$p->a3wrapPrice;
				}
				else{
					$paper_price="0";
				}
				
			}
			
			if ($size=="a4"){
				if ($frametype=="omount"){
					$paper_price=$p->a4withoutmouldedPrice;
				}
				elseif ($frametype=="mount"){
					$paper_price=$p->a4mouldedPrice;
				}
				elseif($frametype=="wrap"){
					$paper_price=$p->a4wrapPrice;
				}
				else{
					$paper_price="0";
				}
				
			}
			
			
		}
		
		$totalPrice=$image_price+$paper_price;
		$value=array(
	//	'paperprice'=>$paper->row()->paperPrice,
		'totalPrice'=>$totalPrice
		);
		echo json_encode($value);
	}
	function addtocart()
	{
		$data="";
		$data["userId"]=$this->session->userdata('userId');
		$data["userType"]=$this->session->userdata('usertype');
		$data["imageId"]=$this->input->post('imageId');
		$data["frameId"]=$this->input->post('frameid');
		$data["paperId"]=$this->input->post('paperid');
		$data["productPrice"]=$this->input->post('totalprice');
		$data["size"]=$this->input->post('size');
		$data["frametype"]=$this->input->post('frametype');
		$data["purchased"]="false";
		$data["createdDate"]=$this->photo->getCustomDate("%Y-%m-%d",now());
		$cart=$this->photomodel->addtocart($data);
		$value=array(
		'result'=>$cart,
		);
		echo json_encode($value);
	}
	function removefromcart()
	{
		$cart="";
		$data="";
		$str="";
		$cartId=$this->input->post('cartId');
		$cart=$this->photomodel->removefromcart($cartId);
		$data["cart"]=$this->photomodel->getcartedproducts($this->session->userdata('userId'),$this->session->userdata('usertype'));
		$str=$this->load->view('products/carttempview',$data,true);
		$value=array(
		'result'=>$cartId,
		'view'=>$str
		);
		echo json_encode($value);
	}
	
	function submitnewimage()
	{
		$data="";
		$image="0";
		$cat_str="";
		$cat=array();
		$upload=$this->input->post();
		foreach ($upload as $k=>$v){
			if ($k=="imageName"||$k=="imageResolution"||$k=="a1imagePrice"||$k=="a2imagePrice"||$k=="a3imagePrice"
			||$k=="a4imagePrice"||$k=="fileId"||$k=="fileName"||$k=="takenDate"
			||$k=="imageDescription"||$k=="imageTags"||$k=="imageType"){
				$data[$k]=$v;
			}
			if ($k=="categoryId"){
				$cat=$v;
			
			}
			
			
		}
		$data["categoryId"]= implode(",", $cat);
		$data["uploadedId"]=$this->session->userdata('userId');
		$data["uploadedBy"]="photographer";
		$data["newstatus"]="1";
		$data["imageStatus"]="pending";
		$data['createdDate']=$this->photo->getCustomDate("%Y-%m-%d",now());
		$image=$this->photomodel->saveuploadedimage($data);
		$value=array(
		'result'=>$image
		
		);
		echo json_encode($value);
	}
}	