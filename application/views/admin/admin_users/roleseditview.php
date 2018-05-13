
<?php 
$roleId="";
$roleName="";
$roleType="";
$roleLimit="";
$rolesDescription="";
foreach ($role->result() as $r){
	$roleId=$r->roleId;
	$roleName=$r->roleName;
	$roleType=$r->roleType;
	$roleLimit=$r->roleLimit;
	$rolesDescription=$r->rolesDescription;
}
?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add/Edit Roles</h6>
					</div>
					<div class="widget_content">
						<form action="#" method="post" id="saverolesform" class="form_container left_label">
						<input type="hidden" name="roleId" id="roleId" value="<?php echo $roleId;?>"/>
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="roleName">Role Name<span class="req">*</span></label>
									<div class="form_input">
										<input name="roleName" id="roleName" value="<?php echo $roleName;?>" type="text" class="clear_fields" tabindex="1" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="roleType">Role Type<span class="req">*</span></label>
									<div class="form_input">
										<input name="roleType" id="roleType" value="<?php echo $roleType;?>" type="text" class="clear_fields" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="roleLimit">Role Limit<span class="req">*</span></label>
									<div class="form_input">
										<input name="roleLimit" id="roleLimit" value="<?php echo $roleLimit;?>" type="text" class="clear_fields" tabindex="3" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="rolesDescription">Role Description<span class="req">*</span></label>
									<div class="form_input">
										<input name="rolesDescription" id="rolesDescription" value="<?php echo $rolesDescription;?>" type="text" class="clear_fields" tabindex="4" />
									</div>
								</div>
								</li>
								<?php foreach ($modules->result()as $m){?>
								<?php $permision=$this->photoadminmodel->getpermittedrole($roleId,$m->moduleId);?>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="<?php echo $m->moduleName;?>"><?php echo $m->moduleName;?>: <span class="req">*</span></label>
									<div class="form_input">
									<input name="add_<?php echo $m->moduleId;?>" <?php if($permision->num_rows>0) {if($permision->row()->add==1){?>checked<?php }}?> id="" type="checkbox" class="clear_check" />Add 	&nbsp;	&nbsp;	&nbsp; &nbsp;
									<input name="edit_<?php echo $m->moduleId;?>" <?php if($permision->num_rows>0) {if($permision->row()->edit==1){?>checked<?php }}?> id="" type="checkbox" class="clear_check" />Edit&nbsp;	&nbsp;	&nbsp;&nbsp;
									<input name="delete_<?php echo $m->moduleId;?>" <?php if($permision->num_rows>0) {if($permision->row()->delete==1){?>checked<?php }}?> id="" type="checkbox" class="clear_check" />Delete	&nbsp;	&nbsp;	&nbsp;&nbsp;
									<input name="view_<?php echo $m->moduleId;?>" <?php if($permision->num_rows>0) {if($permision->row()->view==1){?>checked<?php }}?> id="" type="checkbox" class="clear_check" />View&nbsp;	&nbsp;	&nbsp;&nbsp;
									</div>
								</div>
								</li>
								<?php }?>
								
								
								
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