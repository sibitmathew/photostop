 


 <div class="container">
        	<div class="imageLiting ListView">
        	
        	<?php  foreach ($frame->result() as $fr){?>
        	
            	<div class="listContent">
               	  <h1><?php echo $fr->frameName;?></h1>
                  <span class="imageHolder"><a href="#"><img src="<?php echo base_url();?>/uploaded_frames/<?php echo $fr->frameFile;?>" width="200" height="135" /></a></span>
                  <span class="rate">$<?php echo $fr->framePrice;?></span>
                  <a href="#" class="buyBtn"><?php echo $fr->frameWidth;?>*<?php echo $fr->frameHeight;?>(<?php echo $fr->frameUnit;?>)</a>
                </div>
            <?php }?>    
               
                <br clear="all" />
            </div>            
        </div>
    </div>