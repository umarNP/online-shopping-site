<?php

$pagename="Clear Basket";

session_start();

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");
include ("detectlogin.php");

unset($_SESSION['basket']);

echo "<p> Your Basket has been cleared.";

//include head layout
include("footfile.html");
?>
