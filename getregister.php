<?php

session_start();
include("db.php");

//create a variable called $pagename which contains the actual name of the page
$pagename="Registration Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$address = $_POST['address'];
$pcode = $_POST['pcode'];
$tNo = $_POST['tNo'];
$email = $_POST['email'];
$password = $_POST['password'];
$confPassword = $_POST['confPassword'];

$SQL=	"INSERT INTO users (userFName, userSName, userAddress, userPostCode, userTelNo, userEmail, userPassword) 
		VALUES ('$fName', '$lName', '$address', '$pcode', '$tNo', '$email', '$password')";
		
if($password != $confPassword){
		echo "The 2 passwords you entered do not match. Please make sure you enter them correctly. <br> Go back to <a href='register.php'> Register </a>";
}
else {
	$exeSQL=mysql_query($SQL) or die (mysql_error());
}
	

//include head layout
include("footfile.html");
?>
