<?php
include('config.php');
include('function.php');
session_start();
//print_r($_SESSION);
$msg="";
if(isset($_POST['agent']))
{
 $name=$_POST['agent'];
 $email=$_POST['email'];
 $pass=$_POST['password'];
$rs= create_agent($name,$email,$pass);
if($rs>0)
{
$msg="Registered successfully";	
}
else
{
$msg="Registered failed";		
}


}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="js flexbox opacity cssanimations fontface generatedcontent" xmlns="http://www.w3.org/1999/xhtml" itemscope="" itemtype="http://schema.org/WebPage" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en-IN" lang="en-IN"><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="assets/style.css">

<title>Register Agent :: Online Associate Business</title>
<link rel="shortcut icon" href="images/guialis-favicon.png">
<meta name="language" content="en-IN">



<link rel="shortcut icon" href="images/guialis/favicon.ico">
<link rel="apple-touch-icon" href="images/guialis/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/guialis/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/guialis/apple-touch-icon-114x114.png">        
<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">        


<style type="text/css">.fancybox-margin{margin-right:17px;}
.a{color:#09C}
</style>

 


</head>    

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


<div id="wrapper" class="content-top">

<br />
 

<div class="container">

<div class="contains"> 
 
  <br />
 
<?php





if(isset($_REQUEST['act']))
{
$act=$_REQUEST['act'];	
}

?>




 <?php
 if($act=="view")
 {
?>

<div style="height:300px; overflow:scroll">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <th scope="col">Categoryid</th>
    <th align="center" scope="col">Plan name</th>
    <th align="center" scope="col">Description</th>
    <th align="center" scope="col" colspan="2">Action</th>
   
  </tr>
  
  
 <?php
	$ssql=" SELECT * FROM categories ";
	$srs=mysql_query($ssql);
	while($sds=mysql_fetch_assoc($srs))
	{
	?> 
	<tr>
	<th scope="row"><?=$sds['cat_id']?></th>
	<td align="center"><?=$sds['title']?></td>
	<td align="center"><?=$sds['details']?></td>
	<td align="center"><a  class="a" href="policycat.php?act=edit&id=<?=$sds['cat_id']?>">Edit</a> </td>
	<td align="center"><a class="a" href="policycat.php?act=remove&id=<?=$sds['cat_id']?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
	</tr>
	
	<?php
	}
	?>
	<tr>
	<th scope="row">&nbsp;</th>
	<td align="center">&nbsp;</td>
	<td align="center">&nbsp;</td>
	<td align="center">   </td>
	<td align="center"></td>
	</tr>
	</table>

</div>
<?php
 }
 ?>




<?php 
 if($act=="edit" )
 {
$id=$_REQUEST['id'];

$title=$_REQUEST['plan'];
if(isset($_POST['plan']))
{
$up="UPDATE categories set title='".$title."'  where cat_id=$id";
$mup=mysql_query($up) or die(mysql_error());
}




	  $esql=" SELECT * FROM categories where cat_id=$id";
	$ers=mysql_query($esql); 
	$change=mysql_fetch_array($ers);
  
?>

  
 <form  method="post" class="niceform">
<fieldset>
     <legend>Personal Info</legend>
        <dl>
         <dt><label for="Category">Category Id:</label></dt>
            <dd><input type="text" disabled="disabled" name="catid" value="autofilled" id="catid" size="32" maxlength="128" /></dd>
        </dl>
        <dl>
         <dt><label for="plan">Plan Name:</label></dt>
            <dd><input type="text" name="plan" id="plan" size="32" value="<?=$change['title']?>" maxlength="32" /></dd>
        </dl>
        <dl>
         <dt><label for="plan">Plan Desc:</label></dt>
            <dd> 
            
            <textarea name="desc" id="desc" ><?=$change['details']?></textarea>
            
            
            </dd>
        </dl>
         
    </fieldset>
     
     
    <fieldset class="action">
     <input type="submit" name="submit" id="submit" value="Submit" />  <?=$msg?>
    </fieldset>
</form>
 
<?php 
 }
?>


<?php 
 if($act=="remove"  )
 {
	 $id=$_REQUEST['id'];
$rsql="DELETE  from categories where cat_id=".$id."";

$rqr=mysql_query($rsql) or die(mysql_error());
$msg="Records Deleted ";
 }
 
 ?>


<?php 
 if($act!="view" and   $act!="edit" )
 {


if(isset($_REQUEST['plan']))
{
	extract($_REQUEST);
 
 $sql='INSERT INTO categories set cat_id=NULL,
title="'.$plan.'", details="'.$desc.'" ,
sub_id="'.$pid.'"
';

 $dupsql="select * from categories where title='".$plan."'";

$dupqr=mysql_query($dupsql) or die(mysql_error());
$nums=mysql_num_rows($dupqr);
if($nums>0)
{
	$msg= " Records are exist ";
}
else
{
$rs=mysql_query($sql) or die(mysql_error());
$msg="Successfully saved";
}
	
	
}  

?>





 <form action="policycat.php" method="post" class="niceform">
<fieldset>
     <legend>Personal Info</legend>
        <dl>
         <dt><label for="Category">Category Id:</label></dt>
            <dd><input type="text" disabled="disabled" name="catid" value="autofilled" id="catid" size="32" maxlength="128" /></dd>
        </dl>
        <dl>
         <dt><label for="plan">Plan Name:</label></dt>
            <dd><input type="text" name="plan" id="plan" size="32" maxlength="32" /></dd>
        </dl>
        <dl>
         <dt><label for="plan">Plan Desc:</label></dt>
            <dd><input type="text" name="desc" id="desc" size="32" maxlength="32" /></dd>
        </dl>
        <dl>
         <dt><label for="pid">Parent Category:</label></dt>
            <dd>
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
                 
                 
          </dd>
        </dl>
    </fieldset>
     
     
    <fieldset class="action">
     <input type="submit" name="submit" id="submit" value="Submit" />  <?=$msg?>
    </fieldset>
</form>
 
<?php 
 }
?>

<fieldset class="action">
    <a href="policycat.php?act=view&id=1">View</a> |  <a href="policycat.php">Add New</a> 
    </fieldset>



</div>
</div>            

<!-- footer -->
<div class="footer">
<div class="container">
<div class="footer_links">  
<div>
<a rel="nofollow" href="site/page/view/legal_in">General Terms &amp; Conditios</a>                <a rel="nofollow" href="myaccount/contact">Contact us</a>                                
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
Copyright © 2014 by Onlineinsurancepolicy.in. All rights reserved.<br>  
</div>  

<div id="div-cookies" class="div-cookies noJS">
<p>In order to improve your browsing experience, this site uses cookies. If you want to delete or manage cookies                 <a class="linkcookies" target="_blank" rel="nofollow" href="http://www.Onlineinsurancepolicy.in/uk/">click here</a>
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
if (getCookie('relianceinfosoft') != 'alreadyview') {
jQuery('#div-cookies').css('display','block');		
}
writeCookie('relianceinfosoft','alreadyview', 17520);
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
messages.push("Agent Name can not be blank");
}

}},{'id':'RegisterUserForm_userSubname','inputID':'RegisterUserForm_userSubname','errorID':'RegisterUserForm_userSubname_em_','model':'RegisterUserForm','name':'userSubname','enableAjaxValidation':false,'clientValidation':function(value, messages, attribute) {

if(jQuery.trim(value)=='') {
messages.push("Email can not be blank");
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
messages.push("Password can not be blank");
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