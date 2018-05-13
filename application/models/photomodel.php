<?php
class photomodel extends CI_Model{
	function getgallery()
	{
		$this->db->order_by("imageId","desc"); 
		$this->db->where('imageStatus','approved');
		$query=$this->db->get('photo_photographers_image_mapping');
		return $query;
	}
	function getpaginatedgallery($start,$per_page)
	{
		//$this->db->limit($per_page,$start);
		//$this->db->order_by("imageId","desc"); 
	//	$this->db->where('imageStatus','approved');
	//	$query=$this->db->get('photo_photographers_image_mapping');
		
		$sql="SELECT * FROM photo_photographers_image_mapping WHERE 
	    imageStatus='approved' ORDER BY imageId DESC LIMIT $start,$per_page";
		$query=$this->db->query($sql);
		return $query;
	}
	function getgallerybykeyword($key)
	{
		$sql="SELECT a.* FROM photo_photographers_image_mapping a 
		LEFT JOIN photo_photographers b ON a.uploadedId=b.photographerId  WHERE 
	    a.imageName LIKE '%$key%' 
	    OR a.imageDescription LIKE '%$key%'
	    OR a.imageTags LIKE '%$key%'
	     OR b.photographerFullName LIKE '%$key%'
	     AND a.imageStatus='approved'";
		
		$query=$this->db->query($sql);
		return $query;
	}
	function getpaginatedsearch($key,$start,$per_page)
	{
		$sql="SELECT a.* FROM photo_photographers_image_mapping a 
		LEFT JOIN photo_photographers b ON a.uploadedId=b.photographerId WHERE 
	    a.imageName LIKE '%$key%' 
	    OR a.imageDescription LIKE '%$key%'
	    OR a.imageTags LIKE '%$key%'
	     OR b.photographerFullName LIKE '%$key%'
	      AND a.imageStatus='approved'
	     ORDER BY imageId DESC LIMIT $start,$per_page";
		
		$query=$this->db->query($sql);
		return $query;
	}
	function getframegallery()
	{
		$this->db->order_by("frameId","desc"); 
		$query=$this->db->get('photo_frames');
		return $query;
	}
	function getallcategories()
	{
		$query=$this->db->get('photo_categories');
		return $query;
	}
	function getparentcategories()
	{
		$this->db->where('parentCategoryId','0');
		$query=$this->db->get('photo_categories');
		return $query;
	}
	function getcategorybyparentid($id)
	{
		$this->db->where('parentCategoryId',$id);
		$query=$this->db->get('photo_categories');
		return $query;
	}
	function getimagesbycategoryid($categoryid)
	{
		$this->db->like('categoryId', $categoryid); 
		$query=$this->db->get('photo_photographers_image_mapping');
		return $query;
	}
	
	function getpaginatedimagesbycategoryid($categoryid,$start,$per_page)
	{
		$this->db->limit($per_page,$start);
		$this->db->order_by("imageId","desc"); 
		$this->db->like('categoryId', $categoryid); 
		$query=$this->db->get('photo_photographers_image_mapping');
		return $query;
	}
	function getpapersgallery()
	{
		$query=$this->db->get('photo_papers');
		return $query;
	}
	function getauthentication($uname,$pwd)
	{
		$this->db->where('userName',$uname);
		$this->db->where('password',$pwd);
		$query=$this->db->get('photo_users');
		return $query;
	}
	function getphotoauthentication($uname,$pwd)
	{
		$this->db->where('photographerUserName',$uname);
		$this->db->where('photographerPassword',$pwd);
		$query=$this->db->get('photo_photographers');
		return $query;
	}
	function getimagebyid($id)
	{
		$this->db->where('imageId',$id);
		$query=$this->db->get('photo_photographers_image_mapping');
		return $query;
	}
	function deleteimagebyid($id)
	{
		$this->db->where('imageId',$id);
		$this->db->delete('photo_photographers_image_mapping');
		return $id;
	}
	function getartistdetailsbyimage($uid,$utp)
	{
		$sql="";
		if($utp=="photographer"){
			$sql="SELECT photographerFullName as artist FROM photo_photographers WHERE photographerId='$uid'";
		}
		else{
			$sql="SELECT adminFullName as artist FROM photo_admin_login WHERE adminId='$uid'";
		}
		$query=$this->db->query($sql);
		return $query;
	}
	function getsameproductsofartist($uid,$utp,$id)
	{
		$this->db->where('uploadedId',$uid);
		$this->db->where('uploadedBy',$utp);
		$this->db->where('imageStatus','approved');
		$this->db->where('imageId !=',$id);
		$query=$this->db->get('photo_photographers_image_mapping');
		return $query;
	}
	
