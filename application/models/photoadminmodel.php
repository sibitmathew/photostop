<?php
class photoadminmodel extends CI_Model{
	
function getadminauthentication($uname,$pwd)
	{
		$this->db->where('userName',$uname);
		$this->db->where('password',$pwd);
		$query=$this->db->get('photo_admin_login');
		return $query;
	}	
	function getalladminusers()
	{
		$this->db->where('status','1');
		$query=$this->db->get('photo_admin_login');
		return $query;
	}
	function getpwd($userName)
	{
		$this->db->where('userName',$userName);
		$query=$this->db->get('photo_admin_login');
		return $query;
	}
	function getadminpermissions($roleId,$moduleId)
	{
		$this->db->where('roleId',$roleId);
		$this->db->where('moduleId',$moduleId);
		$query=$this->db->get('photo_admin_permission');
		return $query;
	}
	
	function testuserid($un)
	{
		$sql="SELECT * FROM photo_admin_login WHERE userName='$un'";
		$query=$this->db->query($sql);
		return $query->num_rows;
		/*$this->db->where('userName',$un);
		$query=$this->db->get('photo_admin_login');
		return $this->db->num_rows;*/
	}
	function submitadminuser($data)
	{
		$id=$data['adminId'];
		if($id==""){
			$this->db->insert('photo_admin_login',$data);
			$id=$this->db->insert_id();
		}
		else{
			$this->db->where('adminId',$id);
			$this->db->update('photo_admin_login',$data);
		}
		return $id;
	}
	function getadminuserbyid($adminId)
	{
		$this->db->where('adminId',$adminId);
		$query=$this->db->get('photo_admin_login');
		return $query;
	}
	function deleteadminuser($adminId)
	{
		$this->db->where('adminId',$adminId);
		$this->db->delete('photo_admin_login');
		return 1;
	}
	function getinactiveroleusers($roleId)
	{
		$this->db->where('roleId',$roleId);
		$query=$this->db->get('photo_admin_login');
		return $query;
	}
	function setinactiveroleusers($adminId)
	{
		$arr['roleId']="0";
		$this->db->where('adminId',$adminId);
		$this->db->update('photo_admin_login',$arr);
		return $adminId;
	}
	function getadminmodules()
	{
		$query=$this->db->get('photo_admin_modules');
		return $query;
	}
	function getadminroles()
	{
		$query=$this->db->get('photo_admin_roles');
		return $query;
	}
	function getpermittedadminroles()
	{
		$this->db->where('roleStatus','1');
		$query=$this->db->get('photo_admin_roles');
		return $query;
	}
	function saverole($data)
	{
		$this->db->insert("photo_admin_roles",$data);
			$id=$this->db->insert_id();
			return $id;
	}
	function getrolebyid($roleId)
	{
		$this->db->where('roleId',$roleId);
		$query=$this->db->get('photo_admin_roles');
		return $query;
	}
	function setblank($roleId)
	{
		$i="";
		$id="";
		$data['roleId']=$roleId;
		$data['permissionStatus']=1;
		$data['view']=0;
		$data['add']=0;
		$data['edit']=0;
		$data['delete']=0;
		for ($i=0;$i<7;$i++){
			$data['moduleId']=$i+1;
			$this->db->insert("photo_admin_permission",$data);
			$id=$this->db->insert_id();
		}
		return $id;
	}
	function savepermission($rid,$mid,$typ)
	{
		
		if($typ=='view'){$data1['view']=1;}
		if($typ=='add'){$data1['add']=1;}
		if($typ=='edit'){$data1['edit']=1;}
		if($typ=='delete'){$data1['delete']=1;}
		$data1['permissionStatus']=1;
		$this->db->where("roleId",$rid);
		$this->db->where("moduleId",$mid);
		$this->db->update("photo_admin_permission",$data1);
		return $this->db->affected_rows();				
	}
	function getpermittedrole($roleId,$moduleId)
	{
		$this->db->where('roleId',$roleId);
		$this->db->where('moduleId',$moduleId);
		$query=$this->db->get('photo_admin_permission');
		return $query;
	}
	function resetrole($roleid)
	{
		$i="";
		$id="";
		$moduleId="";
		$data['permissionStatus']=1;
		$data['view']=0;
		$data['add']=0;
		$data['edit']=0;
		$data['delete']=0;
		for ($i=0;$i<7;$i++){
			$moduleId=$i+1;
			$this->db->where('roleId',$roleid);
			$this->db->where('moduleId',$moduleId);
			$this->db->update("photo_admin_permission",$data);
			$id=$this->db->affected_rows();	
		}
		return $id;
	}
	function updaterolename($data)
	{
		$this->db->where("roleId",$data['roleId']);
			$this->db->update("photo_admin_roles",$data);
			return $this->db->affected_rows();	
	}
	function deleterole($id)
	{
		$this->db->where('roleId',$id);
		$this->db->delete('photo_admin_roles');
		return 1;
	}
	function resetadminrole($id)
	{
		$data['roleId']="0";
		$this->db->where("roleId",$id);
		$this->db->update("photo_admin_login",$data);
		return $this->db->affected_rows();	
	}
	function deleterolepermissions($id)
	{
		$this->db->where('roleId',$id);
		$this->db->delete('photo_admin_permission');
		return 1;
	}
	function setstatus($id,$data)
	{
		$this->db->where("roleId",$id);
		$this->db->update("photo_admin_roles",$data);
		return $this->db->affected_rows();	
	}
	function getallpermissions()
	{
		$sql="SELECT a.adminFullName,a.adminId,b.roleName,b.roleId FROM photo_admin_login a INNER JOIN 
		photo_admin_roles b ON a.roleId=b.roleId  WHERE a.roleId!='0'";
		$query=$this->db->query($sql);
		return $query;
	}
	function getpermittedmodules($roleId,$moduleId)
	{
		$this->db->where('roleId',$roleId);
		$this->db->where('moduleId',$moduleId);
		$query=$this->db->get('photo_admin_permission');
		return $query;
	}
	function getnonassignedadmins()
	{
		$this->db->where('status','1');
		$this->db->where('roleId','0');
		$query=$this->db->get('photo_admin_login');
		return $query;
	}
	function updatepermission($data)
	{
		$this->db->where("adminId",$data["adminId"]);
		$this->db->update("photo_admin_login",$data);
		return $this->db->affected_rows();	
	}
	function getallusers()
	{
		$query=$this->db->get('photo_users');
		return $query;
	}
	function getuserbyid($id)
	{
		$this->db->where("userId",$id);
		$query=$this->db->get('photo_users');
		return $query;
	}
	function testfrontendusername($un)
	{
		$this->db->where("userName",$un);
		$query=$this->db->get('photo_users');
		return $query->num_rows;
	}
	function submituser($data)
	{
		$id="";
		if ($data['userId']==""){
			$this->db->insert("photo_users",$data);
			$id=$this->db->insert_id();
		}
		else{
			$this->db->where("userId",$data["userId"]);
			$this->db->update("photo_users",$data);
			$id=$data['userId'];
		}
		return $id;
	}
	function deleteuser($id)
	{
		$this->db->where('userId',$id);
		$this->db->delete('photo_users');
		
		$this->db->where('userId',$id);
		$this->db->delete('photo_cart');
		
		$this->db->where('userId',$id);
		$this->db->delete('photo_orders_mapping');
		
		return 1;
	}
	function getphotographers()
	{
		$this->db->order_by("photographerId", "desc");
		$query=$this->db->get('photo_photographers');
		return $query;
	}
	function getphotographerbyid($id)
	{
		$this->db->where("photographerId",$id);
		$query=$this->db->get('photo_photographers');
		return $query;
	}
	function submitphotographer($data)
	{
		$id="";
		if ($data['photographerId']==""){
			$this->db->insert("photo_photographers",$data);
			$id=$this->db->insert_id();
		}
		else{
			$this->db->where("photographerId",$data["photographerId"]);
			$this->db->update("photo_photographers",$data);
			$id=$data['photographerId'];
		}
		return $id;
	}
	function deletephotographer($id)
	{
		$this->db->where('photographerId',$id);
		$this->db->delete('photo_photographers');
		return 1;
	}
	
