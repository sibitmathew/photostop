
<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Shippers</h6>
						
						<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->add=="1"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:905px;top:-1px;">
										<a href="#" class="addeditshipper"><span class="icon add_co"></span><span class="btn_link">Add Shipper</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:905px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add Shipper</span></a>
										</div>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:905px;top:-1px;">
										<a href="#" class="addeditshipper"><span class="icon add_co"></span><span class="btn_link">Add Shipper</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:905px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add Shipper</span></a>
										</div>
									<?php }?>
								<?php }?>	
						
					</div>
					<div class="widget_content">
						<h3>Shippers Table</h3>
						<p>
							 Here you can view shippers details.
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								SI No
							</th>
							<th>
								Shipper name
							</th>
							
							<th>
								Shipper unique number
							</th>
							<th>
								Shipper contact
							</th>
							<th>
								Shipper email
							</th>
							<th>
								 Actions
							</th>
						</tr>
						</thead>
						<tbody>
				<?php $i=1; $sts="";$act="";$title=""; foreach ($shippers->result() as $sh){?>		
						
						
						<tr class="gradeA">
							<td class="center">
								 <?php echo $i;?>
							</td>
							<td class="center">
								  <?php echo $sh->shipperName;?>
							</td>
							
							<td class="center">
							<?php echo $sh->shipperUniqueNo	;?>
								  
							</td>
							<td class="center">
							<?php echo $sh->shipperContat;?>
								  
							</td>
							<td class="center">
							<?php echo $sh->shipperEmail;?>
								  
							</td>
							<td class="center">
							
								
								<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit addeditshipper" data-id="<?php echo $sh->shipperId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit addeditshipper" data-id="<?php echo $sh->shipperId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }?>	
								
								
								<?php if ($roleId!="0"){?>
									<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>
									<?php if($permission->row()->delete=="1"){?>
										<span><a class="action-icons c-delete deleteshipper" href="#" data-act="delete" data-id="<?php echo $sh->shipperId;?>" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" href="#" data-act="delete" title="delete">Delete</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-delete deleteshipper" href="#" data-act="delete" data-id="<?php echo $sh->shipperId;?>" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" href="#" data-act="delete" title="delete">Delete</a></span>
									<?php }?>
								<?php }?>
								
								
								
								
								
							</td>
						</tr>
					<?php $i++; }?>	
		
						</tbody>
						<tfoot>
						<tr>
							<th>
								SI No
							</th>
							<th>
								Shipper name
							</th>
							
							<th>
								Shipper unique number
							</th>
							<th>
								Shipper contact
							</th>
							<th>
								Shipper email
							</th>
							<th>
								 Actions
							</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>