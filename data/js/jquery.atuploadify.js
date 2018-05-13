(function($){
	$.extend($.fn,{
		atUploadify:function(options){
			$(this).each(function(){
			var defaults={
				id			: $(this).attr('id'),
				uploader	: "",
				height		: "80",
				width		: "120",
				fileDesc	:	"Image Files(*.jpg,*.png) | All Files (*.*)",
				fileExt		:	"*.jpg;*.png; | *.*",
				fileType	:	"images",
				prevImage	:	"",
				fileSize	:	2097152,
				fileLimit	:	4,
				folder		:	"",
				uploadUrl	:	"uploadify.php",
				filenameUrl	:	"",
				wmode       : 'window', // The wmode of the flash file
				scriptAccess: 'sameDomain', 
				auto		:	true,
				editImgs	:	'',
				preview		:'',
				status		:'',
				expressInstall : "js/expressInstall.swf",
				cancelImage : "../images/Cancel.png",
				buttonImage	:	"../images/Browse.png",
				onSelect	:	function(){},
				onComplete	:	function(){},
				onRemove	:	function(){},
				onCancel	: 	function(){}
			};
			var settings = $.extend({}, defaults, options);
			var obj=$(this);
			var data = {};
			var imgs=[];
			var size=0;
			var limit=0;
			data.uploadifyID = settings.id;
			data.uploadUrl=settings.uploadUrl;
			data.filenameUrl=settings.filenameUrl;
			data.buttonImage=settings.buttonImage;
			data.folder=settings.folder;
			data.width= settings.width;
			data.height= settings.height;
			data.fileDesc=settings.fileDesc;
			data.fileExt=settings.fileExt;
			var uploadfolderarr=settings.folder.split("/");
			var uploadfolder="../"+uploadfolderarr[uploadfolderarr.length-2];
			
			//obj.css('display','none');
			
			function addImgs(theValue, theArray){
				var index= $.inArray(theValue, theArray);

				if(index== -1)
				   {			 
					 theArray.push(theValue);
				   }
				/*	else
					   {			 
						 theArray.splice(index,1);
					   }	*/
				return theArray;
			}
			function addSize(theValue, theArray){
				var index= $.inArray(theValue, theArray);

				if(index== -1)
				   {			 
					 theArray.push(theValue);
				   }
				/*	else
					   {			 
						 theArray.splice(index,1);
					   }	*/
				return theArray;
			}
			if(settings.uploader!=""){
				obj.css("display","none");
				obj.after('<div id="' + obj.attr('id')+'upl" style="float:left;"></div>');
				//alert(settings.uploader);
				var playerVersion = swfobject.getFlashPlayerVersion();
				if(playerVersion.major==0){
					alert("Please download flash player!!!");
				}
				swfobject.embedSWF(settings.uploader, settings.id+"upl", settings.width, settings.height, '9.0.24', settings.expressInstall, data, {'quality':'high','wmode':settings.wmode,'allowScriptAccess':settings.scriptAccess},{},function(event) {
					if (typeof(settings.onSWFReady) == 'function' && event.success) settings.onSWFReady();
				});
				
				$("#"+obj.attr('id') + "upl").after('<div id="' + obj.attr('id')+'upls"></div>');
				
				
				if(settings.editImgs!=""){
					var v=$("#"+settings.editImgs+"").val();
					v=v!=""?v.split(","):"";
					//alert(v.length);
					if(v.length>0){
						$.each(v,function(x,y){
							imgs=addImgs(y,imgs);
							//alert(y);
						});
					}
				}
				
				obj.bind("custom",{'action': settings.onSelect, 'queueID': settings.queueID},function(event,param1,param2){
					//alert(param1);
					
					var sz=Math.round(param2/1024);
					var fs=sz>1023?Math.round(sz/1024) +" MB":sz+" KB";
					var limitsize=Math.round(settings.fileSize/1024)>1023?Math.round(settings.fileSize/1024) +" MB":settings.fileSize+" KB";
					
					//alert(size +'---'+param2);
					//size+=parseFloat(param2);	
					if(settings.fileLimit>1){
						size=parseFloat(param2);	
					}else{
						size=parseFloat(param2);	
					}
					
					limit=imgs.length;
					
					//alert(size +'---'+settings.fileSize);
					if(limit >= settings.fileLimit && settings.fileLimit!=1){	
						
						//$("#"+obj.attr('id') + "upls").css({'position':'relative','z-index':1000}).html(createAlert("You have exceeded the file limit!!!",settings.cancelImage));
						alert("You have exceeded the file limit!!!");
						return false;
					}
					if(size > settings.fileSize){
						//$("#"+obj.attr('id') + "upls").css({'position':'relative','z-index':1000}).html(createStatus("You have exceeded the size limit!!!",settings.cancelImage));
						alert("This file exceeds the "+limitsize+" size limit");
						return false;
					}
					$("#"+obj.attr('id') + "upls").html(createStatus(param1+" "+fs,settings.cancelImage));
					$("#status").val(param1+" "+fs);
					//alert(obj.attr("id")+"upl");
					$("[name=clstatusclose]").unbind("click");
					$("[name=clstatusclose]").click(function(){
						//document.getElementById(obj.attr("id")+"upl").cancelFileUpload();
						cancelupload();
						$(".clupstatus").remove();
					});
					
					if(settings.auto){
						document.getElementById($(this).attr("id")+"upl").clupload();
					}
					function cancelupload(){
						document.getElementById(obj.attr("id")+"upl").cancelupload();
						//document.getElementById(obj.attr("id")+"upl").clupload();
					}
				});
				
				obj.bind("getStatus",{},function(event,status){
					//alert(status);
					$(".clupstatusmsg").html(status);
					//$("#status").val(status);
				});
				obj.bind("uploadCancel",{'action': settings.onCancel},function(event,status,imgs){
					size=0;
					event.data.action(event, status,imgs); 			
				});
				obj.bind("uploadComplete",{'action': settings.onComplete},function(event,status,fSize){
					//alert(status);
					$(".clupstatusmsg").html(status);
					if(settings.preview!=''){		
						var ht=$("#"+settings.preview+"").css("height");
						var wd=$("#"+settings.preview+"").css("width");			
						if(settings.fileType=="images"){
							elm='<div style="float:left;" name="clprevhold"><img style="float:left;" src="'+settings.folder+"/"+status+'" height="'+ht+'"  width="'+wd+'"/>';
						}else{
							elm='<div style="float:left;" name="clprevhold"><img style="float:left;" src="'+settings.prevImage+'" height="'+ht+'"  width="'+wd+'"/>';
						}
						elm+='<img name="clprevclose" style="margin-left:-18px;z-index:100;cursor:pointer;display:none;" src="'+settings.cancelImage+'" /></div>';				
						//alert(settings.fileLimit);
						if(settings.fileLimit>1){
							$("#"+settings.preview+"").append(elm);
						}else{
							
							$("#"+settings.preview+"").html(elm);
						}
						shh();
					}else{
						if(settings.preview!='none')
							$("#"+obj.attr('id') + "upls").after(createPrev(uploadfolder+"/"+status,status,settings.cancelImage));
					}
					$('.clupstatus').animate({"opacity":0},3000,function(){
						$(this).remove();
					});
					if(settings.fileLimit==1){
						imgs[0]=status;
					}else{
						imgs=addImgs(status,imgs);
					}
					event.data.action(event, status,imgs); 					
					//$("#status").val(status);
				});
				obj.bind("getProgress",function(event,status){
					$("#status").val(status);
					//$(".clupstatusmsg").html(status);
					$(".clupstatusprogressbar").css({"width":status+"%"});
					
				});
				function shh(){
					$("[name=clprevhold]").hover(function(){					
						$(this).find('[name=clprevclose]').show();
					},function(){
						$(this).find('[name=clprevclose]').hide();
					});
				}
				$("[name=clprevclose]").unbind("click");
				$("[name=clprevclose]").live("click",function(){
					var con=confirm("Are You Sure ?");
					if(con){
						var obj1=$(this).parent().find("img");
						var v=obj1.attr("src");
						var fn=v.substring(v.lastIndexOf("/")+1);
						imgs=removeImgs(fn,imgs);	
						obj.trigger("removeImg",[imgs]);
						obj1.remove();
					}
				});
//				$("[name=clclose]").unbind("click");
//				$("[name=clclose]").live("click",function(){
//				obj.find("[name=clclose]").unbind("click");
//				obj.find("[name=clclose]").click(function(){
//					var con=confirm("Are You Sure ?");
//					if(con){
//						var obj1=$(this).parent();
//						var v=obj1.find("a>img").attr("src");
//						var fn=v.substring(v.lastIndexOf("/")+1);
//						imgs=removeImgs(fn,imgs);	
//						obj.trigger("removeImg",[imgs]);
//						obj1.remove();
//					}
//				});
				$("[name=clstatusprevclose]").unbind("click");
				$("[name=clstatusprevclose]").live("click",function(){
					var con=confirm("Are You Sure ?");
					if(con){
						var obj1=$(this).parent().parent();
						var v=obj1.find(".cluppreviewimg >img").attr("src");
						obj1.remove();
						var fn=v.substring(v.lastIndexOf("/")+1);
						//alert(fn);
						imgs=removeImgs(fn,imgs);						
						obj.trigger("removeImg",[imgs]);
						
					}				
					
				});
				obj.bind("deleteImg",function(event,fn){	
					size=0;
					imgs=removeImgs(fn,imgs);					
					obj.trigger("removeImg",[imgs]);
				});
				obj.bind("removeImg",{'action': settings.onRemove},function(event,imgs){
					
					event.data.action(event,imgs); 
				});
				
				
				function removeImgs(theValue, theArray){
					var index= $.inArray(theValue, theArray);
					$.post(settings.uploadUrl,{'d':theValue},function(data){				
					},"json");
					if(index!= -1)
					{    				 
						theArray.splice(index,1);
					}
					return theArray;
				}
				
				function createAlert(msg,imgpath){
					var elm='<div class="clupstatus">';
						elm+='<div class="clupstatusheader">';
						//elm+='<span></span>';
						elm+='<a name="clstatusclose"><img src="'+imgpath+'" /></a>';
						elm+='</div>';
						elm+='<div class="clupalertmsg">'+msg+'</div>';
						elm+='</div>';					
					return elm;
				}
				function createStatus(msg,imgpath){
					var elm='<div class="clupstatus">';
						elm+='<div class="clupstatusheader">';
						//elm+='<span></span>';
						elm+='<a name="clstatusclose"><img src="'+imgpath+'" /></a>';
						elm+='</div>';
						elm+='<div class="clupstatusmsg">'+msg+'</div>';
						elm+='<div class="clupstatusprogress"><div class="clupstatusprogressbar" style="height:99%;width:0%;background:#000;"></div></div>';
						elm+='</div>';					
					return elm;
				}
				function createPrev(imgpath,fn,imgcancel){
					if(settings.fileType!="images"){
						imgpath=settings.prevImage;
					}
					var elm='<div class="cluppreview">';
						elm+='<div class="cluppreviewheader">';
						elm+='<a name="clstatusprevclose"><img src="'+imgcancel+'" /></a>';
						elm+='</div>';
						elm+='<div class="cluppreviewimg">';
						elm+='<img src="'+imgpath+'" />';						
						elm+='<div class="clupfilename">';
						elm+=fn;
						elm+='</div>';
						elm+='</div>';
						elm+='</div>';
//						elm='<div class="browse_image">';
//						elm+='  <div  class="close_button"><a name="clstatusprevclose" ><img src="'+imgcancel+'"  border="0"/></a></div>';
//						elm+='  <div class="browse_item">';
//						elm+='<img src="'+imgpath+'" width="175" height="120"/>';
//						elm+='</div>';
//						elm+='</div>';
					return elm;
				}
			}
		});
		},//clUploadify	
		clcustupload:function(){
			document.getElementById($(this).attr("id")+"upl").clupload();
		}
	});//extend
})(jQuery);