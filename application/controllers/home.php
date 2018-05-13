<?php
class home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photomodel','',true);
		$this->load->library(array('session','photo','email'));
	}
	function index()
	{
		$data="";
		$data["title"]=" Online Photo Prints |Photostop";
		$this->load->view('headerview',$data);
		$data["recent"]=$this->photomodel->getrecentimages();
		$data["faq"]=$this->photomodel->getfaq("buyer");
		$data["aboutus"]=$this->photomodel->getcontents("Aboutus");
		$this->load->view('home/homeview',$data);
		$this->load->view('footerview');
	}
	
	function contactus()
	
	{	
		
	}
	
	function search()
	{
		$data="";
		/*$key=$_GET["searchText"];
		$key=str_replace("'", "",$key); */
		$data["title"]="Search Results |Photostop";
		$this->load->view('headerview',$data);
		$data['category']=$this->photomodel->getparentcategories();
		//$data["gallery"]=$this->photomodel->getgallerybykeyword($key);
		$this->load->view('gallery/searchview',$data);
		$this->load->view('footerview');
	}
	
	function getpaginatedsearch()
	{
	$result_pag_data="";
		$page="";
		$p="";
		$key="";
			if($this->input->post('p'))
			{
			$page = $this->input->post('p');
			$key=$this->input->post('key');
			$key=str_replace("'", "",$key); 
			$key=str_replace("+", " ",$key); 
			//$cur_page = $page;
			$p=explode("=", $page);
			$page =$p[1]-1;
			$cur_page=$p[1];
			$per_page = 15;
			$previous_btn = true;
			$next_btn = true;
			$first_btn = true;
			$last_btn = true;
			$start = $page * $per_page;
			//echo $start;
			//include"db.php";
			
			//$query_pag_data = "SELECT msg_id,message from messages LIMIT $start, $per_page";
			//$result_pag_data = mysql_query($query_pag_data) or die('MySql Error' . mysql_error());
			
			$result_pag_data=$this->photomodel->getpaginatedsearch($key,$start,$per_page);
			$msg = "";
			$ext="";
			$n="";
			$extn="";
		//	while ($row = mysql_fetch_array($result_pag_data)) {
			if($result_pag_data->num_rows>0){
				foreach ($result_pag_data->result() as $rs){
						$ext=explode('.', $rs->fileName);
						$n=count($ext);
						$extn=$ext[$n-1];
					//$htmlmsg=htmlentities($row['message']);
					    $msg .= "<div class='listContent' style='height:220px;'><h1>" . $rs->imageName . "</h1> 
					    
					    <span class='imageHolder'><a href='".site_url()."products/productdetails/".$rs->imageId."'>
					    <img src='".base_url()."/uploaded_images/".$rs->fileId.".".$extn."'style='margin-left:auto;margin-right:auto; max-width:200px;'  height='135' />
					    </a></span>
					    <span class='rate'></span>
					     <a href='".site_url()."products/productdetails/".$rs->imageId."' style='float:left; margin-left:-13px;' class='buyBtn'>Add to Cart</a>
					    </div>";
					}
			}
			else{
				$msg .= "<span>Sorry!! No images available.</span>";
			}
					
			$msg = "<div class='data'><ul>" . $msg . "</ul></div>"; // Content for Data
			
			
			/* --------------------------------------------- */
		//	$query_pag_num = "SELECT COUNT(*) AS count FROM messages";
		//	$result_pag_num = mysql_query($query_pag_num);
		//	$row = mysql_fetch_array($result_pag_num);
		//	$count = $row['count'];]
			$total_count =$this->photomodel->getgallerybykeyword($key);
			$count=$total_count->num_rows;
			$no_of_paginations = ceil($count / $per_page);
			
			
			
			/* ---------------Calculating the starting and endign values for the loop----------------------------------- */
			if ($cur_page >= 7) {
			    $start_loop = $cur_page - 3;
			    if ($no_of_paginations > $cur_page + 3)
			        $end_loop = $cur_page + 3;
			    else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			        $start_loop = $no_of_paginations - 6;
			        $end_loop = $no_of_paginations;
			    } else {
			        $end_loop = $no_of_paginations;
			    }
			} else {
			    $start_loop = 1;
			    if ($no_of_paginations > 7)
			        $end_loop = 7;
			    else
			        $end_loop = $no_of_paginations;
			}
			/* ----------------------------------------------------------------------------------------------------------- */
			$msg .= "<div class='pagination' style='top:1430px;'><ul>";
			
			// FOR ENABLING THE FIRST BUTTON
			if ($first_btn&& $cur_page > 1) {
			    $msg .= "<li p='1' class='active'>First</li>";
			} else if ($first_btn) {
			    $msg .= "<li p='1' class='inactive'>First</li>";
			}
			
			// FOR ENABLING THE PREVIOUS BUTTON
			if ($previous_btn && $cur_page > 1) {
			    $pre = $cur_page - 1;
			    $msg .= "<li p='$pre' class='active'>Previous</li>";
			} else if ($previous_btn) {
			    $msg .= "<li class='inactive'>Previous</li>";
			}
			for ($i = $start_loop; $i <= $end_loop; $i++) {
			
			    if ($cur_page == $i)
			        $msg .= "<li p='$i' style='color:#fff;background-color:#CA0054;' class='active'>{$i}</li>";
			    else
			        $msg .= "<li p='$i' class='active'>{$i}</li>";
			}
			
			// TO ENABLE THE NEXT BUTTON
			if ($next_btn && $cur_page < $no_of_paginations) {
			    $nex = $cur_page + 1;
			    $msg .= "<li p='$nex' class='active'>Next</li>";
			} else if ($next_btn) {
			    $msg .= "<li class='inactive'>Next</li>";
			}
			
			// TO ENABLE THE END BUTTON
			if ($last_btn && $cur_page < $no_of_paginations) {
			    $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
			} else if ($last_btn) {
			    $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
			}
			$goto = "<input type='text' class='goto' size='1' style='margin-top:-1px;margin-left:60px;'/>&nbsp;<input type='button' id='go_btn_search' class='go_btn_search' value='Go'/>";
			$total_string = "<span class='total' a='$no_of_paginations'>Page <b>" . $cur_page . "</b> of <b>$no_of_paginations</b></span>";
			$msg = $msg . "</ul>" . $goto . $total_string . "</div>";  // Content for pagination
			$value=array(
				'result'=>$msg,
				
				);
				echo json_encode($value);
			}
	}
	function aboutus()
	
	{	
		$data="";
		$data["title"]="Aboutus";
		$this->load->view('headerview',$data);
		$this->load->view('home/aboutusview');
		$this->load->view('footerview');
	}
	
	function terms()
	
	{	
		$data="";
		$data["title"]="Terms and Conditions-Photostop";
		$data["terms"]=$this->photomodel->getcontents("Terms");
		$this->load->view('headerview',$data);
		$this->load->view('home/termsview',$data);
		$this->load->view('footerview');
	}
	function register()
	{	
		$data="";
		$data["title"]="Register";
		$this->load->view('headerview',$data);
		$data["country"]=$this->photo->getallcountries();
		$this->load->view('home/registerview',$data);
		$this->load->view('footerview');
	}
	function photographers()
	{
		$data="";
		$data["title"]="photographers";
		$data["faq"]=$this->photomodel->getfaq("photographer");
		$this->load->view('headerview',$data);
		$data["artist"]=$this->photomodel->getallartistimages();
		$data['category']=$this->photomodel->getparentcategories();
		$this->load->view('gallery/artistview',$data);
		$this->load->view('footerview');
	}
	function getphotographerspaginatedgallery()
	{
	$result_pag_data="";
		$page="";
		$p="";
			if($this->input->post('p'))
			{
			$page = $this->input->post('p');
			//$cur_page = $page;
			$p=explode("=", $page);
			$page =$p[1]-1;
			$cur_page=$p[1];
			$per_page = 15;
			$previous_btn = true;
			$next_btn = true;
			$first_btn = true;
			$last_btn = true;
			$start = $page * $per_page;
			//echo $start;
			//include"db.php";
			
			//$query_pag_data = "SELECT msg_id,message from messages LIMIT $start, $per_page";
			//$result_pag_data = mysql_query($query_pag_data) or die('MySql Error' . mysql_error());
			$result_pag_data =$this->photomodel->getpaginatedaristimages($start,$per_page);
			$msg = "";
			$ext="";
			$n="";
			$extn="";
		//	while ($row = mysql_fetch_array($result_pag_data)) {
			if ($result_pag_data->num_rows>0){
				foreach ($result_pag_data->result() as $rs){
						$ext=explode('.', $rs->fileName);
						$n=count($ext);
						$extn=$ext[$n-1];
					//$htmlmsg=htmlentities($row['message']);
					    $msg .= "<div class='listContent' style='height:220px;'><h1>" . $rs->photographerFullName . "</h1> 
					    
					    <span class='imageHolder'><a href='".site_url()."products/productdetails/".$rs->imageId."'>
					    <img src='".base_url()."/uploaded_images/".$rs->fileId.".".$extn."'style='margin-left:auto;margin-right:auto; max-width:200px;'  height='135' />
					    </a></span>
					    <span class='rate'></span>
					     <a href='".site_url()."products/productdetails/".$rs->imageId."' style='float:left; margin-left:-13px;' class='buyBtn'>Add to Cart</a>
					    </div>";
					}
			}
			else{
				$msg .= "<span>Sorry!! No images available.";
			}
					
			$msg = "<div class='data'><ul>" . $msg . "</ul></div><br><br>"; // Content for Data
			
			
			/* --------------------------------------------- */
		//	$query_pag_num = "SELECT COUNT(*) AS count FROM messages";
		//	$result_pag_num = mysql_query($query_pag_num);
		//	$row = mysql_fetch_array($result_pag_num);
		//	$count = $row['count'];]
			$total_count =$this->photomodel->getallartistimages();
			$count=$total_count->num_rows;
			$no_of_paginations = ceil($count / $per_page);
			
			
			
			/* ---------------Calculating the starting and endign values for the loop----------------------------------- */
			if ($cur_page >= 7) {
			    $start_loop = $cur_page - 3;
			    if ($no_of_paginations > $cur_page + 3)
			        $end_loop = $cur_page + 3;
			    else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			        $start_loop = $no_of_paginations - 6;
			        $end_loop = $no_of_paginations;
			    } else {
			        $end_loop = $no_of_paginations;
			    }
			} else {
			    $start_loop = 1;
			    if ($no_of_paginations > 7)
			        $end_loop = 7;
			    else
			        $end_loop = $no_of_paginations;
			}
			/* ----------------------------------------------------------------------------------------------------------- */
			$msg .= "<div class='pagination' style='top:1430px;'><ul>";
			
			// FOR ENABLING THE FIRST BUTTON
			if ($first_btn&& $cur_page > 1) {
			    $msg .= "<li p='1' class='active'>First</li>";
			} else if ($first_btn) {
			    $msg .= "<li p='1' class='inactive'>First</li>";
			}
			
			// FOR ENABLING THE PREVIOUS BUTTON
			if ($previous_btn && $cur_page > 1) {
			    $pre = $cur_page - 1;
			    $msg .= "<li p='$pre' class='active'>Previous</li>";
			} else if ($previous_btn) {
			    $msg .= "<li class='inactive'>Previous</li>";
			}
			for ($i = $start_loop; $i <= $end_loop; $i++) {
			
			    if ($cur_page == $i)
			        $msg .= "<li p='$i' style='color:#fff;background-color:#CA0054;' class='active'>{$i}</li>";
			    else
			        $msg .= "<li p='$i' class='active'>{$i}</li>";
			}
			
			// TO ENABLE THE NEXT BUTTON
			if ($next_btn && $cur_page < $no_of_paginations) {
			    $nex = $cur_page + 1;
			    $msg .= "<li p='$nex' class='active'>Next</li>";
			} else if ($next_btn) {
			    $msg .= "<li class='inactive'>Next</li>";
			}
			
			// TO ENABLE THE END BUTTON
			if ($last_btn && $cur_page < $no_of_paginations) {
			    $msg .= "<li p='$no_of_paginations' class='active'>Last</li>";
			} else if ($last_btn) {
			    $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
			}
			$goto = "<input type='text' class='goto' size='1' style='margin-top:-1px;margin-left:60px;'/>&nbsp;<input type='button' id='go_btn_artists' class='go_btn_artists' value='Go'/>";
			$total_string = "<span class='total' a='$no_of_paginations'>Page <b>" . $cur_page . "</b> of <b>$no_of_paginations</b></span>";
			$msg = $msg . "</ul>" . $goto . $total_string . "</div>";  // Content for pagination
			$value=array(
				'result'=>$msg,
				
				);
				echo json_encode($value);
			}
	}
	function artistsample()
	{
		$data="";
		$data["title"]="Artists-Sample";
		$this->load->view('headerview',$data);
		$this->load->view('home/artistsampleview');
		$this->load->view('footerview');
	}
	
	function faq()
	{
		$data="";
		$data["title"]="Ask the Expert";
		$this->load->view('headerview',$data);
		$data["photo_faq"]=$this->photomodel->getfaq("photographer");
		$data["user_faq"]=$this->photomodel->getfaq("buyer");
		$this->load->view('home/faqview',$data);
		$this->load->view('footerview');
	}
	
	function community()
	{
		$data="";
		$data["title"]="Community";
		$this->load->view('headerview',$data);
		//$data["artist"]=$this->photomodel->getallartistimages();
		$this->load->view('home/communityview',$data);
		$this->load->view('footerview');
	}
	
	function myprofile()
	{
		$data="";
		if ($this->session->userdata('userId')!=null){
			$data["title"]="My Profile";
			$this->load->view('headerview',$data);
			$data["profile"]=$this->photomodel->getprofile($this->session->userdata('userId'),$this->session->userdata('usertype'));
			$data["country"]=$this->photo->getallcountries();
			$this->load->view('home/profileview',$data);
			$this->load->view('footerview');
		}else{
			 header( 'Location: '.site_url() ) ;
		}	
	}
	
	
	function uploadnew()
	{
		$data="";
		if ($this->session->userdata('userId')!=null){
			$data["title"]="Upload";
			$this->load->view('headerview',$data);
			$data['category']=$this->photomodel->getallcategories();
			$this->load->view('home/uploadview',$data);
			$this->load->view('footerview');
		}else{
			 header( 'Location: '.site_url() ) ;
		}	
	}
	function checksername()
	{
		$un=trim($this->input->post("userName"));
		$edit=$this->input->post("edit");
		
		$result="";
		
			$que="";
		if(strtolower($edit)!=strtolower($un)){
			$que=$this->photomodel->testuserid($un);
			if ($que==0){
				$que=$this->photomodel->testartistid($un);
			}
		}
		
		if($que>0){
			$result="false";
		}else{
			$result="true";
		}
		echo $result;
	}
	function submitregister()
	{
		$type=$this->input->post('type');
		$user=$this->input->post();
		$data="";
		$artist="";
		$res="";
		$send="";
		$msg="";
		$to="";
		$path="";
		foreach ($user as $k=>$v){
			if ($k!="pwd"&&$k!="type")
			$data[$k]=$v;
		}
		
		
		
		if ($type=="artist"){
			$artist["photographerFullName"]=$data["userFullName"];
			$artist["photographerUserName"]=$data["userName"];
			$artist["photographerPassword"]=$data["password"];
			$artist["photographerAddress"]=$data["address"];
			$artist["photographerEmail"]=$data["Email"];
			$artist["photographerCity"]=$data["city"];
			$artist["photographerState"]=$data["state"];
			$artist["photographerCountry"]=$data["country"];
			$artist["photographerPhoneNo"]=$data["phoneNo"];
			$artist["registerStatus"]="notverified";
			$res=$this->photomodel->saveartist($artist);
		if ($res>0){
			$photographerUserName=$artist["photographerUserName"];
			$photographerPassword=$artist["photographerPassword"];
			$photographerFullName=$artist["photographerFullName"];
			$to=$artist["photographerEmail"];
			$msg="Hi $photographerFullName,<br><br>";
			$msg.="Welcome to Photostop! Your one stop studio.<br>";
			$msg.="You have successfully created/updated your account in Photostop as a Photographer. You can now fruitfully make use of our website to <br>";
			$msg.="sell your amazing photographs. Please follow the link below to verify your account.<br><br>";
			$msg.="Your login details are given below.<br><br>";
			$msg.="User name :.$photographerUserName<br>";
			$msg.="Password :.$photographerPassword<br>";
			$msg.="<a href='http://photostop.in/home/verify?uid=$res.&type=artist'>Click here to verify your account.</a><br><br>";
			$msg.="Thank you and Regards.<br>";
			$msg.="Team Photostop.<br>";
		//	$send=$this->photo->sendmail("info@photostop.in","Photostop",$to,"Register-Acknowledgement",$msg);
		$send=$this->photo->sendmailattachments("info@photostop.in","Photostop-info",$to,"Register-Acknowledgement",$msg,$path);
		}
		}
		else{
			$data["registerStatus"]="notverified";
			$res=$this->photomodel->saveuser($data);
			if ($res>0){
				$userName=$data["userName"];
				$password=$data["password"];
				$userFullName=$data["userFullName"];
				$to=$data["Email"];
				$msg="Hi $userFullName,<br><br>";
				$msg.="Welcome to Photostop! Your one stop studio.<br>";
				$msg.="You have successfully created/updated your account in Photostop as a Buyer. You can now fruitfully make use of our website to buy .<br>";
				$msg.="amazing framed photographs. Please follow the link below to verify your account..<br>";
				$msg.="Your login details are given below.<br><br>";
				$msg.="User name :$userName<br>";
				$msg.="Password :$password<br>";
				$msg.="<a href='http://photostop.in/home/verify?uid=$res.&type=user'>Click here to verify your account.</a><br><br>";
				$msg.="Thank you and Regards.<br>";
				$msg.="Team Photostop.<br>";
			//	$send=$this->photo->sendmail("info@photostop.in","Photostop",$to,"Register-Acknowledgement",$msg);
				$send=$this->photo->sendmailattachments("info@photostop.in","Photostop-info",$to,"Register-Acknowledgement",$msg,$path);
				
				/*$userdata=array(				
				'uname'=>$userName,
				'userFullName'=>$userFullName,
				'userId'=>$res,
				'usertype'=>"user"				
			);
			$this->session->set_userdata($userdata);*/
			}
			}
		
		
		
		$value=array(
			'result'=>$res
		);
		echo json_encode($value);
	}
	
	/*function updateprofile(){
		$user=$this->input->post();
		$data="";
		$update="";
		$artist="";
		foreach ($user as $k=>$v){
				if ($k!="pwd"&&$k!="type")
				$data[$k]=$v;
			}
		if ($data["type"]=="user")	{
			$update=$this->photomodel->updateuser($data);
		}
		else{
			$artist["photographerId"]=$data["userId"];
			$artist["photographerFullName"]=$data["userFullName"];
			$artist["photographerEmail"]=$data["Email"];
			$artist["photographerPhoneNo"]=$data["phoneNo"];
			$artist["photographerAddress"]=$data["address"];
			$artist["photographerCity"]=$data["city"];
			$artist["photographerState"]=$data["state"];
			$artist["photographerCountry"]=$data["country"];
			$artist["photographerUserName"]=$data["userName"];
			$artist["photographerPassword"]=$data["password"];
			$update=$this->photomodel->updateartist($artist);
		}
	}*/
	
	
	function verify()
	{
		$uid=$_GET["uid"];
		$type=$_GET["type"];
		$set="";
		$user=$this->photomodel->getuserverification($uid,$type);
		if ($user->num_rows>0){
			if($type=="user"){
			
				$userdata=array(				
					'uname'=>$user->row()->userName,
					'userFullName'=>$user->row()->userFullName,
					'userId'=>$uid,
					'usertype'=>"user"				
				);
			}
			else{
				$userdata=array(				
					'uname'=>$user->row()->photographerUserName,
					'userFullName'=>$user->row()->photographerFullName,
					'userId'=>$user->row()->photographerId,
					'usertype'=>"artist"				
				);
			}
			$set=$this->photomodel->setuserverification($uid,$type);
			$this->session->set_userdata($userdata);
			 header( 'Location: '.site_url().'home/dashboard' ) ;
		}
		else{
			 header( 'Location: '.site_url() ) ;
		}
		
	}
	
	function updateprofile()
	{
		$type=$this->input->post('type');
		$user=$this->input->post();
		$data="";
		$artist="";
		$res="";
		$send="";
		$msg="";
		foreach ($user as $k=>$v){
			if ($k!="pwd"&&$k!="type")
			$data[$k]=$v;
		}
		
		
		
		if ($type=="artist"){
			$artist["photographerId"]=$data["userId"];
			$artist["photographerFullName"]=$data["userFullName"];
			$artist["photographerUserName"]=$data["userName"];
			$artist["photographerPassword"]=$data["password"];
			$artist["photographerAddress"]=$data["address"];
			$artist["photographerEmail"]=$data["Email"];
			$artist["photographerCity"]=$data["city"];
			$artist["photographerState"]=$data["state"];
			$artist["photographerCountry"]=$data["country"];
			$artist["photographerPhoneNo"]=$data["phoneNo"];
			$res=$this->photomodel->updateartist($artist);
		
		}
		else{
			$res=$this->photomodel->updateuser($data);
			
			}
		
		
		
		$value=array(
			'result'=>$res
		);
		echo json_encode($value);
	}
	
	
	function submitcontact()
	{
		$contactname=$this->input->post('contactname');
		$contactemail=$this->input->post('contactemail');
		$contactcomment=$this->input->post('contactcomment');
		$path="";
		$res="";
		$r="";
		$msg="Hi Admin,<br><br>";
		$msg.="A new contact request has submitted.<br>";
		$msg.="Following are the details.<br><br>";
		$msg.="Contact Name:- $contactname.<br>";
		$msg.="Contact Email:- $contactemail.<br>";
		$msg.="Contact Comments:- $contactcomment.<br><br>";
		$msg.="Regards<br>";
		$msg.="Photostop-info<br>";
		//$res=$this->photo->sendmail($contactemail,$contactname,"sibi@inertiainc.co.in","Contactus",$contactcomment);
		$res=$this->photo->sendmailattachments("info@photostop.in","Photostop-info","sreekumar@honeycombindia.net","Contactus Submitted",$msg,$path);
		if($res){
			$r=1;
		}
		else{
			$r=0;
		}
		$value=array(
			'result'=>$r
		);
		echo json_encode($value);
	}
	
	function submitsample()
	{
		$data="";
		$att="";
		$attachment=array();
		$attchmnt="";
		$sample=$this->input->post();
		$i="0";
		foreach ($sample as $k=>$v){
			if ($k=="contactcomment"||$k=="contactemail"||$k=="contactname"){
				$data[$k]=$v;
			}
			else{
				$att=explode('_', $k);
				if (isset($att["3"])){
					if ($att["3"]=="tmpname"){
						$attachment[$i]=$v;
					}
				}
			}
			
			$i++;
		}
		$contactemail=$data["contactemail"];
		$contactname=$data["contactname"];
		$contactcomment=$data["contactcomment"];
		$attchmnt=implode(',', $attachment);
		
		$msg="Hi Admin,<br><br>";
		$msg.="A sample photos has been submitted.<br>";
		$msg.="Following are the details.<br><br>";
		$msg.="Artist Name:- $contactname.<br>";
		$msg.="Artist Email:- $contactemail.<br>";
		$msg.="Artist Comments:- $contactcomment.<br>";
		$msg.="Also please find the attached sample images of artist.<br><br>";
		$msg.="Regards<br>";
		$msg.="Photostop-info<br>";
		
		$res=$this->photo->sendmailattachments("info@photostop.in","Photostop-info","sreekumar@honeycombindia.net","Photostop-Photographer-Sample",$msg,$attchmnt);
	
		
		$value=array(
			'result'=>$res
		);
		echo json_encode($value);
	}
	
	function dashboard()
	{
		$data="";
		if ($this->session->userdata('userId')!=null){
			$data["title"]="Userdashboard";
			$data["purchased"]=$this->photomodel->getpurchaseddetails($this->session->userdata('userId'),$this->session->userdata('userType'));
			$this->load->view('headerview',$data);
			$this->load->view('home/userdashboardview',$data);
			$this->load->view('footerview');
		}
		else{
			 header( 'Location: '.site_url() ) ;
		}
		
	}
	
	function deleteimage()
	{
		$imageId=$this->input->post('imageId');
		$ret=$this->photomodel->deleteimagebyid($imageId);
		$value=array(
			'result'=>$ret
		);
		echo json_encode($value);
	}
	/*function comingsoon()
	{
		$this->load->view('comingsoon');
	}*/
}	