
<?php 
$frameId="";
$frameName="";

$frameHeight="";
$frameWidth="";
$frameUnit="";
$frameFile_landscape_mount_price="";
$frameFile_landscape_omount_price="";
$frameFile_portrait_mount_price="";
$frameFile_portrait_omount_price="";
$frameFile_landscape_mount="";
$frameFile_landscape_omount="";
$frameFile_portrait_mount="";
$frameFile_portrait_omount="";
$frameEdgeFile="";
foreach ($frame->result()as $fr){
	$frameId=$fr->frameId;
	$frameName=$fr->frameName;
	
	$frameHeight=$fr->frameHeight;
	$frameWidth=$fr->frameWidth;
	$frameUnit=$fr->frameUnit;
	$frameFile_landscape_mount_price=$fr->frameFile_landscape_mount_price;
	$frameFile_landscape_omount_price=$fr->frameFile_landscape_omount_price;
	$frameFile_portrait_mount_price=$fr->frameFile_portrait_mount_price;
	$frameFile_portrait_omount_price=$fr->frameFile_portrait_omount_price;
	$frameFile_landscape_mount=$fr->frameFile_landscape_mount;
	$frameFile_landscape_omount=$fr->frameFile_landscape_omount;
	$frameFile_portrait_mount=$fr->frameFile_portrait_mount;
	$frameFile_portrait_omount=$fr->frameFile_portrait_omount;
	$frameEdgeFile=$fr->frameEdgeFile;
}
?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add/Edit Frame</h6>
					</div>
					<div class="widget_content">
						<form action="#" method="post" id="addframeform" class="form_container left_label">
						<input type="hidden" name="frameId" value="<?php echo $frameId;?>"/>
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imageName">Frame Name<span class="req">*</span></label>
									<div class="form_input">
										<input name="frameName" id="frameName" value="<?php echo $frameName;?>" class="clear_fields" type="text" tabindex="1" />
									</div>
								</div>
								</li>
								
								
								
								
								
								
								
								
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="email">Upload File(Landscape-mount)<span class="req">*</span></label>
									<div class="form_input">
										<input name="uploadframe_landscape_mount" id="uploadframe_landscape_mount" type="file" />
										<input type="text" id="framefilename_landscape_mount"  readonly="readonly" value="<?php echo $frameFile_landscape_mount;?>" class="clear_fields"/>
										<input type="hidden" name="frameFile_landscape_mount" class="clear_fields" value="<?php echo $frameFile_landscape_mount;?>"/>
										
									</div>
								</div>
								</li>
								
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="email">Upload File(Landscape-Omount)<span class="req">*</span></label>
									<div class="form_input">
										<input name="uploadframe_landscape_mount" id="uploadframe_landscape_omount" type="file" />
										<input type="text" id="framefilename_landscape_omount"  readonly="readonly" value="<?php echo $frameFile_landscape_omount;?>" class="clear_fields"/>
										<input type="hidden" name="frameFile_landscape_omount" class="clear_fields" value="<?php echo $frameFile_landscape_omount;?>"/>
										
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="email">Upload File(Portrait-mount)<span class="req">*</span></label>
									<div class="form_input">
										<input name="uploadframe_portrait_mount" id="uploadframe_portrait_mount" type="file" />
										<input type="text" id="framefilename_portrait_mount"  readonly="readonly" value="<?php echo $frameFile_portrait_mount;?>" class="clear_fields"/>
										<input type="hidden" name="frameFile_portrait_mount" class="clear_fields" value="<?php echo $frameFile_portrait_mount;?>"/>
										
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="email">Upload File(Portrait-Omount)<span class="req">*</span></label>
									<div class="form_input">
										<input name="uploadframe_portrait_omount" id="uploadframe_portrait_omount" type="file" />
										<input type="text" id="framefilename_portrait_omount"  readonly="readonly" value="<?php echo $frameFile_portrait_omount;?>" class="clear_fields"/>
										<input type="hidden" name="frameFile_portrait_omount" class="clear_fields" value="<?php echo $frameFile_portrait_omount;?>"/>
										
									</div>
								</div>
								</li>
								
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="email">Upload Frame Edge Sample Image<span class="req">*</span></label>
									<div class="form_input">
										<input name="uploadedgeframe" id="uploadedgeframe" type="file" />
										<input type="text" id="frameEdgeFileName"  readonly="readonly" value="<?php echo $frameEdgeFile;?>" class="clear_fields"/>		
										<input type="hidden" name="frameEdgeFile" class="clear_fields" value="<?php echo $frameEdgeFile;?>"/>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<div class="form_input">
										<button type="submit" class="btn_small btn_blue"><span>Submit</span></button>
										<button type="button" class="btn_small btn_blue clear_button"><span>Reset</span></button>
									</div>
								</div>
								</li>
							</ul>
						</form>
					</div>
				</div>