<style>
.ddcommon {
	width:354px;
}
</style>


<style>
		
		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }

		#ex2 img:hover { cursor: url(grab.cur), default; }
		#ex2 img:active { cursor: url(grabbed.cur), default; }
		
		
		

	</style>
	
	
	

<div class="container">
        	<div class="prodeuctDetailsContainer">
            	<div class="breadcrumb">
                	<a href="<?php echo site_url();?>gallery">Shop</a>
                    <a href="#"><?php echo $uploaded->row()->artist;?></a>
                    <span><?php echo $product->row()->imageName;?></span>
                </div>
                
                <?php 
				$ext=explode('.', $product->row()->fileName);
					$n=count($ext);
					$extn=$ext[$n-1];
				?>
                <?php if ($product->row()->imageType=="portrait"){?>
            	<div class="mainImageHolder"  style="min-height:414px;width:290px;border:0px;">
            		<a href="#"><img style="margin-left:24px;margin-top:20px;height:372px;width:242px;" src="<?php echo base_url();?>/uploaded_images/<?php echo $product->row()->fileId;?>.<?php echo $extn;?>"/></a>
             	  </div>
               <?php }else{?>
               <div class="mainImageHolder"  style="min-height:273px;width:392px; border:0px;">
               		<a href="#"><img style="margin-left:22px;margin-top:22px;height:230px;width:350px;" src="<?php echo base_url();?>/uploaded_images/<?php echo $product->row()->fileId;?>.<?php echo $extn;?>"/></a>
               </div>
               <?php }?>
              
                
                <input type="hidden" id="hiddenimageprice" value=""/>
                <input type="hidden" id="hiddenframeprice" value="0"/>
                <input type="hidden" id="hiddenpaperprice" value="0"/>
                <input type="hidden" id="hiddentotalprice" value="0"/>
                <input type="hidden" id="hiddenimagetype" value="<?php echo $product->row()->imageType;?>"/>
                 <input type="hidden" id="hiddenimageId" value="<?php echo $product->row()->imageId;?>"/>
                <div class="prodeuctDetails" style="min-height:500px">
                	<h1><?php echo $product->row()->imageName;?></h1>
                    <ul>
                        <li><span class="label priceLabel">Price</span><span class="price" >Rs.<span id="imagepricelabel">0</span></span></li>
                       
                        <li>
                        	<span class="label selectBox" style="margin-left:90px;">Select Frame Size</span>
                        	<div class="drop_down">
                        	<select id="frame_size" name="" style="display:block; width:354px;" class="search-bar-select drop_down_selected _selected_option">
                        	<option value="0">Select</option>
                        	<option value="a1">A1-Size( 23"*34")</option>
                        	<option value="a2">A2-Size( 17"*23")</option>
                        	<option value="a3">A3-Size( 11"*17")</option>
                        	<option value="a4">A4-Size( 8"*11")</option>
                        	</select>
                             </div>
                            <br clear="all" />
                        </li>
                       
                       
                        <li>
                        	<span class="label selectBox" style="margin-left:90px;">Select Frame</span>
                        	<div class="drop_down">
                        	<select id="selectframe" style="display:block; width:354px;" class="search-bar-select drop_down_selected _selected_option">
                        	<option value="0">Select</option>
                        <?php foreach ($frames->result() as $f){?>	
                        	<option value="<?php echo $f->frameId;?>" data-H-mount="<?php echo $f->frameFile_landscape_mount;?>" data-H-omount="<?php echo $f->frameFile_landscape_omount;?>" data-V-mount="<?php echo $f->frameFile_portrait_mount;?>" data-V-omount="<?php echo $f->frameFile_portrait_omount;?>" data-image="<?php echo base_url();?>uploaded_frames/<?php echo $f->frameEdgeFile;?>"><?php echo $f->frameName;?> </option>
                        	<?php }?>
                        	</select>
                             </div>
                            <br clear="all" />
                        </li>
                        
                         <li>
                        	<span class="label selectBox" style="margin-left:90px;">Select Paper</span>
                            <div class="drop_down">
                            
                            <select id="paperid" style="display:block; width:354px;" class="search-bar-select drop_down_selected _selected_option">
                        	<option value="0">Select</option>
                        <?php foreach ($papers->result() as $p){?>	
                        	<option value="<?php echo $p->paperId;?>"><?php echo $p->paperName;?></option>
                        <?php }?>
                        	</select>
                               

                                
                            </div>
                            <br clear="all" />
                        </li>
                        
                        <li>
                        	<span class="label selectBox" style="margin-left:90px;">Select Frame type</span>
                        	<div class="drop_down" id="hidewrap">
                        	<select id="frame_type_id" name="frame_type_id" style="display:block; width:354px;" class="search-bar-select drop_down_selected _selected_option frame_type_id">
                        	<option value="0">Select</option>
                        	<option value="omount">Without mount</option>
                        	<option value="mount">With mount</option>	
                        	<option value="wrap">Wrap</option>
                        	</select>
                             </div>
                            <br clear="all" />
                        </li>
                        
                       
                        
                        
                    </ul>
                    <a href="#" id="addtocart" data-session="<?php echo $this->session->userdata('userId');?>" class="addToCart"><img src="<?php echo base_url();?>/data/images_front/add-to-cart-btn.png" alt="add to cart" /></a>
                    <div id="tabs" class="productDescription" style="z-index:-15;">
                        <ul>
                        <li><a href="#tabs-3">Zoom Image</a></li>
                         <li><a href="#tabs-2">Other images of the same artist</a></li>
                            <li><a href="#tabs-1">Image Details</a></li>
                           
                            
                        </ul>
                        <div id="tabs-1">
                        	<p><?php echo $product->row()->imageDescription;?></p>
                        </div>
                        <div id="tabs-2" style="width:auto; height:270px; overflow-y:scroll; ">
                        	
                        	<?php $ex="";$nu="";$extns="";if ($other->num_rows>0){?>
                        	<?php foreach ($other->result() as $ot){?>
                        	<?php 
                        		
								$ex=explode('.', $ot->fileName);
									$nu=count($ex);
									$extns=$ex[$nu-1];
							?>
							
							
							<div class="thumbnail-item">
								<a href="<?php echo site_url();?>products/productdetails/<?php echo $ot->imageId;?>"><img src="<?php echo base_url();?>/uploaded_images/<?php echo $ot->fileId;?>.<?php echo $extns;?>" width="80" height="80" class="thumbnail" /></a>
								
								<!--<div class="tooltip">
									<img src="<?php //echo base_url();?>/uploaded_images/<?php //echo $ot->fileId;?>.<?php //echo $extns;?>" alt="" width="330" height="185" />
									<span class="overlay"></span>
								</div> 
							--></div>
                        	
                        	
                        	<?php $extns=""; }?>
                        	<?php }else{?>
                        	<p>No other images available!!</p>
                        	<?php }?>
                        </div>
                        <div id="tabs-3" style="width:330px">
                        <span class='zoom' id='image_zoom'>
                        	<img src="<?php echo base_url();?>/uploaded_images/<?php echo $product->row()->fileId;?>.<?php echo $extn;?>" width="332" height="300" />
                        
                        </span>
                        </div>
                    </div>
                </div>
                <br clear="all" />
            </div>            
        </div>
    </div>
    
    <script language="javascript">
   	//	 msdrp();
	function msdrp(){
			$(document).ready(function(e) {
				try {
				$("body select").msDropDown();
				} catch(e) {
				alert(e.message);
				}
				});
		}
   
	var drp=new msdrp();
	
