<?php
include('config.php');
include('function.php');

if(isset($_POST['username']))
{
	
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$valid=check($user,$pass);
 
	 if($valid==1)
	 {
		 header('location:dashboard.php');
	 }
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="js flexbox opacity cssanimations fontface generatedcontent" xmlns="http://www.w3.org/1999/xhtml" itemscope="" itemtype="http://schema.org/WebPage" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en-IN" lang="en-IN"><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="assets/style.css">

<title>Online Associate Business</title>
<link rel="shortcut icon" href="images/guialis-favicon.png">
<meta name="language" content="en-IN">



<link rel="shortcut icon" href="images/guialis/favicon.ico">
<link rel="apple-touch-icon" href="images/guialis/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/guialis/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/guialis/apple-touch-icon-114x114.png">        
<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">        


<style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>    

<body>
<!-- Navbar -->
<div class="header" id="header">
<div class="container">
<div class="headercont">
<a href="index.php" class="searchbar_logo">
<span class="image_sprite sprite-guialis_logo" id="logo"></span>
</a>
    
<div class="top_buttons">
  <?php include('menu.php');?>
  
  
  
</div>
    
</div>
</div>
</div>   

<!-- Navbar fin-->  


<div class="content-top" id="wrapper">

<div class="container"> 

<div class="left"> 
<h1> Welcome to Associate India</h1>,		
<div class="box"><div class="txt"><a class="clp" href="#">BMI Calculator    <br /></a></div></div>
 <div class="box"><div class="txt"><a class="clp" href="#">Human Life Value Calculator<br /></a></div></div>
<div class="box"><div class="txt"><a class="clp" href="#">Return On Investment Calculator<br /></a></div></div>
 <div class="box"><div class="txt"><a class="clp" href="#">Loan EMI Calculator<br /></a></div></div>
<div class="box"><div class="txt"><a class="clp" href="#">Income Tax Calculator<br /></a></div></div>
  

</div>

<div class="right">     
 
<h1 class="loginTitle">Associate Login</h1>
<form action="" method="post" id="login_form">                
<input type="text" size="40" name="username" id="login_name" placeholder="Email" class="loginInput">
<input type="password" size="40" name="password" id="login_pass" placeholder="Password" class="loginInput">

<div>
<p style="display:none;" class="loginError" id="login_error">Enter your login and password correctly </p>
</div>

<input type="submit" value="Login" class="loginButton">
<input type="text" value="0" name="type" id="type" style="visibility: hidden">            
</form>


<div class="widget">
<h1 class="loginTitle">Contest of the Month</h1>
 
<div class="wtxt">
 <marquee  behavior="scroll" direction="up"  scrollamount="5">  
<p>Productos de Inversión. Trabajamos en América Latina, El Caribe, Europa y Asia. Cuatro décadas de experiencia y trayectoria asegurando el futuro de nuestros clientes mediante innovaciones en seguros.</p>
<p>Productos de Inversión. Trabajamos en América Latina, El Caribe, Europa y Asia. Cuatro décadas de experiencia y trayectoria asegurando el futuro de nuestros clientes mediante innovaciones en seguros.</p>
</marquee>
</div>
</div>

<div class="widget">
<h1 class="loginTitle">News and updates</h1>
<div class="wtxt">
 <marquee  behavior="scroll" direction="up"  scrollamount="5">  
<p>Productos de Inversión. Trabajamos en América Latina, El Caribe, Europa y Asia. Cuatro décadas de experiencia y trayectoria asegurando el futuro de nuestros clientes mediante innovaciones en seguros.</p>
<p>Productos de Inversión. Trabajamos en América Latina, El Caribe, Europa y Asia. Cuatro décadas de experiencia y trayectoria asegurando el futuro de nuestros clientes mediante innovaciones en seguros.</p>
</marquee>
</div>

</div>

</div>

</div>

 

</div>            

<!-- footer -->
<div class="footer">
<div class="container">
<div class="footer_links">  
<div>
                                 
</div>
<div>

</div>            

</div>
<div class="social">
<ul>
<li class="facebook_menu"><a href="https://www.facebook.com/" title="Facebook"></a></li>
<li class="twitter_menu"><a href="https://twitter.com/" title="Twitter"></a></li>
<li class="google_menu"><a href="#" title="Google Plus"></a></li>
</ul>
</div>                
<div class="copyright">
Copyright © 2014 by  Online Associate Business. All rights reserved. Powered by <a href="http://www.relianceinfosoft.com"> Relianceinfosoft </a><br>  
</div>  

<div id="div-cookies" class="div-cookies noJS">
<p>In order to improve your browsing experience, this site uses cookies. If you want to delete or manage cookies                 <a class="linkcookies" target="_blank" rel="nofollow" href="http://www.Onlineinsurancepolicy.in/">click here</a>
<a id="close-cookies" href="#" class="div-close-cookies" title="">[X]</a>
</p>    
</div>        

</div>
</div>

<!-- footer fin--> 


 

<a href="#" class="scrollup">Scroll</a>

<script type="text/javascript">
window.google_analytics_uacct = "UA-31825043-1";
</script>    
<script type="text/javascript" src="assets/c_7af745631ce96db59e2ffeffca535a3a.js"></script>
<script type="text/javascript">
/*<![CDATA[*/
$(function(){
$('#RegisterUserForm_userPassword').on('click', function(event){
if($('#RegisterUserForm_userPassword').val()=='********'){
$('#RegisterUserForm_userPassword').val('');
}
});  
$('#RegisterUserForm_userPassword2').on('click', function(event){
if($('#RegisterUserForm_userPassword2').val()=='********'){
$('#RegisterUserForm_userPassword2').val('');         
}
});
$('#infodivRequired').balloon({
position: 'bottom',
contents: 'You must complete all fields for creating your user in Guialis. <br/> Once you have created your user Guialis receive an email with a link to confirm your email address',
css: {opacity:'0.80',backgroundColor:'#162646',color:'#FFF'}
});                    
}); 
$(function(){
$('.login').fancybox({
closeClick	: false,
openEffect	: 'fade',
closeEffect	: 'fade',
type: 'ajax'
});    
}); 
$(function(){
if (getCookie('guialisGestionCookies') != 'alreadyview') {
jQuery('#div-cookies').css('display','block');		
}
writeCookie('guialisGestionCookies','alreadyview', 17520);
jQuery('#close-cookies').click(function() {
jQuery('#div-cookies').css('display','none');
});
$('body').removeClass('noJS');
}); 
jQuery(function($) {
jQuery('#yw0').after("<a id=\"yw0_button\" href=\"\/myaccount\/captcha\/refresh\/1\">Get a new code<\/a>");
jQuery(document).on('click', '#yw0_button', function(){
jQuery.ajax({
url: "\/myaccount\/captcha\/refresh\/1",
dataType: 'json',
cache: false,
success: function(data) {
jQuery('#yw0').attr('src', data['url']);
jQuery('body').data('captcha.hash', [data['hash1'], data['hash2']]);
}
});
return false;
});

jQuery('#user-form').yiiactiveform({'validateOnSubmit':true,'attributes':[{'id':'RegisterUserForm_userName','inputID':'RegisterUserForm_userName','errorID':'RegisterUserForm_userName_em_','model':'RegisterUserForm','name':'userName','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
messages.push("Name can not be blank");
}

}},{'id':'RegisterUserForm_userSubname','inputID':'RegisterUserForm_userSubname','errorID':'RegisterUserForm_userSubname_em_','model':'RegisterUserForm','name':'userSubname','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
messages.push("Surname can not be blank");
}

}},{'id':'RegisterUserForm_userEmail2','inputID':'RegisterUserForm_userEmail2','errorID':'RegisterUserForm_userEmail2_em_','model':'RegisterUserForm','name':'userEmail2','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
messages.push("Repeat Email can not be blank");
}


if(value!=jQuery('#RegisterUserForm_userEmail').val()) {
messages.push("Emails fields mismatched".replace('{compareValue}', jQuery('#RegisterUserForm_userEmail').val()));
}

}},{'id':'RegisterUserForm_userEmail','inputID':'RegisterUserForm_userEmail','errorID':'RegisterUserForm_userEmail_em_','model':'RegisterUserForm','name':'userEmail','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
messages.push("Email can not be blank");
}



