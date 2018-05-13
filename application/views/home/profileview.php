<?php 
$userId="";
$userFullName="";
$Email="";
$phoneNo="";
$address="";
$city="";
$state="";
$count="";
$userName="";
$type="";
if ($this->session->userdata('usertype')=="artist"){
		foreach ($profile->result() as $p){
			$userId=$p->photographerId;
			$userFullName=$p->photographerFullName;
			$Email=$p->photographerEmail;
			$phoneNo=$p->photographerPhoneNo;
			$address=$p->photographerAddress;
			$city=$p->photographerCity;
			$state=$p->photographerState;
			$count=$p->photographerCountry;
			$userName=$p->photographerUserName;
			$type="artist";
		}
	}else {
		foreach ($profile->result() as $p){
			$userId=$p->userId;
			$userFullName=$p->userFullName;
			$Email=$p->Email;
			$phoneNo=$p->phoneNo;
			$address=$p->address;
			$city=$p->city;
			$state=$p->state;
			$count=$p->country;
			$userName=$p->userName;
			$type="user";
		}	
	}


?>




<style>
.err{
	color:red;
	width:200px;
}
</style>
 <div class="container">
        	<div class="regContainer myForm">
            	<form method="post" id="userprofileform">
            	<input type="hidden" name="userId" value="<?php echo $userId;?>"/>
            	<input type="hidden" name="type" value="<?php echo $type;?>"/>
            		<h1>My Profile</h1>
                    <ul>
                    	<li><label>Name</label><input name="userFullName" value="<?php echo $userFullName;?>" type="text" class="clear" /></li>
                        <li><label>Email</label><input name="Email" value="<?php echo $Email;?>" type="text" class="clear" /></li>
                        <li><label>Phone</label><input name="phoneNo" value="<?php echo $phoneNo;?>" type="text" class="clear"/></li>
                        <li><label>Address</label><textarea name="address"  class="clear"><?php echo $address;?></textarea></li>
                         <li><label>City</label><input name="city" type="text" value="<?php echo $city;?>" class="clear"/></li>
                         <li><label>State</label><input name="state" type="text" value="<?php echo $state;?>" class="clear"/></li>
                        <li>
                            <label>Country</label>
                            <select name="country" class="clear">
                              <option value="">Select Country</option>
                              <?php foreach ($country as $co){?>
                              	<option value="<?php echo $co;?>"<?php if ($co==$count){?>selected<?php }?>><?php echo $co;?></option>
                              <?php }?>
                            </select>
                        </li>
                        <li><label>Username</label><input type="text" name="userName" id="userName" value="<?php echo $userName;?>" data-edit="<?php echo $userName;?>"  class="clear"/></li>
                        <li><label>Password</label><input name="pwd"  type="password"  class="clear"/></li>
                        <li><label>Confirm Password</label><input name="password" type="password" class="clear" /></li>
                        <li>
                            <label>I am</label>
                            <select name="type" class="clear" disabled>
                            <?php if ($type=="user"){?>
                              <option value="user" selected>a User</option>
                              <option value="artist">an Artist</option>
                             <?php }else{?> 
                             <option value="user" >a User</option>
                              <option value="artist" selected>an Artist</option>
                             <?php }?>
                            </select>
                        </li>
                       
                        <li class="buttonRow"><button id="profilesubmit">Update</button><button class="reset_reg">Reset</button></li>
                    </ul>
            	</form>
            </div>            
        </div>
    </div>