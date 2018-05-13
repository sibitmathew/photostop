
<?php 
$adminId="";
$userName="";
$password="";


foreach ($admin_user->result()as $admin){
	$adminId=$admin->adminId;
	$userName=$admin->userName;
	$password=$admin->password;
	
}
?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Edit My Settings</h6>
					</div>
					<div class="widget_content">
						<form  id="mysettingsform" class="form_container left_label">
						<input type="hidden" name="adminId" value="<?php echo $adminId;?>"/>
							<ul>
								
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
										<input name="password" id="password" type="password" value="" class="clear_fields" tabindex="3" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="confirm_password">Retype Password <span class="req">*</span></label>
									<div class="form_input">
										<input name="confirm_password" id="confirm_password" value="" class="clear_fields" type="password" tabindex="4" />
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
				
