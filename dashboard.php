<?php
session_start();
include('config.php');
include('function.php');
//print_r($_SESSION);

$valid=$_SESSION['agentid'];
if($valid=="")
	 {
		header('location:index.php');
	 }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="js flexbox opacity cssanimations fontface generatedcontent" xmlns="http://www.w3.org/1999/xhtml" itemscope="" itemtype="http://schema.org/WebPage" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en-IN" lang="en-IN"><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="assets/style.css">

<title>Dashboard :: Associate India</title>
<link rel="shortcut icon" href="images/guialis-favicon.png">
<meta name="language" content="en-IN">



<link rel="shortcut icon" href="images/guialis/favicon.ico">
<link rel="apple-touch-icon" href="images/guialis/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/guialis/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/guialis/apple-touch-icon-114x114.png">        
<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">        
<!-- Javascript goes in the document HEAD -->
<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 
		 
		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}      
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>
<link href="assets/jquery.datepick.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="assets/jquery.plugin.js"></script>
<script src="assets/jquery.datepick.js"></script>
<script>
$(function() {
	$('#paydate').datepick();
	 $('#coldate').datepick();
	  $('#date1').datepick();
	 $('#date2').datepick();
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
 
<script>




      $(function () {
				  
 				  
	$('#pid').bind('change', function (event) {			  
		
		
		
		var id=document.getElementById('pid').value;
		 
		 $.ajax({
            type: "POST",
            url: "policytype.php",
            data: {pid: id},
            beforeSend: function(){
			
                $('#list').html('<img src="assets/loading.gif" />');
				  
            },
            success: function(data){
				 
                $('#list').html(data);
            }
        });
		
		
	   });			  
				  
				  
				  

        $('#register').bind('click', function (event) {
 
           //e.preventDefault();
var name = $("#name").val();
var mobile = $("#mobile").val();
var email = $("#email").val();  
var coldate = $("#coldate").val();  
var inscompany = $("#inscompany").val();    
var policytype = $("#policytype").val();
var appno = $("#appno").val();
var total = $("#total").val();
var paymentmethod = $("#paymentmethod").val();
var premiumamount = $("#premiumamount").val();
var paydate = $("#paydate").val();


  
if(name=='' || name=='')
{
  alert('Enter your name'); 
 
 document.getElementById('name').focus();
  return false;
 }
else if(mobile=='' || mobile=='')
{
  alert('Enter your mobile'); 
  document.getElementById('mobile').focus();
  return false;
 }

else if(email=='' || email=='')
{
  alert('Enter your email'); 
  document.getElementById('email').focus();
  return false;
 }   
 
 



else if(coldate=='' || coldate=='')
{
  alert('Enter your coldate'); 
  document.getElementById('coldate').focus();
  return false;
 }

else if(inscompany=='' || inscompany=='')
{
  alert('Enter your inscompany'); 
  document.getElementById('inscompany').focus();
  return false;
 }

else if(policytype=='' || policytype=='')
{
  alert('Enter your policytype'); 
  document.getElementById('policytype').focus();
  return false;
 }

else if(appno=='' || appno=='')
{
  alert('Enter your appno'); 
  document.getElementById('appno').focus();
  return false;
 }
 
else if(total=='' || total=='')
{
  alert('Enter your total'); 
  document.getElementById('total').focus();
  return false;
 }
else if(paymentmethod=='' || paymentmethod=='')
{
  alert('Enter your paymentmethod'); 
  document.getElementById('paymentmethod').focus();
  return false;
 }
else if(premiumamount=='' || premiumamount=='')
{
  alert('Enter your premiumamount'); 
  document.getElementById('premiumamount').focus();
  return false;
 }
 
else if(paydate=='' || paydate=='')
{
  alert('Enter your Premium Date'); 
  document.getElementById('paydate').focus();
  return false;
 }
 
 
else
{


          $.ajax({
            type: "POST",
            url: "post.php",
            data: $("#user-form").serialize(),
            beforeSend: function(){
			
                $('#result').html('<img src="assets/loading.gif" />');
				  
            },
            success: function(data){
				 
                $('#result').html(data);
            }
        });
		  
}
		  

        });

      });
    </script>
 <style type="text/css">
table.altrowstable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #a9c6c9;
	border-collapse: collapse;
	width:1024px;
}
table.altrowstable th {
	border-width: 1px;
	 
	padding-left:8px;
	padding-right:8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.altrowstable td {
	border-width: 1px;
	padding-left: 5px;
	padding-right: 5px;
	border-style: solid;
	border-color: #a9c6c9;
	padding-bottom: 0;
	padding-top: 0;
}
.oddrowcolor{
	background-color:#d4e3e5;
}
.evenrowcolor{
	background-color:#c3dde0;
}

.padT {
	padding: 7px 0;
}


</style>


<style type="text/css">.fancybox-margin{margin-right:17px;}</style></head>    

<body>
<!-- Navbar -->
<div class="header" id="header">
<div class="container">
<div class="headercont">
<a href="index.php" class="searchbar_logo">
<span class="image_sprite sprite-guialis_logo" id="logo"></span>
</a>
<?php include('menu.php');?>

</div>
</div>
</div>   

<!-- Navbar fin-->  


<div id="wrapper" class="content-top">
  

<div class="container">
 
<div class="registeruserCont">

<?php
$agentcode=$_SESSION['agentcode'];
$amt=gettotalcollection($agentcode);
?>
<table class="altrowstable" >
  <tr>
    <th colspan="3" bgcolor="#66CCFF" scope="row">Business Summary</th>
    </tr>
  <tr>
    <th bgcolor="#66CCFF" scope="row">&nbsp;</th>
    <td bgcolor="#66CCFF">Collection</td>
    <td bgcolor="#66CCFF">Issuance</td>
  </tr>
  <tr>
    <th width="27%" bgcolor="#66CCFF" scope="row">Number of application</th>
    <td width="14%" bgcolor="#66CCFF"><?=gettotalapp($agentcode);?></td>
    <td width="59%" bgcolor="#66CCFF"><?=gettotalissuedapp($agentcode);?></td>
  </tr>
  <tr>
    <th bgcolor="#66CCFF" scope="row">Net Premium (Rs.)</th>
    <td bgcolor="#66CCFF"><?=gettotalsum($agentcode)?>&nbsp;</td>
    <td bgcolor="#66CCFF"><?=gettotalcollection($agentcode);?>&nbsp;</td>
  </tr>
  <tr>
    <th bgcolor="#66CCFF" scope="row">&nbsp;</th>
    <td bgcolor="#66CCFF"></td>
    <td bgcolor="#66CCFF">&nbsp;Earnings (Rs. <?=indianCurrencyNumberFormat($amt)?> ) </td>
  </tr>
   
  <tr>
    <th  align="left" bgcolor="#66CCFF" scope="row">Download    Business report (excel Format)</th>
     <td colspan="2" bgcolor="#66CCFF">
 
     <form id="export" name="export" method="post" action="export.php">
     
  <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <th scope="col">From &nbsp;&nbsp;<input type="date" id="date1" name="date1"></th>
    <th scope="col">To &nbsp;&nbsp;<input type="date" id="date2" name="date2"></th>
    <th scope="col"><input type="submit" value="Download"></th>
  </tr>
</table>
 

</form> </td>
    
  </tr>
  <tr>
    <th  align="left" bgcolor="#66CCFF" scope="row">&nbsp;</th>
    <td colspan="2" bgcolor="#66CCFF"><?php    
     if($_SESSION['agentid']==1)
	{
  

    print "<form enctype='multipart/form-data' action='import.php' method='post'>";
echo $out='<a class="button blue special" href="sample.csv">Sample csv Download</a>';
    print " Import:";

    print "<input size='50' type='file' name='file'>";

    print "<input type='submit' name='submit' value='Import CSV(*.csv)'></form>";
    }
     ?>&nbsp;</td>
  </tr>
  
</table>


 

 
</div>


<div class="registeruserForm">


<form id="user-form" name="user-form" action="/myaccount/registeruser" method="post"> 
 <input type="hidden" id="agentcode" name="agentcode" value="<?=$_SESSION['agentcode']?>" /> 
<table class="altrowstable" id="alternatecolor">
<tr>
	<th width="450">New Application Details</th><th><div class="success" style="position:absolute; background-color:#FFC" id="result"></div></th><th></th>
</tr>
<tr>
	<td><input placeholder="Proposer Name" class="registeruser_textfield" size="60" maxlength="60" name="name" id="name" type="text" /></td><td></td><td></td>
</tr>
<tr>
	<td><input placeholder="Contact  Number" class="registeruser_textfield" size="60" maxlength="60" name="mobile" id="mobile" type="text"></td><td></td><td></td>
</tr>
</tr>
<tr>
	<td><input placeholder="Email ID" class="registeruser_textfield" maxlength="90" style="" name="email" id="email" type="text"></td><td> </td><td> </td>
</tr>
<tr>
	<td><input placeholder="Collection Date" class="registeruser_textfield" maxlength="90"   name="coldate" id="coldate" type="text"></td><td> </td><td> </td>
</tr>
 
<tr>
	<td><select name="inscompany" id="inscompany" style="padding: 7px; margin: 5px 0;" >
<option value="">--Insurance Company--</option>
<option value="Apollo">Apollo</option>
<option value="Star">Star</option>
<option value="Max">Max</option>
<option value="HDFC Ergo">HDFC Ergo</option>
<option value="Religare">Religare</option>
<option value="LnT">L&amp;T</option>
<option value="LnT">L&amp;T</option>
<option value="CignaTTK">Cigna TTK</option>
<option value="CignaTTK">Other</option>

</select></td><td> </td><td> </td>
</tr>
<tr>
	<td>



<select size="1" name="pid" id="pid">
                 <option value="0">----select---</option>
                 
                 <?php
				 $fsql=" SELECT * FROM categories where sub_id=0";
				 $frs=mysql_query($fsql);
				 while($ds=mysql_fetch_assoc($frs))
				 {
					 echo '<option value="'.$ds['cat_id'].'">'.$ds['title'].'</option>';
				 }
				 ?>
                 
                    
                   
              </select>
              
              
              


<div id="list"></div>

</td><td> </td><td> </td>
</tr>

<tr>
	<td><input placeholder="Application Number" class="registeruser_textfield" maxlength="90" style="" name="appno" id="appno" type="text">
</td><td> </td><td> </td>
</tr>

<tr>
	<td><input placeholder="Sum Insured" class="registeruser_textfield" maxlength="90" style="" name="total" id="total" type="text">

</td><td> </td><td> </td>
</tr>


<tr>
	<td>
<select name="paymentmethod" id="paymentmethod" style="padding: 7px; margin: 5px 0;"  >
<option value="">--Premium Mode--</option>
<option value="Cheque">Cheque</option>
<option value="Cash">Cash</option>
<option value="DD">Demand Draft</option> 
<option value="CC">Credit Card</option>
<option value="Online">Online/NetBanking</option>
</select>

</td><td> </td><td> </td>
</tr>

<tr>
	<td>


<input placeholder="Premium Amount" class="registeruser_textfield" maxlength="90"   name="premiumamount" id="premiumamount" type="text">

 </td><td> </td><td> </td>
</tr>


<tr>
	<td>

 

<input placeholder="Payment Date" class="registeruser_textfield" maxlength="90"   name="paydate" id="paydate" type="text"></td><td> </td><td> </td>
</tr>


</table>
 






 























<div class="registeruser_errors">
<div class="errorMessage" id="RegisterUserForm_userName_em_" style="display:none"></div> 

<div class="errorMessage" id="RegisterUserForm_userSubname_em_" style="display:none"></div>  
<div size="27" maxlength="27" class="errorMessage" id="RegisterUserForm_userEmail2_em_" style="display:none"></div>                
<div class="errorMessage" id="RegisterUserForm_userEmail_em_" style="display:none"></div> 
   <div class="errorMessage" id="RegisterUserForm_userPassword_em_" style="display:none"></div>  

<div class="errorMessage" id="RegisterUserForm_userPassword2_em_" style="display:none"></div>                </div>

</div>

 
<div class="registeruserButtons"><input type="reset"  value="Clear"/> 
<input class="button" name="yt0" id="register" value="Save" type="button">                    </div>
 
<div style="clear:both">
  <div class="container">
     
     <br />
<br />

    
    <div id="div-cookies" class="div-cookies noJS">
      <p>In order to improve your browsing experience, this site uses cookies. If you want to delete or manage cookies <a class="linkcookies" target="_blank" rel="nofollow" href="http://www.Onlineinsurancepolicy.in/uk/">click here</a> <a id="close-cookies" href="#" class="div-close-cookies" title="">[X]</a> </p>
    </div>
  </div>
</div>
 



</form>        </div><!-- form -->

 
</div>


</div>            

<!-- footer -->
<div class="footer"><div class="copyright"> Copyright © 2014 by Onlineinsurancepolicy.in. All rights reserved.<br />
    </div></div>

<!-- footer fin--> 


     

<a href="#" class="scrollup">Scroll</a>
    
<!--<script type="text/javascript" src="assets/c_7af745631ce96db59e2ffeffca535a3a.js"></script>-->
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