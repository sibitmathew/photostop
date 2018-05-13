 <style>
.hideacc{
	display:none;
}
.err{
	color:red;
}
</style>
 
 <div class="container">
 
    <div class="faqPanel expresscheckout">
      <hr />
      <h1>Secure Checkout</h1>
      <div id="accordion">
       <h3 class="ExpressCheckoutTitle"><span>Step 1: Billing Details</span><span style="display:none" class="ExpressCheckoutCompletedContent">javed iqubal, kolkata, kolkata, West Bengal, India, 700039</span><a href="#" style="display:none;">modify �</a></h3>
        <div class="ExpressCheckoutContent myForm" id="first" style="display: block;">
          <form class="multiple" id="billing_first" action="#" method="post">
            <div style="display: none" id="ChooseBillingAddress">
              <label>
                <input type="radio" checked="checked" value="existing" id="BillingAddressTypeExisting" name="BillingAddressType" onclick="ExpressCheckout.ToggleAddressType('Billing', 'Select');">
                I want to use an existing billing address</label>
              <br>
              <div class="PL20 SelectBillingAddress"> <img class="FloatLeft" alt="" src="https://www.tonyperottiusa.com/templates/__custom/images/NodeJoin.gif">
                <div style="margin-left: 30px;">
                  <select size="5" style="width: 95%" name="sel_billing_address">
                  </select>
                  <div style="">
                    <label>
                      <input type="checkbox" checked="checked" value="1" id="ship_to_billing_existing" name="ship_to_billing_existing">
                      I also want to ship to this address</label>
                  </div>
                  <br>
                  <input type="submit" class="billingButton" value="Bill &amp; Ship to this Address">
                  <span style="display: none" class="LoadingIndicator"><img alt="" src="https://www.tonyperottiusa.com/templates/__custom/images/Loading.gif"></span> </div>
              </div>
              <label style="margin-top: 10px; display: block;" class="Clear">
                <input type="radio" id="BillingAddressTypeNew" name="BillingAddressType" value="new" onclick="ExpressCheckout.ToggleAddressType('Billing', 'Add');">
                I want to use a new billing address</label>
              <br>
            </div>
            <div style="" class="Clear PL20 AddBillingAddress"> <img alt="" style="display: none" class="FloatLeft" src="https://www.tonyperottiusa.com/templates/__custom/images/NodeJoin.gif">
              <div class="FloatLeft">
                <div class="FormContainer HorizontalFormContainer Clear">
                  <dl>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Email Address:</span> </dt>
                    <dd>
                      <input type="hidden" value="1" class="FormFieldId">
                      <input type="hidden" value="1" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="EmailAddress" class="FormFieldPrivateId">
                      <input type="text" value="" name="billing_email" id="FormField_1" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">First Name:</span> </dt>
                    <dd>
                      <input type="hidden" value="4" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="FirstName" class="FormFieldPrivateId">
                      <input type="text" value="" name="billing_firstname" id="FormField_4" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Last Name:</span> </dt>
                    <dd>
                      <input type="hidden" value="5" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="LastName" class="FormFieldPrivateId">
                      <input type="text" value="" name="billing_lastname" id="FormField_5" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: hidden" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Company Name:</span> </dt>
                    <dd>
                      <input type="hidden" value="6" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="CompanyName" class="FormFieldPrivateId">
                      <input type="text" value="" name="billing_companyname" id="FormField_6" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Phone Number:</span> </dt>
                    <dd>
                      <input type="hidden" value="7" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="Phone" class="FormFieldPrivateId">
                      <input type="text" value="" name="billing_phone" id="FormField_7" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Address Line 1:</span> </dt>
                    <dd>
                      <input type="hidden" value="8" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="AddressLine1" class="FormFieldPrivateId">
                      <input type="text" value="" name="billing_address1" id="FormField_8" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: hidden" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Address Line 2:</span> </dt>
                    <dd>
                      <input type="hidden" value="9" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="AddressLine2" class="FormFieldPrivateId">
                      <input type="text" value="" name="billing_address2" id="FormField_9" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Suburb/City:</span> </dt>
                    <dd>
                      <input type="hidden" value="10" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="City" class="FormFieldPrivateId">
                      <input type="text" value="" name="billing_city" id="FormField_10" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Country:</span> </dt>
                    <dd>
                      <input type="hidden" value="Choose a Country" class="FormFieldChoosePrefix">
                      <input type="hidden" value="11" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleselect" class="FormFieldType">
                      <input type="hidden" value="Country" class="FormFieldPrivateId">
                      <select size="1" name="billing_country" id="FormField_11" style="" class="Field200 FormField field-xlarge">
                        <option value="">Choose a Country</option>
                        <option value="India">India</option>
                        
                      </select>
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">State/Province:</span> </dt>
                    <dd>
                      <input type="hidden" value="Choose a State" class="FormFieldChoosePrefix">
                      <input type="hidden" value="12" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="selectortext" class="FormFieldType">
                      <input type="hidden" value="State" class="FormFieldPrivateId">
                      <noscript>
                      &lt;input type="text" name="" value="" class="Field200" style=""  /&gt;
                      </noscript>
                      <select style="" class="FormField JSHidden Field200 field-xlarge" aria-required="1" id="FormField_12" name="billing_state">
                        <option value="">Choose a State</option>
                        <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                        <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Pondicherry">Pondicherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option  value="West Bengal">West Bengal</option>
                      </select>
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Zip/Postcode:</span> </dt>
                    <dd>
                      <input type="hidden" value="13" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="Zip" class="FormFieldPrivateId">
                      <input type="text" value="" name="billing_zip" id="FormField_13" style="width:80px;" class="Textbox Field45 FormField">
                    </dd>
                    <dt style="display: none">&nbsp;</dt>
                    <dd style="display: none">
                      <label>
                        <input type="checkbox" value="1" id="save_billing_address" name="save_billing_address">
                        Save this address in my address book </label>
                    </dd>
                    <dt style=""><span class="FormFieldLabel">&nbsp;</span></dt>
                    <dd style="">
                      <label>
                        <input type="checkbox" checked  value="1" id="ship_to_billing_new" name="ship_to_billing_new"/>
                        I also want to ship to this address </label>
                    </dd>
                  </dl>
                  <p class="Submit">
                    <input type="submit" value="Bill to this Address" id="first_submit" class="billingButton">
                    <span style="display: none" class="LoadingIndicator"><img alt="" src="https://www.tonyperottiusa.com/templates/__custom/images/Loading.gif"></span> </p>
                </div>
              </div>
            </div>
          </form>
        </div>
        
        <h3 class="ExpressCheckoutTitle trigger" ><span>Step 2: Shipping Details </span><span style="display:none" class="ExpressCheckoutCompletedContent">javed iqubal, kolkata, kolkata, West Bengal, India, 700039</span><a href="#" style="display:none;">modify �</a></h3>
        <div class="ExpressCheckoutContent myForm" id="second" style="display:block;">
          <form  id="billing_second" action="#" method="post">
            <div style="display: none" id="ChooseBillingAddress">
              <label>
                <input type="radio" checked="checked" value="existing" id="BillingAddressTypeExisting" name="BillingAddressType" onclick="ExpressCheckout.ToggleAddressType('Billing', 'Select');">
                I want to use an existing billing address</label>
              <br>
              <div class="PL20 SelectBillingAddress"> <img class="FloatLeft" alt="" src="https://www.tonyperottiusa.com/templates/__custom/images/NodeJoin.gif">
                <div style="margin-left: 30px;">
                  <select size="5" style="width: 95%" name="sel_billing_address">
                  </select>
                  <div style="">
                    <label>
                      <input type="checkbox" checked="checked" value="1" id="ship_to_billing_existing" name="ship_to_billing_existing">
                      I also want to ship to this address</label>
                  </div>
                  <br>
                  <input type="submit" class="billingButton" value="Bill &amp; Ship to this Address">
                  <span style="display: none" class="LoadingIndicator"><img alt="" ></span> </div>
              </div>
              <label style="margin-top: 10px; display: block;" class="Clear">
                <input type="radio" id="BillingAddressTypeNew" name="BillingAddressType" value="new" />
                I want to use a new billing address</label>
              <br>
            </div>
            <div style="" class="Clear PL20 AddBillingAddress"> <img alt="" style="display: none" class="FloatLeft" >
              <div class="FloatLeft">
                <div class="FormContainer HorizontalFormContainer Clear">
                  <dl>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Email Address:</span> </dt>
                    <dd>
                      <input type="hidden" value="1" class="FormFieldId">
                      <input type="hidden" value="1" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="EmailAddress" class="FormFieldPrivateId">
                      <input type="text" value="" name="shipping_email" id="FormField_1" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">First Name:</span> </dt>
                    <dd>
                      <input type="hidden" value="4" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="FirstName" class="FormFieldPrivateId">
                      <input type="text" value="" name="shipping_firstname" id="FormField_4" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Last Name:</span> </dt>
                    <dd>
                      <input type="hidden" value="5" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="LastName" class="FormFieldPrivateId">
                      <input type="text" value="" name="shipping_lastname" id="FormField_5" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: hidden" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Company Name:</span> </dt>
                    <dd>
                      <input type="hidden" value="6" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="CompanyName" class="FormFieldPrivateId">
                      <input type="text" value="" name="shipping_company" id="FormField_6" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Phone Number:</span> </dt>
                    <dd>
                      <input type="hidden" value="7" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="Phone" class="FormFieldPrivateId">
                      <input type="text" value="" name="shipping_phone" id="FormField_7" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Address Line 1:</span> </dt>
                    <dd>
                      <input type="hidden" value="8" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="AddressLine1" class="FormFieldPrivateId">
                      <input type="text" value="" name="shipping_address1" id="FormField_8" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: hidden" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Address Line 2:</span> </dt>
                    <dd>
                      <input type="hidden" value="9" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="AddressLine2" class="FormFieldPrivateId">
                      <input type="text" value="" name="shipping_address2" id="FormField_9" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Suburb/City:</span> </dt>
                    <dd>
                      <input type="hidden" value="10" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="City" class="FormFieldPrivateId">
                      <input type="text" value="" name="shipping_city" id="FormField_10" class="Textbox Field200 FormField">
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Country:</span> </dt>
                    <dd>
                      <input type="hidden" value="Choose a Country" class="FormFieldChoosePrefix">
                      <input type="hidden" value="11" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleselect" class="FormFieldType">
                      <input type="hidden" value="Country" class="FormFieldPrivateId">
                      <select size="1" name="shipping_country" id="FormField_11" style="" class="Field200 FormField field-xlarge">
                        <option value="">Choose a Country</option>
                        <option value="India">India</option>
                       
                      </select>
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">State/Province:</span> </dt>
                    <dd>
                      <input type="hidden" value="Choose a State" class="FormFieldChoosePrefix">
                      <input type="hidden" value="12" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="selectortext" class="FormFieldType">
                      <input type="hidden" value="State" class="FormFieldPrivateId">
                      <noscript>
                      &lt;input type="text" name="FormField[2][12]" value="West Bengal" class="Field200" style=""  /&gt;
                      </noscript>
                      <select style="" class="FormField JSHidden Field200 field-xlarge" aria-required="1" id="FormField_12" name="shipping_state">
                        <option value="">Choose a State</option>
                        <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                        <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Pondicherry">Pondicherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option  value="West Bengal">West Bengal</option>
                      </select>
                    </dd>
                    <dt> <span style="visibility: visible" class="Required FormFieldRequired">*</span> <span class="FormFieldLabel">Zip/Postcode:</span> </dt>
                    <dd>
                      <input type="hidden" value="13" class="FormFieldId">
                      <input type="hidden" value="2" class="FormFieldFormId">
                      <input type="hidden" value="singleline" class="FormFieldType">
                      <input type="hidden" value="Zip" class="FormFieldPrivateId">
                      <input type="text" value="" name="shipping_zip" id="FormField_13" style="width:80px;" class="Textbox Field45 FormField">
                    </dd>
                    <dt style="display: none">&nbsp;</dt>
                    <dd style="display: none">
                      <label>
                        <input type="checkbox" value="1" id="save_billing_address" name="save_billing_address">
                        Save this address in my address book </label>
                    </dd>
                  </dl>
                  <p class="Submit">
                    <input type="submit" value="Bill &amp; Ship to this Address" id="second_submit" class="billingButton">
                    <span style="display: none" class="LoadingIndicator"><img alt="" /></span> </p>
                </div>
              </div>
            </div>
          </form>
        </div>
        
        <h3 class="ExpressCheckoutTitle"><span>Step 3: Shipping Method</span><span style="display:none" class="ExpressCheckoutCompletedContent myForm">International Standard Shipping for $59.99</span><a href="#" style="display:none;">modify �</a></h3>
        <div class="ExpressCheckoutContent myForm" id="third" style="display: block;"><form id="form_third"  action="#" method="post">
	<p>Please choose the shipping method for your order:</p>
	<p style="display: none">
	<strong>Shipped to:</strong> 
