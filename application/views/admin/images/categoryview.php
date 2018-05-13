<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
									$roleId=$status->row()->roleId;
									$status=$status->row()->status;
								?>
<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"4");?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Images Category Table</h6>
						<?php if ($roleId!="0"){?>
									
									<?php if($permission->row()->add=="1"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="addcategory" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New</span></a>
										</div>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="addcategory" data-id=""><span class="icon add_co"></span><span class="btn_link">Add New</span></a>
										</div>
									<?php }else{?>
										<div></div><div class="btn_30_blue" style="position:absolute;left:880px;top:-1px;">
										<a href="#" class="notpermitted" data-act="add"><span class="icon add_co"></span><span class="btn_link">Add New</span></a>
										</div>
									<?php }?>
								<?php }?>	
						
					</div>
					<div class="widget_content">
						<h3>Images Category Details</h3>
						<p>
							Here you can manage the image category.
						</p>
						<table class="display data_tbl">
						<thead>
						<tr>
							<th>
								Category Name
							</th>
							<th>
								Category Description
							</th>
							<th>
								Parent category
							</th>
							
							
							
							<th>
								 Action
							</th>
						</tr>
						</thead>
						<tbody>
						<?php $ct=""; foreach ($category->result() as $c){?>
						<tr>
							<td class="center">
								<a href="#"><?php echo $c->categoryName;?></a>
							</td>
							<td class="center">
				
								<a href="#"><?php echo $c->categoryDescription;?></a>
							</td>
							<td class="center">
							
								<a href="#"><?php if ($c->parentCategoryId=="0"){
									echo "Parent Category";
								}else{
									$ct=$this->photoadminmodel->getcategorybyid($c->parentCategoryId);
									echo $ct->row()->categoryName;
								}	
								
								?></a>
							</td>
							
						
							
							
							<td class="center">
							<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->edit=="1"){?>
										<span><a class="action-icons c-edit addcategory"  data-id="<?php echo $c->categoryId;?>" href="#" title="Edit Category">Edit Catgory</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted"   data-act="edit" href="#" title="Edit Category">Edit Catgory</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-edit addcategory"  data-id="<?php echo $c->categoryId;?>"  href="#" title="Edit Category">Edit Catgory</a></span>
									<?php }else{?>
										<span><a class="action-icons c-edit notpermitted"   data-act="edit" href="#" title="Edit Category">Edit Catgory</a></span>
									<?php }?>
								<?php }?>
								
								<?php if ($roleId!="0"){?>
									
								<?php if($permission->row()->delete=="1"){?>
										<span><a class="action-icons c-delete deletecategory" data-act="delete" data-id="<?php echo $c->categoryId;?>" href="#" title="delete">Delete</a></span>
									<?php }else{?>
										<span><a class="action-icons c-delete notpermitted" data-act="delete"  href="#" title="delete">Delete</a></span>
									<?php }?>
								<?php }else{?>
									<?php if ($status=="0"){?>
										<span><a class="action-icons c-delete deletecategory" data-act="delete" data-id="<?php echo $c->categoryId;?>" href="#" title="delete">Delete</a></span>
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
								Category Name
							</th>
							<th>
								Category Description
							</th>
							<th>
								Parent category
							</th>
							
							
							
							<th>
								 Action
							</th>
						</tr>
						</tfoot>
						</table>
					</div>
				</div>
				
				