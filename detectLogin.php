<?php 
	if(isset($_SESSION['c_userid'])){
		echo "<span style='float:right;'>Name : ".$_SESSION['c_userFName']." ".$_SESSION['c_userSName']." / Customer No : ".$_SESSION['c_userid']."</span>";
	}
?>