<style>
.err{
	color:red;
	width:200px;
}
</style>
 <div class="container">
        	<div class="regContainer myForm">
            	<form method="post" id="userregisterform">
            	
            		<h1>Register</h1>
                    <ul>
                    	<li><label>Name</label><input name="userFullName" type="text" class="clear" /></li>
                        <li><label>Email</label><input name="Email" type="text" class="clear" /></li>
                        <li><label>Phone</label><input name="phoneNo" type="text" class="clear"/></li>
                        <li><label>Address</label><textarea name="address" class="clear"></textarea></li>
                         <li><label>City</label><input name="city" type="text" class="clear"/></li>
                         <li><label>State</label><input name="state" type="text" class="clear"/></li>
                        <li>
                            <label>Country</label>
                            <select name="country" class="clear">
                              <option value="">Select Country</option>
                              <?php foreach ($country as $co){?>
                              	<option value="<?php echo $co;?>"><?php echo $co;?></option>
                              <?php }?>
                            </select>
                        </li>
                        <li><label>Username</label><input name="userName" data-edit="" type="text" class="clear"/></li>
                        <li><label>Password</label><input name="pwd" type="password"  class="clear"/></li>
                        <li><label>Confirm Password</label><input name="password" type="password" class="clear" /></li>
                        <li>
                            <label>I am</label>
                            <select name="type" class="clear">
                              <option value="user">a User</option>
                             
                            </select>
                        </li>
                       
                        <li class="buttonRow"><button id="registersubmit">Submit</button><button class="reset_reg">Reset</button></li>
                    </ul>
            	</form>
            </div>            
        </div>
    </div>