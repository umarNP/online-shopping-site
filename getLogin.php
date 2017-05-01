<?php

session_start();
include("db.php");

//create a variable called $pagename which contains the actual name of the page
$pagename="Login confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
$email=$_POST['email'];
$password=$_POST['pword'];

if (!$email or !$password){
	echo "<p>Your form is incomplete!
		 <br><p>Please fill in all the required fields";
	echo "<p>Go back to <a href=login.php>Login!</a>";
}
else{
	$theSQL="select userId, userFName, userSName, userEmail, userPassword from users where userEmail='$email'";
	$runtheSQL=mysql_query($theSQL) or die (mysql_error());
	$info=mySQL_fetch_array($runtheSQL);
	
	if ($info < 1){
		echo "<p>Email not found!
		 <br><p>Please enter an existing email";
		echo "<p>Go back to <a href=login.php>Login!</a>";
	}
	else{
		if(strcmp($password,$info['userPassword'])!=0){
			echo "<p>Incorrect password!
			<br><p>Please enter re-enter password";
			echo "<p>Go back to <a href=login.php>Login!</a>";
		}
		else{
			$_SESSION['c_userid'] = $info['userId'];
			$_SESSION['c_userFName'] = $info['userFName'];
			$_SESSION['c_userSName'] = $info['userSName'];
			
			echo "<h4>Welcome ".$_SESSION['c_userFName']." ".$_SESSION['c_userSName']."!</h4>";
			
			echo "<p>You have successfully logged into the system!";
			echo "<p>Your email address is $email";
			echo "<p>Your password address is $password";
			echo "<p>To continue shopping <a href=index.php>Index!</a>";
			echo "<p>To view your basket <a href=basket.php>My basket!</a>";
		}
	}
}


//include head layout
include("footfile.html");
?>
