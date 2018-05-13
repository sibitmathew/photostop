
<?php 
$contentId="";
$contentName="";
$content="";


foreach ($contents->result() as $cont){
	$contentId=$cont->contentId;
	$contentName=$cont->contentName;
	$content=$cont->content;
}
?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Edit Contents in <?php echo $contentName;?> page.</h6>
					</div>
					<div class="widget_content">
						<form  id="updatecontentform" class="form_container left_label">
						<input type="hidden" name="contentId" value="<?php echo $contentId;?>"/>
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="adminFullName">Content Name<span class="req">*</span></label>
									<div class="form_input">
										<input name="contentName" id="contentName" value="<?php echo $contentName;?>" readonly="readonly" type="text" tabindex="1" />
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="content">Content <span class="req">*</span></label>
									<div class="form_input">
										<textarea name="content" id="txt_editor"   class="clear_fields addtextarea" tabindex="2"  ><?php echo $content;?></textarea>
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
				