	function getuploadedby($id)
	{
		$type="";
		$uploadedid="";
		$ret="";
		$this->db->where('imageId',$id);
		$query=$this->db->get('photo_photographers_image_mapping');
		$type=$query->row()->uploadedBy;
		$uploadedid=$query->row()->uploadedId;
		if ($type=="photographer"){
			$sql="SELECT photographerFullName as artist FROM photo_photographers WHERE photographerId='$uploadedid'";
			$ret=$this->db->query($sql);
		}
		else{
			$sql="SELECT adminFullName	 as artist FROM photo_admin_login WHERE adminId='$uploadedid'";
			$ret=$this->db->query($sql);
		}
		return $ret;
	}
	function getrecentimages()
	{
		$this->db->where('imageStatus','approved');
		$this->db->order_by("imageId","desc"); 
		$this->db->limit(4);
		$query=$this->db->get('photo_photographers_image_mapping');
		return $query;
	}
	function getfaq($module)
	{
		$this->db->where('display','true');
		$this->db->where('displayModule',$module);
		$query=$this->db->get('photo_faq');
		return $query;
	}
	function getcontents($name)
	{
		$this->db->where('contentName',$name);
		$query=$this->db->get('photo_contents');
		return $query;
	}
	function testuserid($un)
	{
		$this->db->where('userName',$un);
		$query=$this->db->get('photo_users');
		return $query->num_rows;
	}
	function testartistid($un)
	{
		$this->db->where('photographerUserName',$un);
		$query=$this->db->get('photo_photographers');
		return $query->num_rows;
	}
	function saveartist($artist)
	{
		$this->db->insert('photo_photographers',$artist);
		return $this->db->insert_id();
	}
	function saveuser($data)
	{
		$this->db->insert('photo_users',$data);
		return $this->db->insert_id();
	}
	
	function updateartist($artist)
	{
		$this->db->where('photographerId',$artist['photographerId']);
		$this->db->update('photo_photographers',$artist);
		//return $artist['photographerId'];
		return $this->db->affected_rows();
	}
	function updateuser($data)
	{
		$this->db->where('userId',$data['userId']);
		$this->db->update('photo_users',$data);
		//return $data['userId'];
		return $this->db->affected_rows();
	}
	function getprofile($userId,$usertype)
	{
		$query="";
		if ($usertype=="artist"){
			$this->db->where('photographerId',$userId);
			$query=$this->db->get('photo_photographers');
		}
		else{
			$this->db->where('userId',$userId);
			$query=$this->db->get('photo_users');
		}
		return $query;
	}
	
	function getuserverification($uid,$type)
	{
		$query="";
		if ($type=="artist"){
			$this->db->where('photographerId',$uid);
			$this->db->where('registerStatus','notverified');
			$query=$this->db->get('photo_photographers');
		}
		else{
			$this->db->where('userId',$uid);
			$this->db->where('registerStatus','notverified');
			$query=$this->db->get('photo_users');
		}
		return $query;
	}
	
	function setuserverification($uid,$type)
	{
		$data["registerStatus"]="verified";
		if ($type=="artist"){
			$this->db->where('photographerId',$uid);
			$this->db->update('photo_photographers',$data);
		}
		else{
			$this->db->where('userId',$uid);
			$this->db->update('photo_users',$data);
		}
		return $uid;
	}
	
