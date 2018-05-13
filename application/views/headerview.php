<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
var urljs="<?php echo base_url()?>";
var url="<?php echo site_url()?>";

</script>
<title>Photostop-<?php echo $title;?></title>
<link rel="stylesheet" href="<?php echo base_url();?>/data/styles/style.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>/data/styles/default.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>/data/styles/nivo-slider.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/data/css/msdropdown/dd.css" />
<!-- upload -->
<link rel="stylesheet" href="<?php echo base_url();?>/data/lib/plupload/js/jquery.plupload.queue/css/plupload-gebo.css" />

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>


-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" charset="utf-8"></script>

<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
 <script src="<?php echo base_url();?>/data/js/jquery-ui.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>/data/js/jquery.nivo.slider.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.cookie.js"></script>
 <script src="<?php echo base_url();?>/data/js/jquery.isotope.min.js"></script><!--
 
 <script src="js/msdropdown/jquery-1.3.2.min.js" type="text/javascript"></script>
--><script src="<?php echo base_url();?>/data/js/msdropdown/jquery.dd.min.js" type="text/javascript"></script>

 <script src='<?php echo base_url();?>/data/js/image_zoom/jquery.zoom.js'></script>
 <!--plupload and all it's runtimes and the jQuery queue widget (attachments) 
			-->
<script type="text/javascript" src="<?php echo base_url();?>/data/lib/plupload/js/plupload.full.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/data/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.full.js"></script>
 
 <script src="<?php echo base_url();?>/data/js/photo.js"></script>
 <script src="<?php echo base_url();?>/data/js/vaidation.jquery.js"></script>
</head>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider();
});
</script>

<script type="text/javascript">
        $(document).ready(function() {

            $(".signin").click(function(e) {          
				e.preventDefault();
                $("fieldset#signin_menu").toggle();
				$(".signin").toggleClass("menu-open");
            });
			
			$("fieldset#signin_menu").mouseup(function() {
				return false
			});
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.signin").length==0) {
					$(".signin").removeClass("menu-open");
					$("fieldset#signin_menu").hide();
				}
			});			
			
        });
		
		$(document).ready(function() {

            $(".cart").click(function(e) {          
				e.preventDefault();
                $("fieldset#cart_menu").toggle();
				$(".cart").toggleClass("cart-menu-open");
            });
			
			$("fieldset#cart_menu").mouseup(function() {
				return false
			});
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.cart").length==0) {
					$(".signin").removeClass("cart-menu-open");
					$("fieldset#cart_menu").hide();
				}
			});	


				
			
        });
</script>


<script>
$(document).ready(function() {

	$('#image_zoom').zoom();	

	 });
</script>

 <script>
$(function() {
$( "#accordion" ).accordion({
collapsible: true,

});

});

$(function() {
	$( "#accordion_photo" ).accordion({
	collapsible: true,

	});

	});

$(function() {
$( "#tabs" ).tabs();
});

$(function () {
    $(document).bind("contextmenu",function(e){
      e.preventDefault();
      alert("Right Click is not allowed!!!");
    });

   
  });

