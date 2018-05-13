
<?php 
$adminId="";
$adminFullName="";

$email="";
$phone="";

foreach ($admin_user->result()as $admin){
	$adminId=$admin->adminId;
	$adminFullName=$admin->adminFullName;
	$email=$admin->email;
	$phone=$admin->phone;
}
?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Edit My Profile</h6>
					</div>
					<div class="widget_content">
						<form  id="myprofileform" class="form_container left_label">
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
				
