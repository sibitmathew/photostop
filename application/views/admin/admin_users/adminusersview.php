
<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Admin Users</h6>
						
						<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->add=="1"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:855px;top:-1px;">
										<a href="#" class="addadminuser"><span class="icon add_co"></span><span class="btn_link">Add New Admin User</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:855px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Admin User</span></a>
										</div>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:855px;top:-1px;">
										<a href="#" class="addadminuser"><span class="icon add_co"></span><span class="btn_link">Add New Admin User</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:855px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Admin User</span></a>
										</div>
									<?php }?>
								<?php }?>	
						
					</div>
					<div class="widget_content">
						<h3>Admin Users Table</h3>
						<p>
							 Here you can see the admin users.
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								 Admin name
							</th>
							<th>
								 User Name
							</th>
							<th>
								Contact
							</th>
							<th>
								 Email
							</th>
							<th>
								 Actions
							</th>
						</tr>
						</thead>
						<tbody>
				<?php foreach ($admin->result() as $a){?>		
						
						<tr class="gradeA">
							<td>
								 <?php echo $a->adminFullName;?>
							</td>
							<td>
								  <?php echo $a->userName;?>
							</td>
							<td>
								 <?php echo $a->phone;?>
							</td>
							<td class="center">
								  <?php echo $a->email;?>
							</td>
							<td class="center">
							
								
								<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit addadminuser" data-id="<?php echo $a->adminId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit addadminuser" data-id="<?php echo $a->adminId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }?>	
								
								
								<?php if ($roleId!="0"){?>
									<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>
									<?php if($permission->row()->delete=="1"){?>
										<span><a class="action-icons c-delete del_admin_user" href="#" data-id="<?php echo $a->adminId;?>" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" href="#" data-act="delete" title="delete">Delete</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-delete del_admin_user" href="#" data-id="<?php echo $a->adminId;?>" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" href="#" data-act="delete" title="delete">Delete</a></span>
									<?php }?>
								<?php }?>
								
								
							</td>
						</tr>
					<?php }?>	
		
						</tbody>
						<tfoot>
						<tr>
							<th>
								 Admin Name
							</th>
							<th>
								User Name
							</th>
							<th>
								 Contact
							</th>
							<th>
								Email
							</th>
							<th>
								Actions
							</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>