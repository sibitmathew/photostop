<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"5");?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Frames Table</h6>
						<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->add=="1"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="addframes" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New Frame</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Frame</span></a>
										</div>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="addframes" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New Frame</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Frame</span></a>
										</div>
									<?php }?>
								<?php }?>	
						
					</div>
					<div class="widget_content">
						<h3>Frames Uploaded Details</h3>
						<p>
							Here you can view the frames and uploaded details.
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								Frame Name
							</th>
							
							
							
							<th>
								 Thumb
							</th>
							<th>
								 Action
							</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($frames->result() as $f){?>
						<tr>
							<td class="center">
								<a href="#"><?php echo $f->frameName;?></a>
							</td>
							
							
							
							
							<td class="center">
								<div class="user-thumb">
									<a href="#"><img height="40" width="40" title="Click here to view frame" alt="Frame" class="viewframe" data-file="<?php echo $f->frameFile_landscape_mount;?>" data-id="<?php echo $f->frameId;?>" src="<?php echo base_url();?>uploaded_frames/<?php echo $f->frameFile_landscape_mount;?>"></a>
								</div>
							</td>
							
							<td class="center">
							<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit addframes"  data-id="<?php echo $f->frameId;?>"  href="#" title="">Edit Frame</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted"  data-act="edit"  href="#" title="">Edit Frame</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit addframes"  data-id="<?php echo $f->frameId;?>"  href="#" title="">Edit Frame</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted"  data-act="edit"  href="#" title="">Edit Frame</a></span>
									<?php }?>
								<?php }?>
								
								<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->delete=="1"){?>
										<span><a class="action-icons c-delete deleteframe" data-act="delete" data-id="<?php echo $f->frameId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="delete" href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-delete deleteframe" data-act="delete" data-id="<?php echo $f->frameId;?>" href="#" title="delete">Delete</a></span>
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
								Frame Name
							</th>
							
							
							
							<th>
								 Thumb
							</th>
							<th>
								 Action
							</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>