<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"5");?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Shop Table</h6>
						
						
					</div>
					<div class="widget_content">
						<h3>Shop and sales report</h3>
						<p>
							Here you can view the sales details.
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								Order No
							</th>
							
							<th>
								Image Name
							</th>
							<th>
								Ordered By 
							</th>
							<th>
								 Payment
							</th>
							<th>
								 Price
							</th>
							<th>
								 Courier
							</th>
							<th>
								 Delivery status
							</th>
							<th>
								 Action
							</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($shop->result() as $i){?>
						<tr>
							<td class="center">
								<a href="#"><?php echo $i->orderNo;?></a>
							</td>
							<?php $image=$this->photoadminmodel->getimagebyimageid($i->imageId);?>
							<td class="center">
				
								<a href="#"><?php echo $image->row()->imageName;?></a>
							</td>
							<?php $user=$this->photoadminmodel->getuserbyid($i->userId);?>
							<td class="center">
								<a href="#"><?php echo $user->row()->userFullName;?></a>
							</td>
							<td class="center">
							<?php if ($i->paymentStatus=="done"){?>
								 <span class="badge_style b_done">Done</span>
							<?php }else{?>	 
								<span class="badge_style b_pending">Not Done</span>
							<?php }?>
							</td>
							<td class="center">
								 <?php echo $i->totalPrice;?>
							</td>
							<?php $courier=$this->photoadminmodel->getshipperbyid($i->shipperId);?>
							<td class="center">
							<?php if($courier){?>
								 <?php echo $courier->row()->shipperName;?>
							<?php }else{?>	 
							Not Selected
							<?php }?>
							</td>
							<td class="center">
								<?php if ($i->deliveryStatus=="delivered"){?>
								 <span class="badge_style b_done">Delivered</span>
							<?php }elseif($i->deliveryStatus=="processing"){?>	 
								<span class="badge_style b_pending">Processing</span>
							<?php }else{?>
								<span class="badge_style b_pending">Not Delivered</span>
							<?php }?>
							</td>
							
							<td class="center">
							
							<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-pending orderactions" data-act="process" data-id="<?php echo $i->orderId;?>" href="#" title="Click here to Start/Edit processing">Start Processing</a></span>
									<?php }else{?>
										<span><a class="action-icons c-pending notpermitted" data-act="process"  href="#" title="Click here to Start/Edit processing">Start Processing</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-pending orderactions" data-act="process" data-id="<?php echo $i->orderId;?>" href="#" title="Click here to Start/Edit processing">Start Processing</a></span>
									<?php }else{?>
										<span><a class="action-icons c-pending notpermitted" data-act="process"  href="#" title="Click here to Start/Edit processing">Start Processing</a></span>
									<?php }?>
								<?php }?>
							
							
								<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-approve orderactions" data-act="done" data-id="<?php echo $i->orderId;?>" href="#" title="Click here to set the delivery status to done">Done process</a></span>
									<?php }else{?>
										<span><a class="action-icons c-approve notpermitted" data-act="done"  href="#" title="Click here to set the delivery status to done">Done process</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-approve orderactions" data-act="done" data-id="<?php echo $i->orderId;?>" href="#" title="Click here to set the delivery status to done">Done process</a></span>
									<?php }else{?>
										<span><a class="action-icons c-approve notpermitted" data-act="done"  href="#" title="Click here to set the delivery status to done">Done process</a></span>
									<?php }?>
								<?php }?>
								
								<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->delete=="1"){?>
										<span><a class="action-icons c-delete orderactions" data-act="delete" data-id="<?php echo $i->orderId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="delete"  href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-delete orderactions" data-act="delete" data-id="<?php echo $i->orderId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="delete"  href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }?>
								
								
								
								
								
								
								
								
							</td>
						</tr>
						<?php }?>
						
						</tbody>
						<tfoot>
						<tr>
							<th>
								Order No
							</th>
							
							<th>
								Image Name
							</th>
							<th>
								Ordered By 
							</th>
							<th>
								 Payment
							</th>
							<th>
								 Price
							</th>
							<th>
								 Courier
							</th>
							<th>
								 Delivery status
							</th>
							<th>
								 Action
							</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>