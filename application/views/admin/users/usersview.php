
<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"2");?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Users</h6>
						
						<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->add=="1"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="usersaddedit" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New User</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New User</span></a>
										</div>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="usersaddedit" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New User</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New User</span></a>
										</div>
									<?php }?>
								<?php }?>	
						
						
					</div>
					<div class="widget_content">
						<h3>Users Table</h3>
						<p>
							Here you can see the common users.
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								 User's name
							</th>
							<th>
								Address
							</th>
							<th>
								Contact
							</th>
							<th>
								 Email
							</th>
							<th>
								 Register Status
							</th>
							<th>
								 Actions
							</th>
						</tr>
						</thead>
						<tbody>
						
				<?php foreach ($users->result() as $u){?>		
						<tr class="gradeA">
							<td class="center">
								 <?php echo $u->userFullName;?>
							</td>
							<td class="center">
								 <?php echo $u->address;?>
							</td>
							<td class="center">
								<?php echo $u->phoneNo;?>
							</td>
							<td class="center">
								<?php echo $u->Email;?>
							</td>
							<td class="center">
								<?php if($u->registerStatus=="verified"){?>
								<span class="badge_style b_done">Verified</span>
								<?php }else{?>	 
								<span class="badge_style b_pending">Not verified</span>
							<?php }?>
							</td>
							<td class="center">
							<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit basic-modal usersaddedit" data-id="<?php echo $u->userId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit basic-modal notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit basic-modal usersaddedit" data-id="<?php echo $u->userId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit basic-modal notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }?>	
								
							<?php if ($roleId!="0"){?>	
								<?php if($permission->row()->delete=="1"){?>
										<span><a class="action-icons c-delete deleteuser" data-id="<?php echo $u->userId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="delete" href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-delete deleteuser" data-id="<?php echo $u->userId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="delete" href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }?>	
								
								
							</td>
						</tr>
				<?php }?>
					
						</tbody>
						<tfoot>
						<tr>
							<th>
								 User's Name
							</th>
							<th>
								Address
							</th>
							<th>
								 Contact
							</th>
							<th>
								Email
							</th>
							<th>
								 Register Status
							</th>
							<th>
								Actions
							</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>