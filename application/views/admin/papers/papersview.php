
<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"6");?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Papers</h6>
						
						<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->add=="1"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="papersadd" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New Paper</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Paper</span></a>
										</div>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="papersadd" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New Paper</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:890px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New Paper</span></a>
										</div>
									<?php }?>
								<?php }?>	
						
							
					</div>
					<div class="widget_content">
						<h3>Papers Table</h3>
						<p>
							Here you can view all the papers
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								 Paper Name
							</th>
							<th>
								Paper Type
							</th>
							<th>
								Paper Quality
							</th>
							
							<th>
								 Actions
							</th>
						</tr>
						</thead>
						<tbody>
						
				<?php foreach ($papers->result() as $p){?>	
						<tr class="gradeA">
							<td class="center">
								 <?php echo $p->paperName;?>
							</td>
							<td class="center">
								 <?php echo $p->paperType;?>
							</td>
							<td class="center">
								 <?php echo $p->paperQuality;?>
							</td>
							
							<td class="center">
							<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit basic-modal papersadd" data-id="<?php echo $p->paperId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit basic-modal notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit basic-modal papersadd" data-id="<?php echo $p->paperId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit basic-modal notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }?>
								
								<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->delete=="1"){?>
										<span><a class="action-icons c-delete deletepaper" data-id="<?php echo $p->paperId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="delete" href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-delete deletepaper" data-id="<?php echo $p->paperId;?>" href="#" title="delete">Delete</a></span>
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
								 Paper Name
							</th>
							<th>
								Paper Type
							</th>
							<th>
								Paper Quality
							</th>
							
							<th>
								 Actions
							</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>