 <div class="container">
            <div id="tabs" class="productDescription dashboardList">
                <ul>
                <?php if ($this->session->userdata('usertype')=="artist"){?>
                    <li><a href="#tabs-1">My Uploads</a></li>
                    <li><a href="#tabs-4">Upload New</a></li>
                 <?php }?>   
                    <li><a href="#tabs-2">My Purchases</a></li>
                    <li><a href="#tabs-3">My Profile</a></li>
                </ul>
          <?php if ($this->session->userdata('usertype')=="artist"){?>
          <?php 
          $row="odd";
          $myuploads=$this->photomodel->getmyuploads($this->session->userdata('userId'));?>
                <div id="tabs-1">
                 <?php if ($myuploads->num_rows>0){?>
                    <table width="100%" border="0" cellspacing="1" cellpadding="0">
                      <tr>
                        <th>Image Name</th>
                        <th>File name</th>
                        <th>Pixel</th>
                        
                        <th>Actions</th>
                      </tr>
                     
              <?php foreach ($myuploads->result() as $m){?>        
                      <tr class="<?php echo $row;?>">
                        <td><?php echo $m->imageName;?></td>
                        <td><?php echo $m->fileName;?></td>
                        <td><?php echo $m->imageResolution;?></td>
                        
                        <?php 
                        $ext="";$n="";$extn="";
								$ext=explode('.', $m->fileName);
									$n=count($ext);
									$extn=$ext[$n-1];
								?>
                        <td>
                        	<table align="center" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td><a href="<?php echo base_url();?>uploaded_images/<?php echo $m->fileId.".".$extn;?>" target="_blank"><img src="<?php echo base_url();?>/data/images_front/view.png" alt="view" /></a></td><!--
                                <td><a href="#"><img src="<?php echo base_url();?>/data/images_front/edit.png" alt="edit" /></a></td>
                                --><td><a href="#" class="deletephotographerimage" data-id="<?php echo $m->imageId;?>"><img src="<?php echo base_url();?>/data/images_front/delete.png"  alt="delete" /></a></td>
                              </tr>
                            </table>
                        </td>
                      </tr>
                <?php  if($row=="odd"){
                		
                		$row="even";
                		}
                		else {
                			$row="odd";
                		}	 
              
              	}
                
                ?>  
                </table> 
           <?php }else {?>         
           		No uploads found!!
           <?php }?>
                 
                </div>
           <?php }?>        
                <div id="tabs-2">
                <?php $r="odd"; if ($purchased->num_rows>0){?> 
                    <table width="100%" border="0" cellspacing="1" cellpadding="0">
                      <tr>
                        <th>Image Name</th>
                        <th>TImage Resolution</th>
                        <th>Price</th>
                        <th>Delivery</th>
                        <th>Frame</th>
                        <th>Paper</th><!--
                        <th>Actions</th>
                      --></tr>
               
             <?php foreach ($purchased->result() as $p){?>      
                      <tr class="<?php echo $r;?>">
                        <td><?php echo $p->imageName;?></td>
                        <td><?php echo $p->imageResolution;?></td>
                        <td>$<?php echo $p->imagePrice+$p->framePrice+$p->paperPrice;?></td>
                        <td><?php echo $p->deliveryStatus;?></td>
                        <td><?php echo $p->frameName;?></td>
                        <td><?php echo $p->paperName;?></td>
                        <td>
                        	<table align="center" border="0" cellspacing="0" cellpadding="0">
                              <!--<tr>
                                <td><a href="#"><img src="<?php //echo base_url();?>/data/images_front/view.png" alt="view" /></a></td>
                                <td><a href="#"><img src="<?php //echo base_url();?>/data/images_front/edit.png" alt="edit" /></a></td>
                                <td><a href="#"><img src="<?php //echo base_url();?>/data/images_front/delete.png" alt="delete" /></a></td>
                              </tr>
                            --></table>
                        </td>
                      </tr>
              <?php 
             			if($r=="odd"){
                		
                		$r="even";
                		}
                		else {
                			$r="odd";
                		}	 
             }?>  
             
              </table>      
             <?php }else{?> 
             No purchases found!!!
             <?php }?>        
                      
                   
                </div>
                <div id="tabs-3">
                    <a href="<?php echo site_url();?>home/myprofile">Click here to edit your profile details.</a>
                </div>
                
                 <?php if ($this->session->userdata('usertype')=="artist"){?>
                 <div id="tabs-4">
                    <a href="<?php echo site_url();?>home/uploadnew">Click here to upload a new image.</a>
                </div>
                <?php }?>
            </div>            
        </div>
    </div>