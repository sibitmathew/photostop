<?php
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$to = "sibi@inertiainc.co.in";
   $subject = "Membership-Thiruvilwamala Govt.VHSS Old Student's Society.";
   $name="Name";
   $address="address";
   $email="email";
    $element_5_month="elm";
    $element_5_day="elm";
     $element_5_year="elm";
     $mobile="elm";
     $telephone="0789687658765";
     $studyyear="2009";
     $modeofregistration="mode";
   $message = '
<html>
<head>

<title>Forgot Password</title>
</head>
<body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0">
<table width="640" border="0" cellspacing="0" cellpadding="0" bgcolor="#7da2c1">
<tr>
	<td style="padding:40px;">
		<table width="610" border="0" cellpadding="0" cellspacing="0" style="border:#1d4567 1px solid; font-family:Arial, Helvetica, sans-serif;">
		<tr>
			<td>
				<img src="email-header.jpg" width="608" height="148" alt="Header" style="margin:0px; padding:0px; border:none;">
			</td>
		</tr>
		<tr>
			<td valign="top">
				<table border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
				<tr>
					<td colspan="2">
						<h3 style="padding:10px 15px; margin:0px; color:#0d487a;">Heres Your New Password</h3>
						<p style="padding:0px 15px 10px 15px; font-size:12px; margin:0px;">
							Praesent iaculis consectetur mattis. Suspendisse ac leo a purus gravida volutpat. Duis mattis turpis eu dui ultricies tristique. In posuere, erat vulputate aliquet rutrum, massa orci rutrum ipsum, non tincidunt mi lectus nec nunc.
						</p>
					</td>
				</tr>
				<tr>
					<td width="50%" valign="top" style="font-size:12px; padding:10px 15px;">
						<p>
							<strong>New Password :</strong> bidrucreni
						</p>
						<p>
							Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus sit amet lacinia sapien.
						</p>
					</td>
					<td width="50%" valign="top" style="font-size:12px; padding:10px 15px;">
						<p>
							 If you have any questions, check out our <a href="#"><strong>documentation</strong></a> or send them our way via <a href="#"><strong>support.</strong></a>
						</p>
						<p>
							<strong>- The website Team</strong>
						</p>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>
</html>';

   
   
   
   
   $header = "From:stm@ymail.com";
   $result="";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      $result= "Message sent successfully...";
   }
   else
   {
      $result= "Message could not be sent...";
   }
   echo $result;
  ?> 