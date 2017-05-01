<?php

session_start();

include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Product Information";

//retrieve the product id passed from the previous page using the $_GET superglobal variable
//store the value in a variable called $prodid
$prodid=$_GET['u_prodid'];
//echo "<p>Selected product Id: ".$prodid;

//query the product table to retrieve the record for which the value of the product id 
//matches the product id of the product that was selected by the user
$prodSQL="select prodId, prodName, prodPicName, 
prodDescrip , prodPrice, prodQuantity from product
where prodId=".$prodid;
//execute SQL query
$exeprodSQL=mysql_query($prodSQL) or die(mysql_error());
//create array of records & populate it with result of the execution of the SQL query
$thearrayprod=mysql_fetch_array($exeprodSQL);

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");
include ("detectlogin.php");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";


//display product name in capital letters
echo "<p><center><b>".strtoupper($thearrayprod['prodName'])."</b></center><br>";

//display form made of one text box and one button for user to enter quantity
//pass the product id to the next page basket.php as a hidden value
echo "<center><img src=images/".$thearrayprod['prodPicName']."></center><br>";
echo $thearrayprod['prodDescrip']."<br>";
echo "<p><center><b>&pound".$thearrayprod['prodPrice']."</b></center>";
echo "<p><center><b>Number in stock:&nbsp".$thearrayprod['prodQuantity']."</b></center><br>";
echo "<p></p>";
//display form made of one text box and one button for user to enter quantity
//pass the product id to the next page basket.php as a hidden value
echo "<form action=basket.php method=post>";
echo "<p><center>Quantity: ";
echo"<select name='qty'>";
for($x=1;$x < $thearrayprod['prodQuantity']+1;$x++){
	echo"<option value=".$x.">".$x."</option>";
}
echo"</select>";

echo "<input type=submit value='Add to Basket'>";
echo "<input type=hidden name=h_prodid value=".$prodid.">";
echo "</center>";
echo "</form>";

//include head layout
include("footfile.html");
?>
