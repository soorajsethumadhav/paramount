

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



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Welcome to Paramount Autozone</title>

<meta content="english" http-equiv="Content-Language">

<meta name="Subject" content="paramount autozone,Turbocharger palakkad,paramount tradelinks">

<meta name="description" content="Paramount Autozone is the first authorized service center in Kerala for the service of TEL (Borg Warner) Turbochargers.our head office located in palakkad">

<meta name="keywords" content="paramount autozone,paramount group,paramount palakkad,paramount autozone">

<meta name="title" content="Welcome to Paramount Autozone">

<meta name="author" content="Paramount Autozone">

<meta name="generator" content="www.existors.com">

<meta name="classification" content="business website">

<meta name="distribution" content="Global">

<meta name="publisher" content="existors web solutions">

<meta name="GOOGLEBOT" content="INDEX, FOLLOW">

<meta name="robots" content="index, follow">

<meta name="language" content="en-gb">

<meta name="copyright" content="Paramount Autozone">

<meta name="rating" content="General">

<meta name="audience" content="All">

<meta name="resource-type" content="Web Page">

<meta name="doc-type" content="Web Page">

<meta name="doc-class" content="Published">

<meta name="doc-rights" content="Public Domain">

<link rel="stylesheet" type="text/css" href="css/style.css"/>



<script type="text/javascript" src="js/jquery.min.js"></script><!--menu-->  

<script src="js/slider.jquery.pack.js"></script><!--slider-->

<script type="text/javascript" src="js/menu.js"></script><!--menu-->

<script src='https://www.google.com/recaptcha/api.js'></script>

<script language="javascript" type="text/javascript">

function clearText(field)

{

    if (field.defaultValue == field.value) field.value = '';

    else if (field.value == '') field.value = field.defaultValue;

}

</script>

<SCRIPT TYPE="text/javascript">

<!--

//Disable right click script

var message="Sorry, right-click has been disabled";

///////////////////////////////////

function clickIE() {if (document.all) {(message);return false;}}

function clickNS(e) {if

(document.layers||(document.getElementById&&!document.all)) {

if (e.which==2||e.which==3) {(message);return false;}}}

if (document.layers)

{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}

else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")

// -->

</SCRIPT>

<script language='JavaScript1.2'>

function disableselect(e){

return false

}

function reEnable(){

return true

}

document.onselectstart=new Function ("return false")

if (window.sidebar){

document.onmousedown=disableselect

document.onclick=reEnable

}

</script>

<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>



<body>

<div id="cln">

<div id="frame">

<div id="cln">

<div id="logo"></div>

<div id="social_co">

 <div id="social_icon"><a href="http://www.linkedin.com/company/paramount-autozone" target="_blank"><img src="images/linked.png" style="width:51px; height:47px" /></a></div>

    <div id="social_icon"><a href="https://twitter.com/parmnt_autozone" target="_blank"><img src="images/twitter.png" style="width:51px; height:47px" /></a></div>

    <div id="social_icon"><a href="http://www.youtube.com/user/ParamountAutozone " target="_blank"><img src="images/youtube.png" style="width:51px; height:47px" /></a></div>

    <div id="social_icon"><a href="https://www.facebook.com/Paramount.Autozone" target="_blank"><img src="images/facebook.png" style="width:51px; height:47px" /></a></div>

    </div>

    

</div>





<div id="menu">

<div id="menu_in">

    

    <ul class="menu">

<li><a href="index.html"><span>Home</span></a></li>

<li><a href="about.html" class="parent"><span>About us</span></a> 

<ul>

<li><a href="principals.html"><span>Our Principals</span></a></li>

</ul>

</li>

<li><a href="services.html" class="parent"><span>Services</span></a>

<ul>

<li><a href="advantage.html"><span>Autozone&nbsp;Advantage</span></a></li>

</ul>

</li>

<li><a href="Trouble_shooting.html"><span>Trouble Shooting</span></a></li>

<li><a href="training_maintenance.html"><span>Training & Maintenance</span></a>

<ul>

<li><a href="turbocharger.html"><span>History&nbsp;&&nbsp;Benefits</span></a></li>

</ul>

</li>

<li><a href="download.html"><span>Downloads</span></a></li>

<li><a href="careers.html"><span>Careers</span></a></li>

<li><a href="clients.html"><span>Clients</span></a></li>

<li class="last current"><a href="contact.html"><span>Contact Us</span></a></li></ul>

<div style="display: none"><a href="http://apycom.com/">Apycom jQuery Menus</a></div>

    

    </div>

    

    

   

    



</div>







<div id="cln">

<div id="slider">

<img src="images/banner-5.jpg" />

<img src="images/banner-2.jpg" />

<img src="images/banner.jpg" />

<img src="images/banner-3.jpg" />

<img src="images/banner-4.jpg" />

</div>

</div>



<div id="shadow"></div>



<div id="cln_10"></div>

