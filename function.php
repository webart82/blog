<?php



function check($user,$pass)
{

 $sql="SELECT * FROM agent where  agentcode ='$user' and pass='$pass'";
$sql_ex=mysql_query($sql) or die(mysql_error());
$num=mysql_num_rows($sql_ex);

$rs=mysql_fetch_array($sql_ex);
///////////////////  sesion variable ///////////////
$_SESSION['name']=$rs['name'];
$_SESSION['email']=$rs['email'];
$_SESSION['agentid']=$rs['agentid'];
$_SESSION['agentcode']=$rs['agentcode'];
return $num;


}


function create_agent($name,$email,$pass,$code)
{

//////////////////////  find duplicate value  /////////////////////////////

if($email=="")
{
	echo "Email";
return false;	
}
if($code=="")
{
	echo "Code";
return false;	
}


$sql="SELECT * FROM agent where email='$email' and name!='' ";
$sql_ex=mysql_query($sql) or die(mysql_error());
$num=mysql_num_rows($sql_ex);
$rs=mysql_fetch_array($sql_ex);
 $sid=$rs['agentid'];

if($num>0)
{
echo "We Found duplicate records";	
}
else
{
$sql2="SELECT MAX(agentid)+1 as id FROM agent ";
$sql_ex2=mysql_query($sql2) or die(mysql_error());
 
$rs=mysql_fetch_array($sql_ex2);	
	 
	
//$code="ADDV00".$rs['id'];	

$to      = "$email";
$subject = "Registration Details";
$message = "Hello $name";
$message = "\n Here is your login access details- user=$code and pass=$pass  \n thanks.";
$headers = 'From: webmaster@associateindia.com' . "\r\n" .
    'Reply-To: webmaster@associateindia.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);



	
 $sql="INSERT INTO agent (agentid,name,email,pass,agentcode) values(NULL,'$name' ,'$email','$pass','$code')";		
$ex=mysql_query($sql)    or die(mysql_error());





return $ex;
}
	

	
}




function create_news($title,$shortnews,$longnews,$status)
{

//////////////////////  find duplicate value  /////////////////////////////

if($title=="")
{
	echo "Title";
return false;	
}
if($shortnews=="")
{
	echo "Short Title";
return false;	
}


$sql="SELECT * FROM news where title='$title' ";
$sql_ex=mysql_query($sql) or die(mysql_error());
$num=mysql_num_rows($sql_ex);
$rs=mysql_fetch_array($sql_ex);
 $sid=$rs['agentid'];

if($num>0)
{
echo "We Found duplicate records";	
}
else
{
$sql2="SELECT MAX(id)+1 as id FROM news ";
$sql_ex2=mysql_query($sql2) or die(mysql_error());
 
$rs=mysql_fetch_array($sql_ex2);	
	 
	
 
	
 $sql="INSERT INTO news (id,title,shortnews,longnews,status) values(NULL,'$title' ,'$shortnews','$longnews','$status')";		
$ex=mysql_query($sql)    or die(mysql_error());





return $ex;
}
	

	
}








function gettotalapp($agentcode)
{
	$sql2="SELECT count(appno)  as tot FROM appdetails where agentcode='$agentcode' ";
$sql_ex2=mysql_query($sql2) or die(mysql_error());
 
$rs=mysql_fetch_array($sql_ex2);	
	 
	
$code=$rs['tot'];	
return $code;
}


function gettotalissuedapp($agentcode)
{
	$sql2="SELECT count(appno)  as tot FROM appdetails where agentcode='$agentcode' and status='Issued' ";
$sql_ex2=mysql_query($sql2) or die(mysql_error());
 
$rs=mysql_fetch_array($sql_ex2);	
	 
	
$code=$rs['tot'];	
return $code;
}



function gettotalsum($agentcode)
{
	$sql2="SELECT sum(premiumamt)  as tot FROM appdetails where agentcode='$agentcode' and status='Issued' ";
$sql_ex2=mysql_query($sql2) or die(mysql_error());
 
$rs=mysql_fetch_array($sql_ex2);	
	 
	
$code=$rs['tot'];	
return $code;
}

function gettotalcollection($agentcode)
{
	$sql2="SELECT sum(premiumamt)  as tot FROM appdetails where agentcode='$agentcode'  ";
$sql_ex2=mysql_query($sql2) or die(mysql_error());
 
$rs=mysql_fetch_array($sql_ex2);	
	 
	
$code=$rs['tot'];	
return $code;
}

function indianCurrencyNumberFormat($rupee) {
    $explore_remaining_units = "";
    if (strlen($rupee) > 3) {
        $last_three_digits = substr($rupee, strlen($rupee) - 3, strlen($rupee));
        $remaining_units = substr($rupee, 0, strlen($rupee) - 3);
        $remaining_units = (strlen($remaining_units) % 2 == 1) ? "0".$remaining_units : $remaining_units;
        $split_rupee = str_split($remaining_units, 2);
        for ($i = 0; $i < sizeof($split_rupee); $i++) {
          $explore_remaining_units .= (($i == 0) ? ( (int) $split_rupee[$i] . "," ) : ( $split_rupee[$i] . "," )); 
        }
        $formatted_rupee = $explore_remaining_units.$last_three_digits;
    } else {
        $formatted_rupee = $rupee;
    }
    return $formatted_rupee;
}






?>