</p>
<div style="display: none" class="ShippingItemList PL20">
	<p><em><strong>Items:</strong></em></p>
		<ul>
			
		</ul>
	<p><em><strong>Choose a Shipping Method:</strong></em></p>
</div>
<ul class="ShippingProviderList">
<?php foreach ($shipping->result() as $sh){?>
	<li>
	<label id=""><input type="radio" class="shipperchecked" value="<?php echo $sh->shipperId;?>" id="shipperchecked" name="shipperchecked"/> <span class="ShipperName"><?php echo $sh->shipperName;?></span>  <em class="ShipperPrice ProductPrice"></em></label>
</li>

<?php }?>
</ul>
<hr style="display: none">
	<div class="ML20">
		<input type="submit" id="third_submit" value="Continue">
	</div>
	
</form></div>

		<h3 class="ExpressCheckoutTitle"><span>Step 4: Order Confirmation</span><span style="display:none" class="ExpressCheckoutCompletedContent myForm">Credit / Debit Card Checkout</span><a href="#" style="display:none;">modify �</a></h3>
        <div class="ExpressCheckoutContent myForm" id="fourth" style="display: block;"><form onsubmit="#" id="OrderConfirmationForm"  method="post">
	<p style="display: none" class="ErrorMessage">
		
	</p>

	<p style="display: none" class="SuccessMessage">
		
	</p>

	<input type="hidden" value="pay_for_order" name="action">
	<p>Please review the contents of your order below and then choose how you'd like to pay for your order.</p>
	<table cellspacing="0" cellpadding="0" class="CartContents" width="100%">
		<thead>
			<tr>
				<th style="white-space: nowrap;">Image</th>
				<th style="white-space: nowrap; ">Frame</th>
				<th style="white-space: nowrap; ">Paper</th>
				<th style="white-space: nowrap; ">Size</th>
				<th style="white-space: nowrap; width: 100px; ">Qty</th>
				<th style="white-space: nowrap; text-align: right; width: 35px;">Total Price</th>
			</tr>
		</thead>
		<tfoot>
		<?php $total=0;foreach ($cart->result() as $cr){
		
			$total=$total+$cr->productPrice;
		}?>
		<input type="hidden" id="totalprice" value="<?php echo $total;?>"/>
		
			<tr class="SubTotal">
	<td colspan="3"><strong>Subtotal:</strong></td>
	<td><em class="ProductPrice">Rs.<span id="totalpricedisplay"><?php echo $total;?></span></em></td>