	function deletephotographermapping($id)
	{
		$this->db->where('uploadedId',$id);
		$this->db->where('uploadedBy','photographer');
		$this->db->delete('photo_photographers_image_mapping');
		return 1;
	}
	function getphotographergallery($id)
	{
		$this->db->where('uploadedId',$id);
		$this->db->where('uploadedBy','photographer');
		$query=$this->db->get('photo_photographers_image_mapping');
		return $query;
	}
	function getallimages()
	{
		$this->db->order_by("imageId","desc");
		$query=$this->db->get('photo_photographers_image_mapping');
		return $query;
	}
	
	function getallcategories()
	{
		$this->db->order_by("categoryId","desc");
		$query=$this->db->get('photo_categories');
		return $query;
	}
	
	function getallparentcategories()
	{
		$this->db->where("parentCategoryId","0");
		$query=$this->db->get('photo_categories');
		return $query;
	}
	
	function getcategorybyid($id)
	{
		$this->db->where("categoryId",$id);
		$query=$this->db->get('photo_categories');
		return $query;
	}
	
	function submitcategory($data)
	{
		$id="";
		if ($data['categoryId']==""){
			$this->db->insert("photo_categories",$data);
			$id=$this->db->insert_id();
		}
		else{
			$this->db->where("categoryId",$data["categoryId"]);
			$this->db->update("photo_categories",$data);
			$id=$data['categoryId'];
		}
		return $id;
	}
	
