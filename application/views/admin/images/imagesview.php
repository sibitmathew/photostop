<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"4");?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Images Table</h6>
						<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->add=="1"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="addimages" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New Image</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Image</span></a>
										</div>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="addimages" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New Image</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Image</span></a>
										</div>
									<?php }?>
								<?php }?>	
						
					</div>
					<div class="widget_content">
						<h3>Images Uploaded Details</h3>
						<p>
							Here you can view the images and uploaded details.
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								Image Name
							</th>
							<th>
								Owner Name
							</th>
							<th>
								Owner Type
							</th>
							
							
							<th>
								 Thumb
							</th>
							<th>
								 Status
							</th>
							<th>
								 Action
							</th>
						</tr>
						</thead>
						<tbody>
						<?php $ext="";$n="";$extn=""; foreach ($img->result() as $i){?>
						<tr>
							<td class="center">
								<a href="#"><?php echo $i->imageName;?></a>
							</td>
							<td class="center">
				<?php $owner=""; if ($i->uploadedBy=="photographer"){?>
				<?php $photo_g=$this->photoadminmodel->getphotographerbyid($i->uploadedId);$owner=$photo_g->row()->photographerFullName;?>
				<?php }else{?>
				<?php $photo_a=$this->photoadminmodel->getadminuserbyid($i->uploadedId);$owner=$photo_a->row()->adminFullName;?>
				<?php }?>
								<a href="#"><?php echo $owner;?></a>
							</td>
							<td class="center">
								<a href="#"><?php echo $i->uploadedBy;?></a>
							</td>
							
						
							<td class="center">
								<div class="user-thumb">
								<?php 
								$ext=explode('.', $i->fileName);
									$n=count($ext);
									$extn=$ext[$n-1];
								?>
									<a href="#"><img height="40" width="40" title="Click here to view image" alt="Image" class="viewimage" data-file="<?php echo $i->fileId;?>.<?php echo $extn;?>" data-id="<?php echo $i->imageId;?>" src="<?php echo base_url();?>/uploaded_images/<?php echo $i->fileId;?>.<?php echo $extn;?>"></a>
								</div>
							</td>
							<td class="center">
							<?php if ($i->newstatus=="1"){?>
								<span class="badge_style b_done">New</span>
							<?php }?>
								<?php if ($i->imageStatus=="approved"){?>
								<span class="badge_style b_done">Approved</span>
							<?php }elseif ($i->imageStatus=="rejected"){?>
								<span class="badge_style b_pending">Rejected</span>
							<?php }else {?>	
								<span class="badge_style b_pending">Pending</span>
							<?php }?>
							</td>
							<td class="center">
							<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit addimages"  data-id="<?php echo $i->imageId;?>" data-owner="<?php echo $i->uploadedBy;?>" href="#" title="Edit Image">Edit Image</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted"   data-act="edit" href="#" title="Edit Image">Edit Image</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit addimages"  data-id="<?php echo $i->imageId;?>" data-owner="<?php echo $i->uploadedBy;?>" href="#" title="Edit Image">Edit Image</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted"   data-act="edit" href="#" title="Edit Image">Edit Image</a></span>
									<?php }?>
								<?php }?>
								
								<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->delete=="1"){?>
										<span><a class="action-icons c-delete imageactions" data-act="delete" data-id="<?php echo $i->imageId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="delete"  href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-delete imageactions" data-act="delete" data-id="<?php echo $i->imageId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="delete"  href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }?>
								
								<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-approve imageactions" data-act="approve" data-id="<?php echo $i->imageId;?>" href="#" title="Approve">Approve</a></span>
									<?php }else{?>
										<span><a class="action-icons c-approve notpermitted" data-act="approve"  href="#" title="Approve">Approve</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-approve imageactions" data-act="approve" data-id="<?php echo $i->imageId;?>" href="#" title="Approve">Approve</a></span>
									<?php }else{?>
										<span><a class="action-icons c-approve notpermitted" data-act="approve"  href="#" title="Approve">Approve</a></span>
									<?php }?>
								<?php }?>
								
								<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-suspend imageactions" data-act="reject" data-id="<?php echo $i->imageId;?>" href="#" title="Reject">Reject</a></span>
									<?php }else{?>
										<span><a class="action-icons c-suspend notpermitted" data-act="reject"  href="#" title="Reject">Reject</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-suspend imageactions" data-act="reject" data-id="<?php echo $i->imageId;?>" href="#" title="Reject">Reject</a></span>
									<?php }else{?>
										<span><a class="action-icons c-suspend notpermitted" data-act="reject"  href="#" title="Reject">Reject</a></span>
									<?php }?>
								<?php }?>
								
								
								
								
							</td>
						</tr>
						<?php }?>
						
						</tbody>
						<tfoot>
						<tr>
							<th>
								Image Name
							</th>
							<th>
								 Owner Name
							</th>
							<th>
								 Owner Type
							</th>
							<th>
								 Uploaded Date
							</th>
							
							<th>
								 Thumb
							</th>
							<th>
								 Status
							</th>
							<th>
								 Action
							</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>
				
				