
<?php 
$faqId="";
$question="";
$answer="";
$displayModule="";

foreach ($faq->result() as $f){
	$faqId=$f->faqId;
	$question=$f->question;
	$answer=$f->answer;
	$displayModule=$f->displayModule;
}
?>

<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Edit FAQ.</h6>
					</div>
					<div class="widget_content">
						<form  id="updatefaqform" class="form_container left_label">
						<input type="hidden" name="faqId" value="<?php echo $faqId;?>"/>
							<ul>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="question">Question<span class="req">*</span></label>
									<div class="form_input">
										<input name="question" id="question" class="clear_fields" value="<?php echo $question;?>"  type="text" tabindex="1" />
									</div>
								</div>
								</li>
								
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="question">Select module<span class="req">*</span></label>
									<div class="form_input">
										<select name="displayModule">
										<option value="">Select</option>
										<option value="buyer" <?php if ($displayModule=="buyer"){?>selected<?php }?>>Buyer</option>
										<option value="photographer" <?php if ($displayModule=="photographer"){?>selected<?php }?>>Photographer</option>
										</select>
									</div>
								</div>
								</li>
								<li>
								<div class="form_grid_12">
									<label class="field_title" for="answer">Answer <span class="req">*</span></label>
									<div class="form_input">
										<textarea name="answer" id="txt_editor"   class="clear_fields" tabindex="2"  ><?php echo $answer;?></textarea>
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
				