	function deletecategory($categoryId)
	{
		$this->db->where('categoryId',$categoryId);
		$this->db->delete('photo_categories');
		
		$this->db->where('parentCategoryId',$categoryId);
		$this->db->delete('photo_categories');
		return 1;
	}
	
	function deletephotographerimage($id)
	{
		$this->db->where('imageId',$id);
		$this->db->where('uploadedBy','photographer');
		$this->db->delete('photo_photographers_image_mapping');
		return 1;
	}
	function deleteimage($imageId)
	{
		$this->db->where('imageId',$imageId);
		$this->db->delete('photo_photographers_image_mapping');
		
		$this->db->where('imageId',$imageId);
		$this->db->delete('photo_cart');
		
		$this->db->where('imageId',$imageId);
		$this->db->delete('photo_orders_mapping');
		
		return 1;
	}
	function actionperform($imageId,$action)
	{
		$data="";
		if ($action=="approve"){
			$data["imageStatus"]="approved";
		}
		else{
			$data["imageStatus"]="rejected";
		}
		$this->db->where("imageId",$imageId);
		$this->db->update("photo_photographers_image_mapping",$data);
		return $this->db->affected_rows();	
	}
	function setviewstatus($imageId)
	{
		$data["newstatus"]="0";
		$this->db->where("imageId",$imageId);
		$this->db->update("photo_photographers_image_mapping",$data);
		return $this->db->affected_rows();	
	}
	function getimagebyimageid($imageId)
	{
		$this->db->where("imageId",$imageId);
		$query=$this->db->get('photo_photographers_image_mapping');
		return $query;
	}
	function getimagebyid($imageId,$owner)
	{
		$sql="";
		$query="";
		if($owner=="photographer"){
			$sql="SELECT a.*,b.photographerFullName as owner FROM photo_photographers_image_mapping a INNER JOIN 
			photo_photographers b ON a.uploadedId=b.photographerId WHERE a.imageId='$imageId'";
			$query=$this->db->query($sql);
		
		}
		else{
			$sql="SELECT a.*,b.adminFullName as owner FROM photo_photographers_image_mapping a INNER JOIN 
			photo_admin_login b ON a.uploadedId=b.adminId WHERE a.imageId='$imageId'";
			$query=$this->db->query($sql);
		}
		
		return $query;
	}
	function submitimage($data)
	{
		$id="";
		if ($data['imageId']==""){
			$this->db->insert("photo_photographers_image_mapping",$data);
			$id=$this->db->insert_id();
		}
		else{
			$this->db->where("imageId",$data["imageId"]);
			$this->db->update("photo_photographers_image_mapping",$data);
			$id=$data['imageId'];
		}
		return $id;
	}
	function getallframes()
	{
		$query=$this->db->get('photo_frames');
		return $query;
	}
	function getframebyid($frameId)
	{
		$this->db->where("frameId",$frameId);
		$query=$this->db->get('photo_frames');
		return $query;
	}
	function submitframe($data)
	{
		$id="";
		if ($data['frameId']==""){
			$this->db->insert("photo_frames",$data);
			$id=$this->db->insert_id();
		}
		else{
			$this->db->where("frameId",$data["frameId"]);
			$this->db->update("photo_frames",$data);
			$id=$data['frameId'];
		}
		return $id;
	}
	function deleteframe($frameId)
	{
		$this->db->where('frameId',$frameId);
		$this->db->delete('photo_frames');
		return 1;
	}
	
