

$(document).ready(function(){
	
	
	jQuery.browser = {};
	jQuery.browser.mozilla = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase());
	jQuery.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase());
	jQuery.browser.opera = /opera/.test(navigator.userAgent.toLowerCase());
	//jQuery.browser.msie = /msie/.test(navigator.userAgent.toLowerCase());
	
	if(jQuery.browser.webkit=="false"||jQuery.browser.mozilla=="false"||jQuery.browser.opera=="false"){
		alert("Please use newer versions of Mozilla Firefox,Google Chrome or Opera for better browsing.");
	}
	
	
//Image gallery pagination functions
	
	if($("#container_page").length>0){
		loadData(1);
	}
	
	
	  function loadData(page){
          var p="page="+page;
          loading_show(); 
			
          $.post(url+"Photographyprints/getpaginatedgallery",{'p':p},function(data){
          	 $("#container_page").html(data.result);
          	 $("body").scrollTop();
          	pagination();
          	gobutton();
          	loading_hide();
          },"json");	    
                             
         
          
      }
	
	  function pagination(){
		  $('#container_page .pagination li.active').click(function(){
	          var page = $(this).attr('p');
	          loadData(page);
	          $("body").scrollTop();
	      }); 
	  }
	  
	  function gobutton(){
		  $('#go_btn').click(function(){
	          var page = parseInt($('.goto').val());
	          var no_of_pages = parseInt($('.total').attr('a'));
	          if(page != 0 && page <= no_of_pages){
	              loadData(page);
	              $("body").scrollTop();
	          }else{
	              alert('Enter a PAGE between 1 and '+no_of_pages);
	              $('.goto').val("").focus();
	              return false;
	          }
	          
	      });
	  }          
//Loader
	  function loading_show(){
          $('.loading').html("<img src='"+urljs+"/images/loading.gif'/>").fadeIn('fast');
      }
      function loading_hide(){
          $('.loading').fadeOut('fast');
      }    
     
	
//Image gallery pagination functions	

// Photographers gallery pagination functions	     
      
      if($("#container_artists").length>0){
    	  loadData_artist(1);
  		}
	
      function loadData_artist(page){
          var p="page="+page;
          loading_show(); 
			
          $.post(url+"home/getphotographerspaginatedgallery",{'p':p},function(data){
          	 $("#container_artists").html(data.result);
          	 $("body").scrollTop();
          	pagination_artist();
          	gobutton_artist();
          	loading_hide();
          },"json");	    
                             
         
          
      }
	
	  function pagination_artist(){
		  $('#container_artists .pagination li.active').click(function(){
	          var page = $(this).attr('p');
	          loadData_artist(page);
	          $("body").scrollTop();
	      }); 
	  }
	  
	  function gobutton_artist(){
		  $('#go_btn_artists').click(function(){
	          var page = parseInt($('.goto').val());
	          var no_of_pages = parseInt($('.total').attr('a'));
	          if(page != 0 && page <= no_of_pages){
	        	  loadData_artist(page);
	              $("body").scrollTop();
	          }else{
	              alert('Enter a PAGE between 1 and '+no_of_pages);
	              $('.goto').val("").focus();
	              return false;
	          }
	          
	      });
	  }          
      
// Photographers gallery pagination functions      
//Search Pagination functions
	  
	  
	  if($("#container_search").length>0){
		  loadData_search(1);
  		}
	
      function loadData_search(page){
          var p="page="+page;
          var url_s=window.location.href;
  			var key=url_s.substring(url_s.lastIndexOf('=') + 1);
          loading_show(); 
			
          $.post(url+"home/getpaginatedsearch",{'p':p,'key':key},function(data){
          	 $("#container_search").html(data.result);
          	 $("body").scrollTop();
          	pagination_search();
          	gobutton_search();
          	loading_hide();
          },"json");	    
                             
         
          
      }
	
	  function pagination_search(){
		  $('#container_search .pagination li.active').click(function(){
	          var page = $(this).attr('p');
	          loadData_search(page);
	          $("body").scrollTop();
	      }); 
	  }
	  
	  function gobutton_search(){
		  $('#go_btn_search').click(function(){
	          var page = parseInt($('.goto').val());
	          var no_of_pages = parseInt($('.total').attr('a'));
	          if(page != 0 && page <= no_of_pages){
	        	  loadData_search(page);
	              $("body").scrollTop();
	          }else{
	              alert('Enter a PAGE between 1 and '+no_of_pages);
	              $('.goto').val("").focus();
	              return false;
	          }
	          
	      });
	  } 
	  