</tr><!--<tr class="SubTotal">
	<td colspan="3"><strong>Shipping (VHL):</strong></td>
	<td><em class="ProductPrice">$59.99</em></td>
</tr><tr class="SubTotal">
	<td colspan="3"><strong>Grand Total:</strong></td>
	<td><em class="ProductPrice">$477.94</em></td>
</tr>-->
		</tfoot>
		<tbody>
		
		<?php foreach ($cart->result() as $c){?>
		
			<tr>
	<td>
	<?php $image=$this->photomodel->getimagebyid($c->imageId);?>
		<strong><?php echo $image->row()->imageName;?></strong>
		<small></small>
		<br>
		
		<!--<span class="Availability">same day shipping</span>
		--><div style="display: none;" class="CartExpectedReleaseDate">()</div>
		<div class="WrappingOptions" style="display: none"><!--
			Gift Wrapping: 
			--><br>
			<span style="display: none"><!--
				Gift Message:
				
			--></span>
		</div>
		<div style="margin-top: 10px;">
			<dl class="HorizontalFormContainer">
				
			</dl>
		</div>
	</td>
	<?php $frame=$this->photomodel->getframebyid($c->frameId);?>
	<td ><?php echo $frame->row()->frameName;?></td>
	<?php $paper=$this->photomodel->getpaperbyid($c->paperId);?>
	<td >
		<?php echo $paper->row()->paperName;?>
		
	</td>
	<td><?php echo $c->size;?></td>
	<td>
	<select class="orderquantity" style="width:35px;" data-cart="<?php echo $c->cartId;?>">
	<?php for ($i=1;$i<11;$i++){?>
	<option value="<?php echo $i;?>" <?php if ($i=="1"){?>selected<?php }?>><?php echo $i;?></option>
	<?php }?>
	</select>
	</td>
	<td style="text-align: right;"><em class="ProductPrice">Rs.<span class="price_text_<?php echo $c->cartId;?>"><?php echo $c->productPrice;?></span></em></td>
</tr>

<input type="hidden" id="individualprice_<?php echo $c->cartId;?>" value="<?php echo $c->productPrice;?>"/>
<input type="hidden" id="oldindividualprice_<?php echo $c->cartId;?>" value="<?php echo $c->productPrice;?>"/>
<?php }?>

		</tbody>
	</table>
	

	

	<p class="PL20">
		<input type="submit" value="Continue"  id="bottom_payment_button" />
	</p>
	

	
</form></div>

<form id="orderdetailsform" class="multiple">
	<?php foreach ($cart->result() as $cr){?>
		<input type="hidden" name="imageId[]" value="<?php echo $cr->imageId;?>"/>
		<input type="hidden" name="frameId[]" value="<?php echo $cr->frameId;?>"/>
		<input type="hidden" name="paperId[]" value="<?php echo $cr->paperId;?>"/>
		<input type="hidden" name="unitPrice[]" value="<?php echo $cr->productPrice;?>"/>
		<input type="hidden" name="size[]" value="<?php echo $cr->size;?>"/>
		<input type="hidden" name="frameType[]" value="<?php echo $cr->frameType;?>"/>
		<input type="hidden" id="quantity_<?php echo $cr->cartId;?>" name="quantity[]" value="1"/>
	<?php }?>	
	<input type="hidden" name="grandTotalPrice" value="<?php echo $total;?>"/>
	<input type="hidden" name="shipperId" value="0"/>
	</form>
    </div>
  </div>
  </div>
</div>