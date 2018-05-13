

  <style type="text/css">
           
            .loading{
                width: 100%;
                position: absolute;
                top: 100px;
                left: 100px;
				margin-top:200px;
            }
            #container_category .pagination ul li.inactive,
            #container_category .pagination ul li.inactive:hover{
                background-color:#CA0054;
                color:#bababa;
                border:1px solid #bababa;
                cursor: default;
            }
            #container_category .data ul li{
                list-style: none;
                font-family: verdana;
                margin: 5px 0 5px 0;
                color: #000;
                font-size: 13px;
            }

            #container_category .pagination{
                width: 800px;
                height: 25px;
                float:left;
            }
            #container_category .pagination ul li{
                list-style: none;
                float: left;
                border: 1px solid #CA0054;
                padding: 2px 6px 2px 6px;
                margin: 0 3px 0 3px;
                font-family: arial;
                font-size: 14px;
                color: #CA0054;
                font-weight: bold;
                background-color: #f2f2f2;
            }
            #container_category .pagination ul li:hover{
                color: #fff;
                background-color: #CA0054;
                cursor: pointer;
            }
			.go_btn_category
			{
			background-color:#f2f2f2;border:1px solid #CA0054;color:#CA0054;padding:2px 6px 2px 6px;cursor:pointer;position:absolute;margin-top:-3px;
			}
			.total
			{
			float:right;font-family:arial;color:#999;
			}
			.goto{
				border:1px solid #CA0054;
			}

        </style>




 <div class="container">
        	<div class="imageLiting ListView">
        	<div class="left">
    	<h1>Categories</h1>
    	<?php if ($category->num_rows>0){?>
        <ul>
        	<?php foreach ($category->result() as $ct){
        	$sub=$this->photomodel->getcategorybyparentid($ct->categoryId);
        		?>
        	<li><a href="<?php echo site_url();?>Photographyprints/getphotobycategory?catId=<?php echo $ct->categoryId;?>"><?php echo $ct->categoryName;?></a></li>
         	<?php if ($sub->num_rows>0){?>
         	
         		<?php foreach ($sub->result()as $sc){?>
         		
         		<li type="circle">---<a href="<?php echo site_url();?>Photographyprints/getphotobycategory?catId=<?php echo $sc->categoryId;?>"><?php echo $sc->categoryName;?></a></li>
         		
         		
         		
         		<?php }?>
         		
         	<?php }?>
          <?php }?>  
        </ul>
         <?php }else{?>
        No categories available!!!
        <?php }?>
    </div>
     <div class="right">
     
     <center> <div id="" class="loading"></div></center>
     		<div id="container_category">
            <div class="data"></div>
            <div class="pagination" ></div>
        	</div>
     
     
        
            </div>  
               
                <br clear="all" />
              <?php //}else{?>  
              	
              <?php //}?>
            </div>            
        </div>
    </div>