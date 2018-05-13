
<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Page Contents</h6>
						
						
						
					</div>
					<div class="widget_content">
						<h3>Page Contents Table</h3>
						<p>
							 Here you can view page contents.
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								SI No
							</th>
							<th>
								Content name
							</th>
							
							
							<th>
								 Actions
							</th>
						</tr>
						</thead>
						<tbody>
				<?php $i=1; foreach ($content->result() as $c){?>		
						
						<tr class="gradeA">
							<td>
								 <?php echo $i;?>
							</td>
							<td>
								 <?php echo $c->contentName;?>
							</td>
							
							
							
							<td class="center">
							
								
								<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit editcontent" data-id="<?php echo $c->contentId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit editcontent" data-id="<?php echo $c->contentId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }?>	
								
								
								
								
								
							</td>
						</tr>
					<?php $i++;}?>	
		
						</tbody>
						<tfoot>
						<tr>
							<th>
								SI No
							</th>
							<th>
								Content name
							</th>
							
							
							<th>
								 Actions
							</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>