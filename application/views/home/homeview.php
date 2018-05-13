 <div class="container">
        	<div class="frame">
            	<div class="slider-wrapper theme-default" >
            	<div id="slider" class="nivoSlider">
                    <img src="<?php echo base_url();?>/data/images_front/slide1.jpg" style="height:470px;"  data-thumb="<?php echo base_url();?>/data/images_front/slide1.jpg" alt="" />
                    <a><img src="<?php echo base_url();?>/data/images_front/slide2.jpg" style="height:470px;" data-thumb="<?php echo base_url();?>/data/images_front/slide2.jpg" alt=""  /></a>
                    <img src="<?php echo base_url();?>/data/images_front/slide3.jpg" style="height:470px;"  data-thumb="<?php echo base_url();?>/data/images_front/slide3.jpg" alt=""  />
                   <img src="<?php echo base_url();?>/data/images_front/slide4.jpg" style="height:470px;" data-thumb="<?php echo base_url();?>/data/images_front/slide4.jpg" alt=""  />
                </div>
                 <?php //foreach ($recent->result() as $rec){?> 
		                <div id="htmlcaption" class="nivo-html-caption">
		                    <strong>Image name</strong> : Image<em>to</em> purchase <a href="#">click here.</a>. 
		                </div>
		         <?php //}?>       
            </div>
            </div><!--
            
            <div class="subNav">
            	<ul>
                	<li><a href="<?php //echo site_url();?>/gallery"><img src="<?php //echo base_url();?>/data/images_front/gallery.png" alt="about" id="img" /></a></li>
                    <li><a href="<?php //echo site_url();?>/gallery"><img src="<?php //echo base_url();?>/data/images_front/buyprint.png" alt="images" id="#img" /></a></li>
                    <?php //if ($this->session->userdata('usertype')=="artist"){?>
                    <li><a href="<?php //echo site_url();?>/home/uploadnew"><img src="<?php //echo base_url();?>/data/images_front/uploadphoto.png" alt="print" id="#img" /></a></li>
               		<?php //}else{?>
               		 <li><a href="#" id="upload_new_not"><img src="<?php //echo base_url();?>/data/images_front/uploadphoto.png" alt="print" id="#img" /></a></li>
               		<?php //}?>
                </ul>
                <br clear="all" />
          </div>
          
           --><div class="container pageContent" style="width:850px;margin-left:80px;">
           <br>
           <br>
        	
            <h1>About Us</h1>
            <p style="font-size:12px; font-family:times new roman;"><?php echo $aboutus->row()->content;?></p>
            
        </div>
        
       <div style="border-style:solid;border-width:1px;border-color:#CCCCCC;width:850px;margin-left:75px;" ></div>
           <br>
           <br>
            <div class="faqPanel">
            <h1>FAQ</h1>
            <div id="accordion">
            <?php foreach ($faq->result() as $f){?>
            	<h3><span style="font-family:times new roman;"><?php echo $f->question;?></span></h3>
                <div>
                	<span style="font-family:times new roman;color:#767676;font-size:20px;"><?php echo $f->answer;?></span>
                </div>
            <?php }?>    
            </div>
            </div>
            
        </div>
    </div>