	function getallpapers()
	{
		$query=$this->db->get('photo_papers');
		return $query;
	}
	function getpaperbyid($paperId)
	{
		$this->db->where("paperId",$paperId);
		$query=$this->db->get('photo_papers');
		return $query;
	}
	function submitpaper($data)
	{
		$id="";
		if ($data['paperId']==""){
			$this->db->insert("photo_papers",$data);
			$id=$this->db->insert_id();
		}
		else{
			$this->db->where("paperId",$data["paperId"]);
			$this->db->update("photo_papers",$data);
			$id=$data['paperId'];
		}
		return $id;
	}
	function deletepaper($paperId)
	{
		$this->db->where('paperId',$paperId);
		$this->db->delete('photo_papers');
		return 1;
	}
	function getallorders()
	{
			$sql="SELECT * FROM photo_orders_mapping";
			$query=$this->db->query($sql);
			return $query;
	}
	function getorderbyid($id)
	{
		$this->db->where("orderId",$id);
		$query=$this->db->get('photo_orders_mapping');
		return $query;
	}
	function getshipperbyid($shipperId)
	{
		$this->db->where("shipperId",$shipperId);
		$query=$this->db->get('photo_shippers');
		return $query;
	}
	function getallshippers()
	{
		$query=$this->db->get('photo_shippers');
		return $query;
	}
	function updateorder($data)
	{
		$this->db->where("orderId",$data["orderId"]);
			$this->db->update("photo_orders_mapping",$data);
			return $data['orderId'];
			
	}
	function deleteorder($orderId)
	{
		$this->db->where('orderId',$orderId);
		$this->db->delete('photo_orders_mapping');
		return 1;
	}
	
	function getallcontents()
	{
		$query=$this->db->get('photo_contents');
		return $query;
	}
	function getcontentbyid($contentid)
	{
		$this->db->where('contentId',$contentid);
		$query=$this->db->get('photo_contents');
		return $query;
	}
	function submitcontent($data)
	{
		$this->db->where('contentId',$data['contentId']);
		$this->db->update('photo_contents',$data);
		return $this->db->affected_rows();
	}
	function getfaq()
	{
		$this->db->order_by("faqId","desc"); 
		$query=$this->db->get('photo_faq');
		return $query;
	}
	function getfaqbyid($faqid)
	{
		$this->db->where('faqId',$faqid);
		$query=$this->db->get('photo_faq');
		return $query;
	}
	function deletefaq($faqid)
	{
		$this->db->where('faqId',$faqid);
		$this->db->delete('photo_faq');
		return 1;
	}
	function saveupdatefaq($data)
	{
		$id=$data['faqId'];
		if ($id!=""){
			$this->db->where('faqId',$id);
			$this->db->update('photo_faq',$data);
		}
		else{
			$this->db->insert("photo_faq",$data);
			$id=$this->db->insert_id();
		}
		return $id;
	}
	function getshippers()
	{
		$query=$this->db->get('photo_shippers');
		return $query;
	}
	function deleteshipper($shipperId)
	{
		$this->db->where('shipperId',$shipperId);
		$this->db->delete('photo_shippers');
		return 1;
	}
	function saveupdateshipper($data)
	{
		$id=$data['shipperId'];
		if ($id!=""){
			$this->db->where('shipperId',$id);
			$this->db->update('photo_shippers',$data);
		}
		else{
			$this->db->insert("photo_shippers",$data);
			$id=$this->db->insert_id();
		}
		return $id;
	}
}