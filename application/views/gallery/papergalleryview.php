 


 <div class="container">
        	<div class="imageLiting ListView">
        	
        	<?php  foreach ($paper->result() as $pr){?>
        	
            	<div class="listContent">
               	  <h1><?php echo $pr->paperName;?></h1>
                  <span class="imageHolder"><a href="#"><img src="<?php echo base_url();?>/images/paper.jpg" width="200" height="135" /></a></span>
                  <span class="rate">$<?php echo $pr->paperPrice;?></span>
                  <a href="#" class="buyBtn"><?php echo $pr->paperWidth;?>*<?php echo $pr->paperHeight;?>(<?php echo $pr->paperUnit;?>)</a>
                </div>
            <?php }?>    
               
                <br clear="all" />
            </div>            
        </div>
    </div>