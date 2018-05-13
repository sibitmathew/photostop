
<?php 
$paperId="";
$paperName="";
$paperType="";
$paperQuality="";
$paperWidth="";
$paperHeight="";
$paperUnit="";
$a1mouldedPrice="";
$a1withoutmouldedPrice="";
$a1wrapPrice="";
$a2mouldedPrice="";
$a2withoutmouldedPrice="";
$a2wrapPrice="";
$a3mouldedPrice="";
$a3withoutmouldedPrice="";
$a3wrapPrice="";
$a4mouldedPrice="";
$a4withoutmouldedPrice="";
$a4wrapPrice="";
foreach ($paper->result()as $pr){
	$paperId=$pr->paperId;
	$paperName=$pr->paperName;
	$paperType=$pr->paperType;
	$paperQuality=$pr->paperQuality;
	$paperWidth=$pr->paperWidth;
	$paperHeight=$pr->paperHeight;
	$paperUnit=$pr->paperUnit;
	$a1mouldedPrice=$pr->a1mouldedPrice;
	$a1withoutmouldedPrice=$pr->a1withoutmouldedPrice;
	$a1wrapPrice=$pr->a1wrapPrice;
	$a2mouldedPrice=$pr->a2mouldedPrice;
	$a2withoutmouldedPrice=$pr->a2withoutmouldedPrice;
	$a2wrapPrice=$pr->a2wrapPrice;
	$a3mouldedPrice=$pr->a3mouldedPrice;
	$a3withoutmouldedPrice=$pr->a3withoutmouldedPrice;
	$a3wrapPrice=$pr->a3wrapPrice;
	$a4mouldedPrice=$pr->a4mouldedPrice;
	$a4withoutmouldedPrice=$pr->a4withoutmouldedPrice;
	$a4wrapPrice=$pr->a4wrapPrice;
}
?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add/Edit Paper</h6>
					</div>
					<div class="widget_content">
						<form action="#" method="post" id="addpaperform" class="form_container left_label">
						<input type="hidden" name="paperId" value="<?php echo $paperId;?>"/>
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imageName">Paper Name<span class="req">*</span></label>
									<div class="form_input">
										<input name="paperName" id="paperName" value="<?php echo $paperName;?>" class="clear_fields" type="text" tabindex="1" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="username">Paper Type <span class="req">*</span></label>
									<div class="form_input">
										<input name="paperType" id="" type="text" value="<?php echo $paperType;?>" tabindex="2" class="clear_fields" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="username">Paper Quality <span class="req">*</span></label>
									<div class="form_input">
										<input name="paperQuality" id="" type="text" value="<?php echo $paperQuality;?>" tabindex="2" class="clear_fields" />
									</div>
								</div>
								</li>
								
								<li>Note: Put zero or leave blank if price does not exists.</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A1Mount Price </label>
									<div class="form_input">
										<input name="a1mouldedPrice" value="<?php echo $a1mouldedPrice;?>" id="a1mouldedPrice" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A1Without Mount Price </label>
									<div class="form_input">
										<input name="a1withoutmouldedPrice" value="<?php echo $a1withoutmouldedPrice;?>" id="a1withoutmouldedPrice" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A1Wrap Price </label>
									<div class="form_input">
										<input name="a1wrapPrice" value="<?php echo $a1wrapPrice;?>" id="a1wrapPrice" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A2Mount Price </label>
									<div class="form_input">
										<input name="a2mouldedPrice" value="<?php echo $a2mouldedPrice;?>" id="a2mouldedPrice" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A2Without Mount Price </label>
									<div class="form_input">
										<input name="a2withoutmouldedPrice" value="<?php echo $a2withoutmouldedPrice;?>" id="a2withoutmouldedPrice" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A2Wrap Price </label>
									<div class="form_input">
										<input name="a2wrapPrice" value="<?php echo $a2wrapPrice;?>" id="a2wrapPrice" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A3Mount Price </label>
									<div class="form_input">
										<input name="a3mouldedPrice" value="<?php echo $a3mouldedPrice;?>" id="a3mouldedPrice" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A3Without Mount Price </label>
									<div class="form_input">
										<input name="a3withoutmouldedPrice" value="<?php echo $a3withoutmouldedPrice;?>" id="a3withoutmouldedPrice" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A3Wrap Price </label>
									<div class="form_input">
										<input name="a3wrapPrice" value="<?php echo $a3wrapPrice;?>" id="a3wrapPrice" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A4Mount Price </label>
									<div class="form_input">
										<input name="a4mouldedPrice" value="<?php echo $a4mouldedPrice;?>" id="a4mouldedPrice" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A4Without Mount Price </label>
									<div class="form_input">
										<input name="a4withoutmouldedPrice" value="<?php echo $a4withoutmouldedPrice;?>" id="a4withoutmouldedPrice" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="framePrice">A4Wrap Price </label>
									<div class="form_input">
										<input name="a4wrapPrice" value="<?php echo $a4wrapPrice;?>" id="a4wrapPrice" class="clear_fields" type="text" tabindex="2" />
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