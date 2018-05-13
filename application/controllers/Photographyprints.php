<?php
class Photographyprints extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('photomodel','',true);
		$this->load->library(array('session','photo'));
	}
	function index()
	{
		$data="";
		$data["title"]=" Online Photo Prints for Sale |Photostop";
		$this->load->view('headerview',$data);
		$data["gallery"]=$this->photomodel->getgallery();
		$data['category']=$this->photomodel->getparentcategories();
		$this->load->view('gallery/galleryview',$data);
		$this->load->view('footerview');
	}
	
	function getpaginatedgallery()
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
			$result_pag_data =$this->photomodel->getpaginatedgallery($start,$per_page);
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
			$total_count =$this->photomodel->getgallery();
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
			$goto = "<input type='text' class='goto' size='1' style='margin-top:-1px;margin-left:60px;'/>&nbsp;<input type='button' id='go_btn' class='go_button' value='Go'/>";
			$total_string = "<span class='total' a='$no_of_paginations'>Page <b>" . $cur_page . "</b> of <b>$no_of_paginations</b></span>";
			$msg = $msg . "</ul>" . $goto . $total_string . "</div>";  // Content for pagination
			$value=array(
				'result'=>$msg,
				
				);
				echo json_encode($value);
			}

		
	}
	
	function getphotobycategory(){
		$categoryid=$_GET["catId"];
		$data="";
		$data["title"]=" Photo Categories |Photostop";
		$this->load->view('headerview',$data);
		$data['category']=$this->photomodel->getparentcategories();
		$this->load->view('gallery/categoryview',$data);
		$this->load->view('footerview');
	}
	
function getpaginatedcategory()
	{
	$result_pag_data="";
		$page="";
		$p="";
		$categoryid="";
			if($this->input->post('p'))
			{
			$page = $this->input->post('p');
			$categoryid=$this->input->post('categoryid');
			$categoryid=str_replace("'", "",$categoryid); 
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
			
			$result_pag_data=$this->photomodel->getpaginatedimagesbycategoryid($categoryid,$start,$per_page);
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
			$total_count =$this->photomodel->getimagesbycategoryid($categoryid);
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
			$goto = "<input type='text' class='goto' size='1' style='margin-top:-1px;margin-left:60px;'/>&nbsp;<input type='button' id='go_btn_category' class='go_btn_category' value='Go'/>";
			$total_string = "<span class='total' a='$no_of_paginations'>Page <b>" . $cur_page . "</b> of <b>$no_of_paginations</b></span>";
			$msg = $msg . "</ul>" . $goto . $total_string . "</div>";  // Content for pagination
			$value=array(
				'result'=>$msg,
				
				);
				echo json_encode($value);
			}
	}
	
}	