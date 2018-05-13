
<?php 
$imageId="";
$categoryId="";
$imageName="";
$owner="";
$fileName="";
$fileId="";
$imageResolution="";
$takenDate="";
$a1imagePrice="5000";
$a2imagePrice="3800";
$a3imagePrice="2500";
$a4imagePrice="1400";
$imageDescription="";
$imageTags="";
$imageType="";
$uploadedBy="";
$uploadedId="";
$catId="";

foreach ($image->result()as $im){
	$imageId=$im->imageId;
	$categoryId=$im->categoryId;
	$imageName=$im->imageName;
	$owner=$im->owner;
	$fileName=$im->fileName;
	$fileId=$im->fileId;
	$imageResolution=$im->imageResolution;
	$takenDate=$im->takenDate;
	$a1imagePrice=$im->a1imagePrice;
	$a2imagePrice=$im->a2imagePrice;
	$a3imagePrice=$im->a3imagePrice;
	$a4imagePrice=$im->a4imagePrice;
	$imageDescription=$im->imageDescription;
	$imageTags=$im->imageTags;
	$imageType=$im->imageType;
	$uploadedBy=$im->uploadedBy;
	$uploadedId=$im->uploadedId;
}

if($uploadedBy==""){
	$uploadedBy="admin";
	$uploadedId=$this->session->userdata('id');
}

?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add/Edit Image</h6>
					</div>
					<div class="widget_content">
						<form action="#" method="post" id="addimageform" class="form_container left_label">
						<input type="hidden" name="imageId" value="<?php echo $imageId;?>"/>
						<input type="hidden" name="uploadedBy" value="<?php echo $uploadedBy;?>"/>
						<input type="hidden" name="uploadedId" value="<?php echo $uploadedId;?>"/>
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imageName">Image Name<span class="req">*</span></label>
									<div class="form_input">
										<input name="imageName" id="imageName" value="<?php echo $imageName;?>" class="clear_fields" type="text" tabindex="1" />
									</div>
								</div>
								</li>
								<?php if ($imageId!=""){?>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="username">Uploaded By <span class="req">*</span></label>
									<div class="form_input">
										<input  id="" type="text" value="<?php echo $owner;?>" tabindex="2" readonly="readonly" />
									</div>
								</div>
								</li>
								<?php }?>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="username">File name </label>
									<div class="form_input">
										<input  id="uploadedfilename" type="text" value="<?php echo $fileName;?>" class="clear_fields" tabindex="2" readonly="readonly" />
									</div>
								</div>
								</li>
								
								<!--<li>
								<div class="form_grid_12">
									<label class="field_title" for="imageResolution">Image Resolution <span class="req">*</span></label>
									<div class="form_input">
										<input name="imageResolution" value="<?php //echo $imageResolution;?>" id="imageResolution" class="clear_fields" type="text" tabindex="2" />
									</div>
								</div>
								</li>
								
								--><li>
								<div class="form_grid_12">
									<label class="field_title" for="imageDescription">Image Description <span class="req">*</span></label>
									<div class="form_input">
										<textarea name="imageDescription"  id="imageDescription" class="clear_fields" tabindex="2" ><?php echo $imageDescription;?></textarea>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imageTags">Image Tags(Seperate tags with comma.)<span class="req">*</span></label>
									<div class="form_input">
										<textarea name="imageTags"  id="imageTags" class="clear_fields" tabindex="2" ><?php echo $imageTags;?></textarea>
									</div>
								</div>
								</li>
								
								
								
								
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imagePrice">Price(A1) <span class="req">*</span></label>
									<div class="form_input">
										<input name="a1imagePrice" id="imagePrice" value="<?php echo $a1imagePrice;?>" class="clear_fields" type="text" tabindex="5"/>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imagePrice">Price(A2) <span class="req">*</span></label>
									<div class="form_input">
										<input name="a2imagePrice" id="imagePrice" value="<?php echo $a2imagePrice;?>" class="clear_fields" type="text" tabindex="5"/>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imagePrice">Price(A3) <span class="req">*</span></label>
									<div class="form_input">
										<input name="a3imagePrice" id="imagePrice" value="<?php echo $a3imagePrice;?>" class="clear_fields" type="text" tabindex="5"/>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imagePrice">Price(A4) <span class="req">*</span></label>
									<div class="form_input">
										<input name="a4imagePrice" id="imagePrice" value="<?php echo $a4imagePrice;?>" class="clear_fields" type="text" tabindex="5"/>
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imagePrice">Image Type <span class="req">*</span></label>
									<div class="form_input">
										<select name="imageType" class="clear_fields">
										<option value="">Select</option>
										<?php if ($imageType=="portrait"){?>
										<option value="portrait" selected>Portrait</option>
										<option value="landscape" >Landscape</option>
										<?php }else{?>
										<option value="portrait" >Portrait</option>
										<option value="landscape" selected>Landscape</option>
										<?php }?>
										</select>
									</div>
								</div>
								</li>
								
								
								
								<li>
								<div class="form_grid_12">
									<label class="field_title">Select Category</label>
									<div class="form_input">
										<select name="categoryId[]" data-placeholder="Select category which belongs to" style="width:300px;" multiple class="select-multiple" tabindex="14">
											
											<?php $len=""; foreach ($category->result() as $c){
											$catId=explode(",",$categoryId);
											for ($i=0;$i<count($catId);$i++){
												if ($catId[$i]==$c->categoryId){
													$len="true";
												}
											}
												?>
											<option value="<?php echo $c->categoryId;?>"<?php if ($len=="true"){?>selected<?php }?>><?php echo $c->categoryName;?> </option>
											<?php $len="";}?>
										</select>
										
									</div>
								</div>
								</li>
								
								
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="email">Upload File<span class="req">*</span></label>
									<div class="form_input">
										<!--<input name="uploadimage" id="uploadimage" type="file" />
										-->
										<div class="mail_uploader">
											<div class="gebo-upload" id="uploadimage">
												<p>You browser doesn't have Flash, Silverlight or HTML5 support.</p>
											</div>
											<span class="help-block">This files will be uploaded on form submit.</span>
										</div>
										
										<label id="imagefilename" class="clear_uploads"><?php echo $fileName;?></label>
										<input type="hidden" name="fileName" class="clear_fields" value="<?php echo $fileName;?>"/>
										<input type="hidden" name="fileId" class="clear_fields" value="<?php echo $fileId;?>"/>
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