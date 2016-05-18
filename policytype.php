<?php
session_start();
include('config.php');
 

 
 extract($_REQUEST);
 		
 
$appno=$_REQUEST['pid'];
 $fsql=" SELECT * FROM categories where sub_id=$appno";
 
?>

<select size="1" name="pid" id="pid">
                 <option value="0">----select---</option>
                 
                 <?php
				 
				 $frs=mysql_query($fsql);
				 while($ds=mysql_fetch_assoc($frs))
				 {
					 echo '<option value="'.$ds['cat_id'].'">'.$ds['title'].'</option>';
				 }
				 ?>
                 
                    
                   
              </select>
 