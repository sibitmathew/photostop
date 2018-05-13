<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Photo Gallery of Photographer </h6><div></div><div class="btn_30_blue" style="position:absolute;left:840px;top:-1px;">
									<a href="#" class="photographersaddedit"><span class="icon arrow_left_co"></span><span class="btn_link" id="backtophotographers">Back to Photograpers</span></a>
								</div>
					</div>
					<div class="widget_content">
						<h3>Gallery</h3>
						<p>
							 Here you can view the images uploaded by the photographer.
						</p>
						<div class="gallery_wrap">
							
							
							
							<!--Fade-->
							<?php foreach ($gallery->result() as $g){?>
							<div class="mosaic-block fade">
								<div class="mosaic-overlay">
									<div class="details">
										<span class="thumb_preview"><a href="#" class="photographer_gal_preview" data-file="<?php echo $g->fileName;?>">Preview</a></span>
										<!--<span class="thumb_edit"><a href="#">Edit</a></span>
										--><span class="thumb_del"><a href="#" class="photographer_gal_delete" data-id="<?php echo $g->imageId;?>">Delete</a></span>
									</div>
								</div>
								<div class="mosaic-backdrop">
									<img src="<?php echo base_url();?>uploaded_images/<?php echo $g->fileName;?>"/>
								</div>
							</div>
							<?php }?>
							<span class="clear"></span>
						</div>
					</div>
				</div>