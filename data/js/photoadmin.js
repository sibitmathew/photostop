

$(document).ready(function(){
	

	function gettables(){
		$('.data_tbl').dataTable({  
		    "sPaginationType": "full_numbers",
		    "iDisplayLength": 10,
		    "oLanguage": {
		        "sLengthMenu": "<span class='lenghtMenu'> _MENU_</span><span class='lengthLabel'>Entries per page:</span>",    
		    },
		     "sDom": '<"table_top"fl<"clear">>,<"table_content"t>,<"table_bottom"p<"clear">>'
		    
		    });
		    $("div.table_top select").addClass('tbl_length');
		    $(".tbl_length").chosen({
		        disable_search_threshold: 4    
		    });	 
	}	
	
	//ajaxloading();
	function ajaxloading(){
		var ajaximage="<img style='margin-top:25%' src='"+urljs+"data/images/ajax-loader/ajax-loader(4).gif'/>";
		var height=$(document).height();
		var width=$(document).width();
		var obj=$(document.createElement('div')).attr("class","pacpop").css({"position":"absolute","top":"40%","left":"50%","width":"auto","height":"100px"});
		var objf=$(document.createElement('div')).attr('class','pacpopbac').css({'position':'absolute','top':'0px','left':'0px','opacity':'0.9','height':height,'width':width,'background':'#fff'});
		$("body").append(objf);
		$("body").append(obj);
		obj.html(ajaximage);		
	}
	
	function closeajax(){
		$(".pacpop").remove();
		$(".pacpopbac").remove();
	}
	
	function alldays(){
		$(".alldays").datepicker({
			//showOn: "button",
            //buttonImage: "../../images/calendar.gif",
            //buttonImageOnly: true,
            changeMonth: true,
            changeYear: true,
            yearRange: '1900:2020',
            dateFormat: 'dd-M-yy'
            	
		});
	}
	notpermitted();
	function notpermitted(){
		$(".notpermitted").click(function(){
			var act=$(this).attr('data-act');
			$.noty({text: 'Sorry!!.You are not permitted to perform '+act+' action!!  Please contact the administrator',layout: 'top-center',type: 'error'});
		});
	}
//Logout
	$("#logout").click(function(){
		$.cookie('photo_url','');
		window.location=url+"admin/logout";
	});
//Logout	
//get current page.
	var currenturl=$.cookie('photo_url');
	if(currenturl=="dashboard"){
		getdashboard();
	}
	else if(currenturl=="adminusers"){
		getadminusers();
	}
	else if(currenturl=="adminroles"){
		getadminroles();
	}
	else if(currenturl=="adminpermissions"){
		getadminpermissions();
	}
	else if(currenturl=="contents"){
		getcontents();
	}
	else if(currenturl=="faq"){
		getfaq();
	}
	else if(currenturl=="shippers"){
		getshippers();
	}
	else if(currenturl=="users"){
		getusers();
	}
	else if(currenturl=="photograpers"){
		getphotographers();
	}
	else if(currenturl=="photographergallery"){
		getphotgraphersgalleryonrefresh();
	}
	else if(currenturl=="images"){
		getimages();
	}
	else if(currenturl=="categories"){
		getcategories();
	}
	else if(currenturl=="frames"){
		getframes();
	}
	else if(currenturl=="papers"){
		getpapers();
	}
	else if(currenturl=="shop"){
		getshop();
	}
	else{
		getdashboard();
	}
	
//get current page.	
	$(".main_icon").click(function(e){
		var url=$(this).attr('data-url');
		if(url=="dashboard"){
			getdashboard();
		}
		else if(url=="adminusers"){
			getadminusers();
		}
		else if(url=="adminroles"){
			getadminroles();
		}
		else if(url=="adminpermissions"){
			getadminpermissions();
		}
		else if(url=="contents"){
			getcontents();
		}
		else if(url=="faq"){
			getfaq();
		}
		else if(url=="shippers"){
			getshippers();
		}
		else if(url=="users"){
			getusers();
		}
		else if(url=="photograpers"){
			getphotographers();
		}
		else if(url=="photographergallery"){
			getphotographersgallery();
		}
		else if(url=="images"){
			getimages();
		}
		else if(url=="categories"){
			getcategories();
		}
		else if(url=="frames"){
			getframes();
		}
		else if(url=="papers"){
			getpapers();
		}
		else if(url=="shop"){
			getshop();
		}
		else{
			return false;
		}
		
		$.cookie('photo_url', url);
		e.preventDefault();
	});
//Dashboard	
	function dashboardnavigation(){
		$(".dash_icon").click(function(e){
			var url=$(this).attr('data-url');
			
			if(url=="adminusers"){
				getadminusers();
			}
			else if(url=="adminroles"){
				getadminroles();
			}
			else if(url=="adminpermissions"){
				getadminpermissions();
			}
			
			else if(url=="users"){
				getusers();
			}
			else if(url=="photograpers"){
				getphotographers();
			}
			else if(url=="photographergallery"){
				getphotographersgallery();
			}
			else if(url=="images"){
				getimages();
			}
			else if(currenturl=="categories"){
				getcategories();
			}
			else if(url=="frames"){
				getframes();
			}
			else if(url=="papers"){
				getpapers();
			}
			else if(url=="shop"){
				getshop();
			}
			else{
				return false;
			}
			
			$.cookie('photo_url', url);
			e.preventDefault();
		});
	}
	
	function getdashboard(){
		ajaxloading();
	$.post(url+"admin/dashboard/getdashboard",'',function(data){
		
		
			if(data.session==1){
			closeajax();
				
				
			$("#loadtempview").html(data.result);
			}
			else{
				window.location.reload();
			}
			dashboardnavigation();
			notpermitted();
		},"json");
	}
//Dashboard
	
//Contents
	function getcontents(){
		ajaxloading();
		$.post(url+"admin/admin_users/getcontents",'',function(data){
			if(data.session==1){
				
				$("#loadtempview").html(data.result);
				closeajax();
			}
			else{
				window.location.reload();
			}
			
			gettables();
			editcontents();
			notpermitted();
		},"json");
	}
	
	function editcontents(){
		
		$('.editcontent').click(function(){
			var contentid=$(this).attr('data-id');
			ajaxloading();
			$.post(url+"admin/admin_users/editcontent",{'contentid':contentid},function(data){
				if(data.session==1){
					closeajax();
					$.modal(data.result);
					
					submitcontents();
				}else{
					window.location.reload();
				}	
				clearfields();
				
				$("#txt_editor").cleditor({
					width:"100%", 
					height:"auto",
					bodyStyle: "margin: 10px; font: 12px Arial,Verdana; cursor:text"
				});
				
			},"json");
			
		});
	}
	
	
function submitcontents(){
		
		$('#updatecontentform').validate({
			
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				contentName: { required: true },
				content: { required: true }
				
			},
			messages:{
				contentName: { required: "Please enter Content name" },
				content: { required: "Please enter Content"}
				
			},	
			submitHandler: function(){
				var content=$('#updatecontentform').serializeArray();
				$.post(url+"admin/admin_users/submitcontents",content,function(data){
					if(data.result>0){
						$.noty({text: 'Successfully Updated!',layout: 'top-center',type: 'success'});
					}
					else{
						$.noty({text: 'Unable to Update!!Error occured!',layout: 'top-center',type: 'error'});
					}
					$(".simplemodal-close").trigger("click");
					getcontents();
				},"json");
			
			}
		});
	}
	
//Contents	

//FAQ
	function getfaq(){
		ajaxloading();
		$.post(url+"admin/admin_users/getfaq",'',function(data){
			if(data.session==1){
				
				$("#loadtempview").html(data.result);
				closeajax();
			}
			else{
				window.location.reload();
			}
			faqaction();
			 addeditfaq();
			gettables();
			notpermitted();
		},"json");
	}
	
	
	function faqaction(){
		$(".faqaction").click(function(){
			var faqid=$(this).attr('data-id');
			var act=$(this).attr('data-act');
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Action Confirmation',
				'message'	: 'Do you want to '+act+' this FAQ ? <br> Delete action cannot be restored at a later time! Continue?',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
								$.post(url+"admin/admin_users/faqactions",{'faqid':faqid,'act':act},function(data){
									if(data.result>0){
										$.noty({text: 'Success !!!',layout: 'top-center',type: 'success'});
									}
									else{
										$.noty({text: 'Error occured!',layout: 'top-center',type: 'error'});
									}
									getfaq();
								},"json");
							elem.slideUp();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
	
	
	function addeditfaq(){
		
		$('.addeditfaq').click(function(){
			var faqid=$(this).attr('data-id');
			ajaxloading();
			$.post(url+"admin/admin_users/addeditfaq",{'faqid':faqid},function(data){
				if(data.session==1){
					closeajax();
					$.modal(data.result);
					submitfaq();
				}else{
					window.location.reload();
				}	
				clearfields();
				
				$("#txt_editor").cleditor({
					width:"100%", 
					height:"auto",
					bodyStyle: "margin: 10px; font: 12px Arial,Verdana; cursor:text"
				});
			},"json");
			
		});
	}
	
	
function submitfaq(){
		
		$('#updatefaqform').validate({
			
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				question: { required: true },
				answer: { required: true }
				
			},
			messages:{
				question: { required: "Please enter question" },
				answer: { required: "Please enter answer"}
				
			},	
			submitHandler: function(){
				var faq=$('#updatefaqform').serializeArray();
				$.post(url+"admin/admin_users/submitfaq",faq,function(data){
					if(data.result>0){
						$.noty({text: 'Successfully Added/Updated!',layout: 'top-center',type: 'success'});
					}
					else{
						$.noty({text: 'Unable to Add/Update!!Error occured!',layout: 'top-center',type: 'error'});
					}
					$(".simplemodal-close").trigger("click");
					getfaq();
				},"json");
			
			}
		});
	}

//FAQ

//Shippers
	function getshippers(){
		ajaxloading();
		$.post(url+"admin/admin_users/getshippers",'',function(data){
			if(data.session==1){
				
				$("#loadtempview").html(data.result);
				closeajax();
			}
			else{
				window.location.reload();
			}
			deleteshippers();
			addeditshipper();
			notpermitted();
			gettables();
			
		},"json");
	}
	
	
	function deleteshippers(){
		$(".deleteshipper").click(function(){
			var shipperId=$(this).attr('data-id');
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Action Confirmation',
				'message'	: 'Do you want to Delete this shipper ? <br> This action cannot be restored at a later time! Continue?',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
								$.post(url+"admin/admin_users/deleteshippers",{'shipperId':shipperId},function(data){
									if(data.result>0){
										$.noty({text: 'Successfully Deleted',layout: 'top-center',type: 'success'});
									}
									else{
										$.noty({text: 'Unable to Delete!!Error occured!',layout: 'top-center',type: 'error'});
									}
									getshippers();
								},"json");
							elem.slideUp();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
	
	
	function addeditshipper(){
		
		$('.addeditshipper').click(function(){
			var shipperId=$(this).attr('data-id');
			ajaxloading();
			$.post(url+"admin/admin_users/addeditshippers",{'shipperId':shipperId},function(data){
				if(data.session==1){
					closeajax();
					$.modal(data.result);
					submitshipper();
				}else{
					window.location.reload();
				}	
				clearfields();
				
				
			},"json");
			
		});
	}
	
	
function submitshipper(){
		
		$('#addeditshipperform').validate({
			
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				shipperName: { required: true },
				shipperAddress: { required: true },
				shipperUniqueNo: { required: true,number:true },
				shipperContat: { required: true, number:true,minlength: 9 },
				shipperEmail: { required: true,email:true }
			},
			messages:{
				shipperName: { required: "Please enter name" },
				shipperAddress: { required: "Please enter address"},
				shipperUniqueNo: { required: "Please enter unique no"},
				shipperContat: { required: "Please enter contact"},
				shipperEmail: { required: "Please enter email"}
			},	
			submitHandler: function(){
				var shipper=$('#addeditshipperform').serializeArray();
				$.post(url+"admin/admin_users/submitshipper",shipper,function(data){
					if(data.result>0){
						$.noty({text: 'Successfully Added/Updated!',layout: 'top-center',type: 'success'});
					}
					else{
						$.noty({text: 'Unable to Add/Update!!Error occured!',layout: 'top-center',type: 'error'});
					}
					$(".simplemodal-close").trigger("click");
					getshippers();
				},"json");
			
			}
		});
	}

//Shippers
	
//Admin Users	
	function getadminusers(){
		ajaxloading();
		$.post(url+"admin/admin_users/getadminusers",'',function(data){
			if(data.session==1){
				
				$("#loadtempview").html(data.result);
				closeajax();
			}
			else{
				window.location.reload();
			}
			
			gettables();
			addedituser();
			deleteaminusers();
			notpermitted();
		},"json");
	}
	
	function addedituser(){
	
		$('.addadminuser').click(function(){
			var adminId=$(this).attr('data-id');
			ajaxloading();
			$.post(url+"admin/admin_users/addeditusers",{'adminId':adminId},function(data){
				if(data.session==1){
					closeajax();
					$.modal(data.result);
					submitadminuser();
				}else{
					window.location.reload();
				}	
				clearfields();
				
				
			},"json");
			
		});
	}
//Clear all the fields	
	function clearfields(){
		$(".clear_button").click(function(){
			$(".clear_fields").val("");
			$(".clear_check").removeAttr("checked");
			$(".clear_uploads").text("");
		});
	}
//Clear all the fields		
	function submitadminuser(){
		
		$('#addedituserform').validate({
			
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				adminFullName: { required: true },
				userName: { required: true , minlength: 6,remote: {

					url: url+"admin/admin_users/checksername",
					type: "post",
					data:{
						edit: function() { 
							
							return $("[name=userName]").attr("data-edit");
						}
						
					}
					},
				},
				password: { required: true, minlength: 6 },
				confirm_password: { required: true, minlength: 6 ,equalTo:"[name=password]"},
				email: { required: true, email:true },
				phone: { required: true, number:true,minlength: 10 },
			},
			messages:{
				adminFullName: { required: "Please enter Full Admin name" },
				userName: { required: "Please enter Admin User name",minlength: "Username should contain atleast 6 characters!!",remote: "The user already exists in the database!!.Please try another one." },
				password: { required: "Please enter Password",minlength: "Password should contain atleast 6 characters!!"  },
				confirm_password: { required: "Please confirm the Password",minlength: "Password should contain atleast 6 characters!!",equalTo:"Please enter the same password to confirm!!." },
				email:{required: "Please Enter Email Id!!", email:"Please enter a valid emailID!!"},
				phone:{required: "Please Enter Contact No!!",number:"Please enter a valid Phone Number!!!",minlength:"Contact No should contain atleast 10 digits(including area code)" }
			},	
			submitHandler: function(){
				var admin=$('#addedituserform').serializeArray();
				$.post(url+"admin/admin_users/submitadminusers",admin,function(data){
					if(data.result>0){
						$.noty({text: 'Successfully Submitted!',layout: 'top-center',type: 'success'});
					}
					else{
						$.noty({text: 'Unable to Submit!!Error occured!',layout: 'top-center',type: 'error'});
					}
					$(".simplemodal-close").trigger("click");
					getadminusers();
				},"json");
			
			}
		});
	}
	
	
	function deleteaminusers(){
		$(".del_admin_user").click(function(){
			var adminId=$(this).attr('data-id');
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Action Confirmation',
				'message'	: 'Do you want to Delete this admin user ? <br> It cannot be restored at a later time! Continue?',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
								$.post(url+"admin/admin_users/deleteadminusers",{'adminId':adminId},function(data){
									if(data.result>0){
										$.noty({text: 'Successfully Deleted',layout: 'top-center',type: 'success'});
									}
									else{
										$.noty({text: 'Unable to Delete!!Error occured!',layout: 'top-center',type: 'error'});
									}
									getadminusers();
								},"json");
							elem.slideUp();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
	
	
	$("#myprofile").click(function(){
		ajaxloading();
		$.post(url+"admin/admin_users/getmyprofile",'',function(data){
			if(data.session==1){
				$.modal(data.result);
				
				submitmyprofile();
				closeajax();
			}else{
				window.location.reload();
			}
			clearfields();
		},"json");	
	});
	
	
	function submitmyprofile(){
		$('#myprofileform').validate({
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				adminFullName: { required: true },
				email: { required: true, email:true },
				phone: { required: true, number:true,minlength: 10 },
			},
			messages:{
				adminFullName: { required: "Please enter Full Admin name" },
				email:{required: "Please Enter Email Id!!", email:"Please enter a valid emailID!!"},
				phone:{required: "Please Enter Contact No!!",number:"Please enter a valid Phone Number!!!",minlength:"Contact No should contain atleast 10 digits(including area code)" }
			},	
			submitHandler: function(){
				var admin=$('#myprofileform').serializeArray();
				$.post(url+"admin/admin_users/submitmyprofile",admin,function(data){
					if(data.result>0){
						$.noty({text: 'Successfully Submitted!',layout: 'top-center',type: 'success'});
					}
					else{
						$.noty({text: 'Unable to Submit!!Error occured!',layout: 'top-center',type: 'error'});
					}
					$(".simplemodal-close").trigger("click");
					
				},"json");
			
			}
		});
	}
	
	$("#settings").click(function(){
		ajaxloading();
		$.post(url+"admin/admin_users/getmysettings",'',function(data){
			if(data.session==1){
				$.modal(data.result);
				submitmysettings();
				closeajax();
			}else{
				window.location.reload();
			}
			clearfields();
		},"json");
	});
	
	
	function submitmysettings(){
		$('#mysettingsform').validate({
			errorClass: 'error',
			validClass: 'valid',
			rules: {
			userName: { required: true ,minlength: 6 ,remote: {

			url: url+"admin/admin_users/checksername",
			type: "post",
			data:{
				edit: function() { 
					
					return $("[name=userName]").attr("data-edit");
				}
				
			}
			},
		},
		password: { required: true, minlength: 6 },
		confirm_password: { required: true, minlength: 6 ,equalTo:"[name=password]"},
			},
			messages:{
				userName: { required: "Please enter Admin User name",minlength: "Username should contain atleast 6 characters!!",remote: "The user already exists in the database!!.Please try another one." },
				password: { required: "Please enter Password",minlength: "Password should contain atleast 6 characters!!"  },
				confirm_password: { required: "Please confirm the Password",minlength: "Password should contain atleast 6 characters!!",equalTo:"Please enter the same password to confirm!!." },
			},	
			submitHandler: function(){
				var admin=$('#mysettingsform').serializeArray();
				$.post(url+"admin/admin_users/submitadminusers",admin,function(data){
					if(data.result>0){
						$.noty({text: 'Successfully Submitted!',layout: 'top-center',type: 'success'});
					}
					else{
						$.noty({text: 'Unable to Submit!!Error occured!',layout: 'top-center',type: 'error'});
					}
					$(".simplemodal-close").trigger("click");
					
				},"json");
			
			}
		});
	}
//Admin Users	
	
//Admin Roles	
	function getadminroles(){
		ajaxloading();
		$.post(url+"admin/admin_users/getadminroles",'',function(data){
			if(data.session==1){
				$("#loadtempview").html(data.result);
				closeajax();
			}
			else{
				window.location.reload();
			}
			gettables();
			geteditroles();
			deleterole();
			setrolestatus();
			notpermitted();
		},"json");
	}


	
	function geteditroles(){
		$('.rolesaddedit').click(function(){
			ajaxloading();
			var roleId=$(this).attr('data-id');
			$.post(url+"admin/admin_users/editadminroles",{'roleId':roleId},function(data){
				if(data.session==1){
					$.modal(data.result);
					closeajax();
				}else{
					window.location.reload();
				}	
				clearfields();
				submitrole();
			},"json");
			
		});
	}
	
	
	function submitrole(){
		$('#saverolesform').validate({
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				roleName: { required: true },
				roleType: { required: true },
				roleLimit: { required: true},
				rolesDescription: { required: true}
				
			},
			messages:{
				roleName: { required: "Please enter Role name" },
				roleType: { required: "Please enter Role Type" },
				roleLimit: { required: "Please enter Role Limit" },
				rolesDescription: { required: "Please Enter Role Description"}
				
			},	
			submitHandler: function(){
				var roleId=$("#roleId").val();
				var admin=$('#saverolesform').serializeArray();
				if(roleId==""){
					$.post(url+"admin/admin_users/saveadminroles",admin,function(data){
						if(data.result>0){
							$.noty({text: 'Successfully Submitted!',layout: 'top-center',type: 'success'});
						}
						else{
							$.noty({text: 'Unable to Submit!!Error occured!',layout: 'top-center',type: 'error'});
						}
						$(".simplemodal-close").trigger("click");
						getadminroles();
					},"json");
				}
				else{
					$.post(url+"admin/admin_users/updateroles",admin,function(data){
						if(data.result>0){
							$.noty({text: 'Successfully Submitted!',layout: 'top-center',type: 'success'});
						}
						else{
							$.noty({text: 'Unable to Submit!!Error occured!',layout: 'top-center',type: 'error'});
						}
						$(".simplemodal-close").trigger("click");
						getadminroles();
					},"json");
				}
				
			
			}
		});
	}
	
	
	function deleterole(){
		$(".roledelete").click(function(){
			var id=$(this).attr('data-id');
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Action Confirmation',
				'message'	: 'Do you want to Delete this admin role ? <br> It cannot be restored at a later time! Continue?',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
								$.post(url+"admin/admin_users/deleteroles",{'id':id},function(data){
									if(data.result>0){
										$.noty({text: 'Successfully Deleted',layout: 'top-center',type: 'success'});
									}
									else{
										$.noty({text: 'Unable to Delete!!Error occured!',layout: 'top-center',type: 'error'});
									}
									getadminroles();
								},"json");
							elem.slideUp();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
	
	
	
	function setrolestatus(){
		$(".setrolestatus").click(function(){
			var status=$(this).attr('data-status');
			var id=$(this).attr('data-id');
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Action Confirmation',
				'message'	: 'Do you want to '+status+' this admin role ?',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
								$.post(url+"admin/admin_users/setrolestatus",{'id':id,'status':status},function(data){
									if(data.result>0){
										$.noty({text: 'Successfully changed status',layout: 'top-center',type: 'success'});
									}
									else{
										$.noty({text: 'Unable to change!!Error occured!',layout: 'top-center',type: 'error'});
									}
									getadminroles();
								},"json");
							elem.slideUp();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
	
	
	
	
//Admin Roles	
	
//Admin Permissions		
	function getadminpermissions(){
		ajaxloading();
		$.post(url+"admin/admin_users/getadminpermissions",'',function(data){
			if(data.session==1){
				$("#loadtempview").html(data.result);
				closeajax();
			}
			else{
				window.location.reload();
			}
			gettables();
			geteditpermissions();
			notpermitted();
		},"json");
	}


	
	function geteditpermissions(){
		$('.permissionedit').click(function(){
			var adminId=$(this).attr('data-id');
			ajaxloading();
			$.post(url+"admin/admin_users/editadminpermissions",{'adminId':adminId},function(data){
				if(data.session==1){
					$.modal(data.result);
					closeajax();
				}else{
					window.location.reload();
				}
				
				clearfields();
				submitpermission();
			},"json");
			
		});
	}
	
	
	function submitpermission(){
		$('#updatepermissionform').validate({
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				roleId: { required: true },
				adminId: { required: true }
			},
			messages:{
				roleId: { required: "Please Select Role" },
				adminId: { required: "Please Select Admin" }
			},	
			submitHandler: function(){
				//var permission=$('#updatepermissionform').serializeArray();
				var adminId=$("[name=adminId]").val();
				var roleId=$("[name=roleId]").val();
					$.post(url+"admin/admin_users/updatepermission",{'adminId':adminId,'roleId':roleId},function(data){
						if(data.result>0){
							$.noty({text: 'Successfully Assigned!',layout: 'top-center',type: 'success'});
						}
						else{
							$.noty({text: 'Unable to Assign!!Error occured!',layout: 'top-center',type: 'error'});
						}
						$(".simplemodal-close").trigger("click");
						getadminpermissions();
					},"json");
			
				
				
			
			}
		});
	}
//Admin Permissions	
	
//Users 
	function getusers(){
		ajaxloading();
		$.post(url+"admin/users/getusers",'',function(data){
			if(data.session==1){
				$("#loadtempview").html(data.result);
				closeajax();
			}
			else{
				window.location.reload();
			}
			
			geteditusers();
			deleteuser();
			notpermitted();
			gettables();
		},"json");
	}


	
	function geteditusers(){
		$('.usersaddedit').click(function(){
			ajaxloading();
			var id=$(this).attr('data-id');
			$.post(url+"admin/users/editusers",{'id':id},function(data){
				if(data.session==1){
					$.modal(data.result);
					closeajax();
				}else{
					window.location.reload();
				}
				clearfields();
				submituser();
			},"json");
			
		});
	}
	
	
	function submituser(){
		$('#submituserform').validate({
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				userFullName: { required: true },
				userName: { required: true,minlength:6,remote: {

					url: url+"admin/admin_users/checksername",
					type: "post",
					data:{
						edit: function() { 
							
							return $("[name=userName]").attr("data-edit");
						}
						
					}
					},},
				password: { required: true,minlength:6 },
				confirm_password: { required: true,minlength:6,equalTo:"#password" },
				address: { required: true },
				city: { required: true },
				state: { required: true },
				country: { required: true },
				Email: { required: true,email:true },
				phoneNo: { required: true,minlength:10,number:true }
			},
			messages:{
				userFullName: { required: "Please Enter User Full Name!!" },
				userName: { required: "Please Enter User Name" ,minlength:"Username should contain atleast 6 characters!!",remote:"The username already exists please try another one!!"},
				password: { required: "Please Enter Password" ,minlength:"Password should contain atleast 6 characters!!" },
				confirm_password: { required: "Please Confirm the password!!" ,minlength:"Password should contain atleast 6 characters!!" ,equalTo:"Please enter the same Password to confirm!!"},
				address: { required: "Please Enter Address!!" },
				city: { required: "Please Enter City!!" },
				state: { required: "Please Enter State!!" },
				country: { required: "Please Enter Country!!" },
				Email: { required: "Please Enter Email!!",email:"Please enter a valid email!!"},
				phoneNo: { required: "Please Enter Phone No!!" ,minlength:"Phone No should contain atleast 10 digits including area code!!",number:"Please enter a valid Phone No."}
			},	
			submitHandler: function(){
				var user=$('#submituserform').serializeArray();
					$.post(url+"admin/users/submituser",user,function(data){
						if(data.result>0){
							$.noty({text: 'Successfully Saved!',layout: 'top-center',type: 'success'});
						}
						else{
							$.noty({text: 'Unable to Save!!Error occured!',layout: 'top-center',type: 'error'});
						}
						$(".simplemodal-close").trigger("click");
						getusers();
					},"json");
			
				
				
			
			}
		});
	}
	
	
	function deleteuser(){
		$(".deleteuser").click(function(){
			var id=$(this).attr('data-id');
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Action Confirmation',
				'message'	: 'Do you want to Delete this user ? <br> It cannot be restored at a later time! Continue?',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
								$.post(url+"admin/users/deleteuser",{'id':id},function(data){
									if(data.result>0){
										$.noty({text: 'Successfully Deleted',layout: 'top-center',type: 'success'});
									}
									else{
										$.noty({text: 'Unable to Delete!!Error occured!',layout: 'top-center',type: 'error'});
									}
									getusers();
								},"json");
							elem.slideUp();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
	
	
//Users	
//Photographers	
	function getphotographers(){
		ajaxloading();
		$.post(url+"admin/photographers/getphotographers",'',function(data){
			if(data.session==1){
				$("#loadtempview").html(data.result);
				closeajax();
			}
			else{
				window.location.reload();
			}
			
			geteditgetphotographers();
			getphotographersgallery();
			deletephotographer();
			notpermitted();
			gettables();
		},"json");
	}


	
	function geteditgetphotographers(){
		$('.photographersaddedit').click(function(){
			ajaxloading();
			var id=$(this).attr('data-id');
			$.post(url+"admin/photographers/editphotographers",{'id':id},function(data){
				if(data.session==1){
					$.modal(data.result);
					closeajax();
				}else{
					window.location.reload();
				}
				clearfields();
				submitphotographer();
			},"json");
			
		});
	}
	
	function submitphotographer(){
		$('#photographerform').validate({
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				photographerFullName: { required: true },
				photographerUserName: { required: true,minlength:6},
				photographerPassword: { required: true,minlength:6 },
				confirm_password: { required: true,minlength:6,equalTo:"#photographerPassword" },
				photographerAddress: { required: true },
				photographerCity: { required: true },
				photographerState: { required: true },
				photographerCountry: { required: true },
				photographerEmail: { required: true,email:true },
				photographerPhoneNo: { required: true,minlength:10,number:true }
			},
			messages:{
				photographerFullName: { required: "Please Enter Full Name!!" },
				photographerUserName: { required: "Please Enter User Name" ,minlength:"Username should contain atleast 6 characters!!" },
				photographerPassword: { required: "Please Enter Password" ,minlength:"Password should contain atleast 6 characters!!" },
				confirm_password: { required: "Please Confirm the password!!" ,minlength:"Password should contain atleast 6 characters!!" ,equalTo:"Please enter the same Password to confirm!!"},
				photographerAddress: { required: "Please Enter Address!!" },
				photographerCity: { required: "Please Enter City!!" },
				photographerState: { required: "Please Enter State!!" },
				photographerCountry: { required: "Please Enter Country!!" },
				photographerEmail: { required: "Please Enter Email!!",email:"Please enter a valid email!!"},
				photographerPhoneNo: { required: "Please Enter Phone No!!" ,minlength:"Phone No should contain atleast 10 digits including area code!!",number:"Please enter a valid Phone No."}
			},	
			submitHandler: function(){
				var photographer=$('#photographerform').serializeArray();
					$.post(url+"admin/photographers/submitphotographer",photographer,function(data){
						if(data.result>0){
							$.noty({text: 'Successfully Saved!',layout: 'top-center',type: 'success'});
						}
						else{
							$.noty({text: 'Unable to Save!!Error occured!',layout: 'top-center',type: 'error'});
						}
						$(".simplemodal-close").trigger("click");
						getphotographers();
					},"json");
			
				
				
			
			}
		});
	}
	
	function deletephotographer(){
		$(".deletephotographer").click(function(){
			var id=$(this).attr('data-id');
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Delete Confirmation',
				'message'	: 'You are about to delete this Photographer. <br />It cannot be restored at a later time! Continue?',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
							$.post(url+"admin/photographers/deletephotographer",{'id':id},function(data){
								if(data.result>0){
									$.noty({text: 'Successfully Deleted!',layout: 'top-center',type: 'success'});
								}
								else{
									$.noty({text: 'Unable to Delete!!Error occured!',layout: 'top-center',type: 'error'});
								}
								getphotographers();
							},"json");
							elem.slideUp();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){
						
						}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
	
	//$("select, input, a.button, button").uniform();	
//	$.colorbox({href:urljs+"uploaded_images/ohoopee3.jpg"});

	
	function backtophotographers(){
		$("#backtophotographers").click(function(){
			ajaxloading();
			$.post(url+"admin/photographers/getphotographers",'',function(data){
				if(data.session==1){
					$("#loadtempview").html(data.result);
					closeajax();
				}
				else{
					window.location.reload();
				}
				$.cookie('photo_url', 'photograpers');
				gettables();
				geteditgetphotographers();
				getphotographersgallery();
				deletephotographer();
			},"json");
		});
	}
	
	function gallery(){
		$(".mosaic-block").mosaic({animation : 'fade'});
	}
	
	function viewphotogallerypreview(){
		$(".photographer_gal_preview").click(function(){
			var file=$(this).attr('data-file');
			$.colorbox({href:urljs+"uploaded_images/"+file});
		});
	}
	
	function photgraphergallerydelete(){
		$(".photographer_gal_delete").click(function(){
			var id=$(this).attr('data-id');
			var elem = $(this).closest('.item');

			$.confirm({
				'title'		: 'Delete Confirmation',
				'message'	: 'You are about to delete this image. <br />It cannot be restored at a later time! Continue?',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
							elem.slideUp();
							$.post(url+"admin/photographers/deletephotographerimage",{'id':id},function(data){
								if(data.result>0){
									$.noty({text: 'Successfully Deleted!',layout: 'top-center',type: 'success'});
								}
								else{
									$.noty({text: 'Unable to Delete!!Error occured!',layout: 'top-center',type: 'error'});
								}
								getphotgraphersgalleryonrefresh();
							},"json");
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
	
	function getphotographersgallery(){
		$('.viewimages').click(function(){
			ajaxloading();
			var id=$(this).attr('data-id');
			$.post(url+"admin/photographers/getgallery",{'id':id},function(data){
				if(data.session==1){
					
					$("#loadtempview").html(data.result);
					closeajax();
					gallery();
					viewphotogallerypreview();
					photgraphergallerydelete();
					$.cookie('photographer_id', id);
					$.cookie('photo_url', 'photographergallery');
				}else{
					window.location.reload();
				}	
				backtophotographers();
			},"json");
			
		});
	}
	
	function getphotgraphersgalleryonrefresh(){
		var id=$.cookie('photographer_id');
		if(id!=''){
			ajaxloading();
			$.post(url+"admin/photographers/getgallery",{'id':id},function(data){
				if(data.session==1){
					$("#loadtempview").html(data.result);
					closeajax();
					gallery();
					viewphotogallerypreview();
					photgraphergallerydelete();
				}else{
					window.location.reload();
				}	
				backtophotographers();
			},"json");
		}
		else{
			getphotographers();
		}
		
	}
	//$.confirm("");
	
//Photographers	
//Images
	function getimages(){
		ajaxloading();
		$.post(url+"admin/images/getimages",'',function(data){
			if(data.session==1){
				$("#loadtempview").html(data.result);
				
				closeajax();
				addnewimages();
				imageactions();
				imagepopup();
				notpermitted();
				gettables();
			}
			else{
				window.location.reload();
			}
			
			
		},"json");
	}
	
	
//Categories
	
	function getcategories(){
		ajaxloading();
		$.post(url+"admin/images/getcategories",'',function(data){
			if(data.session==1){
				$("#loadtempview").html(data.result);
				
				closeajax();
				addnewcategory();
				deletecategory();
				notpermitted();
			}
			else{
				window.location.reload();
			}
			gettables();
			
		},"json");
	}
	
	
	function addnewcategory(){
		$('.addcategory').click(function(){
			var categoryId=$(this).attr('data-id');
			ajaxloading();
			$.post(url+"admin/images/addnewcategory",{'categoryId':categoryId},function(data){
				if(data.session==1){
					$.modal(data.result);
					closeajax();
					submitcategory();
					clearfields();
				}else{
					window.location.reload();
				}
				
			},"json");
			
		});
	}
	
	function submitcategory(){
		$('#addcategoryform').validate({
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				categoryName: { required: true },
				
				categoryDescription: { required: true},
				parentCategoryId: { required: true,number:true },
			},
			messages:{
				categoryName: { required: "Please Enter Category Name" },
				
				categoryDescription: { required: "Please enter Description" },
				parentCategoryId: { required: "Please Select parent category" },
				
			},	
			submitHandler: function(){
				var category=$('#addcategoryform').serializeArray();
					$.post(url+"admin/images/savecategory",category,function(data){
						if(data.result>0){
							$.noty({text: 'Successfully saved!',layout: 'top-center',type: 'success'});
						}
						else{
							$.noty({text: 'Unable to save!!Error occured!!',layout: 'top-center',type: 'error'});
						}
						$(".simplemodal-close").trigger("click");
						getcategories();
					},"json");
			
				
				
			
			}
		});
	}
	
	function deletecategory(){
		$(".deletecategory").click(function(){
			var categoryId=$(this).attr('data-id');
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Delete Confirmation',
				'message'	: 'Do you want to Delete this Category ?',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
								$.post(url+"admin/images/deletecategory",{'categoryId':categoryId},function(data){
									if(data.result>0){
										$.noty({text: 'Successfully Deleted!',layout: 'top-center',type: 'success'});
									}
									else{
										$.noty({text: 'Unable to Delete!! Error occured!',layout: 'top-center',type: 'error'});
									}
									getcategories();
								},"json");
							elem.slideUp();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
	
	function addnewimages(){
		$('.addimages').click(function(){
			var imageId=$(this).attr('data-id');
			var owner=$(this).attr('data-owner');
			ajaxloading();
			$.post(url+"admin/images/addnewimage",{'imageId':imageId,'owner':owner},function(data){
				if(data.session==1){
					$.modal(data.result);
					closeajax();
					alldays();
					imageupload();
					clearfields();
					submitimage();
					$(".select-multiple").chosen(); 
				}else{
					window.location.reload();
				}
				
			},"json");
			
		});
	}
	
	
	function submitimage(){
		$('#addimageform').validate({
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				imageName: { required: true },
				
				takenDate: { required: true},
				imagePrice: { required: true,number:true },
			},
			messages:{
				imageName: { required: "Please Enter Image Name" },
				
				takenDate: { required: "Please enter taken date" },
				imagePrice: { required: "Please Enter image price" },
				
			},	
			submitHandler: function(){
				var image=$('#addimageform').serializeArray();
					$.post(url+"admin/images/savenewimage",image,function(data){
						if(data.result>0){
							$.noty({text: 'Successfully saved!',layout: 'top-center',type: 'success'});
						}
						else{
							$.noty({text: 'Unable to save!!Error occured!!',layout: 'top-center',type: 'error'});
						}
						$(".simplemodal-close").trigger("click");
						getimages();
					},"json");
			
				
				
			
			}
		});
	}
	
	/*function imageupload(){
		$('#uploadimage').atUploadify({
    		uploader:urljs+"/data/js/atuploadify1_0.swf",
    		cancelImage:urljs+"data/images/cancel.png",
    		buttonImage:urljs+"data/images/browse.png",
    		folder	:"../../uploaded_images/",
    		uploadUrl:urljs+"/data/js/uploadify.php",
    		fileDesc	:	"Image Files(*.jpg,*.png,*.jpeg,)",
			fileExt		:	"*.jpg;*.png;*.jpeg;",
    		height	: 29,
    		width	:64,
    		auto	: true,	
    		fileSize : 500*1024*1024,
    		preview:'none',
    		onComplete: function(event,status,imgs){
    		$("[name=fileName]").val(imgs);
    		$("#imagefilename").text(status)
    		$("#uploadedfilename").val(status);
    		},
    		onRemove:function(event,status,imgs){
    			$("#imagefilename").val(imgs);
   			}
    	});
	}*/
	
	function imageupload(){
		$("#uploadimage").pluploadQueue({
            // General settings
            runtimes : 'html5,flash,silverlight',
            url : urljs+'upload.php',
            max_file_size : '50mb',
            chunk_size : '1mb',
            unique_names : true,
    
            // Specify what files to browse for
            filters : [
                {title : "Image files", extensions : "jpg,gif,png,bmp,tif"}
                /*{title : "Zip files", extensions : "zip"},
                {title : "Document files", extensions : "doc,docx,xls,xlsx,pdf,txt"}*/
            ],
    
            // Flash settings
            flash_swf_url : urljs+'/data/lib/plupload/js/plupload.flash.swf',
    
            // Silverlight settings
            silverlight_xap_url : urljs+'/data/lib/plupload/js/plupload.silverlight.xap',
            init : {
			 FileUploaded: function(up, file, info) {
			                // Called when a file has finished uploading
			               // log('[FileUploaded] File:', file, "Info:", info);
			              // alert(file.name);
			             //  alert(file.id);
				$("[name=fileId]").val(file.id);
				$("[name=fileName]").val(file.name);
				
				/*$('<input type="hidden" name="fileId" value="'+file.id+'"/>').appendTo("#temp_attach");
				$('<input type="hidden" name="fileName" value="'+file.name+'"/>').appendTo("#temp_attach");*/
				
			   },
		}
            
        });
	}
	
	
	function imageactions(){
		$(".imageactions").click(function(){
			var imageId=$(this).attr('data-id');
			var action= $(this).attr('data-act');
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Action Confirmation',
				'message'	: 'Do you want to '+action+' this image ?',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
								$.post(url+"admin/images/imageactions",{'imageId':imageId,'action':action},function(data){
									if(data.result>0){
										$.noty({text: 'Successfully '+action+'ed!',layout: 'top-center',type: 'success'});
									}
									else{
										$.noty({text: 'Unable to '+action+'!!Error occured!',layout: 'top-center',type: 'error'});
									}
									getimages();
								},"json");
							elem.slideUp();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
	
	function imagepopup(){
		$(".viewimage").click(function(){
			var imageId=$(this).attr('data-id');
			var file=$(this).attr('data-file');
			$.colorbox({href:urljs+"uploaded_images/"+file});
			$.post(url+"admin/images/setviewstatus",{'imageId':imageId},function(data){
				getimages();
				
			},"json");	
		});
	}
	
//Images	
	
//Frames
	function getframes(){
		ajaxloading();
		$.post(url+"admin/frames/getframes",'',function(data){
			if(data.session==1){
				$("#loadtempview").html(data.result);
				closeajax();
			}
			else{
				window.location.reload();
			}
			
			viewframe();
			addnewframes();
			deleteframe();
			notpermitted();
			gettables();
		},"json");
	}
	
	function viewframe(){
		$(".viewframe").click(function(){
			var file=$(this).attr('data-file');
			$.colorbox({href:urljs+"uploaded_frames/"+file});
		});
	}
	
	function addnewframes(){
		$('.addframes').click(function(){
			ajaxloading();
			var frameId=$(this).attr('data-id');
			$.post(url+"admin/frames/addnewframe",{'frameId':frameId},function(data){
				if(data.session==1){
					$.modal(data.result);
					closeajax();
					submitframe();
				}else{
					window.location.reload();
				}
				
				frameupload_landscape_mount();
				frameupload_landscape_omount();
				frameupload_portrait_mount();
				frameupload_portrait_omount();
				frameedgeupload();
				clearfields();
			},"json");
			
		});
	}
	
	function frameupload_landscape_mount(){
		$('#uploadframe_landscape_mount').atUploadify({
    		uploader:urljs+"/data/js/atuploadify1_0.swf",
    		cancelImage:urljs+"data/images/cancel.png",
    		buttonImage:urljs+"data/images/browse.png",
    		folder	:"../../uploaded_frames/",
    		uploadUrl:urljs+"/data/js/uploadify.php",
    		fileDesc	:	"Image Files(*.jpg,*.png,*.jpeg,)",
			fileExt		:	"*.jpg;*.png;*.jpeg;",
    		height	: 29,
    		width	:64,
    		auto	: true,	
    		fileSize : 500*1024*1024,
    		preview:'none',
    		onComplete: function(event,status,imgs){
    		$("[name=frameFile_landscape_mount]").val(imgs);
    		$("#framefilename_landscape_mount").val(status);
    		
    		}
    		/*onRemove:function(event,status,imgs){
    			$("#imagefilename").val(imgs);
   			}*/
    	});
	}
	
	function frameupload_landscape_omount(){
		$('#uploadframe_landscape_omount').atUploadify({
    		uploader:urljs+"/data/js/atuploadify1_0.swf",
    		cancelImage:urljs+"data/images/cancel.png",
    		buttonImage:urljs+"data/images/browse.png",
    		folder	:"../../uploaded_frames/",
    		uploadUrl:urljs+"/data/js/uploadify.php",
    		fileDesc	:	"Image Files(*.jpg,*.png,*.jpeg,)",
			fileExt		:	"*.jpg;*.png;*.jpeg;",
    		height	: 29,
    		width	:64,
    		auto	: true,	
    		fileSize : 500*1024*1024,
    		preview:'none',
    		onComplete: function(event,status,imgs){
    		$("[name=frameFile_landscape_omount]").val(imgs);
    		$("#framefilename_landscape_omount").val(status);
    		
    		}
    		/*onRemove:function(event,status,imgs){
    			$("#imagefilename").val(imgs);
   			}*/
    	});
	}
	
	
	function frameupload_portrait_mount(){
		$('#uploadframe_portrait_mount').atUploadify({
    		uploader:urljs+"/data/js/atuploadify1_0.swf",
    		cancelImage:urljs+"data/images/cancel.png",
    		buttonImage:urljs+"data/images/browse.png",
    		folder	:"../../uploaded_frames/",
    		uploadUrl:urljs+"/data/js/uploadify.php",
    		fileDesc	:	"Image Files(*.jpg,*.png,*.jpeg,)",
			fileExt		:	"*.jpg;*.png;*.jpeg;",
    		height	: 29,
    		width	:64,
    		auto	: true,	
    		fileSize : 500*1024*1024,
    		preview:'none',
    		onComplete: function(event,status,imgs){
    		$("[name=frameFile_portrait_mount]").val(imgs);
    		$("#framefilename_portrait_mount").val(status);
    		
    		}
    		/*onRemove:function(event,status,imgs){
    			$("#imagefilename").val(imgs);
   			}*/
    	});
	}
	
	
	function frameupload_portrait_omount(){
		$('#uploadframe_portrait_omount').atUploadify({
    		uploader:urljs+"/data/js/atuploadify1_0.swf",
    		cancelImage:urljs+"data/images/cancel.png",
    		buttonImage:urljs+"data/images/browse.png",
    		folder	:"../../uploaded_frames/",
    		uploadUrl:urljs+"/data/js/uploadify.php",
    		fileDesc	:	"Image Files(*.jpg,*.png,*.jpeg,)",
			fileExt		:	"*.jpg;*.png;*.jpeg;",
    		height	: 29,
    		width	:64,
    		auto	: true,	
    		fileSize : 500*1024*1024,
    		preview:'none',
    		onComplete: function(event,status,imgs){
    		$("[name=frameFile_portrait_omount]").val(imgs);
    		$("#framefilename_portrait_omount").val(status);
    		
    		}
    		/*onRemove:function(event,status,imgs){
    			$("#imagefilename").val(imgs);
   			}*/
    	});
	}
	
	function frameedgeupload(){
		$('#uploadedgeframe').atUploadify({
    		uploader:urljs+"/data/js/atuploadify1_0.swf",
    		cancelImage:urljs+"data/images/cancel.png",
    		buttonImage:urljs+"data/images/browse.png",
    		folder	:"../../uploaded_frames/",
    		uploadUrl:urljs+"/data/js/uploadify.php",
    		fileDesc	:	"Image Files(*.jpg,*.png,*.jpeg,)",
			fileExt		:	"*.jpg;*.png;*.jpeg;",
    		height	: 29,
    		width	:64,
    		auto	: true,	
    		fileSize : 500*1024*1024,
    		preview:'none',
    		onComplete: function(event,status,imgs){
    		$("[name=frameEdgeFile]").val(imgs);
    		$("#frameEdgeFileName").val(status);
    		cosole.log(imgs);
    		}
    		/*onRemove:function(event,status,imgs){
    			alert(imgs);
   			}*/
    	});
	}
	function submitframe(){
		$('#addframeform').validate({
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				frameName: { required: true },
				
				frameHeight: { required: true},
				frameWidth: { required: true },
				frameUnit: { required: true },
				frameFile_landscape_mount_price: { required: true },
				frameFile_landscape_omount_price: { required: true },
				frameFile_portrait_mount_price: { required: true },
				frameFile_portrait_omount_price: { required: true }
			},
			messages:{
				frameName: { required: "Please Enter Frame Name" },
				
				frameHeight: { required: "Please enter Frame Height" },
				frameWidth: { required: "Please Enter Frame Width" },
				frameUnit: { required: "Please Enter Frame Unit" },
				frameFile_landscape_mount_price: { required: "Please Enter landscape mount Frame price" },
				frameFile_landscape_omount_price: { required: "Please Enter landscape omount Frame price" },
				frameFile_portrait_mount_price: { required: "Please Enter portrait mount Frame price" },
				frameFile_portrait_omount_price: { required: "Please Enter portrait omount Frame price" }
			},	
			submitHandler: function(){
				var frameFile_landscape_mount=$("[name=frameFile_landscape_mount]").val();
				var frameFile_landscape_omount=$("[name=frameFile_landscape_omount]").val();
				var frameFile_portrait_mount=$("[name=frameFile_portrait_mount]").val();
				var frameFile_portrait_omount=$("[name=frameFile_portrait_omount]").val();
				var frameEdgeFile=$("[name=frameEdgeFile]").val();
				
				if(frameFile_landscape_mount!=""&&frameFile_landscape_omount!=""&&frameFile_portrait_mount!=""&&frameFile_portrait_omount!=""
					&&frameEdgeFile!=""){
					var frame=$('#addframeform').serializeArray();
					$.post(url+"admin/frames/savenewframe",frame,function(data){
						if(data.result>0){
							$.noty({text: 'Successfully saved!',layout: 'top-center',type: 'success'});
						}
						else{
							$.noty({text: 'Unable to save!!Error occured!!',layout: 'top-center',type: 'error'});
						}
						$(".simplemodal-close").trigger("click");
						getframes();
					},"json");
				}
				else{
					$.noty({text: 'Please upload all the frame images!',layout: 'topCenter',type: 'error'});
				}
				
			
				
				
			
			}
		});
	}
	
	function deleteframe(){
		$(".deleteframe").click(function(){
			var frameId=$(this).attr('data-id');
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Action Confirmation',
				'message'	: 'Do you want to Delete this frame ? <br> This action cannot be undone!!',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
								$.post(url+"admin/frames/deleteframe",{'frameId':frameId},function(data){
									if(data.result>0){
										$.noty({text: 'Successfully Deleted',layout: 'top-center',type: 'success'});
									}
									else{
										$.noty({text: 'Unable to Delete!!Error occured!',layout: 'top-center',type: 'error'});
									}
									getframes();
								},"json");
							elem.slideUp();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
//Frames	
	
//Papers
	function getpapers(){
		ajaxloading();
		$.post(url+"admin/papers/getpapers",'',function(data){
			if(data.session==1){
				$("#loadtempview").html(data.result);
				closeajax();
			}
			else{
				window.location.reload();
			}
			gettables();
			addnewpaper();
			deletepaper();
			notpermitted();
		},"json");
	}
	
	
	function addnewpaper(){
		$('.papersadd').click(function(){
			var paperId=$(this).attr('data-id');
			ajaxloading();
			$.post(url+"admin/papers/addnewpaper",{'paperId':paperId},function(data){
				if(data.session==1){
					$.modal(data.result);
					closeajax();
					submitpaper();
				}else{
					window.location.reload();
				}
				
				clearfields();
			},"json");
			
		});
	}
	
	function submitpaper(){
		$('#addpaperform').validate({
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				paperName: { required: true },
				paperType: { required: true},
				paperQuality: { required: true},
				paperWidth: { required: true },
				paperHeight: { required: true },
				paperUnit: { required: true },
				paperPrice: { required: true }
			},
			messages:{
				paperName: { required: "Please Enter Paper Name" },
				paperType: { required: "Please Enter Paper Type" },
				paperQuality: { required: "Please enter Paper Quality" },
				paperWidth: { required: "Please Enter Paper Width" },
				paperHeight: { required: "Please Enter Paper Height" },
				paperUnit: { required: "Please Enter Paper Unit" },
				paperPrice: { required: "Please Enter Paper Price" }
			},	
			submitHandler: function(){
				var paper=$('#addpaperform').serializeArray();
					$.post(url+"admin/papers/savenewpaper",paper,function(data){
						if(data.result>0){
							$.noty({text: 'Successfully saved!',layout: 'top-center',type: 'success'});
						}
						else{
							$.noty({text: 'Unable to save!!Error occured!!',layout: 'top-center',type: 'error'});
						}
						$(".simplemodal-close").trigger("click");
						getpapers();
					},"json");

			}
		});
	}
	
	function deletepaper(){
		$(".deletepaper").click(function(){
			var paperId=$(this).attr('data-id');
			var elem = $(this).closest('.item');
			$.confirm({
				'title'		: 'Action Confirmation',
				'message'	: 'Do you want to Delete this paper ? <br> This action cannot be undone!!',
				'buttons'	: {
					'Yes'	: {
						'class'	: 'blue',
						'action': function(){
								$.post(url+"admin/papers/deletepaper",{'paperId':paperId},function(data){
									if(data.result>0){
										$.noty({text: 'Successfully Deleted',layout: 'top-center',type: 'success'});
									}
									else{
										$.noty({text: 'Unable to Delete!!Error occured!',layout: 'top-center',type: 'error'});
									}
									getpapers();
								},"json");
							elem.slideUp();
						}
					},
					'No'	: {
						'class'	: 'gray',
						'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
					}
				}
			});
		});
	}
//Papers	
	
//Shop
	
	function getshop(){
		ajaxloading();
		$.post(url+"admin/shop/getshop",'',function(data){
			if(data.session==1){
				$("#loadtempview").html(data.result);
				closeajax();
			}
			else{
				window.location.reload();
			}
			
			orderactions();
			notpermitted();
			gettables();
		},"json");
	}
	
	function orderactions(){
		$(".orderactions").click(function(){
			var act=$(this).attr("data-act");
			var id=$(this).attr("data-id");
			if(act=="process")
			{	ajaxloading();
				$.post(url+"admin/shop/editprocessing",{'id':id},function(data){
					$.modal(data.result);
					closeajax();
					updateorder();
					clearfields();
				},"json");
				
			}else if(act=="done")
			{
				
				var elem = $(this).closest('.item');
				$.confirm({
					'title'		: 'Action Confirmation',
					'message'	: 'Do you want to change delivery status ?',
					'buttons'	: {
						'Yes'	: {
							'class'	: 'blue',
							'action': function(){
									$.post(url+"admin/shop/updatedeliverystatus",{'id':id},function(data){
										if(data.result>0){
											$.noty({text: 'Successfully Changed status',layout: 'top-center',type: 'success'});
										}
										else{
											$.noty({text: 'Unable to Change!!Error occured!',layout: 'top-center',type: 'error'});
										}
										getshop();
									},"json");
								elem.slideUp();
							}
						},
						'No'	: {
							'class'	: 'gray',
							'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
						}
					}
				});
				
				
				
			}else{
				
				var elem = $(this).closest('.item');
				$.confirm({
					'title'		: 'Action Confirmation',
					'message'	: 'Do you want to delete this order ? <br> This action cannot be restored!!',
					'buttons'	: {
						'Yes'	: {
							'class'	: 'blue',
							'action': function(){
									$.post(url+"admin/shop/deleteorder",{'id':id},function(data){
										if(data.result>0){
											$.noty({text: 'Successfully Deleted',layout: 'top-center',type: 'success'});
										}
										else{
											$.noty({text: 'Unable to Delete!!Error occured!',layout: 'top-center',type: 'error'});
										}
										getshop();
									},"json");
								elem.slideUp();
							}
						},
						'No'	: {
							'class'	: 'gray',
							'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
						}
					}
				});
				
			}
			
		});
	}
	
	function updateorder(){
		$('#updateorderform').validate({
			errorClass: 'error',
			validClass: 'valid',
			rules: {
				orderNo: { required: true },
				shipperId: { required: true},
				totalPrice: { required: true},
				shipperPrice: { required: true },
				paymentStatus: { required: true },
				deliveryStatus: { required: true }
				
			},
			messages:{
				orderNo: { required: "Please Enter Order NO" },
				shipperId: { required: "Please Select a courier" },
				totalPrice: { required: "Please enter total price" },
				shipperPrice: { required: "Please Enter shipper price" },
				paymentStatus: { required: "Please select payment status" },
				deliveryStatus: { required: "Please select delivery status" }
				
			},	
			submitHandler: function(){
				var order=$('#updateorderform').serializeArray();
					$.post(url+"admin/shop/updateorder",order,function(data){
						if(data.result>0){
							$.noty({text: 'Successfully updated!',layout: 'top-center',type: 'success'});
						}
						else{
							$.noty({text: 'Unable to update!!Error occured!!',layout: 'top-center',type: 'error'});
						}
						$(".simplemodal-close").trigger("click");
						getshop();
					},"json");

			}
		});
	}
//Shop	
});