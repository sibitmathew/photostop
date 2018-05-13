<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Admin Roles</h6>
						
						<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->add=="1"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="rolesaddedit" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New Role</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Role</span></a>
										</div>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="rolesaddedit" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New Role</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Role</span></a>
										</div>
									<?php }?>
								<?php }?>	
						
						
					</div>
					<div class="widget_content">
						<h3>Admin Roles Table</h3>
						<p>
							Here you can see the roles of admin.
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								Role name
							</th>
							<th>
								Role Type
							</th>
							<th>
								Description
							</th>
							<th>
								Role Status
							</th>
							<th>
								 Actions
							</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($roles->result() as $r){?>
						
						<tr class="gradeA">
							<td>
								 <?php echo $r->roleName;?>
							</td>
							<td>
								 <?php echo $r->roleType;?>
							</td>
							<td>
								 <?php echo $r->rolesDescription;?>
							</td>
							<td class="center">
								 <?php if($r->roleStatus==1){?>
								 <span class="badge_style b_done">Active</span>
								 <?php }else{?>
								  <span class="badge_style b_suspend">Inactive</span>
								 <?php }?>
							</td>
							<td class="center">
							<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit basic-modal rolesaddedit" data-id="<?php echo $r->roleId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit basic-modal notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit basic-modal rolesaddedit" data-id="<?php echo $r->roleId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit basic-modal notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }?>	
								
							<?php if ($roleId!="0"){?>
								<?php if($permission->row()->delete=="1"){?>
										<span><a class="action-icons c-delete roledelete" data-id="<?php echo $r->roleId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="edit" href="#" title="delete">Delete</a></span>
									<?php }?>
							<?php }else {?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-delete roledelete" data-id="<?php echo $r->roleId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="edit" href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }?>	
							
							<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-approve setrolestatus" data-status="activate" data-id="<?php echo $r->roleId;?>" href="#" title="Activate">Activate</a></span>
									<?php }else{?>
										<span><a class="action-icons c-approve notpermitted" data-act="activate" href="#" title="Activate">Activate</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-approve setrolestatus" data-status="activate" data-id="<?php echo $r->roleId;?>" href="#" title="Activate">Activate</a></span>
									<?php }else{?>
										<span><a class="action-icons c-approve notpermitted" data-act="activate" href="#" title="Activate">Activate</a></span>
									<?php }?>
								<?php }?>		
								
								<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-suspend setrolestatus" data-status="inactivate" data-id="<?php echo $r->roleId;?>" href="#" title="Inactivate">Inactivate</a></span>
									<?php }else{?>
										<span><a class="action-icons c-suspend notpermitted" data-act="activate" href="#" title="Inactivate">Inactivate</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-suspend setrolestatus" data-status="inactivate" data-id="<?php echo $r->roleId;?>" href="#" title="Inactivate">Inactivate</a></span>
									<?php }else{?>
										<span><a class="action-icons c-suspend notpermitted" data-act="activate" href="#" title="Inactivate">Inactivate</a></span>
									<?php }?>
								<?php }?>	
								
								
								
							</td>
						</tr>
						<?php }?>
	
						</tbody>
						<tfoot>
						<tr>
							<th>
								Role Name
							</th>
							<th>
								Role Type
							</th>
							<th>
								Description
							</th>
							<th>
								Role Status
							</th>
							<th>
								Actions
							</th>
						</tr>
						</tfoot>
						</table>
						
						
							
							
							
					</div>
				</div>