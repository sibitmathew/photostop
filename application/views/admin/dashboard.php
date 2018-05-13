<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Admin - Dashboard</title>
<script type="text/javascript">
var urljs="<?php echo base_url()?>";
var url="<?php echo site_url()?>";  

</script>
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

<link rel="stylesheet" href="<?php echo base_url();?>/data/lib/plupload/js/jquery.plupload.queue/css/plupload-gebo.css" />
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
<script type="text/javascript" src="<?php echo base_url()?>/data/js/jquery.atuploadify.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/data/js/swfobject.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>/data/lib/plupload/js/plupload.full.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/data/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.full.js"></script>
<script src="<?php echo base_url();?>/data/js/photoadmin.js"></script>
</head>
<body id="theme-default" class="full_block">
<div id="left_bar">

	<div id="sidebar">
		<div id="secondary_nav">
			<ul id="sidenav" class="accordion_mnu collapsible">
				<li><a href="#"  ><span class="nav_icon computer_imac" ></span> <span class="main_icon" data-url="dashboard">Dashboard</span></a>
				
				</li>
				<?php $status=$this->photoadminmodel->getadminuserbyid($this->session->userdata('id'));
					$roleId=$status->row()->roleId;
					$status=$status->row()->status;
				?>
				<?php if ($roleId!="0"){?>
					<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"1");?>
					<?php if($permission->row()->view=="1"){?>
						<li><a href="#"><span class="nav_icon frames"></span> Admin<span class="alert_notify blue">6</span><span class="up_down_arrow">&nbsp;</span></a>
						<ul class="acitem">
							<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="adminusers">Admin Users</span></a></li>
							<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="adminroles">Admin Roles</span></a></li>
							<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="adminpermissions">Admin Permissions</span></a></li>
							<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="contents">Contents</span></a></li>
							<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="faq">FAQ</span></a></li>
							<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="shippers">Shippers</span></a></li>
						</ul>
						</li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon frames"></span><span class="notpermitted" data-act="view"> Admin </span><span class="alert_notify blue">3</span><span class="up_down_arrow">&nbsp;</span></a></li>
					<?php }?>
				<?php }else{?>
					<?php if ($status=="0"){?>
						<li><a href="#"><span class="nav_icon frames"></span> Admin<span class="alert_notify blue">6</span><span class="up_down_arrow">&nbsp;</span></a>
							<ul class="acitem">
								<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="adminusers">Admin Users</span></a></li>
								<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="adminroles">Admin Roles</span></a></li>
								<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="adminpermissions">Admin Permissions</span></a></li>
								<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="contents">Contents</span></a></li>
								<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="faq">FAQ</span></a></li>
								<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="shippers">Shippers</span></a></li>
							</ul>
							</li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon frames"></span><span class="notpermitted" data-act="view"> Admin </span><span class="alert_notify blue">3</span><span class="up_down_arrow">&nbsp;</span></a></li>
					<?php }?>
				<?php }?>
				
				
				
				
				<?php if ($roleId!="0"){?>
					<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"2");?>
					<?php if($permission->row()->view=="1"){?>
						<li><a href="#"><span class="nav_icon blocks_images"></span><span class="main_icon" data-url="users"> Users</span></a>
							
				</li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon blocks_images"></span><span class="notpermitted" data-act="view"> Users</span></a>
				</li>
					<?php }?>
				<?php }else{?>
					<?php if ($status=="0"){?>
						<li><a href="#"><span class="nav_icon blocks_images"></span><span class="main_icon" data-url="users"> Users</span></a>
				</li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon blocks_images"></span><span class="notpermitted" data-act="view"> Users</span></a>
				</li>
					<?php }?>
				<?php }?>
				
				
				<?php if ($roleId!="0"){?>
					<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"3");?>
					<?php if($permission->row()->view=="1"){?>
						<li><a href="#"><span class="nav_icon list_images"></span><span class="main_icon" data-url="photograpers">Photograpers</span></a></li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon list_images"></span><span class="notpermitted" data-act="view">Photograpers</span></a></li>
					<?php }?>
				<?php }else{?>
					<?php if ($status=="0"){?>
						<li><a href="#"><span class="nav_icon list_images"></span><span class="main_icon" data-url="photograpers">Photograpers</span></a></li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon list_images"></span><span class="notpermitted" data-act="view">Photograpers</span></a></li>
					<?php }?>
				<?php }?>
				
				<?php if ($roleId!="0"){?>
					<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"4");?>
					<?php if($permission->row()->view=="1"){?>
						<li><a href="#"><span class="nav_icon coverflow"></span><span class="" data-url="images">Images<span class="alert_notify blue">2</span><span class="up_down_arrow">&nbsp;</span></span></a>
						<ul class="acitem">
								<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="images">Images</span></a></li>
								<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="categories">Categories</span></a></li>
							</ul>	
						</li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon coverflow"></span><span class="notpermitted" data-act="view">Images</span></a></li>
					<?php }?>
				<?php }else{?>
					<?php if ($status=="0"){?>
						<li><a href="#"><span class="nav_icon coverflow"></span><span class="" data-url="">Images<span class="alert_notify blue">2</span><span class="up_down_arrow">&nbsp;</span></span></a>
						<ul class="acitem">
								<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="images">Images</span></a></li>
								<li><a href="#"><span class="list-icon">&nbsp;</span><span class="main_icon" data-url="categories">Categories</span></a></li>
							</ul>	
						</li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon coverflow"></span><span class="notpermitted" data-act="view">Images</span></a></li>
					<?php }?>
				<?php }?>
				
				<?php if ($roleId!="0"){?>
					<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"5");?>
					<?php if($permission->row()->view=="1"){?>
						<li><a href="#"><span class="nav_icon list_image"></span><span class="main_icon" data-url="frames">Frames</span></a></li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon list_image"></span><span class="notpermitted" data-act="view">Frames</span></a></li>
					<?php }?>
				<?php }else{?>
					<?php if ($status=="0"){?>
						<li><a href="#"><span class="nav_icon list_image"></span><span class="main_icon" data-url="frames">Frames</span></a></li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon list_image"></span><span class="notpermitted" data-act="view">Frames</span></a></li>
					<?php }?>
				<?php }?>
				
				
				<?php if ($roleId!="0"){?>
					<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"6");?>
					<?php if($permission->row()->view=="1"){?>
						<li><a href="#"><span class="nav_icon documents"></span><span class="main_icon" data-url="papers">Papers</span></a>
				
				</li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon documents"></span><span class="notpermitted" data-act="view">Papers</span></a>
				
				</li>
					<?php }?>
				<?php }else{?>
					<?php if ($status=="0"){?>
						<li><a href="#"><span class="nav_icon documents"></span><span class="main_icon" data-url="papers">Papers</span></a>
				
				</li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon documents"></span><span class="notpermitted" data-act="view">Papers</span></a>
				
				</li>
					<?php }?>
				<?php }?>
				
				
				<?php if ($roleId!="0"){?>
					<?php $permission=$this->photoadminmodel->getadminpermissions($roleId,"7");?>
					<?php if($permission->row()->view=="1"){?>
						<li><a href="#"><span class="nav_icon frames"></span><span class="main_icon" data-url="shop">Shop</span></a>
				
				</li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon frames"></span><span class="notpermitted" data-act="view">Shop</span></a>
				
				</li>
					<?php }?>
				<?php }else{?>
					<?php if ($status=="0"){?>
						<li><a href="#"><span class="nav_icon frames"></span><span class="main_icon" data-url="shop">Shop</span></a>
				
				</li>
					<?php }else{?>
						<li><a href="#"><span class="nav_icon frames"></span><span class="notpermitted" data-act="view">Shop</span></a>
				
				</li>
					<?php }?>
				<?php }?>
				
				
				
				
				
				
				
			</ul>
		</div>
	</div>
