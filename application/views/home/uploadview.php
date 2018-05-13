 <style>
.err{
	color:red;
}
</style>

<!--<script type="text/javascript">
$("[name=takenDate]").datepicker({
	//showOn: "button",
    //buttonImage: "../../images/calendar.gif",
    //buttonImageOnly: true,
    changeMonth: true,
    changeYear: true,
    yearRange: '1900:2020',
    dateFormat: 'dd-M-yy'
    	
});	
</script>-->
 
 <div class="container">
        	<div class="contactContainer myForm">
            	<form method="post" id="uploadform">
            			<div id="notification"></div>
            		<h1>Upload New</h1>
                    <ul>
                    	<li><label>Image Name</label><input name="imageName" class="clear" type="text" /></li>
                        <li><label>Resolution</label><input name="imageResolution" class="clear" type="text" /></li>
                        <li><label>Price(A1)</label><input type="text" name="a1imagePrice" value="5000" readonly/></li>
                        <li><label>Price(A2)</label><input type="text" name="a2imagePrice" value="3800" readonly/></li>
                          <li><label>Price(A3)</label><input type="text" name="a3imagePrice" value="2500" readonly/></li>
                            <li><label>Price(A4)</label><input type="text" name="a4imagePrice" value="1400" readonly/></li>
                        <li><label>Image Type</label>
                        <select name="imageType" class="clear">
                        <option value="">Select</option>
                        <option value="portrait">Portrait</option>
                         <option value="landscape">Landscape</option>
                        </select>
                        
                        </li>
                        
                         <li><label>Image Category</label>
                        <select name="categoryId[]" class="clear" multiple>
                        
                       <?php foreach ($category->result() as $c){?>
                         <option value="<?php echo $c->categoryId;?>"><?php echo $c->categoryName;?></option>
                         <?php }?>
                        </select>
                        
                        </li>
                        
                         <li><label>About Image</label><textarea  name="imageDescription" class="clear"></textarea></li>
                          <li><label>Image Tags(Seperated by comma)</label><textarea  name="imageTags" class="clear"></textarea></li>
                        <li><label>Attachments</label>
					<!--<a class="add_files" href="#">Add attachments</a>
					--><div class="mail_uploader">
						<div class="gebo-upload" id="mail_attachments">
							<p>You browser doesn't have Flash, Silverlight or HTML5 support.</p>
						</div>
						<span class="help-block">This files will be uploaded on form submit.</span>
					</div></li>
                        <li class="buttonRow"><button id="saveuploadedimage">Submit</button><button id="reset_contact">Reset</button></li>
                    </ul>
                    
                   <span id="temp_attach">
                   <input type="hidden" name="fileId" value="0"/>
                   <input type="hidden" name="fileName" value="0"/>
                   </span>
            	</form>
            </div>            
        </div>
    </div>