<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"3");?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Photographers</h6>
						
						<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->add=="1"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:840px;top:-1px;">
										<a href="#" class="photographersaddedit" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New Photographer</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:840px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Photographer</span></a>
										</div>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:840px;top:-1px;">
										<a href="#" class="photographersaddedit" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New Photographer</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:840px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Photographer</span></a>
										</div>
									<?php }?>
								<?php }?>	
						
						
					</div>
					<div class="widget_content">
						<h3>Photographers Table</h3>
						<p>
							Here you can see the photographers
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								 Photographer's name
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
						
				<?php foreach ($photograpers->result() as $p){?>	
						<tr class="gradeA">
							<td class="center">
								 <?php echo $p->photographerFullName;?>
							</td>
							<td class="center">
								 <?php echo $p->photographerAddress;?>
							</td>
							<td class="center">
								 <?php echo $p->photographerPhoneNo;?>
							</td>
							<td class="center">
								<?php echo $p->photographerEmail;?>
							</td>
							<td class="center">
								<?php if($p->registerStatus=="verified"){?>
								<span class="badge_style b_done">Verified</span>
								<?php }else{?>	 
								<span class="badge_style b_pending">Not verified</span>
							<?php }?>
							</td>
							<td class="center">
							<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit basic-modal photographersaddedit" data-id="<?php echo $p->photographerId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit basic-modal notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit basic-modal photographersaddedit" data-id="<?php echo $p->photographerId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit basic-modal notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }?>
								
								<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->delete=="1"){?>
										<span><a class="action-icons c-delete deletephotographer" data-id="<?php echo $p->photographerId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="edit" href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-delete deletephotographer" data-id="<?php echo $p->photographerId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="edit" href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }?>
								
								
								<span><a class="action-icons c-edit viewimages" data-id="<?php echo $p->photographerId;?>" href="#" title="View Images">View Images</a></span>
							</td>
						</tr>
				<?php }?>
						</tbody>
						<tfoot>
						<tr>
							<th>
								 Photographer's Name
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