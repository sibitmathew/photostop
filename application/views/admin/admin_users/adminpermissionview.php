
<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Admin Permissions</h6>
						
						<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->add=="1"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:870px;top:-1px;">
										<a href="#" class="permissionedit" data-id=""><span class="icon add_co"></span><span class="btn_link">Assign Permission</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:870px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Assign Permission</span></a>
										</div>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:870px;top:-1px;">
										<a href="#" class="permissionedit" data-id=""><span class="icon add_co"></span><span class="btn_link">Assign Permission</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:870px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Assign Permission</span></a>
										</div>
									<?php }?>
								<?php }?>	
						
							
					</div>
					<div class="widget_content">
						<h3>Admin Permission Table</h3>
						<p>
							 Here you can see the permissions given to each admins.
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								Admin Name
							</th>
							<th>
								Role Name
							</th>
							<th>
								Admin
							</th>
							<th>
								Users
							</th>
							<th>
								Photographers
							</th>
							<th>
								Images
							</th>
							<th>
								Frames
							</th>
							<th>
								Shop
							</th>
							<th>
								Papers
							</th>
							<th>
								Actions
							</th>
						</tr>
						</thead>
						<tbody>
					
						<?php foreach ($permissions->result() as $p){?>
						<tr class="gradeA">
							<td >
								 <?php echo $p->adminFullName;?>
							</td>
							<td >
								<?php echo $p->roleName;?>
							</td>
							<?php $admin=$this->photoadminmodel->getpermittedmodules($p->roleId,"1");?>
							<td class="center">
							<?php if ($admin->row()->view=="1"){?>
								 <span><a class="action-icons c-approve " href="#" title="This User can View this module">View</a></span>
							<?php }?>	
							<?php if ($admin->row()->add=="1"){?>
								 <span><a class="action-icons c-add " href="#" title="This User can Add in this module">Add</a></span>
							<?php }?> 
							<?php if ($admin->row()->edit=="1"){?>
								 <span><a class="action-icons c-edit " href="#" title="This User can Edit in this module">Edit</a></span>
							<?php }?> 
							<?php if ($admin->row()->delete=="1"){?>
								 <span><a class="action-icons c-Delete " href="#" title="This User can Delete in this module">Delete</a></span>
							<?php }?> 
							</td>
							<?php $users=$this->photoadminmodel->getpermittedmodules($p->roleId,"2");?>
							<td class="center">
								 <?php if ($users->row()->view=="1"){?>
								 <span><a class="action-icons c-approve " href="#" title="This User can View this module">View</a></span>
							<?php }?>	
							<?php if ($users->row()->add=="1"){?>
								 <span><a class="action-icons c-add " href="#" title="This User can Add in this module">Add</a></span>
							<?php }?> 
							<?php if ($users->row()->edit=="1"){?>
								 <span><a class="action-icons c-edit " href="#" title="This User can Edit in this module">Edit</a></span>
							<?php }?> 
							<?php if ($users->row()->delete=="1"){?>
								 <span><a class="action-icons c-Delete " href="#" title="This User can Delete in this module">Delete</a></span>
							<?php }?> 
							</td>
							<?php $photograper=$this->photoadminmodel->getpermittedmodules($p->roleId,"3");?>
							<td class="center">
								<?php if ($photograper->row()->view=="1"){?>
								 <span><a class="action-icons c-approve " href="#" title="This User can View this module">View</a></span>
							<?php }?>	
							<?php if ($photograper->row()->add=="1"){?>
								 <span><a class="action-icons c-add " href="#" title="This User can Add in this module">Add</a></span>
							<?php }?> 
							<?php if ($photograper->row()->edit=="1"){?>
								 <span><a class="action-icons c-edit " href="#" title="This User can Edit in this module">Edit</a></span>
							<?php }?> 
							<?php if ($photograper->row()->delete=="1"){?>
								 <span><a class="action-icons c-Delete " href="#" title="This User can Delete in this module">Delete</a></span>
							<?php }?> 
							</td>
							<?php $images=$this->photoadminmodel->getpermittedmodules($p->roleId,"4");?>
							<td class="center">
								<?php if ($images->row()->view=="1"){?>
								 <span><a class="action-icons c-approve " href="#" title="This User can View this module">View</a></span>
							<?php }?>	
							<?php if ($images->row()->add=="1"){?>
								 <span><a class="action-icons c-add " href="#" title="This User can Add in this module">Add</a></span>
							<?php }?> 
							<?php if ($images->row()->edit=="1"){?>
								 <span><a class="action-icons c-edit " href="#" title="This User can Edit in this module">Edit</a></span>
							<?php }?> 
							<?php if ($images->row()->delete=="1"){?>
								 <span><a class="action-icons c-Delete " href="#" title="This User can Delete in this module">Delete</a></span>
							<?php }?> 
							</td>
							<?php $frames=$this->photoadminmodel->getpermittedmodules($p->roleId,"5");?>
							<td class="center">
								<?php if ($frames->row()->view=="1"){?>
								 <span><a class="action-icons c-approve " href="#" title="This User can View this module">View</a></span>
							<?php }?>	
							<?php if ($frames->row()->add=="1"){?>
								 <span><a class="action-icons c-add " href="#" title="This User can Add in this module">Add</a></span>
							<?php }?> 
							<?php if ($frames->row()->edit=="1"){?>
								 <span><a class="action-icons c-edit " href="#" title="This User can Edit in this module">Edit</a></span>
							<?php }?> 
							<?php if ($frames->row()->delete=="1"){?>
								 <span><a class="action-icons c-Delete " href="#" title="This User can Delete in this module">Delete</a></span>
							<?php }?> 
							</td>
							<?php $papers=$this->photoadminmodel->getpermittedmodules($p->roleId,"6");?>
							<td class="center">
								 <?php if ($papers->row()->view=="1"){?>
								 <span><a class="action-icons c-approve " href="#" title="This User can View this module">View</a></span>
							<?php }?>	
							<?php if ($papers->row()->add=="1"){?>
								 <span><a class="action-icons c-add " href="#" title="This User can Add in this module">Add</a></span>
							<?php }?> 
							<?php if ($papers->row()->edit=="1"){?>
								 <span><a class="action-icons c-edit " href="#" title="This User can Edit in this module">Edit</a></span>
							<?php }?> 
							<?php if ($papers->row()->delete=="1"){?>
								 <span><a class="action-icons c-Delete " href="#" title="This User can Delete in this module">Delete</a></span>
							<?php }?> 
							</td>
							<?php $shop=$this->photoadminmodel->getpermittedmodules($p->roleId,"7");?>
							<td class="center">
								<?php if ($shop->row()->view=="1"){?>
								 <span><a class="action-icons c-approve " href="#" title="This User can View this module">View</a></span>
							<?php }?>	
							<?php if ($shop->row()->add=="1"){?>
								 <span><a class="action-icons c-add " href="#" title="This User can Add in this module">Add</a></span>
							<?php }?> 
							<?php if ($shop->row()->edit=="1"){?>
								 <span><a class="action-icons c-edit " href="#" title="This User can Edit in this module">Edit</a></span>
							<?php }?> 
							<?php if ($shop->row()->delete=="1"){?>
								 <span><a class="action-icons c-Delete " href="#" title="This User can Delete in this module">Delete</a></span>
							<?php }?> 
							</td>
							<td class="center">
							
							<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit basic-modal permissionedit" data-id="<?php echo $p->adminId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit basic-modal notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit basic-modal permissionedit" data-id="<?php echo $p->adminId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit basic-modal notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
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
								Role Name
							</th>
							<th>
								Admin
							</th>
							<th>
								Users
							</th>
							<th>
								Photographers
							</th>
							<th>
								Images
							</th>
							<th>
								Frames
							</th>
							<th>
								Papers
							</th>
							<th>
								Shop
							</th>
							<th>
								Actions
							</th>
						</tr>
						</tfoot>
						</table>
						
						
							
							
					</div>
				</div>