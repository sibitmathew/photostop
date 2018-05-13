
<?php 
$categoryId="";
$categoryName="";
$categoryDescription="";
$parentCategoryId="";
foreach ($category->result()as $c){
	$categoryId=$c->categoryId;
	$categoryName=$c->categoryName;
	$categoryDescription=$c->categoryDescription;
	$parentCategoryId=$c->parentCategoryId;
}
?>
<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add/Edit Categories</h6>
					</div>
					<div class="widget_content">
						<form action="#" method="post" id="addcategoryform" class="form_container left_label">
						<input type="hidden" name="categoryId" value="<?php echo $categoryId;?>"/>
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imageName">Category Name<span class="req">*</span></label>
									<div class="form_input">
										<input name="categoryName" id="categoryName" value="<?php echo $categoryName;?>" class="clear_fields" type="text" tabindex="1" />
									</div>
								</div>
								</li>
								
								
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imageDescription">Category Description <span class="req">*</span></label>
									<div class="form_input">
										<textarea name="categoryDescription"  id="categoryDescription" class="clear_fields" tabindex="2" ><?php echo $categoryDescription;?></textarea>
									</div>
								</div>
								</li>
								
							
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="imagePrice">Parent Category <span class="req">*</span></label>
									<div class="form_input">
										<select name="parentCategoryId" class="clear_fields">
										<option value="0">Parent</option>
										<?php foreach ($parent->result() as $p){?>
										<option value="<?php echo $p->categoryId;?>"<?php if ($p->categoryId==$parentCategoryId){?>selected<?php }?>><?php echo $p->categoryName;?></option>
										<?php }?>
										</select>
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