//Search Pagination functions	  
	  
	//Category Pagination functions	  
	  if($("#container_category").length>0){
		  loadData_category(1);
  		}
	
      function loadData_category(page){
          var p="page="+page;
          var url_s=window.location.href;
  			var category=url_s.substring(url_s.lastIndexOf('=') + 1);
          loading_show(); 
			
          $.post(url+"Photographyprints/getpaginatedcategory",{'p':p,'categoryid':category},function(data){
          	 $("#container_category").html(data.result);
          	 $("body").scrollTop();
          	pagination_category();
          	gobutton_category();
          	loading_hide();
          },"json");	    
                             
         
          
      }
	
	  function pagination_category(){
		  $('#container_category .pagination li.active').click(function(){
	          var page = $(this).attr('p');
	          loadData_category(page);
	          $("body").scrollTop();
	      }); 
	  }
	  
	  function gobutton_category(){
		  $('#go_btn_category').click(function(){
	          var page = parseInt($('.goto').val());
	          var no_of_pages = parseInt($('.total').attr('a'));
	          if(page != 0 && page <= no_of_pages){
	        	  loadData_category(page);
	              $("body").scrollTop();
	          }else{
	              alert('Enter a PAGE between 1 and '+no_of_pages);
	              $('.goto').val("").focus();
	              return false;
	          }
	          
	      });
	  } 
	  
	//Category Pagination functions	    
	  
	
	

	
	$.cookie('checkout',null);
	
	menuhighligt();
	function menuhighligt(){
		var url_seg=window.location.href;
		var seg=url_seg.substring(url_seg.lastIndexOf('/') + 1);
		var gal_seg=url_seg.lastIndexOf('Photographyprints');
		var shop_seg=url_seg.lastIndexOf('productdetails');
		var shop_search=url_seg.lastIndexOf('searchText');
		$(".topactive").removeClass("active");
		if(seg=="home"){
			$("#li_home").addClass("active");
		}
		else if(seg=="Photographyprints"){
			$("#li_shop").addClass("active");
		}
		else if(seg=="photographers"){
			$("#li_artist").addClass("active");
		}
		else if(seg=="community"){
			$("#li_community").addClass("active");
		}
		else if(seg=="contactus"){
			$("#li_contact").addClass("active");
		}
		else{
			if(gal_seg>0){
				$("#li_shop").addClass("active");
			}
			else if(shop_seg>0){
				$("#li_shop").addClass("active");
			}
			else if(shop_search>0){
				$("#li_shop").addClass("active");
			}
			else{
				$("#li_home").addClass("active");
			}
			
		}
	}
//Common
	function ajaxloader(obj,img){
		var d=$(document.createElement('span')).addClass('ajaxd');
		var ph=$(document.createElement('span')).addClass('ajaxph');
		ph.html("<img style='margin-top:0px'src='"+urljs+"images/"+img+"' >");
		d.html(ph);
		obj.html(d);	
	}
	
	$("#upload_new_not").click(function(){
		alert("Please sign in as a photographer to upload images!!");
	});
//Common	
	
	
//Registration
	
	$("#registersubmit").click(function(){
		var type=$("#type").val();
		$('#userregisterform').validate({
			
			errorClass: 'err',
			validClass: 'valid',
			rules: {
				userFullName: { required: true },
				userName: { required: true , minlength: 6,remote: {

					url: url+"home/checksername",
					type: "post",
					data:{
						edit: function() { 
							
							return $("[name=userName]").attr("data-edit");
						}
						
					}
					},
				},
				pwd:{ required: true, minlength: 6 },
				password: { required: true, minlength: 6 ,equalTo:"[name=pwd]"},
				Email: { required: true, email:true },
				phoneNo: { required: true, number:true,minlength: 10 }
			},
			messages:{
				userFullName: { required: "Please enter Full name" },
				userName: { required: "Please enter User name",minlength: "Username should contain atleast 6 characters!!",remote: "The user already exists in the database!!.Please try another one." },
				pwd: { required: "Please enter Password",minlength: "Password should contain atleast 6 characters!!"  },
				password: { required: "Please confirm the Password",minlength: "Password should contain atleast 6 characters!!",equalTo:"Please enter the same password to confirm!!." },
				Email:{required: "Please Enter Email Id!!", email:"Please enter a valid emailID!!"},
				phoneNo:{required: "Please Enter Contact No!!",number:"Please enter a valid Phone Number!!!",minlength:"Contact No should contain atleast 10 digits(including area code)" }
			},	
			submitHandler: function(){
				var user=$('#userregisterform').serializeArray();
				
					$.post(url+"home/submitregister",user,function(data){
						alert("Successfully Saved!!.A mail has sent to your mail.Please open the mail and click on the given link to verify your account.(If it is not in the inbox, check in the spam folder also)");
						window.location=url;
					},"json");
		
			}
		});
		
	});
	
	
	
	
	$(".reset_reg").click(function(e){
		$(".clear").val("");
		e.preventDefault();
	});
