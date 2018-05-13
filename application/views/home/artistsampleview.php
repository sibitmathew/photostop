 <style>
.err{
	color:red;
}
</style>
 
 <div class="container">
        	<div class="contactContainer myForm">
            	<form method="post" id="sampleform">
            			<div id="notification"></div>
            		<h1>Upload-Sample</h1>
                    <ul>
                    	<li><label>Name</label><input name="contactname" class="clear" type="text" /></li>
                        <li><label>Email</label><input name="contactemail" class="clear" type="text" /></li>
                        <li><label>About</label><textarea name="contactcomment" class="clear"></textarea></li>
                        <li><label>Attachments</label>
						<div class="mail_uploader">
						<div class="gebo-upload" id="upload_sample">
							<p>You browser doesn't have Flash, Silverlight or HTML5 support.</p>
						</div>
						<span class="help-block">This files will be uploaded on form submit.</span>
					</div></li>
                        <li class="buttonRow"><button id="submitsample">Submit</button><button id="reset_contact">Reset</button></li>
                    </ul>
            	</form>
            </div>            
        </div>
    </div>