
<?php 
$adminId="";
$adminFullName="";
$userName="";
$password="";
$email="";
$phone="";

foreach ($admin_user->result()as $admin){
	$adminId=$admin->adminId;
	$adminFullName=$admin->adminFullName;
	$userName=$admin->userName;
	$password=$admin->password;
	$email=$admin->email;
	$phone=$admin->phone;
}
?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add/Edit Admin Users</h6>
					</div>
					<div class="widget_content">
						<form  id="addedituserform" class="form_container left_label">
						<input type="hidden" name="adminId" value="<?php echo $adminId;?>"/>
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="adminFullName">Full Name<span class="req">*</span></label>
									<div class="form_input">
										<input name="adminFullName" id="adminFullName" value="<?php echo $adminFullName;?>" class="clear_fields" type="text" tabindex="1" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="userName">Username <span class="req">*</span></label>
									<div class="form_input">
										<input name="userName" id="userName" value="<?php echo $userName;?>" type="text" class="clear_fields" tabindex="2" data-edit="<?php echo $userName;?>" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="password">Password <span class="req">*</span></label>
									<div class="form_input">
										<input name="password" id="password" type="password" value="<?php echo $password;?>" class="clear_fields" tabindex="3" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="confirm_password">Retype Password <span class="req">*</span></label>
									<div class="form_input">
										<input name="confirm_password" id="confirm_password" value="<?php echo $password;?>" class="clear_fields" type="password" tabindex="4" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="email">Email Id <span class="req">*</span></label>
									<div class="form_input">
										<input name="email" id="email" type="text" value="<?php echo $email;?>" class="clear_fields" tabindex="5"/>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="phone">Contact No <span class="req">*</span></label>
									<div class="form_input">
										<input name="phone" id="phone" type="text" value="<?php echo $phone;?>" class="clear_fields" tabindex="6"/>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<div class="form_input">
										<button type="submit" class="btn_small btn_blue"><span>Submit</span></button>
										<button type="button"  class="btn_small btn_blue clear_button"><span>Reset</span></button>
									</div>
								</div>
								</li>
							</ul>
						</form>
					</div>
				</div>
				