</div>
<div id="container">
	<div id="header" class="blue_lin">
		<div class="header_left">
			<div class="logo">
				<img src="<?php echo base_url();?>data/images/logo.png" width="160" height="60" alt="Ekra">
			</div>
			<div id="responsive_mnu">
				<a href="#responsive_menu" class="fg-button" id="hierarchybreadcrumb"><span class="responsive_icon"></span>Menu</a>
				<div id="responsive_menu" class="hidden">
					<ul>
						<li><a href="#"><span class="main_icon" data-url="dashboard"> Dashboard</span></a>
						
						</li>
						<li><a href="#"> Admin</a>
						<ul>
							<li><a href="#"><span class="main_icon" data-url="adminusers">Admin Users</span></a></li>
							<li><a href="#"><span class="main_icon" data-url="adminroles">Admin Roles</span></a></li>
							<li><a href="#"><span class="main_icon" data-url="adminpermissions">Admin Permissions</span></a></li>
							
						</ul>
						</li>
						<li ><a href="#" class="main_icon" data-url="users"> Users</a></li>
						<li><a href="#"><span class="main_icon" data-url="photograpers">Photograpers</span></a></li>
						<li><a href="#"><span class="main_icon" data-url="images">Images</span></a></li>
						<li><a href="#"><span class="main_icon" data-url="frames">Frames</span></a></li>
						<li><a href="#"><span class="main_icon" data-url="papers">Papers</span></a></li>
						<li><a href="#"><span class="main_icon" data-url="shop">Shop</span></a>
						</li>
						
						
						
					</ul>
				</div>
			</div>
		</div>
		<div class="header_right">
			
			<div id="user_nav">
				<ul>
					<li class="user_thumb"><a href="#"><span class="icon"><img src="<?php echo base_url();?>/data/images/user_thumb.png" width="30" height="30" alt="User"></span></a></li>
					<li class="user_info"><span class="user_name"><?php echo $this->session->userdata('adminFullName');?></span><span><a href="#" id="myprofile">My Profile</a> &#124; <a href="#" id="settings">Settings</a> </span></li>
					<li class="logout"><a href="#" id="logout"><span class="icon"></span>Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="page_title">
		<span class="title_icon"><span class="coverflow"></span></span>
		<h3>Admin</h3>
		<!--<div class="top_search">
			<form action="#" method="post">
				<ul id="search_box">
					<li>
					<input name="" type="text" class="search_input" id="suggest1" placeholder="Search...">
					</li>
					<li>
					<input name="" type="submit" value="" class="search_btn">
					</li>
				</ul>
			</form>
		</div>
	--></div>
	<div id="content">
		<div class="grid_container">
			<div class="grid_12 full_block" id="loadtempview">
				
			</div>
			
			
					
		</div>
		<span class="clear"></span>
	</div>
</div>
</body>
</html>