<div id="cln_10"></div>

<div id="cln_10"></div>



<div id="cln">



<div id="orenge">

<h3>Our Vision</h3>

<p>To expand our horizon in the field of Service by working with and offering international Quality environment friendly products and services in order to achieve growth and recognition </p>

<p style="text-align:right;"><a href="#"><img src="images/link.png" /></a></p>

</div>



<div id="green">

<h3>Our Quality Policy</h3>

<p>We are committed to achieve and sustain excellence in service performance and quality by effectively meeting customer’s quality requirements through continual improvement to achieve total customer satisfaction. </p>

<p style="text-align:right;"><a href="#"><img src="images/link.png" /></a></p>

</div>



<div id="blu">

<h3>Our Mission</h3>

<p>To constantly upgrade ourselves with the latest in technology to save energy and expand our business by being the leader in the field of our business. </p>

<p style="text-align:right;"><a href="#"><img src="images/link.png" /></a></p>

</div>



</div>



<div id="cln_10"></div>

<div id="cln_10"></div>



<div id="Left">

<img src="images/photo.jpg" />





<div id="cln_10"></div>

<div id="cln_10"></div>

<div id="cln_10"></div>

<div id="cln_10"></div>

<h1>Services</h1>

<ul class="lbe_list_3">

<li><a href="services.html">Exclusive full fledged service center for Turbochargers </a></li>

<li><a href="services.html">Warranty Services & Repairs</a></li>

<li><a href="services.html">Genuine and high quality Spare Parts</a></li>

<li><a href="services.html">Turbocharger assemblies</a></li>

<li><a href="services.html">Field inspections for trouble shooting*</a></li>

<li><a href="services.html">Training on turbocharger usage and maintenance for dealers / customers</a></li>

<li><a href="services.html">Service Campaigns in conjunction with respective dealers / service centers</a></li>

<li><a href="services.html">Bi-Annual checkups at dealer points for turbochargers</a></li>

<li><a href="services.html">Float Assemblies for critical services*</a></li>

<h6>*Conditions Apply</h6>

</ul>



</div>





<div id="right">

<h1>Contact</h1>



<h2 style="color:red;">Service Centers</h2>





<div id="cln"><div id="contact_bx"><!--contact box-->

<h2>Palakkad</h2>

<p>Palakkad17/550(9),KTV Tower,</p>

<p>West Fort Road,</p>

<p>Palakkad</p>

<p>Pin : 678 001</p>

<p>Phone : 0491 –3260808, 3208000 </p>

</div>

<div id="map"><!---map---->

<iframe width="425" height="123" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?ie=UTF8&amp;q=paramount+autozone&amp;fb=1&amp;gl=in&amp;hq=paramount+autozone&amp;hnear=0x3ba86dfa087d31ad:0xf542d6eb7a870a56,Palakkad,+Kerala&amp;cid=0,0,3317890550841484814&amp;t=m&amp;ll=10.760566,76.654637&amp;spn=0.002593,0.00912&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?ie=UTF8&amp;q=paramount+autozone&amp;fb=1&amp;gl=in&amp;hq=paramount+autozone&amp;hnear=0x3ba86dfa087d31ad:0xf542d6eb7a870a56,Palakkad,+Kerala&amp;cid=0,0,3317890550841484814&amp;t=m&amp;ll=10.760566,76.654637&amp;spn=0.002593,0.00912&amp;z=16&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>



</div><!---map---->

</div>

<div id="cln_10"></div>

<div id="cln_10"></div>

<div id="cln_10"></div>

<div id="cln">







<div id="contact_bx"><!--contact box-->

<h2>Kochi</h2>

<p>40/618, BhagavathyParambilBuilding,</p>

<p>Near Federal Bank, Palarivattom,</p>

<p>Kochi</p>

<p>Pin : 682 025</p>

<p>Phone : 0848 -3114333 </p>

</div>



<div id="contact_bx_2"><!--contact start-->

<h2>Kozhikode</h2>

<p>3/165-A,Nano Building,</p>

<p>Major SanthoshRoad, Behind Co-Op Urban Bank,</p>

<p>Vandipetta, West Nadakkavu,</p>

<p>Kozhikode</p>

<p>Pin : 673 011</p>

<p>Phone : 0495 3104333</p>                

</div>



</div>





<div id="cln"></br>





<h2 style="color:red;">Collection Centers</h2>



<div id="contact_bx"><!--contact box-->

<h2>Kannur</h2>

<p>EP III/178, EVES Arcade,</p>

<p>Opposite Technical High School,</p>

<p>Thottada,</p>

<p>Kannur</p>

<p>Pin : 670 007</p>

<p>Phone : 0497 –3268785</p>

</div>







<div id="contact_bx"><!--contact box-->

<h2>Thiruvananthapuram</h2>

<p>TC 36/1090(9), NarayanNilayam,</p>

