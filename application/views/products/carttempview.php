<div id="topnav" class="topnav cartnav"><a href="#" class="cart"><span></span></a><span class="cartCount"><?php echo $cart->num_rows;?></span></div>
              
                <fieldset id="cart_menu">
                    <div class="cartTop" >
                        <form method="post" id="cart" action="">
                        
                          <div class="cartHeader"><h1>Your Products <span><?php echo $cart->num_rows;?> items</span></h1><?php if ($cart->num_rows>0){?><input name="checkout" id="checkout" value="" type="button" /><?php }?><br clear="all" /></div>
                          <div class="cartBody">
                          <?php if($cart->num_rows()>0){?>
                          	<ul>
                          	<?php foreach ($cart->result() as $c){?>
                            	<li>
                                	<?php $image=$this->photomodel->getimagebyid($c->imageId);?>
                                	<a href="#"><img src="<?php echo base_url();?>/uploaded_images/<?php echo $image->row()->fileName;?>" height="50px" width="75px" /></a>
                                    <h1><a href="#"><?php echo $image->row()->imageName;?></a></h1>
                                    <span>$<?php echo $c->productPrice;?></span>
                                    <a href="#" class="removeFrmCart" data-id="<?php echo $c->cartId;?>"><img src="<?php echo base_url();?>/data/images_front/cart_delete.png" /></a>
                                    <br clear="all" />
                                </li>
                            <?php }?>
                           
                            </ul>
                              <?php }else{?>  
                             <ul> No products added to cart!!</ul>
                              <?php }?>
                          </div>
                          
                        </form>
                      <div class="cartBot"></div>
                  </div>
              </fieldset>