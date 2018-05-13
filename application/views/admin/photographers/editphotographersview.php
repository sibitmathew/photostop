
<?php 
$photographerId="";
$photographerFullName="";
$photographerUserName="";
$photographerPassword="";
$photographerAddress="";
$photographerEmail="";
$photographerCity="";
$photographerState="";
$photographerCountry="";
$photographerPhoneNo="";

foreach ($photographer->result() as $ph){
	$photographerId=$ph->photographerId;
	$photographerFullName=$ph->photographerFullName;
	$photographerUserName=$ph->photographerUserName;
	$photographerPassword=$ph->photographerPassword;
	$photographerAddress=$ph->photographerAddress;
	$photographerEmail=$ph->photographerEmail;
	$photographerCity=$ph->photographerCity;
	$photographerState=$ph->photographerState;
	$photographerCountry=$ph->photographerCountry;
	$photographerPhoneNo=$ph->photographerPhoneNo;
}

?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add/Edit Photographers</h6>
					</div>
					<div class="widget_content">
						<form action="#" method="post" id="photographerform" class="form_container left_label">
						<input type="hidden" name="photographerId" value="<?php echo $photographerId;?>" />
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="photographerFullName">Photographer's Name<span class="req">*</span></label>
									<div class="form_input">
										<input name="photographerFullName" value="<?php echo $photographerFullName;?>" id="photographerFullName" class="clear_fields" type="text" tabindex="1" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="photographerUserName">Username <span class="req">*</span></label>
									<div class="form_input">
										<input name="photographerUserName" value="<?php echo $photographerUserName;?>" id="photographerUserName" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="photographerPassword">Password <span class="req">*</span></label>
									<div class="form_input">
										<input name="photographerPassword" value="<?php echo $photographerPassword;?>" id="photographerPassword" class="clear_fields" type="password" tabindex="3" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="confirm_password">Retype Password <span class="req">*</span></label>
									<div class="form_input">
										<input name="confirm_password" id="confirm_password" value="<?php echo $photographerPassword;?>" class="clear_fields" type="password" tabindex="4" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="email">Address<span class="req">*</span></label>
									<div class="form_input">
										<textarea rows="" cols="" name="photographerAddress" class="clear_fields" tabindex="5"><?php echo $photographerAddress;?></textarea>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="photographerCity">City<span class="req">*</span></label>
									<div class="form_input">
										<input name="photographerCity" id="photographerCity" value="<?php echo $photographerCity;?>" class="clear_fields" type="text" tabindex="6"/>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="photographerState">State<span class="req">*</span></label>
									<div class="form_input">
										<input name="photographerState" id="photographerState" value="<?php echo $photographerState;?>" class="clear_fields" type="text" tabindex="7"/>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="photographerCountry">Country<span class="req">*</span></label>
									<div class="form_input">
										<input name="photographerCountry" id="photographerCountry" value="<?php echo $photographerCountry;?>" class="clear_fields" type="text" tabindex="8"/>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="photographerEmail">Email Id <span class="req">*</span></label>
									<div class="form_input">
										<input name="photographerEmail" id="photographerEmail" value="<?php echo $photographerEmail;?>" class="clear_fields" type="text" tabindex="9"/>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="photographerPhoneNo">Phone No <span class="req">*</span></label>
									<div class="form_input">
										<input name="photographerPhoneNo" value="<?php echo $photographerPhoneNo;?>" class="clear_fields" id="photographerPhoneNo" type="text" tabindex="10"/>
									</div>
								</div>
								</li>
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