<p>EanchakkalJunction, VallakadavuP.O.,</p>

<p>Thiruvananthapuram</p>

<p>Pin : 695 008</p>

<p>Phone : 0471 –3198785</p>

</div>







</div>











<div id="cln">

<div id="cln_10"></div>

<div id="cln_10"></div>

<div id="cln_10"></div>



<div class="alert">



<h3 style="text-align:center; color:#000000;">Website</h3>

<p style="text-align:center;">www.paramountautozone.com</p>

<p style="text-align:center;">www.paramountgrp.net</p>



<p style="text-align:center; font-weight:bold;">Service Helpline : +91 491 3208000</p>

<p style="text-align:center; font-weight:bold;">Technical Assistance : +91 93491 27136</p>





</div>



</div>



<div id="contact_form"><!--contact start-->



<form method="post" name="contactform" action="" onsubmit="return validate.check(this)">

<div id="bx_c"><!--contact box-->



<div id="cln">                    

<!--<label for="author">Name</label>-->

<input type="text" onblur="clearText(this)" onfocus="clearText(this)" value="Name" name="Full_Name" id="Full_Name" class="input_field">                      

</div>

                       

                       

<div id="cln">                     

<!--<label for="author">Address</label>-->

<input type="text" onblur="clearText(this)" onfocus="clearText(this)" value="Address" name="Address" id="Address" class="input_field">                      

</div>

                       

                       

<div id="cln">                    

<!--<label for="author">Email</label>-->

<input type="text" onblur="clearText(this)" onfocus="clearText(this)" value="Email" name="Email_Address" id="Email_Address" class="input_field">                      

</div>

                       

                       

<div id="cln">                     

<!--<label for="author">Phone</label>-->

<input type="text" onblur="clearText(this)" onfocus="clearText(this)" value="Phone" name="Telephone_Number" id="Telephone_Number" class="input_field">                      

</div>



     </div><!--contact end-->

  

  <div id="bx_c_2"><!--contact start-->

  

<div id="cln">                     

<!--<label for="author">Mobile</label>-->

<input type="text" onblur="clearText(this)" onfocus="clearText(this)" value="Mobile" name="Mobile_Number" id="Mobile_Number" class="input_field">                      

</div>



<div id="cln">

<!--<label for="author">Message</label>-->

<textarea name="Your_Message" id="Your_Message" onblur="clearText(this)" onfocus="clearText(this)" value="Message" rows="0" cols="0" class="required">Message </textarea>

</div>



<div id="cln_10"><div id="blank_10"><div class="g-recaptcha" data-sitekey="6Le0SxETAAAAAPeWR2qoTm327eBwHai4D3BAwoAW"></div></div></div>

<div id="cln">

<input type="submit" class="submit_btn float_l" name="contact" value="SEND">

<input type="reset" class="submit_btn float_l" name="submit" value="RESET">

</div>



</div>



</form>



</div>







<div id="cln_10"></div>

<div id="cln_10"></div>

<div id="cln_10"></div>

<div id="cln_10"></div>

<div id="cln_10"></div>





















</div>



</div>









<div id="footer">

<div id="frame"><!--frame start-->



<div id="ft_left"><img src="images/footer_logo.jpg"></div>





<div id="ft_menu_top"></div>



<div id="ft_menu_cen">



<ul class="ft_list">

<li><a href="index.html">Home</a></li>

<li><a href="about.html">About us</a></li>

<li><a href="principals.html">Our Principals</a></li>

<li><a href="turbocharger.html">History & Benefits</a></li>

<li><a href="contact.html">Contact us</a></li>

</ul>



<ul class="ft_list">

<li><a href="services.html">Services</a></li>

<li><a href="advantage.html">Autozone Advantage</a></li>

<li><a href="Trouble_shooting.html">Trouble Shooting</a></li>

<li><a href="training_maintenance.html">Training & Maintenance</a></li>

<li><a href="download.html">Downloads</a></li>

</ul>







<div id="social_r"><div id="phone_con"><p class="roman">+91 93491 27136</p></div>

<div id="phone_con"><p>info@paramountautozone.com</p></p></div>

<div id="phone_con"><p>www.paramountautozone.com</p></p></div>

<div id="em_log_button"> <a href="http://www.paramountautozone.com/webmail" target="_blank"><img src="images/login 1 copy.png" /></a></div>





</div>

<div id="social"></div>



</div>



<div id="ft_menu_btm"></div>





<div id="cln">

<div id="copy_right">&copy; 2013 Paramount Autozone. All Rights Reserved. </div>

<div id="ex">Site by :<a href="http://www.existors.com"> Existors Web Solutions</a></div>

</div>





</div><!--frame end-->

</div>



<script>

/* <![CDATA[ */

// lateral slider

$( '#slider' ).lateralSlider( {

	captionPadding: '0',

	captionHeight: 45

} );

/* ]]> */

</script><!--slider-->

</body>

</html>