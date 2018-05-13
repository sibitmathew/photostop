<?php 
$userId="";
$userFullName="";
$userName="";
$password="";
$address="";
$Email="";
$city="";
$state="";
$country="";
$phoneNo="";
foreach ($user->result() as $us){
	$userId=$us->userId;
	$userFullName=$us->userFullName;
	$userName=$us->userName;
	$password=$us->password;
	$address=$us->address;
	$Email=$us->Email;
	$city=$us->city;
	$state=$us->state;
	$country=$us->country;
	$phoneNo=$us->phoneNo;
}

?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add/Edit Users</h6>
					</div>
					<div class="widget_content">
						<form action="#" method="post" id="submituserform" class="form_container left_label">
						<input type="hidden" name="userId" value="<?php echo $userId;?>" />
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="userFullName">Name<span class="req">*</span></label>
									<div class="form_input">
										<input name="userFullName" id="userFullName" value="<?php echo $userFullName;?>" class="clear_fields" type="text" tabindex="1" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="userName">Username <span class="req">*</span></label>
									<div class="form_input">
										<input name="userName" id="userName" value="<?php echo $userName;?>" data-edit="<?php echo $userName;?>" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="password">Password <span class="req">*</span></label>
									<div class="form_input">
										<input name="password" id="password" value="<?php echo $password;?>" class="clear_fields" type="password" tabindex="3" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="confirm_password">Retype Password <span class="req">*</span></label>
									<div class="form_input">
										<input  id="confirm_password" name="confirm_password" class="clear_fields" value="<?php echo $password;?>" type="password" tabindex="4" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="address">Address <span class="req">*</span></label>
									<div class="form_input">
										<textarea name="address" class="clear_fields" rows="" cols=""><?php echo $address;?></textarea>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="city">City <span class="req">*</span></label>
									<div class="form_input">
										<input name="city" id="city" value="<?php echo $city;?>" class="clear_fields" type="text" tabindex="5"/>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="state">State <span class="req">*</span></label>
									<div class="form_input">
										<input name="state" id="state" value="<?php echo $state;?>" class="clear_fields" type="text" tabindex="5"/>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="country">Country <span class="req">*</span></label>
									<div class="form_input">
										<input name="country" id="country" value="<?php echo $country;?>" class="clear_fields" type="text" tabindex="5"/>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="Email">Email Id <span class="req">*</span></label>
									<div class="form_input">
										<input name="Email" id="Email" value="<?php echo $Email;?>" class="clear_fields" type="text" tabindex="5"/>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="phoneNo">Phone No<span class="req">*</span></label>
									<div class="form_input">
										<input name="phoneNo" id="phoneNo" value="<?php echo $phoneNo;?>" class="clear_fields" type="text" tabindex="5"/>
									</div>
								</div>
								<li>
								<div class="form_grid_12">
									<div class="form_input">
										<button type="submit" class="btn_small btn_blue"><span>Submit</span></button>
										<button type="button" class="btn_small btn_blue clear_button"><span>Reset</span></button>
									</div>
								</div>
								</li>
							</ul>
						</form>
					</div>
				</div>