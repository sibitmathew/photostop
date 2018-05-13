<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Photo-Admin Login</title>
<link href="<?php echo base_url();?>/data/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/layout.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/themes.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/typography.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/styles.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/shCore.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/jquery.jqplot.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/data-table.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/form.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/ui-elements.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/wizard.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/sprite.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/data/css/gradient.css" rel="stylesheet" type="text/css">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="css/ie/ie7.css" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="css/ie/ie8.css" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie/ie9.css" />
<![endif]-->
<!-- Jquery -->
<script src="<?php echo base_url();?>/data/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.ui.touch-punch.js"></script>
<script src="<?php echo base_url();?>/data/js/chosen.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/uniform.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/bootstrap-dropdown.js"></script>
<script src="<?php echo base_url();?>/data/js/bootstrap-colorpicker.js"></script>
<script src="<?php echo base_url();?>/data/js/sticky.full.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.noty.js"></script>
<script src="<?php echo base_url();?>/data/js/selectToUISlider.jQuery.js"></script>
<script src="<?php echo base_url();?>/data/js/fg.menu.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.tagsinput.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.cleditor.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.tipsy.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.peity.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.simplemodal.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.jBreadCrumb.1.1.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.colorbox-min.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.idTabs.min.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.multiFieldExtender.min.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.confirm.js"></script>
<script src="<?php echo base_url();?>/data/js/elfinder.min.js"></script>
<script src="<?php echo base_url();?>/data/js/accordion.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/autogrow.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/check-all.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/data-table.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/ZeroClipboard.js"></script>
<script src="<?php echo base_url();?>/data/js/TableTools.min.js"></script>
<script src="<?php echo base_url();?>/data/js/jeditable.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/duallist.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/easing.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/full-calendar.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/input-limiter.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/inputmask.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/iphone-style-checkbox.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/meta-data.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/quicksand.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/raty.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/smart-wizard.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/stepy.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/treeview.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/ui-accordion.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/vaidation.jquery.js"></script>
<script src="<?php echo base_url();?>/data/js/mosaic.1.0.1.min.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.collapse.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.cookie.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.autocomplete.min.js"></script>
<script src="<?php echo base_url();?>/data/js/localdata.js"></script>
<script src="<?php echo base_url();?>/data/js/excanvas.min.js"></script>
<script src="<?php echo base_url();?>/data/js/jquery.jqplot.min.js"></script>
<script src="<?php echo base_url();?>/data/js/chart-plugins/jqplot.dateAxisRenderer.min.js"></script>
<script src="<?php echo base_url();?>/data/js/chart-plugins/jqplot.cursor.min.js"></script>
<script src="<?php echo base_url();?>/data/js/chart-plugins/jqplot.logAxisRenderer.min.js"></script>
<script src="<?php echo base_url();?>/data/js/chart-plugins/jqplot.canvasTextRenderer.min.js"></script>
<script src="<?php echo base_url();?>/data/js/chart-plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
<script src="<?php echo base_url();?>/data/js/chart-plugins/jqplot.highlighter.min.js"></script>
<script src="<?php echo base_url();?>/data/js/chart-plugins/jqplot.pieRenderer.min.js"></script>
<script src="<?php echo base_url();?>/data/js/chart-plugins/jqplot.barRenderer.min.js"></script>
<script src="<?php echo base_url();?>/data/js/chart-plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script src="<?php echo base_url();?>/data/js/chart-plugins/jqplot.pointLabels.min.js"></script>
<script src="<?php echo base_url();?>/data/js/chart-plugins/jqplot.meterGaugeRenderer.min.js"></script>
<script src="<?php echo base_url();?>/data/js/custom-scripts.js"></script>

<script type="text/javascript">
$(function(){
	$(window).resize(function(){
		$('.login_container').css({
			position:'absolute',
			left: ($(window).width() - $('.login_container').outerWidth())/2,
			top: ($(window).height() - $('.login_container').outerHeight())/2
		});
	});
	// To initially run the function:
	$(window).resize();

	
	
});
</script>
</head>
<body id="theme-default" class="full_block">
<div id="login_page">
	<div class="login_container">
		<div class="login_header blue_lgel">
			<ul class="login_branding">
				<li>
				<div class="logo_small">
					<img src="<?php echo base_url();?>/data/images/logo.png" width="99" height="35" alt="bingo">
				</div>
				<span>Please provide the username and password.</span>
				</li>
				<!--<li class="right go_to"><a href="#" title="Go to Main Site" class="home">Go To Main Site</a></li>
			--></ul>
		</div>
		<span id="login_res">
			<!--<div class="login_success">
				<span class="icon"></span>Login Successfully
			</div>
			<div class="login_invalid">
				<span class="icon"></span>Invalid Username/Password
			</div>
		--></span>
		<form action=""  id="login_form">
			<div class="login_form">
				<h3 class="blue_d">Admin Login</h3>
				<ul>
					<li class="login_user">
					<input type="text" name="username" value="User Name" id="username" autocomplete="off" >
					</li>
					<li class="login_pass">
					<input type="password" name="password"  id="password" value="Password">
					</li>
				</ul>
			</div>
			<input class="login_btn blue_lgel" name="" value="Login" type="submit">
			<ul class="login_opt_link">
				<li><a href="<?php echo site_url();?>admin/login/forgotpassword">Forgot Password?</a></li>
				<!--<li class="remember_me right">
				<input name="" class="rem_me" type="checkbox" value="checked">
				Remember Me</li>
			--></ul>
		</form>
	</div>
</div>

<script src="<?php echo base_url();?>/data/js/jquery.validate.js"></script>
<script type="text/javascript">
$('#login_form').validate({
	errorClass: 'error',
	validClass: 'valid',
	rules: {
		username: { required: true, minlength: 6 },
		password: { required: true, minlength: 6 }
	},
	messages:{
		username: { required: "Please enter user name",minlength: "Username should contain atleast 6 characters!!" },
		password: { required: "Please enter Password",minlength: "Password should contain atleast 6 characters!!"  }
	},	
	submitHandler: function(){
		var js={'userName':$("#username").val(),'password': $("#password").val()}
		$.post("<?php echo site_url();?>admin/login/adminauthentication",js,function(data){
			if(data.sts>0){
				$("#login_res").html(data.view);
				window.location="<?php echo site_url();?>admin/dashboard";
			}else{
				$("#login_res").html(data.view);
				setTimeout(function(){
					$("#login_res").hide();
				},5000);
				$("#login_res").show();
			}
		},"json");
	
	}
});
</script>

<script type="text/javascript">
$("#username").focus(function(){
	if($(this).val()=="User Name"){
		$("#username").val("");
	}
	
});

$("#username").blur(function(){
	if($(this).val()==""){
		$("#username").val("User Name");
	}
	
});

$("#password").focus(function(){
	if($(this).val()=="Password"){
		$("#password").val("");
	}
	
});

$("#password").blur(function(){
	if($(this).val()==""){
		$("#password").val("Password");
	}
	
});

</script>
</body>
</html>