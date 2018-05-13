<?php
class checkout extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photomodel','',true);
		$this->load->library(array('session','photo','email'));
	}
	function index()
	{
		$data="";
		if ($this->session->userdata('userId')!=null){
			$data["title"]="Checkout products";
			$data["shipping"]=$this->photomodel->getshippingdetails();
			$data["cart"]=$this->photomodel->getcartedproducts($this->session->userdata('userId'),$this->session->userdata('usertype'));
			$this->load->view('headerview',$data);
			$this->load->view('checkout/checkoutview',$data);
			$this->load->view('footerview');
		}else {
			 header( 'Location: '.site_url() ) ;
		}	
		
	}
	
	function billpayment($billingId,$shippingId)
	{
		$data="";
		if ($this->session->userdata('userId')!=null)
		{	
			$data["billing"]=$this->photomodel->getbilling($billingId);
			$data["shipping"]=$this->photomodel->getshipping($shippingId);
			$data["title"]="Online Bill Payment - Photostop";
	//		$this->load->view('headerview',$data);
			$this->load->view('checkout/paymentpage',$data);
	//		$this->load->view('footerview');
		}else {
			 header( 'Location: '.site_url() ) ;
		}	
	}
	
	function checkoutreturn()
	{
		$data="";
		$sts="";
		$order="";
		$ord="";
		if ($this->session->userdata('userId')!=null)
		{
		 $secret_key = "ebskey";	 // Your Secret Key
			if(isset($_GET['DR'])) {
				 require('Rc43.php');
				 $DR = preg_replace("/\s/","+",$_GET['DR']);
			
				 $rc4 = new Crypt_RC4($secret_key);
			 	 $QueryString = base64_decode($DR);
				 $rc4->decrypt($QueryString);
				 /*$QueryString = split('&',$QueryString);
			
				 $response = array();
				 foreach($QueryString as $param){
				 	$param = split('=',$param);
					$response[$param[0]] = urldecode($param[1]);
				 }*/
				 $sts["paymentStatus"]="done";
				 $order=$this->session->userdata('orderidarray');
				 for ($i=0;$i<count($order);$i++){
				 	$sts["orderId"]=$order[$i] ;
				 	$ord=$this->photomodel->updateorders($sts);
				 }
				 
					 $data["title"]="Payment Success";
					$this->load->view('headerview',$data);
					$this->load->view('checkout/checkoutreturn',$data);
					$this->load->view('footerview');
			}else{
				 $data["title"]="Payment fail";
					$this->load->view('headerview',$data);
					$this->load->view('checkout/paymentfailview',$data);
					$this->load->view('footerview');
			}
				
			
		}else {
			 header( 'Location: '.site_url() ) ;
		}	
	}
	
	function saveorderformforsamebill()
	{
		$data="";
		$order="";
		$prdid="";
		$arr="";
		$bill="";
		$ship="";
		$billingId="";
		$shippingId="";
		$totalprice="0";
		$arr["userId"]=$this->session->userdata('userId');
		$arr["userType"]=$this->session->userdata('usertype');
		$arr["shipperId"]=$this->input->post("shipperId");
		$arr["paymentStatus"]="pending";
		$arr["deliveryStatus"]="notdelivered";
		$order=$this->input->post();
		$i=0;
		foreach ($order as $k=>$v) {
			if ($k!="grandTotalPrice"||$k!="shipperId"){
				$data[$k]=$v;
				
			}
		}
		
		for ($i=0;$i<count($data["imageId"]);$i++){
			$arr["imageId"]=$data["imageId"][$i];
			$arr["frameId"]=$data["frameId"][$i];
			$arr["paperId"]=$data["paperId"][$i];
			$arr["quantity"]=$data["quantity"][$i];
			$arr["unitPrice"]=$data["unitPrice"][$i];
			$arr["totalPrice"]=$data["unitPrice"][$i]*$data["quantity"][$i];
			$arr["size"]=$data["size"][$i];
			$arr["frameType"]=$data["frameType"][$i];
			$prdid[$i]=$this->photomodel->saveorders($arr);
			
		}
		
		for ($j=0;$j<count($prdid);$j++){
			$bill["orderId"]=$prdid[$j];
			$bill["billing_address1"]=$data["billing_address1"];
			$bill["billing_address2"]=$data["billing_address2"];
			$bill["billing_city"]=$data["billing_city"];
			$bill["billing_companyname"]=$data["billing_companyname"];
			$bill["billing_country"]=$data["billing_country"];
			$bill["billing_email"]=$data["billing_email"];
			$bill["billing_firstname"]=$data["billing_firstname"];
			$bill["billing_lastname"]=$data["billing_lastname"];
			$bill["billing_phone"]=$data["billing_phone"];
			$bill["billing_state"]=$data["billing_state"];
			$bill["billing_zip"]=$data["billing_zip"];
			
			$ship["orderId"]=$prdid[$j];
			$ship["shipping_address1"]=$data["billing_address1"];
			$ship["shipping_address2"]=$data["billing_address2"];
			$ship["shipping_city"]=$data["billing_city"];
			//$ship["shipping_companyname"]=$data["billing_companyname"];
			$ship["shipping_country"]=$data["billing_country"];
			$ship["shipping_email"]=$data["billing_email"];
			$ship["shipping_firstname"]=$data["billing_firstname"];
			$ship["shipping_lastname"]=$data["billing_lastname"];
			$ship["shipping_phone"]=$data["billing_phone"];
			$ship["shipping_state"]=$data["billing_state"];
			$billingId=$this->photomodel->savebilling($bill);
			$shippingId=$this->photomodel->saveshipping($ship);
		}
		
			$userfirstname=$data["billing_firstname"];
			$userlastname=$data["billing_lastname"];
			$useremail=$data["billing_email"];
			$billing_address1=$data["billing_address1"];
			$billing_address2=$data["billing_address2"];
			$billing_companyname=$data["billing_companyname"];
			$billing_city=$data["billing_city"];
			$billing_country=$data["billing_country"];
			$billing_state=$data["billing_state"];
			$billing_zip=$data["billing_zip"];
			$billing_state=$data["billing_state"];
			$billing_phone=$data["billing_phone"];
			
	//To User	
			$path="";
			$msg="Hi $userfirstname,<br><br>";
			$msg.="Thank you for booking in Photostop.<br>";
			$msg.="Our representative will contact you soon for the delivery of the product you ordered.<br>";
			$msg.="For any queries ,please mail us at info@photostop.in or call to +91 9845128760<br>";
			
			
			$msg.="Thank you and Regards.<br>";
			$msg.="Team Photostop.<br>";
			//$send=$this->photo->sendmailattachments("info@photostop.in","Photostop",$useremail,"Booking-Acknowledgement",$msg,$path);
	//To Admin		
			$imageId="";
			$frameId="";
			$paperId="";
			$quantity="";
			$unitPrice="";
			$totalPrice="";
			$size="";
			$frameType="";
			
			$paper="";
			$image="";
			$frame="";
			
			$imageName="";
			$frameName="";
			$paperName="";
			$grndtotalprice="0";
			$num="0";
			
			$path="";
			$msg="Hi Admin,<br><br>";
			$msg.="A new user booked a product.<br>";
			$msg.="Following are the billing and shipping details.<br>";
			$msg.="Billing and shipping name:-  $userfirstname $userlastname.<br>";
			$msg.="Billing and shipping address1:- $billing_address1<br>";
			$msg.="Billing and shipping address2:- $billing_address2<br>";
			$msg.="Billing and shipping city:- $billing_city<br>";
			$msg.="Billing and shipping state:- $billing_state<br>";
			$msg.="Billing and shipping country:- $billing_country<br>";
			$msg.="Billing and shipping pincode:- $billing_zip<br>";
			$msg.="Billing and shipping email:- $useremail<br>";
			$msg.="Billing and shipping contact number:- $billing_phone<br><br>";
			$msg.="Following are the product details.<br>";
			
		for ($i=0;$i<count($data["imageId"]);$i++){
			$imageId=$data["imageId"][$i];
			$frameId=$data["frameId"][$i];
			$paperId=$data["paperId"][$i];
			$quantity=$data["quantity"][$i];
			$unitPrice=$data["unitPrice"][$i];
			$totalPrice=$data["unitPrice"][$i]*$data["quantity"][$i];
			$size=$data["size"][$i];
			$frameType=$data["frameType"][$i];
			
			$grndtotalprice=$grndtotalprice+$totalPrice;
			
			$paper=$this->photomodel->getpaperbyid($paperId);
			$image=$this->photomodel->getimagebyid($imageId);
			$frame=$this->photomodel->getframebyid($frameId);
			
			$imageName=$image->row()->imageName;
			$frameName=$frame->row()->frameName;
			$paperName=$paper->row()->paperName;
			$num=$i+1;
			
			$msg.="Product No:- $num.<br>";
			$msg.="Image Name:- $imageName.<br>";
			$msg.="Frame Name:- $frameName.<br>";
			$msg.="Paper Name:- $paperName.<br>";
			$msg.="Size:- $size.<br>";
			$msg.="Frame Type:- $frameType.<br>";
			$msg.="Unit price:- $unitPrice.<br>";
			$msg.="Quantity:- $quantity.<br>";
			$msg.="Total Price:-Rs. $totalPrice.<br>";
			$msg.="<br>";
			
		}
			$msg.="Grand total price:-Rs.$grndtotalprice.<br><br>";
			
			$msg.="Regards.<br>";
			$msg.="info@photostop.in.<br>";
			//$send=$this->photo->sendmailattachments("info@photostop.in","Photostop-info","sreekumar@honeycombindia.net","User Booking info",$msg,$path);
			
			$this->session->set_userdata('grandtotalprice', $grndtotalprice);
			$this->session->set_userdata('orderidarray', $prdid);
			
	$value=array(
			'billingid'=>$billingId,
			'shippingid'=>$shippingId
		);
		echo json_encode($value);	
	}
	
	function saveorderformfordiffbill()
	{
		$data="";
		$order="";
		$prdid="";
		$arr="";
		$bill="";
		$ship="";
		$billingId="";
		$shippingId="";
		$totalprice="0";
		$arr["userId"]=$this->session->userdata('userId');
		$arr["userType"]=$this->session->userdata('usertype');
		$arr["shipperId"]=$this->input->post("shipperId");
		$arr["paymentStatus"]="pending";
		$arr["deliveryStatus"]="notdelivered";
		$order=$this->input->post();
		$i=0;
		foreach ($order as $k=>$v) {
			if ($k!="grandTotalPrice"||$k!="shipperId"){
				$data[$k]=$v;
				
			}
		}
		
		for ($i=0;$i<count($data["imageId"]);$i++){
			$arr["imageId"]=$data["imageId"][$i];
			$arr["frameId"]=$data["frameId"][$i];
			$arr["paperId"]=$data["paperId"][$i];
			$arr["quantity"]=$data["quantity"][$i];
			$arr["unitPrice"]=$data["unitPrice"][$i];
			$arr["totalPrice"]=$data["unitPrice"][$i]*$data["quantity"][$i];
			$arr["size"]=$data["size"][$i];
			$arr["frameType"]=$data["frameType"][$i];
			$prdid[$i]=$this->photomodel->saveorders($arr);
		
		}
		
		for ($j=0;$j<count($prdid);$j++){
			$bill["orderId"]=$prdid[$j];
			$bill["billing_address1"]=$data["billing_address1"];
			$bill["billing_address2"]=$data["billing_address2"];
			$bill["billing_city"]=$data["billing_city"];
			$bill["billing_companyname"]=$data["billing_companyname"];
			$bill["billing_country"]=$data["billing_country"];
			$bill["billing_email"]=$data["billing_email"];
			$bill["billing_firstname"]=$data["billing_firstname"];
			$bill["billing_lastname"]=$data["billing_lastname"];
			$bill["billing_phone"]=$data["billing_phone"];
			$bill["billing_state"]=$data["billing_state"];
			$bill["billing_zip"]=$data["billing_zip"];
			
			$ship["orderId"]=$prdid[$j];
			$ship["shipping_address1"]=$data["shipping_address1"];
			$ship["shipping_address2"]=$data["shipping_address2"];
			$ship["shipping_city"]=$data["shipping_city"];
		//	$ship["shipping_companyname"]=$data["shipping_companyname"];
			$ship["shipping_country"]=$data["shipping_country"];
			$ship["shipping_email"]=$data["shipping_email"];
			$ship["shipping_firstname"]=$data["shipping_firstname"];
			$ship["shipping_lastname"]=$data["shipping_lastname"];
			$ship["shipping_phone"]=$data["shipping_phone"];
			$ship["shipping_state"]=$data["shipping_state"];
			$billingId=$this->photomodel->savebilling($bill);
			$shippingId=$this->photomodel->saveshipping($ship);
		}
		
			$userfirstname=$data["billing_firstname"];
			$userlastname=$data["billing_lastname"];
			$useremail=$data["billing_email"];
			$billing_address1=$data["billing_address1"];
			$billing_address2=$data["billing_address2"];
			$billing_companyname=$data["billing_companyname"];
			$billing_city=$data["billing_city"];
			$billing_country=$data["billing_country"];
			$billing_state=$data["billing_state"];
			$billing_zip=$data["billing_zip"];
			$billing_state=$data["billing_state"];
			$billing_phone=$data["billing_phone"];
			
			$shipping_firstname=$data["shipping_firstname"];
			$shipping_lastname=$data["shipping_lastname"];
			$shipping_address1=$data["shipping_address1"];
			$shipping_address2=$data["shipping_address2"];
			$shipping_city=$data["shipping_city"];
			$shipping_country=$data["shipping_country"];
			$shipping_state=$data["shipping_state"];
			$shipping_phone=$data["shipping_phone"];
			
			
	//To User	
			$path="";
			$msg="Hi $userfirstname,<br><br>";
			$msg.="Thank you for booking in Photostop.<br>";
			$msg.="Our representative will contact you soon for the delivery of the product you ordered.<br>";
			$msg.="For any queries ,please mail us at info@photostop.in or call to +91 9845128760<br>";
			
			
			$msg.="Thank you and Regards.<br>";
			$msg.="Team Photostop.<br>";
			//$send=$this->photo->sendmailattachments("info@photostop.in","Photostop",$useremail,"Booking-Acknowledgement",$msg,$path);
	//To Admin		
			$imageId="";
			$frameId="";
			$paperId="";
			$quantity="";
			$unitPrice="";
			$totalPrice="";
			$size="";
			$frameType="";
			
			$paper="";
			$image="";
			$frame="";
			
			$imageName="";
			$frameName="";
			$paperName="";
			$grndtotalprice="0";
			$num="0";
			
			$path="";
			$msg="Hi Admin,<br><br>";
			$msg.="A new user booked a product.<br>";
			$msg.="Following are the billing and shipping details.<br>";
			$msg.="Billing  name:-  $userfirstname $userlastname.<br>";
			$msg.="Billing  address1:- $billing_address1<br>";
			$msg.="Billing  address2:- $billing_address2<br>";
			$msg.="Billing  city:- $billing_city<br>";
			$msg.="Billing  state:- $billing_state<br>";
			$msg.="Billing  country:- $billing_country<br>";
			$msg.="Billing  pincode:- $billing_zip<br>";
			$msg.="Billing  email:- $useremail<br>";
			$msg.="Billing  contact number:- $billing_phone<br>";
			
			$msg.="Shipping  name:-  $shipping_firstname $shipping_lastname.<br>";
			$msg.="Shipping  address1:- $shipping_address1<br>";
			$msg.="Shipping  address2:- $shipping_address2<br>";
			$msg.="Shipping  city:- $shipping_city<br>";
			$msg.="Shipping  state:- $shipping_state<br>";
			$msg.="Shipping  country:- $shipping_country<br>";
			$msg.="Shipping  contact number:- $shipping_phone<br><br>";
			$msg.="Following are the product details.<br>";
			
		for ($i=0;$i<count($data["imageId"]);$i++){
			$imageId=$data["imageId"][$i];
			$frameId=$data["frameId"][$i];
			$paperId=$data["paperId"][$i];
			$quantity=$data["quantity"][$i];
			$unitPrice=$data["unitPrice"][$i];
			$totalPrice=$data["unitPrice"][$i]*$data["quantity"][$i];
			$size=$data["size"][$i];
			$frameType=$data["frameType"][$i];
			
			$grndtotalprice=$grndtotalprice+$totalPrice;
			
			$paper=$this->photomodel->getpaperbyid($paperId);
			$image=$this->photomodel->getimagebyid($imageId);
			$frame=$this->photomodel->getframebyid($frameId);
			
			$imageName=$image->row()->imageName;
			$frameName=$frame->row()->frameName;
			$paperName=$paper->row()->paperName;
			$num=$i+1;
			
			$msg.="Product No. $num<br>";
			$msg.="Image Name:- $imageName.<br>";
			$msg.="Frame Name:- $frameName.<br>";
			$msg.="Paper Name:- $paperName.<br>";
			$msg.="Size:- $size.<br>";
			$msg.="Frame Type:- $frameType.<br>";
			$msg.="Unit price:- $unitPrice.<br>";
			$msg.="Quantity:- $quantity.<br>";
			$msg.="Total Price:-Rs. $totalPrice.<br>";
			$msg.="<br>";
			
		}
			$msg.="Grand total price:-Rs.$grndtotalprice.<br><br>";
			
			$msg.="Regards.<br>";
			$msg.="info@photostop.in.<br>";
			//$send=$this->photo->sendmailattachments("info@photostop.in","Photostop-info","sreekumar@honeycombindia.net","User Booking info",$msg,$path);
			
			$this->session->set_userdata('grandtotalprice', $grndtotalprice);
			$this->session->set_userdata('orderidarray', $prdid);
		
	$value=array(
			'billingid'=>$billingId,
			'shippingid'=>$shippingId
		);
		echo json_encode($value);	
	}
}	