</script>

<script type="text/javascript">

	// Load this script once the document is ready
	$(document).ready(function () {
		
		// Get all the thumbnail
		$('div.thumbnail-item').mouseenter(function(e) {

			// Calculate the position of the image tooltip
			x = e.pageX - $(this).offset().left;
			y = e.pageY - $(this).offset().top;

			// Set the z-index of the current item, 
			// make sure it's greater than the rest of thumbnail items
			// Set the position and display the image tooltip
			$(this).css('z-index','15')
			.children("div.tooltip")
			.css({'top': y + 10,'left': x + 20,'display':'block','z-index':'100'});
			
		}).mousemove(function(e) {
			
			// Calculate the position of the image tooltip			
			x = e.pageX - $(this).offset().left;
			y = e.pageY - $(this).offset().top;
			
			// This line causes the tooltip will follow the mouse pointer
			if(x>40||y<10){
				$(this).children("div.tooltip").css({'top':  -100,'left':  - 200});
			//	alert("yes");
			}
			else{
				$(this).children("div.tooltip").css({'top': y + 10,'left': x + 20});
			}
			
			
		}).mouseleave(function() {
			
			// Reset the z-index and hide the image tooltip 
			$(this).css('z-index','1')
			.children("div.tooltip")
			.animate({"opacity": "hide"}, "fast");
		});

	});


	</script>