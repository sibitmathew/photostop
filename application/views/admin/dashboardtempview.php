<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
					$roleId=$status->row()->roleId;
					$status=$status->row()->status;
				?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Admin Dashboard</h6>
					</div>
					<div class="widget_content">
					<center>
						<div class="all_buttons">
						
						<?php if ($roleId!="0"){?>
							<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>
							<?php if($permission->row()->view=="1"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="adminusers"><span class="icon finished_work_sl"></span><span>Admin</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Admin</span></a>
							</div>
							<?php }?>
						<?php }else{?>
							<?php if ($status=="0"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="adminusers"><span class="icon finished_work_sl"></span><span>Admin</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Admin</span></a>
							</div>
							<?php }?>
						<?php }?>
						
						
						<?php if ($roleId!="0"){?>
							<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"2");?>
							<?php if($permission->row()->view=="1"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="users"><span class="icon finished_work_sl"></span><span>Users</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Users</span></a>
							</div>
							<?php }?>
						<?php }else{?>
							<?php if ($status=="0"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="users"><span class="icon finished_work_sl"></span><span>Users</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Users</span></a>
							</div>
							<?php }?>
						<?php }?>
						
						
						<?php if ($roleId!="0"){?>
							<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"3");?>
							<?php if($permission->row()->view=="1"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="photograpers"><span class="icon finished_work_sl"></span><span>Photographers</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Photographers</span></a>
							</div>
							<?php }?>
						<?php }else{?>
							<?php if ($status=="0"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="photograpers"><span class="icon finished_work_sl"></span><span>Photographers</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Photographers</span></a>
							</div>
							<?php }?>
						<?php }?>
						
						<?php if ($roleId!="0"){?>
							<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"4");?>
							<?php if($permission->row()->view=="1"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="images"><span class="icon finished_work_sl"></span><span>Images</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Images</span></a>
							</div>
							<?php }?>
						<?php }else{?>
							<?php if ($status=="0"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="images"><span class="icon finished_work_sl"></span><span>Images</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Images</span></a>
							</div>
							<?php }?>
						<?php }?>
							
							
							<?php if ($roleId!="0"){?>
							<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"5");?>
							<?php if($permission->row()->view=="1"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="frames"><span class="icon finished_work_sl"></span><span>Frames</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Frames</span></a>
							</div>
							<?php }?>
						<?php }else{?>
							<?php if ($status=="0"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="frames"><span class="icon finished_work_sl"></span><span>Frames</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Frames</span></a>
							</div>
							<?php }?>
						<?php }?>
							
							
							<?php if ($roleId!="0"){?>
							<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"6");?>
							<?php if($permission->row()->view=="1"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="papers"><span class="icon finished_work_sl"></span><span>Papers</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Papers</span></a>
							</div>
							<?php }?>
						<?php }else{?>
							<?php if ($status=="0"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="papers"><span class="icon finished_work_sl"></span><span>Papers</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Papers</span></a>
							</div>
							<?php }?>
						<?php }?>
							
							<?php if ($roleId!="0"){?>
							<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"7");?>
							<?php if($permission->row()->view=="1"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="shop"><span class="icon finished_work_sl"></span><span>Shop</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Shop</span></a>
							</div>
							<?php }?>
						<?php }else{?>
							<?php if ($status=="0"){?>
								<div class="btn_40_blue ucase">
								<a href="#" class="dash_icon" data-url="shop"><span class="icon finished_work_sl"></span><span>Shop</span></a>
							</div>
							<?php }else{?>
								<div class="btn_40_blue ucase">
								<a href="#" class="notpermitted" data-act="view"><span class="icon finished_work_sl"></span><span>Shop</span></a>
							</div>
							<?php }?>
						<?php }?>
							
							
							
							
							
						</div>
						</center>
					</div>
				</div>