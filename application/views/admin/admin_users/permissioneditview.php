
<?php 
$adminId="";
$roleId="";
if($admin_current->num_rows>0){
	foreach ($admin_current->result() as $ad){
		$adminId=$ad->adminId;
		$roleId=$ad->roleId;
	}
}
?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Assign/Edit Permissions</h6>
					</div>
					<div class="widget_content">
						<form action="#" method="post" id="updatepermissionform" class="form_container left_label">
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="adminId">Select Admin User<span class="req">*</span></label>
									<select name="adminId" <?php if($adminId!=""){?>disabled="disabled"<?php }?>  data-placeholder="Select Admin User" style="width:300px;" <?php if($adminId==""){?>class="chzn-select-deselect clear_fields"<?php }else{?>class="chzn-select-deselect"<?php }?>  tabindex="16">
											<option value="">Select</option>
											<?php foreach ($admin->result() as $a){?>
											<option value="<?php echo $a->adminId;?>" <?php if ($a->adminId==$adminId){?>selected<?php }?>><?php echo $a->adminFullName;?></option>
											<?php }?>
										</select>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="username">Select Role<span class="req">*</span></label>
									<div class="form_input">
										
									
										<select data-placeholder="Select Role" name="roleId" style="width:300px;" class="chzn-select-deselect clear_fields" tabindex="16">
											<option value="">Select</option>
											<?php foreach ($roles->result() as $r){?>
											<option value="<?php echo $r->roleId;?>"<?php if ($r->roleId==$roleId){?>selected<?php }?>><?php echo $r->roleName;?></option>
											<?php }?>
										</select>
									
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