if(jQuery.trim(value)!='' && !value.match(/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/)) {
messages.push("Incorrect email format");
}

}},{'id':'RegisterUserForm_userPassword','inputID':'RegisterUserForm_userPassword','errorID':'RegisterUserForm_userPassword_em_','model':'RegisterUserForm','name':'userPassword','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
messages.push("Password Guialis can not be blank");
}


if(jQuery.trim(value)!='') {

if(value.length<6) {
messages.push("Password Guialis is too short (minimum is 6 characters).");
}

}


if(jQuery.trim(value)!='') {

if(value.length>20) {
messages.push("Password Guialis is too long (maximum is 20 characters).");
}

}

}},{'id':'RegisterUserForm_userPassword2','inputID':'RegisterUserForm_userPassword2','errorID':'RegisterUserForm_userPassword2_em_','model':'RegisterUserForm','name':'userPassword2','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
messages.push("Repeat Password Guialis can not be blank");
}


if(value!=jQuery('#RegisterUserForm_userPassword').val()) {
messages.push("Passwords fields mismatched".replace('{compareValue}', jQuery('#RegisterUserForm_userPassword').val()));
}

}},{'id':'RegisterUserForm_verifyCode','inputID':'RegisterUserForm_verifyCode','errorID':'RegisterUserForm_verifyCode_em_','model':'RegisterUserForm','name':'verifyCode','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
messages.push("Enter the following numbers and letters in the verification code can not be blank");
}


var hash = jQuery('body').data('captcha.hash');
if (hash == null)
hash = 765;
else
hash = hash[1];
for(var i=value.length-1, h=0; i >= 0; --i) h+=value.toLowerCase().charCodeAt(i);
if(h != hash) {
messages.push("The verification code is correct");
}

}},{'id':'RegisterUserForm_aceptaCondiciones','inputID':'RegisterUserForm_aceptaCondiciones','errorID':'RegisterUserForm_aceptaCondiciones_em_','model':'RegisterUserForm','name':'aceptaCondiciones','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(value!="1") {
messages.push("Please, read and accept the conditions");
}

}}],'summaryID':'user-form_es_'});
});
/*]]>*/
</script>


</body></html>