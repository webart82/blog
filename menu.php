<?php
session_start();
?><div class="top_buttons">
 <?php
	if($_SESSION['agentid']==1)
	{
		
	echo $out='<a class="button blue special" href="register.php">New Agent</a>';
	echo $out='<a class="button blue special" href="policycat.php">New Policy Type</a>';
	echo $out='<a class="button blue special" href="cms.php">News</a>';
	
	}
 	if($_SESSION['agentid']!="")
	{
		echo $out='<a class="button blue special" href="dashboard.php">Dashboard</a>';
	echo $out='<a class="button blue special" rel="nofollow" href="logout.php">Logout</a>';
	echo $out='<a class="button blue special" href="help.php">FAQ</a>';
	}
  ?>
</div> 