//Registration	
//user profile
	$("#profilesubmit").click(function(){
		var type=$("#type").val();
		$('#userprofileform').validate({
			
			errorClass: 'err',
			validClass: 'valid',
			rules: {
				userFullName: { required: true },
				userName: { required: true , minlength: 6,remote: {

					url: url+"home/checksername",
					type: "post",
					data:{
						edit: function() { 
							
							return $("#userName").attr("data-edit");
						}
						
					}
					},
				},
				pwd:{ required: true, minlength: 6 },
				password: { required: true, minlength: 6 ,equalTo:"[name=pwd]"},
				Email: { required: true, email:true },
				phoneNo: { required: true, number:true,minlength: 10 }
			},
			messages:{
				userFullName: { required: "Please enter Full name" },
				userName: { required: "Please enter User name",minlength: "Username should contain atleast 6 characters!!",remote: "The user already exists in the database!!.Please try another one." },
				pwd: { required: "Please enter Password",minlength: "Password should contain atleast 6 characters!!"  },
				password: { required: "Please confirm the Password",minlength: "Password should contain atleast 6 characters!!",equalTo:"Please enter the same password to confirm!!." },
				Email:{required: "Please Enter Email Id!!", email:"Please enter a valid emailID!!"},
				phoneNo:{required: "Please Enter Contact No!!",number:"Please enter a valid Phone Number!!!",minlength:"Contact No should contain atleast 10 digits(including area code)" }
			},	
			submitHandler: function(){
				var user=$('#userprofileform').serializeArray();
				
					$.post(url+"home/updateprofile",user,function(data){
						if(data.result>0){
							alert("Successfully Updated!!");
						}
						else{
							alert("Unable to update!!!");
						}
						
					},"json");
		
			}
		});
		
	});
//User profile	
	
//Sign in
	$("#signin_submit").click(function(){
		$('#signin_form').validate({
			errorClass: 'err',
			validClass: 'valid',
			rules: {
				userName: { required: true },
				password:{ required: true}
				
			},
			messages:{
				userName: { required: "Please enter username" },
				password: { required: "Please enter Password" }
				
			},	
			submitHandler: function(){
				
				
				
				var login=$('#signin_form').serializeArray();
				
					$.post(url+"login/authentication",login,function(data){
						if(data.result>0){
							location.reload();
						}else{
							alert("Wrong username or password!!");
						}
					},"json");
		
			}
		});
	});
//Sign in	

//Contact us
	
	$("#reset_contact").click(function(e){
		$(".clear").val("");
		e.preventDefault();
	});
	
	$("#sendcontact").click(function(){
			$('#contactform').validate({
						
						errorClass: 'err',
						validClass: 'valid',
						rules: {
							contactname: { required: true },
							contactemail:{ required: true, email:true},
							contactcomment: { required: true}
						},
						messages:{
							contactname: { required: "Please enter Full name" },
							contactemail: { required: "Please enter User name",email:"Please enter a valid emailID!!" },
							contactcomment: { required: "Please write comment"}
						},	
						submitHandler: function(){
							
							
							
							var contact=$('#contactform').serializeArray();
							
								$.post(url+"home/submitcontact",contact,function(data){
									if(data.result>0){
										$("#notification").html('<div class="alert alert-success" style="color: rgb(70, 136, 71);background-color: rgb(223, 240, 216);border-color: rgb(214, 233, 198);padding: 8px 35px 8px 14px; margin-bottom: 18px; text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.5); border: 1px solid rgb(251, 238, 213); border-radius: 4px 4px 4px 4px;"><strong>Success!</strong>Your message sent successfully!!.We will be get back to you soon.</div>');
									}else{
										$("#notification").html('<div class="alert alert-success" style="color: rgb(70, 136, 71);background-color: rgb(242, 222, 222);border-color: rgb(214, 233, 198);padding: 8px 35px 8px 14px; margin-bottom: 18px; text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.5); border: 1px solid rgb(251, 238, 213); border-radius: 4px 4px 4px 4px;"><strong>Failed!</strong>Unable to send message!!!</div>');
									}
								},"json");
					
						}
					});
		
	});
