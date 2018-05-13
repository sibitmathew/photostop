
<?php 
$shipperId="";
$shipperName="";
$shipperAddress="";
$shipperUniqueNo="";
$shipperContat="";
$shipperEmail="";
foreach ($shipper->result()as $shi){
	$shipperId=$shi->shipperId;
	$shipperName=$shi->shipperName;
	$shipperAddress=$shi->shipperAddress;
	$shipperUniqueNo=$shi->shipperUniqueNo;
	$shipperContat=$shi->shipperContat;
	$shipperEmail=$shi->shipperEmail;
}
?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add/Edit Shippers</h6>
					</div>
					<div class="widget_content">
						<form  id="addeditshipperform" class="form_container left_label">
						<input type="hidden" name="shipperId" value="<?php echo $shipperId;?>"/>
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="shipperName">Shipper Name<span class="req">*</span></label>
									<div class="form_input">
										<input name="shipperName" id="shipperName" value="<?php echo $shipperName;?>" class="clear_fields" type="text" tabindex="1" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="userName">Shipper Address <span class="req">*</span></label>
									<div class="form_input">
										<textarea name="shipperAddress" id="shipperAddress"  class="clear_fields" tabindex="2"  ><?php echo $shipperAddress;?></textarea>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="shipperUniqueNo">Shipper Unique No <span class="req">*</span></label>
									<div class="form_input">
										<input name="shipperUniqueNo" id="shipperUniqueNo" type="text" value="<?php echo $shipperUniqueNo;?>" class="clear_fields" tabindex="3" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="confirm_password">Shipper Contact <span class="req">*</span></label>
									<div class="form_input">
										<input name="shipperContat" id="shipperContat" value="<?php echo $shipperContat;?>" class="clear_fields" type="text" tabindex="4" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="email">Shipper Email<span class="req">*</span></label>
									<div class="form_input">
										<input name="shipperEmail" id="shipperEmail" type="text" value="<?php echo $shipperEmail;?>" class="clear_fields" tabindex="5"/>
									</div>
								</div>
								</li>
								
							
								
								<li>
								<div class="form_grid_12">
									<div class="form_input">
										<button type="submit" class="btn_small btn_blue"><span>Submit</span></button>
										<button type="button"  class="btn_small btn_blue clear_button"><span>Reset</span></button>
									</div>
								</div>
								</li>
							</ul>
						</form>
					</div>
				</div>
				
