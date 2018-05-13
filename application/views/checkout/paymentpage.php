<HTML>
<HEAD>
<TITLE><?php echo $title;?></TITLE>



<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<style>
	h1       { font-family:Arial,sans-serif; font-size:24pt; color:#08185A; font-weight:100; margin-bottom:0.1em}
    h2.co    { font-family:Arial,sans-serif; font-size:24pt; color:#FFFFFF; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3.co    { font-family:Arial,sans-serif; font-size:16pt; color:#000000; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3       { font-family:Arial,sans-serif; font-size:16pt; color:#08185A; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    body     {
	font-family:Verdana,Arial,sans-serif;
	font-size:11px;
	color:#08185A;
	background-color: #FFFFFF;
}
	th 		 { font-size:12px;background:#015289;color:#FFFFFF;font-weight:bold;height:30px;}
	td 		 { font-size:12px;background:#DDE8F3}
	.pageTitle { font-size:24px;}
.style2 {color: #FFFFFF}
a:link {
	color: #FFFFFF;
}
body,td,th {
	color: #003399;
}
.style10 {color: #FFFFFF; font-style: italic; }
.style11 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF;}
</style>
</HEAD>
<script language="JavaScript">
function validate(){
	
	var frm = document.frmTransaction;
	var aName = Array();
	aName['account_id'] = 'Account ID';
	aName['reference_no'] = 'Reference No';
	aName['amount'] = 'Amount';
	aName['description'] = 'Description';
	aName['name'] = 'Billing Name';
	aName['address'] = 'Billing Address';
	aName['city'] = 'Billing City';
	aName['state'] = 'Billing State';
	aName['postal_code'] = 'Billing Postal Code';
	aName['country'] = 'Billing Country';
	aName['email'] = 'Billing Email';
	aName['phone'] = 'Billing Phone Number';
	aName['return_url']='Return URL';
	

	for(var i = 0; i < frm.elements.length ; i++){
		if((frm.elements[i].value.length == 0)||(frm.elements[i].value=="Select Country")){
						if((frm.elements[i].name=='country'))
					alert("Select the " + aName[frm.elements[i].name]);
					else
					alert("Enter the " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;
			}
			if(frm.elements[i].name=='account_id'){
			
			if(!validateNumeric(frm.elements[i].value)){
					alert("Account Id must be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}
			
			if(frm.elements[i].name=='amount'){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Amount should be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}
			if((frm.elements[i].name=='postal_code'))
			{
			if(!validateNumeric(frm.elements[i].value)){
					alert("Postal code should be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}	
			
			if((frm.elements[i].name=='phone')){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Enter a Valid CONTACT NUMBER");
			frm.elements[i].focus();
			return false;
			}
			}		
    	
    
	
		if((frm.elements[i].name == 'name'))
		{
		
		if(validateNumeric(frm.elements[i].value)){
					alert("Enter your Name");
			frm.elements[i].focus();
			return false;
			}
		}
		
				
				
    
			
							
		if(frm.elements[i].name == 'email'){
				if(!validateEmail(frm.elements[i].value)){
					alert("Invalid input for " + aName[frm.elements[i].name]);
					frm.elements[i].focus();
					return false;
				}		
			}
			
	}  
	return true;
}

	function validateNumeric(numValue){
		if (!numValue.toString().match(/^[-]?\d*\.?\d*$/)) 
				return false;
		return true;		
	}

function validateEmail(email) {
    //Validating the email field
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	//"
    if (! email.match(re)) {
        return (false);
    }
    return(true);
}


Array.prototype.inArray = function (value)
// Returns true if the passed value is found in the
// array.  Returns false if it is not.
{
    var i;
    for (i=0; i < this.length; i++) {
        // Matches identical (===), not just similar (==).
        if (this[i] === value) {
            return true;
        }
    }
    return false;
};

</script>
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 >
<center>

 <table width='100%' cellpadding='0' cellspacing="0" ><tr><th width='90%'><h2 class='co'>&nbsp;Photostop-Online payment confirmation</h2></th></tr></table><!--
     <center>
       <h1> Example</H1>
     </center>
  --><center>
	   <table width="2" height="28" border="0" cellpadding="2" cellspacing="2">
       </table>
	   <h3>Please confirm the entered details.</H3>
	   <table width="600" border="0" cellpadding="2" cellspacing="2">
         <!--<tr>
           <th colspan="2"><span class="style2">FOR ANY QUERIES,KINDLY BROWSE</span> <span class="style2">OUR KNOWLEDGEBASE </span><span class="style10"><a href="http://support.ebs.in/index.php?_m=knowledgebase&_a=view" target="_ blank" class="style11" >CLICK HERE</a></span></th>
         </tr>
       --></table>
       <p>&nbsp;</p>
       <table width="600" height="35" border="0" cellpadding="2" cellspacing="2">
         <!--<tr>
           <th height="53" colspan="2"><div align="center"><span class="style2">Account Details</span></div></th>
         </tr>
       --></table>
<?php 

$reference_no="";
$amount="";
$description="";
$name="";
$address="";
$city="";
$state="";
$postal_code="";
$country="";
$email="";
$phone="";
$ship_name="";
$ship_address="";
$ship_city="";
$ship_state="";
$ship_postal_code="";
$ship_country="";
$ship_phone="";




foreach ($billing->result() as $bil){
	$reference_no=$bil->billId;
	$name=$bil->billing_firstname." ".$bil->billing_lastname;
	$address=$bil->billing_address1." ".$bil->billing_address2;
	$city=$bil->billing_city;
	$state=$bil->billing_state;
	$postal_code=$bil->billing_zip;
	$country=$bil->billing_country;
	$email=$bil->billing_email;
	$phone=$bil->billing_phone;
}

foreach ($shipping->result() as $ship){
	$ship_name=$ship->shipping_firstname." ".$ship->shipping_lastname;
	$ship_address=$ship->shipping_address1." ".$ship->shipping_address2;
	$ship_city=$ship->shipping_city;
	$ship_state=$ship->shipping_state;
	$ship_country=$ship->shipping_country;
	$ship_phone=$ship->shipping_phone;
}

$amount=$this->session->userdata('grandtotalprice');
$return_url="http://localhost/checkout/checkoutreturn?DR={DR}";

$hash = "7271620f80dc17634e37fdd58cfa812e"."|12912|".$amount."|".$reference_no."|".$return_url."|TEST";

$secure_hash = md5($hash);

?>     



 
 
 <?php //print_r($this->session->userdata('orderidarray'));
 //echo $hash;
 ?>
       
       
  </center>
<form  method="post" action="https://secure.ebs.in/pg/ma/sale/pay" name="frmTransaction" id="frmTransaction" onSubmit="return validate()">
 <input name="account_id" type="hidden" value="12912"/>
 <input name="return_url" type="hidden" size="60" value="http://localhost/checkout/checkoutreturn?DR={DR}" />
 <input name="mode" type="hidden" value="TEST"/>
 

 
  
 
  <table width="600" cellpadding="2" cellspacing="2" border="0">
  
  
  
 
  
  
  <tr>
    <th colspan="2"><div align="center"><span class="style2">Transaction Details</span></div></th>
  </tr>
  <tr>
    <td class="fieldName" width="100%"><span class="error">*</span>Reference No</td>
    <td  align="left" width="100%"><input name="reference_no" readonly="readonly" value="<?php echo $reference_no;?>" type="text"  /></td>
  </tr>
  <tr title="Enter the Price of the product that is offered for sale">
    <td class="fieldName" width="100%"><span class="error">*</span>Sale Amount</td>
    <td  align="left" width="100%"><input name="amount" readonly="readonly" value="<?php echo$amount;?>" type="text"/>
      <strong>INR</strong></td>
  </tr>
  
   
  
  <tr  title="Displays the description of the selected / ordered product.">
    <td class="fieldName" width="100%"><span class="error">*</span>Description</td>
    <td  align="left" width="100%"><input name="description" value="" type="text" /> </td>
  </tr>
  
 
 
 
 <input name="name" type="hidden" value="<?php echo $name;?>"  />
  <input name="address" type="hidden" value="<?php echo $address;?>"/>
  <input name="city" type="hidden" value="<?php echo $city;?>"/> 
  <input name="state" type="hidden" value="<?php echo $state;?>"/> 
  <input name="postal_code" type="hidden" value="<?php echo $postal_code;?>"/>
  <input name="country" value="IND" type="hidden" value="<?php echo $country;?>" />
  <input name="email" type="hidden" value="<?php echo $email;?>"/>
  <input name="phone" type="hidden" value="<?php echo $phone;?>"/>
   <input name="secure_hash" type="hidden" size="60" value="<? echo $secure_hash;?>" />
 
 

 

   <tr>
    <td valign="top" align="center" colspan="2"><input name="submitted" value="Submit" type="submit" />
      &nbsp;
      <input name="reset" type="reset" value="Reset" />    </td>
  </tr>
  <tr>
    <th height="30" colspan="2"><span class="style2">*DENOTES </span><a href="https://support.ebs.in/index.php?_m=knowledgebase&_a=viewarticle&kbarticleid=183&nav=0,5,2" target="_blank" class="style2"><em>mandatory fields</em></a></th>
  </tr>
    </table>
</form>
</center>
</table>
</body>
</html>