//Contact us	
//Product details
	$("#selectframe").change(function(){
		var frameid=$(this).val();
		var hiddenimageId=$("#hiddenimageId").val();
		var paperpriceId=$("#paperprice").val();
		var hiddenimagetype=$("#hiddenimagetype").val();
		var frame_url="";
		if(frameid!="0"){
			if(hiddenimagetype=="portrait"){
				 frame_url=$('option:selected', this).attr('data-V-omount');
				 $(".mainImageHolder").css({"background":"url('../../uploaded_frames/"+frame_url+"') no-repeat scroll center top transparent","height":"414px"});
				 $(".mainImageHolder").find("img").css({"margin-left":"16px","margin-top":"15px","height":"382px","width":"257px"});
				// ajaxloader($("#imagepricelabel"),"ajax-loader.gif");
				 
			}
			else{
				 frame_url=$('option:selected', this).attr('data-H-omount');
				 $(".mainImageHolder").css({"background":"url('../../uploaded_frames/"+frame_url+"') no-repeat scroll center top transparent","min-height":"273px","width":"392px"});
				 $(".mainImageHolder").find("img").css({"margin-left":"17px","margin-top":"15px","height":"242px","width":"360px"});
				// ajaxloader($("#imagepricelabel"),"ajax-loader.gif");
				
			}
		//	$("[name=frame_type_id]").val('omount');
			$("#hidewrap").html('<select id="frame_type_id" name="frame_type_id" style="display:block; width:354px;" class="search-bar-select drop_down_selected _selected_option frame_type_id">'+
                	'<option value="0">Select</option>'+
                	'<option value="omount">Without mount</option>'+
                	'<option value="mount">With mount</option>'+	
                	'</select>');
			
			
		}
		else{
			$('body').data('hiddentotalprice', '0');
			 $(".mainImageHolder").css({"background":"url('../../uploaded_frames/') no-repeat scroll center top transparent"});
			//$('option:selected', $("#frame_type_id")).val('mount');
		//	$("#imagepricelabel").text(parseInt(imageprice)+parseInt(paperprice));
			$("#hidewrap").html('<select id="frame_type_id" name="frame_type_id" style="display:block; width:354px;" class="search-bar-select drop_down_selected _selected_option frame_type_id">'+
                        	'<option value="0">Select</option>'+
                        	'<option value="omount">Without mount</option>'+
                        	'<option value="mount">With mount</option>'+
                        	'<option value="wrap">Wrap</option>'+
                        	'</select>');
			
			
		}
		
		msdrp();
		selectframetype();
		
	});
	
	
	
	function msdrp(){
		try {
			$("body select").msDropDown();
			} catch(e) {
			alert(e.message);
			}
	}
	
	function selectframetype(){
		$(".frame_type_id").change(function(){
			var type=$("#hiddenimagetype").val();
			var fr_type=$(this).val();
			var file="";		
			var paperid=$("#paperid").val();
			var imageId=$("#hiddenimageId").val();
			var frameid=$("#selectframe").val();
			var size=$("#frame_size").val();
	//		if($("#selectframe").val()!="0"){
				if(type=="portrait"){
					if(fr_type=="omount"){
				
						file=$('option:selected', $("#selectframe")).attr('data-V-omount');
						$(".mainImageHolder").css({"background":"url('../../uploaded_frames/"+file+"') no-repeat scroll center top transparent","height":"414px"});
						// $(".mainImageHolder").find("img").css({"margin-left":"24px","margin-top":"20px","height":"372px","width":"242px"});
						 $(".mainImageHolder").find("img").css({"margin-left":"16px","margin-top":"15px","height":"382px","width":"257px"});
					}else if(fr_type=="mount"){
						file=$('option:selected', $("#selectframe")).attr('data-V-omount');
						$(".mainImageHolder").css({"background":"url('../../uploaded_frames/"+file+"') no-repeat scroll center top transparent","height":"414px"});
						 $(".mainImageHolder").find("img").css({"margin-left":"47px","margin-top":"42px","height":"330px","width":"196px"});
					}
					else{
						$(".mainImageHolder").css({"background":"url('../../uploaded_frames/') no-repeat scroll center top transparent","height":"414px"});
						 $(".mainImageHolder").find("img").css({"margin-left":"47px","margin-top":"42px","height":"330px","width":"196px"});
					}
				}else{
					if(fr_type=="omount"){
						file=$('option:selected', $("#selectframe")).attr('data-H-omount');
						 $(".mainImageHolder").css({"background":"url('../../uploaded_frames/"+file+"') no-repeat scroll center top transparent","min-height":"273px","width":"392px"});
						// $(".mainImageHolder").find("img").css({"margin-left":"22px","margin-top":"22px","height":"230px","width":"350px"});
						 $(".mainImageHolder").find("img").css({"margin-left":"17px","margin-top":"15px","height":"242px","width":"360px"});
					}else if(fr_type=="mount"){
						file=$('option:selected', $("#selectframe")).attr('data-H-omount');
						 $(".mainImageHolder").css({"background":"url('../../uploaded_frames/"+file+"') no-repeat scroll center top transparent","min-height":"273px","width":"392px"});
						 $(".mainImageHolder").find("img").css({"margin-left":"40px","margin-top":"43px","height":"186px","width":"312px"});
					}
					else{
						$(".mainImageHolder").css({"background":"url('../../uploaded_frames/') no-repeat scroll center top transparent","min-height":"273px","width":"392px"});
						 $(".mainImageHolder").find("img").css({"margin-left":"22px","margin-top":"22px","height":"230px","width":"350px"});
					}
				}
				
				if(fr_type!="0"){
					ajaxloader($("#imagepricelabel"),"ajax-loader.gif");
					$.post(url+"products/getpaperprice",{'paperid':paperid,'frameid':frameid,'imageId':imageId,'size':size,'frametype':fr_type},function(data){
					
						$("#imagepricelabel").text(data.totalPrice);
						//$("#hiddentotalprice").val(data.totalPrice);
						$('body').data('hiddentotalprice', data.totalPrice);
					},"json");
				}
				
		//	}
		//	else{
		//		alert("Please select a frame!!");
		//	}
			
			
			
		});
	}
	
	
	$("#paperid").change(function(){
		var paperid=$(this).val();
		var mount=$("#frame_type_id").val();
		var hiddenimagetype=$("#hiddenimagetype").val();
		var imageId=$("#hiddenimageId").val();
		var size=$("#frame_size").val();
		var frameid=$("#selectframe").val();
		if(paperid!=""){
			ajaxloader($("#imagepricelabel"),"ajax-loader.gif");
			$.post(url+"products/getpaperprice",{'paperid':paperid,'imageId':imageId,'frametype':mount,'size':size},function(data){
				
				$("#imagepricelabel").text(data.totalPrice);
				//$("#hiddentotalprice").val(data.totalPrice);
				$('body').data('hiddentotalprice', data.totalPrice);
				
			},"json");
		}
		if(paperid=="4"||paperid=="5"){
			if(frameid=="0"){
				$("#hidewrap").html('<select id="frame_type_id" name="frame_type_id" style="display:block; width:354px;" class="search-bar-select drop_down_selected _selected_option frame_type_id">'+
	                	'<option value="0">Select</option>'+
	                	'<option value="omount">Without mount</option>'+
	                	'<option value="mount">With mount</option>'+
	                	'<option value="wrap">Wrap</option>'+
	                	'</select>');
			}else{
				$("#hidewrap").html('<select id="frame_type_id" name="frame_type_id" style="display:block; width:354px;" class="search-bar-select drop_down_selected _selected_option frame_type_id">'+
	                	'<option value="0">Select</option>'+
	                	'<option value="omount">Without mount</option>'+
	                	'<option value="mount">With mount</option>'+
	                	'</select>');
			}
			
			
		}
		else{
			$("#hidewrap").html('<select id="frame_type_id" name="frame_type_id" style="display:block; width:354px;" class="search-bar-select drop_down_selected _selected_option frame_type_id">'+
                	'<option value="0">Select</option>'+
                	'<option value="omount">Without mount</option>'+
                	'<option value="mount">With mount</option>'+
                	'</select>');
			if(frameid=="0"){
				alert("Please select a frame!!");
			}
		}
		
		msdrp();
		selectframetype();
	});
	
	$("#frame_size").change(function(){
		var size=$(this).val();
		var frametype=$("#frame_type_id").val();
		var imageid=$("#hiddenimageId").val();
		var paperid=$("#paperid").val();
		ajaxloader($("#imagepricelabel"),"ajax-loader.gif");
		$.post(url+"products/getpaperprice",{'paperid':paperid,'imageId':imageid,'frametype':frametype,'size':size},function(data){
		
			$("#imagepricelabel").text(data.totalPrice);
			//$("#hiddentotalprice").val(data.totalPrice);
			$('body').data('hiddentotalprice', data.totalPrice);
		},"json");
	});
	
	$("#addtocart").click(function(){
		var session=$(this).attr('data-session');
		if(session!=""){
			var frameid=$("#selectframe").val();
			var paperid=$("#paperid").val();
			var totalprice=$('body').data('hiddentotalprice');
			var imageId=$("#hiddenimageId").val();
			var size=$("#frame_size").val();
			var frametype=$("#frame_type_id").val();
			if(paperid!="0"&&size!="0"&&frametype!="0"){
				var co=confirm("Do you want to add this product to cart ?");
				if(co){
					$.post(url+"products/addtocart",{'frametype':frametype,'size':size,'imageId':imageId,'totalprice':totalprice,'frameid':frameid,'paperid':paperid},function(data){
						if(data.result>0){
							alert("Successfully added to cart!!");
							location.reload();
						}
						else{
							alert("Unable to ad to cart!!!");
						}
						
					},"json");
				}
				else{
					return false;
				}
			}
			else{
				alert("Please select frame,paper,frame type and frame size!!");
			}
		}
		else{
			alert("Please sign in to add to cart!!");
		}
		
		
	});
	checkout();
	function checkout(){
		$("#checkout").click(function(){
			window.location=url+"checkout";
		});
	}
	
	removecart();
	function removecart(){
		$(".removeFrmCart").click(function(){
			var cartId=$(this).attr('data-id');
			var co=confirm("Do you want to remove this item from cart ? This action cannot be restored.");
			if(co){
				$.post(url+"products/removefromcart",{'cartId':cartId},function(data){
					if(data.result>0){
						alert("Successfully removed from cart!!");
						$("#cart-container").html(data.view);
					}
					else{
						alert("Could not remove from cart.Error occured!!");
						$("#cart-container").html(data.view);
					}
					callcart();
					checkout();
					removecart();
				},"json");
			}
			else{
				return false;
			}
			
		});
	}
	
	
	function callcart(){
		$(".cart").click(function(e) {          
			e.preventDefault();
            $("fieldset#cart_menu").toggle();
			$(".cart").toggleClass("cart-menu-open");
        });
	}
	
	sethidesections();
	function sethidesections(){
		$("#billing_second").hide();
		$("#form_third").hide();
		$("#OrderConfirmationForm").hide();
	}
	
	
	$("#first_submit").click(function(){
		
		
		$('#billing_first').validate({
			
			errorClass: 'err',
			validClass: 'valid',
			rules: {
				billing_email: { required: true,email:true },
				billing_firstname:{ required: true, },
				billing_lastname: { required: true},
				billing_phone: { required: true,number:true,minlength:10},
				billing_address1:{ required: true},
				billing_city:{ required: true},
				billing_country:{ required: true},
				billing_state:{ required: true},
				billing_zip:{ required: true}
			},
			messages:{
				billing_email: { required: "Please enter email ID",email:"Please enter a valid emailID!!" },
				billing_firstname: { required: "Please enter First name", },
				billing_lastname: { required: "Please enter Last name"},
				billing_phone: { required: "Please enter Phone no"},
				billing_address1:{ required: "Please enter address"},
				billing_city:{ required: "Please enter city"},
				billing_country:{ required: "Please select country"},
				billing_state:{ required: "Please select state"},
				billing_zip:{ required: "Please enter postal code"}
			},	
			submitHandler: function(){
				if($("#ship_to_billing_new").is(':checked')){
					$("#form_third").show();
					$("#first").css("display","none");
					$("#second").css("display","none");
					$("#third").css("display","block");
					$.cookie('checkout','2');
				}
				else{
					$("#billing_second").show();
					$("#first").css("display","none");
					$("#second").css("display","block");
					$.cookie('checkout','1');
				}
				
				
				
			}
		});
		
		//e.preventDefault();
	});
	
	
	
	
	$("#second_submit").click(function(){
		$('#billing_second').validate({
					
					errorClass: 'err',
					validClass: 'valid',
					rules: {
						shipping_email: { required: true,email:true },
						shipping_firstname:{ required: true, },
						shipping_lastname: { required: true},
						shipping_phone: { required: true,number:true,minlength:10},
						shipping_address1:{ required: true},
						shipping_city:{ required: true},
						shipping_country:{ required: true},
						shipping_state:{ required: true},
						shipping_zip:{ required: true}
					},
					messages:{
						shipping_email: { required: "Please enter email ID",email:"Please enter a valid emailID!!" },
						shipping_firstname: { required: "Please enter First name", },
						shipping_lastname: { required: "Please enter Last name"},
						shipping_phone: { required: "Please enter Phone no"},
						shipping_address1:{ required: "Please enter address"},
						shipping_city:{ required: "Please enter city"},
						shipping_country:{ required: "Please select country"},
						shipping_state:{ required: "Please select state"},
						shipping_zip:{ required: "Please enter postal code"}
					},	
					submitHandler: function(){
						$("#form_third").show();
						$("#first").css("display","none");
						$("#second").css("display","none");
						$("#third").css("display","block");
						$.cookie('checkout','2');
					}
				});
	});
	
	
	$("#third_submit").click(function(e){
		if($("#shipperchecked").is(':checked')){
			$("#OrderConfirmationForm").show();
			$("#first").css("display","none");
			$("#second").css("display","none");
			$("#third").css("display","none");
			$("#fourth").css("display","block");
			$.cookie('checkout','3');
		}
		else{
			alert("Please select a shipping methode.");
		}
		
		e.preventDefault();
	});
	
	
	
	$("#bottom_payment_button").click(function(e){
		
		var check_out=$.cookie('checkout');
		//var bill=$('#billing_first').serializeArray();
		//var shipping=$('#billing_second').serializeArray();
		var orderdetailsform=$("#orderdetailsform , #billing_first").serializeArray();
		var difforderdetailsform=$("#orderdetailsform , #billing_first , #billing_second").serializeArray();
		if(check_out=="3"){
			var co=confirm("You are about to submit products for payment!!.This action cannot be restord!");
			if(co){
				if($("#ship_to_billing_new").is(':checked')){
					$.post(url+"checkout/saveorderformforsamebill",orderdetailsform,function(data){
						
						window.location=url+"checkout/billpayment/"+data.billingid+"/"+data.shippingid;
						
						$.cookie('checkout',null);
					},"json");
				}else{
					$.post(url+"checkout/saveorderformfordiffbill",difforderdetailsform,function(data){
						
						window.location=url+"checkout/billpayment/"+data.billingid+"/"+data.shippingid;
						
						$.cookie('checkout',null);
					},"json");
				}	
			}
			else{
				return false;
			}
			
		
		}
		else{
			alert("Please fill all the form details!!");
		}
		
		e.preventDefault();
	});
	
	$(".orderquantity").change(function(){
		var cart=$(this).attr("data-cart");
		var qty=$(this).val();
		var tot_price=$("#totalprice").val();
		var price=$("#individualprice_"+cart).val();
		var new_price=parseFloat(price)*parseFloat(qty)
		var oldindividualprice=$("#oldindividualprice_"+cart).val();
		$("#quantity_"+cart).val(qty);
	//	$("#individualprice_"+cart).val(new_price);
		$(".price_text_"+cart).text(new_price);
		$("#totalprice").val(parseFloat(tot_price)-parseFloat(oldindividualprice)+parseFloat(new_price));
		$("#totalpricedisplay").text(parseFloat(tot_price)-parseFloat(oldindividualprice)+parseFloat(new_price));
		$("[name=grandTotalPrice]").val(parseFloat(tot_price)-parseFloat(oldindividualprice)+parseFloat(new_price));
		$("#oldindividualprice_"+cart).val(new_price);
		//var total=
	});
	
	$(".shipperchecked").click(function(){
		var shipperId=$(this).val();
		$("[name=shipperId]").val(shipperId);
	});
