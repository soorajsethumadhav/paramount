<script src='https://www.google.com/recaptcha/api.js'></script>
<?php
$recaptcha=$_POST['g-recaptcha-response'];
$name = strip_tags($_POST['Full_Name']);
$address = strip_tags($_POST['Address']);
$email = strip_tags($_POST['Email_Address']);
$tel = strip_tags($_POST['Telephone_Number']);
$mob = strip_tags($_POST['Mobile_Number']); 
$msg = strip_tags($_POST['Your_Message']); 




    if(!empty($recaptcha))

		{
			include("getCurlData.php");
$google_url="https://www.google.com/recaptcha/api/siteverify";
$secret='6Le0SxETAAAAACZWkpV_5diE1kJtGMunJnyPu311';
$ip=$_SERVER['REMOTE_ADDR'];
$url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
$res=getCurlData($url);
$res= json_decode($res, true);


			if($res['success'])
{
	
mail( "paramount.autozone@gmail.com", "Paramount Contact Form",
"Name: $name \n
Email: $email \n
Telephone Number: $tel \n
Mobile Number: $mob \n
Address: $address \n
Message: $msg \n",
"From: Paramount <form@paramountautozone.com>" );
header("Location: contact.html");	
	 
	echo "<script>alert('Have Successfully Posted Your Requiremnt');</script>";	
	
}
			
	
}

else
		
		{
			
			echo "<script>alert('Please check Captcha');</script>";	
			
		}


?>