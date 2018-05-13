
<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>


<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Freequently Asked Questions</h6>
						
						<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->add=="1"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:930px;top:-1px;">
										<a href="#" class="addeditfaq"><span class="icon add_co"></span><span class="btn_link">Add FAQ</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:930px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add FAQ</span></a>
										</div>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:930px;top:-1px;">
										<a href="#" class="addeditfaq"><span class="icon add_co"></span><span class="btn_link">Add FAQ</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:930px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add FAQ</span></a>
										</div>
									<?php }?>
								<?php }?>	
						
					</div>
					<div class="widget_content">
						<h3>FAQ Table</h3>
						<p>
							 Here you can view freequently asked questions.
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								SI No
							</th>
							<th>
								 Question
							</th>
							
							<th>
								 Module
							</th>
							
							<th>
								Status
							</th>
							<th>
								 Actions
							</th>
						</tr>
						</thead>
						<tbody>
				<?php $i=1; $sts="";$act="";$title=""; foreach ($faqs->result() as $f){?>		
						
						
						<tr class="gradeA">
							<td>
								 <?php echo $i;?>
							</td>
							<td>
								  <?php echo $f->question;?>
							</td>
							
							<td>
								  <?php echo $f->displayModule;?>
							</td>
							
							<td class="center">
								  <?php if ($f->display=="true"){?>
								   <span class="badge_style b_done">Visible</span>
								   <?php $sts="c-pending";
								   $act="hide";
								   $title="Click here to hide this FAQ.";
								   ?>
								  <?php }else{?>
								  <span class="badge_style b_pending">Hidden</span>
								  <?php $sts="c-approve";
								   $act="show";
								    $title="Click here to show this FAQ.";
								  ?>
								  <?php }?>
							</td>
							<td class="center">
							
								
								<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit addeditfaq" data-id="<?php echo $f->faqId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit addeditfaq" data-id="<?php echo $f->faqId;?>" href="#" title="Edit">Edit</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted" data-act="edit" href="#" title="Edit">Edit</a></span>
									<?php }?>
								<?php }?>	
								
								
								<?php if ($roleId!="0"){?>
									<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>
									<?php if($permission->row()->delete=="1"){?>
										<span><a class="action-icons c-delete faqaction" href="#" data-act="delete" data-id="<?php echo $f->faqId;?>" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" href="#" data-act="delete" title="delete">Delete</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-delete faqaction" href="#" data-act="delete" data-id="<?php echo $f->faqId;?>" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" href="#" data-act="delete" title="delete">Delete</a></span>
									<?php }?>
								<?php }?>
								
								
								<?php if ($roleId!="0"){?>
									<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>
									<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons <?php echo $sts;?> faqaction" href="#" data-act="<?php echo $act;?>" data-id="<?php echo $f->faqId;?>" title="<?php echo $title;?>"><?php echo $title;?></a></span>
									<?php }else{?>
										<span><a class="action-icons <?php echo $sts;?> notpermitted" href="#" data-act="delete" title="<?php echo $title;?>"><?php echo $title;?></a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons <?php echo $sts;?> faqaction" href="#" data-act="<?php echo $act;?>" data-id="<?php echo $f->faqId;?>" title="<?php echo $title;?>"><?php echo $title;?></a></span>
									<?php }else{?>
										<span><a class="action-icons <?php echo $sts;?> notpermitted" href="#" data-act="delete" title="<?php echo $title;?>"><?php echo $title;?></a></span>
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
								 Question
							</th>
							<th>
								 Module
							</th>
							<th>
								Status
							</th>
							<th>
								 Actions
							</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>