//Product details	
	
	
	//Upload sample images
	
	upload_sample_images();
	function upload_sample_images(){
		
		$("#upload_sample").pluploadQueue({
            // General settings
            runtimes : 'html5,flash,silverlight',
            url : urljs+'upload_sample.php',
            max_file_size : '50mb',
            chunk_size : '1mb',
            unique_names : true,
          //  multiple_queues: true,
            // Specify what files to browse for
            filters : [
                {title : "Image files", extensions : "jpg,jpeg,gif,png,bmp,tif"}
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
		// $(".mail_uploader").hide();
		/*$('.add_files').click(function(e){
            e.preventDefault();
            $(".mail_uploader").show();
            $(this).remove();
        });*/
		 
		 /*$(".add_files").toggle(
		            function()
		            {
		            	 $(".mail_uploader").show();
		            	$(this).text("Remove attachments");
		            },
		            function()
		            {
		            	 $(".mail_uploader").hide();
		            	$(this).text("Add attachments");
		            });*/
	}
	
	
	$("#submitsample").click(function(){
		$('#sampleform').validate({
					
					errorClass: 'err',
					validClass: 'valid',
					rules: {
						contactname: { required: true },
						contactemail:{ required: true, email:true},
						contactcomment: { required: true}
					},
					messages:{
						contactname: { required: "Please enter Full name" },
						contactemail: { required: "Please enter User name",email:"Please enter a valid emailID!!" },
						contactcomment: { required: "Please write comment"}
					},	
					submitHandler: function(){
						
						
						
						var sample=$('#sampleform').serializeArray();
						var image=$("[name=upload_sample_0_tmpname]").val();
						if(image!=undefined){
							$.post(url+"home/submitsample",sample,function(data){
								if(data.result>0){
									$("#notification").html('<div class="alert alert-success" style="color: rgb(70, 136, 71);background-color: rgb(223, 240, 216);border-color: rgb(214, 233, 198);padding: 8px 35px 8px 14px; margin-bottom: 18px; text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.5); border: 1px solid rgb(251, 238, 213); border-radius: 4px 4px 4px 4px;"><strong>Success!</strong>Your message sent successfully!!.We will be get back to you soon.</div>');
								}else{
									$("#notification").html('<div class="alert alert-success" style="color: rgb(70, 136, 71);background-color: rgb(242, 222, 222);border-color: rgb(214, 233, 198);padding: 8px 35px 8px 14px; margin-bottom: 18px; text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.5); border: 1px solid rgb(251, 238, 213); border-radius: 4px 4px 4px 4px;"><strong>Failed!</strong>Unable to send message!!!</div>');
								}
							},"json");
						}
						else{
							alert("Please upload atleast one image!!");
						}
						
						
							
				
					}
				});
	
});
	
	//Upload sample images
	
//Upload image
	upload_images();
	function upload_images(){
		
		$("#mail_attachments").pluploadQueue({
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
		// $(".mail_uploader").hide();
		/*$('.add_files').click(function(e){
            e.preventDefault();
            $(".mail_uploader").show();
            $(this).remove();
        });*/
		 
		 /*$(".add_files").toggle(
		            function()
		            {
		            	 $(".mail_uploader").show();
		            	$(this).text("Remove attachments");
		            },
		            function()
		            {
		            	 $(".mail_uploader").hide();
		            	$(this).text("Add attachments");
		            });*/
	}
	
	
	$("#saveuploadedimage").click(function(){
		
		$('#uploadform').validate({
			
			errorClass: 'err',
			validClass: 'valid',
			rules: {
				imageName: { required: true },
				imageResolution:{ required: true, },
				imagePrice: { required: true},
				imageDescription: { required: true},
				imageTags: { required: true},
				imageType: { required: true}
				
			},
			messages:{
				imageName: { required: "Please enter image name" },
				imageResolution: { required: "Please enter resolution", },
				imagePrice: { required: "Please enter price"},
				imageDescription: {required: "Please enter image description"},
				imageTags: {required: "Please enter image tags"},
				imageType: {required: "Please select image type"}
			},	
			submitHandler: function(){
				var fileId=$("[name=fileId]").val();
				var fileName=$("[name=fileName]").val();
				
				if(fileId!="0"&&fileName!="0"){
					var co=confirm("Do you want to submit this image ?");
					if(co){
						var upload=$("#uploadform").serializeArray();
						$.post(url+"products/submitnewimage",upload,function(data){
							if(data.result>0){
								alert("Successfully uploaded!!");
							}
							else{
								alert("Unable to upload!!");
							}
							location.reload();
						},"json");
					}else{
						return false;
					}
				}
				else{
					alert("Please upload image!!");
				}
				
				
			}
		});
		
		
		
		
		
	});
//Upload image	
	
//User dashboard
	
	$(".deletephotographerimage").click(function(){
		var imageId=$(this).attr("data-id");
		var co=confirm("Do you want to delete this image ?");
		if(co){
			$.post(url+"home/deleteimage",{'imageId':imageId},function(data){
				if(data.result>0){
					alert("Successfully Deleted!!");
					
				}
				else{
					alert("Unable to delete.Error occured!");
				}
				
				location.reload();
				
			},"json");	
		}
		else{
			return false;
		}
	});
	
	
//User dashboard	
	
	
	
	
});	 