</script>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<style>
.err{
	color:red;	
}
.ui-accordion-content{
   height:115px;
}
</style>
	<div class="wraper">
	<span class="topSocial" style="position:absolute;margin-left:450px;top:-5px;"></span>
	<span class="topSocial" style="position:absolute;margin-left:600px;top:-5px;color: #115b77;font-family:arial;font-style:normal;font-size:12px;"> <span>Welcome,  <?php if ($this->session->userdata('userId')==null){?>Guest<?php }else{?><?php echo $this->session->userdata('userFullName')?><?php }?></span> <?php if ($this->session->userdata('userId')!=null){?><a href="<?php echo site_url();?>home/dashboard"> <span style="font-weight:bold;color: #0576a0; ">Dashboard</span></a><?php }?></span>
    	<div class="loginPanel">
    	
            <div id="container">
           
            <?php if ($this->session->userdata('userId')==null){?>
              <div id="topnav" class="topnav"><a href="login" class="signin"><span>Sign in</span></a> </div>
              <?php }else{?>
               <div id="topnav" ><a href="<?php echo site_url();?>logout" class="signout" ><span>Sign out</span></a> </div>
              <?php }?>
              <fieldset id="signin_menu">
                <form method="post" id="signin_form" action="">
                  <label for="username">Username or email</label>
                  <input id="username" name="userName" value="" title="username" tabindex="4" type="text">
                  </p>
                  <p>
                    <label for="password">Password</label>
                    <input id="password" name="password" value="" title="password" tabindex="5" type="password">
                  </p>
                  
                  <p class="remember">
                    <input id="signin_submit" value="Sign in" tabindex="6" type="submit">
                    <input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">
                    <label for="remember">Remember me</label>
                  </p>
                  <p class="forgot"> <a href="#" id="resend_password_link">Forgot your password?</a> </p>
                  <p class="forgot-username">Dont have an account? <a id=forgot_username_link  title="If you remember your password, try logging in with your email"  href="<?php echo site_url();?>home/register"> Register now</A> </p>
                </form>
              </fieldset>
            </div>
            <div id="cart-container">
            <?php $image=""; $cart=$this->photomodel->getcartedproducts($this->session->userdata('userId'),$this->session->userdata('usertype'));?>
              <div id="topnav" class="topnav cartnav"><a href="login" class="cart"><span></span></a><span class="cartCount"><?php echo $cart->num_rows;?></span></div>
              
                <fieldset id="cart_menu">
                    <div class="cartTop" >
                        <form method="post" id="cart" action="">
                        
                          <div class="cartHeader"><h1>Your Products <span><?php echo $cart->num_rows;?> items</span></h1><?php if ($cart->num_rows>0){?><input name="checkout" id="checkout" value="" type="button" /><?php }?><br clear="all" /></div>
                          <div class="cartBody">
                          <?php if($cart->num_rows()>0){
                      //    print_r($cart);
                          ?>
                          	<ul>
                          	<?php $ext="";$n="";$extn=""; foreach ($cart->result() as $c){?>
                          	
                          	
                            	<li>
                                	<?php  $image=$this->photomodel->getimagebyid($c->imageId);?>
                                	<?php 
                                	
                                	
										$ext=explode('.', $image->row()->fileName);
										$n=count($ext);
										$extn=$ext[$n-1];
									?>
                                	<a href="#"><img src="<?php echo base_url();?>/uploaded_images/<?php echo $image->row()->fileId;?>.<?php echo $extn;?>" height="50px" width="75px" /></a>
                                    <h1><a href="#"><?php echo $image->row()->imageName;?></a></h1>
                                    <span>Rs.<?php echo $c->productPrice;?></span>
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
              
            </div>
        </div>
   	  <div class="header">
   	  <div class="logo">
            	<a href="<?php echo site_url();?>">photo stop logo</a>
            </div>
            <div class="mainNav">
            	<ul>
                	<li class="active topactive" id="li_home"><a href="<?php echo site_url();?>">home</a></li>
                    <li class="topactive" id="li_shop"><a href="<?php echo site_url();?>Photographyprints">Buy Print</a></li>
                    <li class="topactive" id="li_artist"><a href="<?php echo site_url();?>home/photographers">artists</a></li>
                    <li class="topactive" id="li_community"><a href="<?php echo site_url();?>home/community">community</a></li>
                    <li class="topactive" id="li_contact"><a href="<?php echo site_url();?>contactus">contact</a></li>
                    <li class="topactive" id="li_register"><a href="<?php echo site_url();?>home/register">Register</a></li>
                    
                </ul>
            </div>
            <div class="topSocial">
            	
                <ul>
                	<li><a href="https://www.facebook.com/pages/Photostop/545711162117976?fref=ts" target="_blank">Facebook Share</a></li>
                    <li><a href="https://twitter.com/Photostop_tweet" target="_blank">Tweet</a></li>
                    <li><a href="http://www.linkedin.com/company/3172762?trk=tyah" target="_blank">LinkedIn</a></li>
                    <li><a href="http://photostop-honeycomb.blogspot.in/" target="_blank">Blog</a></li>
                </ul>
            </div>
            <div class="search">
            <form action="<?php echo site_url();?>home/search" method="get">
            	<span><input name="searchText" id="sarchText" type="text" /><button type="submit" id="">search</button></span>
            </form>	
            </div>
            <br clear="all" />
            
            </div>