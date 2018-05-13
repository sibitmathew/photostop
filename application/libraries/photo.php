<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class photo{
	function photo(){
		 include('phpmailer/class.phpmailer.php');
	}
	
	function checksession($session){
		if($session==null){ // Function to check Session is set or not
			redirect(site_url().'/login');
		}
	}
	function sendmail($from,$fromtxt,$to,$sub,$txt){
		//include('lib/class.phpmailer.php');
		/*if (!class_exists("phpmailer")) {
			include('lib/class.phpmailer.php');
		}
		$mail = new PHPMailer();
		
		$mail->IsSMTP(); // set mailer to use SMTP
		
		$mail->Host = 'mail.classictelco.com.au'; // specify main and backup server
		
		$mail->SMTPAuth = true; // turn on SMTP authentication
		
		$mail->Username = 'info@classictelco.com.au'; // SMTP username
		
		$mail->Password = 'classic123'; // SMTP password
		
		$mail->From = $from;
		
		$mail->FromName = $fromtxt;
		
		$address=explode(",",$to);
		
		foreach ($address as $t){
			$mail->AddAddress($t); // Email on which you want to send mail
		}
		
		
		$mail->AddReplyTo('info@classictelco.com.au', 'Info'); //optional
		
		$mail->IsHTML(true);
		
		$mail->Subject = $sub;
		
		$mail->Body = $txt;
		
		return $mail->Send();*/
		$CI =& get_instance();		
		
		$CI =& get_instance();
		$CI->load->library('email');
		$config['protocol'] = 'mail';
		//$config['smtp_user'] = 'info@classictelco.com.au';
		//$config['smtp_pass'] = 'classic123';
		
		
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$CI->email->initialize($config);
		$CI->email->from($from,$fromtxt);
		$CI->email->to($to);
		$CI->email->subject($sub);
		
		$CI->email->message($txt);
	
		$ret=$CI->email->send();
		//return $CI->email->print_debugger();
		return $ret;
	}
	
	function sendmailattachments($from,$fromtxt,$to,$sub,$txt,$path){
       
        
        $mail = new PHPMailer();
//        
        $mail->IsSMTP(); // set mailer to use SMTP
        
//        $mail->SMTPSecure ="ssl";
//        
        $mail->Host = 'photostop.in'; // specify main and backup server
        
//        $mail->Port=465;
//        
        $mail->SMTPAuth = true; // turn on SMTP authentication
//        
        $mail->Username = 'info@photostop.in';// SMTP username
//        
        $mail->Password = 'photo123'; // SMTP password
//        
        $mail->From = $from;
//        
        $mail->FromName = $fromtxt;
//        
        $address=explode(",",$to);
        
//        
        foreach ($address as $t){
            $mail->AddAddress($t); // Email on which you want to send mail
        }
//        
//        
        $mail->AddReplyTo($from, $fromtxt); //optional
        
        $mail->IsHTML(true);
        
        $mail->Subject = $sub;
        
        $mail->Body = $txt;
        
        if($path!=""){
         	$attachments=explode(",",$path);
	        foreach ($attachments as $att){
	            $mail->AddAttachment(realpath("./uploaded_sample_images/".$att));
	        }
        }
       
        
        return $mail->Send();

    }
	
	
	function getCustomDate($dateFormat,$date){
		if($date!=""){
			if(!is_numeric(trim($date))){
				return mdate($dateFormat,strtotime(trim($date)));
			}else{
				return mdate($dateFormat,trim($date));
			}
		}else{
			return "";
		}		
	}
	
	function addDays($dateformat,$date,$n){
//    	date_default_timezone_set('UTC');
    	return mdate($dateformat,mktime(0,0,0, date("m",$date), date("d",$date)+$n,date("Y",$date)));
    }
    function convertCustomDate($customdate)
    {
    	$split_date=explode('/', $customdate);
    	$m="";
    	if($split_date[1]=="Jan")
    	{
    		$m="01";
    	}
   		 if($split_date[1]=="Feb")
   		 {
    		$m="02";
    	}
     	if($split_date[1]=="Mar")
   		 {
    		$m="03";
    	}
     	if($split_date[1]=="Apr")
   		 {
    		$m="04";
    	}
   		 if($split_date[1]=="May")
   		 {
    		$m="05";
    	}
    	 if($split_date[1]=="Jun")
   		 {
    		$m="06";
    	}
     	if($split_date[1]=="Jul")
   		 {
    		$m="07";
    	}
     	if($split_date[1]=="Aug")
   		 {
    		$m="08";
    	}
    	 if($split_date[1]=="Sep")
   		 {
    		$m="09";
    	}
   		 if($split_date[1]=="Oct")
   		 {
    		$m="10";
    	}
     	if($split_date[1]=="Nov")
   		 {
    		$m="11";
    	}
    	 if($split_date[1]=="Dec")
   		 {
    		$m="12";
    	}
    	$new_date=$split_date[2]."-".$m."-".$split_date[0];
    	return $new_date;
    }
    
    function getallcountries()
    {
    	$country_list = array(
		"Afghanistan",
		"Albania",
		"Algeria",
		"Andorra",
		"Angola",
		"Antigua and Barbuda",
		"Argentina",
		"Armenia",
		"Australia",
		"Austria",
		"Azerbaijan",
		"Bahamas",
		"Bahrain",
		"Bangladesh",
		"Barbados",
		"Belarus",
		"Belgium",
		"Belize",
		"Benin",
		"Bhutan",
		"Bolivia",
		"Bosnia and Herzegovina",
		"Botswana",
		"Brazil",
		"Brunei",
		"Bulgaria",
		"Burkina Faso",
		"Burundi",
		"Cambodia",
		"Cameroon",
		"Canada",
		"Cape Verde",
		"Central African Republic",
		"Chad",
		"Chile",
		"China",
		"Colombi",
		"Comoros",
		"Congo (Brazzaville)",
		"Congo",
		"Costa Rica",
		"Cote d'Ivoire",
		"Croatia",
		"Cuba",
		"Cyprus",
		"Czech Republic",
		"Denmark",
		"Djibouti",
		"Dominica",
		"Dominican Republic",
		"East Timor (Timor Timur)",
		"Ecuador",
		"Egypt",
		"El Salvador",
		"Equatorial Guinea",
		"Eritrea",
		"Estonia",
		"Ethiopia",
		"Fiji",
		"Finland",
		"France",
		"Gabon",
		"Gambia, The",
		"Georgia",
		"Germany",
		"Ghana",
		"Greece",
		"Grenada",
		"Guatemala",
		"Guinea",
		"Guinea-Bissau",
		"Guyana",
		"Haiti",
		"Honduras",
		"Hungary",
		"Iceland",
		"India",
		"Indonesia",
		"Iran",
		"Iraq",
		"Ireland",
		"Israel",
		"Italy",
		"Jamaica",
		"Japan",
		"Jordan",
		"Kazakhstan",
		"Kenya",
		"Kiribati",
		"Korea, North",
		"Korea, South",
		"Kuwait",
		"Kyrgyzstan",
		"Laos",
		"Latvia",
		"Lebanon",
		"Lesotho",
		"Liberia",
		"Libya",
		"Liechtenstein",
		"Lithuania",
		"Luxembourg",
		"Macedonia",
		"Madagascar",
		"Malawi",
		"Malaysia",
		"Maldives",
		"Mali",
		"Malta",
		"Marshall Islands",
		"Mauritania",
		"Mauritius",
		"Mexico",
		"Micronesia",
		"Moldova",
		"Monaco",
		"Mongolia",
		"Morocco",
		"Mozambique",
		"Myanmar",
		"Namibia",
		"Nauru",
		"Nepa",
		"Netherlands",
		"New Zealand",
		"Nicaragua",
		"Niger",
		"Nigeria",
		"Norway",
		"Oman",
		"Pakistan",
		"Palau",
		"Panama",
		"Papua New Guinea",
		"Paraguay",
		"Peru",
		"Philippines",
		"Poland",
		"Portugal",
		"Qatar",
		"Romania",
		"Russia",
		"Rwanda",
		"Saint Kitts and Nevis",
		"Saint Lucia",
		"Saint Vincent",
		"Samoa",
		"San Marino",
		"Sao Tome and Principe",
		"Saudi Arabia",
		"Senegal",
		"Serbia and Montenegro",
		"Seychelles",
		"Sierra Leone",
		"Singapore",
		"Slovakia",
		"Slovenia",
		"Solomon Islands",
		"Somalia",
		"South Africa",
		"Spain",
		"Sri Lanka",
		"Sudan",
		"Suriname",
		"Swaziland",
		"Sweden",
		"Switzerland",
		"Syria",
		"Taiwan",
		"Tajikistan",
		"Tanzania",
		"Thailand",
		"Togo",
		"Tonga",
		"Trinidad and Tobago",
		"Tunisia",
		"Turkey",
		"Turkmenistan",
		"Tuvalu",
		"Uganda",
		"Ukraine",
		"United Arab Emirates",
		"United Kingdom",
		"United States",
		"Uruguay",
		"Uzbekistan",
		"Vanuatu",
		"Vatican City",
		"Venezuela",
		"Vietnam",
		"Yemen",
		"Zambia",
		"Zimbabwe"
	);
	
	return $country_list;
    }
    
//Mail 

    
function smtpmailer($to, $from, $from_name, $subject, $body) {
			require_once('./phpmailer/class.phpmailer.php');
			global $error;
			$mail = new PHPMailer();  // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true;  // authentication enabled
			//$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
			$mail->Host = 'mail.teami.in';
			//$mail->Port = '80';
			$mail->Username = 'admission@teami.in';
			$mail->Password = 'india!@#';
			/*$mail->Host = 'mail.idomail.com';
			//$mail->Port = '80';
			$mail->Username = 'response@teami.in';
			$mail->Password = 'Zeroin4848';*/
			$mail->SetFrom($from, $from_name);
			$mail->Subject = $subject;
			$mail->IsHTML(true);
			$mail->Body = $body;
			$mail->AddAddress($to);
//			$mail->AddCC($adminEmail, "admin");
			if(!$mail->Send()) {
				$error = 'Mail error: '.$mail->ErrorInfo;
				return false;
			} else {
				$error = 'Message sent!';
				return true;
			}
		}
}