	function getallframes()
	{
		$query=$this->db->get('photo_frames');
		return $query;
	}
	function getallpapers()
	{
		$query=$this->db->get('photo_papers');
		return $query;
	}
	function getframebyid($frameid)
	{
		$this->db->where('frameId',$frameid);
		$query=$this->db->get('photo_frames');
		return $query;
	}
	function getpaperbyid($paperid)
	{
		$this->db->where('paperId',$paperid);
		$query=$this->db->get('photo_papers');
		return $query;
	}
	function getcartedproducts($userId,$userType)
	{
		$this->db->where('userId',$userId);
		$this->db->where('userType',$userType);
		$query=$this->db->get('photo_cart');
		return $query;
	}
	function addtocart($data)
	{
		$this->db->insert('photo_cart',$data);
		return $this->db->insert_id();
	}
	function removefromcart($cartId)
	{
		$this->db->where('cartId',$cartId);
		$this->db->delete('photo_cart');
		return $cartId;
	}
	function getallartistimages()
	{
		$sql="SELECT a.*,b.photographerFullName FROM photo_photographers_image_mapping a INNER JOIN
		photo_photographers b ON a.uploadedId=b.photographerId WHERE a.uploadedBy='photographer' AND a.imageStatus='approved'";
		$query=$this->db->query($sql);
		return $query;
	}
	function getpaginatedaristimages($start,$per_page)
	{
		$sql="SELECT a.*,b.photographerFullName FROM photo_photographers_image_mapping a INNER JOIN
		photo_photographers b ON a.uploadedId=b.photographerId WHERE a.uploadedBy='photographer'AND a.imageStatus='approved'
		 ORDER BY b.photographerId DESC LIMIT $start,$per_page";
		$query=$this->db->query($sql);
		return $query;
	}
	function getmyuploads($userId)
	{
		$this->db->where('uploadedId',$userId);
		$this->db->where('uploadedBy','photographer');
		$query=$this->db->get('photo_photographers_image_mapping');
		return $query;
	}
	function getpurchaseddetails($userId,$userType)
	{
		$sql="SELECT a.imageName,a.imageResolution,
		b.frameName,c.paperName,c.paperPrice,d.deliveryStatus 		 
		FROM photo_photographers_image_mapping a INNER JOIN
		photo_orders_mapping d ON a.imageId=d.imageId 
		INNER JOIN photo_frames b ON d.frameId=b.frameId
		INNER JOIN photo_papers c ON d.paperId=c.paperId
		WHERE d.userType='$userType' AND d.userId='$userId'";
		$query=$this->db->query($sql);
		return $query;
	}
	function getshippingdetails()
	{
		$query=$this->db->get('photo_shippers');
		return $query;
	}
	function saveorders($data)
	{
		$rand = strtoupper(substr(uniqid(sha1(time().rand())),0,4));
		$data['orderNo'] = $today.$rand;
		$this->db->insert('photo_orders_mapping',$data);
		return $this->db->insert_id();
	}
	function updateorders($sts)
	{
		$this->db->where('orderId',$sts["orderId"]);
		$this->db->update('photo_orders_mapping',$sts);
		return $sts["orderId"];
	}
	function savebilling($bill)
	{
		$this->db->insert('photo_bill',$bill);
		return $this->db->insert_id();
	}
	function saveshipping($ship)
	{
		$this->db->insert('photo_shipping',$ship);
		return $this->db->insert_id();
	}
	
	function getbilling($billingId)
	{
		$this->db->where('billId',$billingId);
		$query=$this->db->get('photo_bill');
		return $query;
	}
	
	function getshipping($shippingId)
	{
		$this->db->where('shippingId',$shippingId);
		$query=$this->db->get('photo_shipping');
		return $query;
	}
	
	function saveuploadedimage($data)
	{
		$this->db->insert('photo_photographers_image_mapping',$data);
		return $this->db->insert_id();
	}
}