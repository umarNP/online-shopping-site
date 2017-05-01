<?php

session_start();
include("db.php");

//create a variable called $pagename which contains the actual name of the page
$pagename="Check Out Confirmation";

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

$total = 0;
$subTotal = 0;
$dateTime = date('Y-m-d H:i:s');
$reququantity = $_POST['qty'];
$_SESSION['basket'] = $reququantity;

$theSQL="INSERT INTO orders (orderDateTime) VALUES ('$dateTime')";
$runtheSQL=mysql_query($theSQL) or die (mysql_error());

if($theSQL){
	$SQL = "select * from orders where orderNo= (SELECT MAX(orderNo) FROM orders)";
	$runSQL = mysql_query($SQL) or die(mysql_error());
	$details = mysql_fetch_array($runSQL);
	echo "$details[orderNo]";
	//$SQL = "SELECT * FROM orders WHERE orderNo = (SELECT MAX(orderNo) FROM orders)=".$id;
	//$exe_sql = mysql_query($SQL) or die(mysql_error());
	//$id = mysql_fetch_array($SQL);
	
	

	echo "<div class='col-md-5'><table class='table'>
		<thead class='thead-inverse'>
			<tr>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Subtotal</th>
			</tr>
		</thead>";



	foreach ($_SESSION['basket'] as $reququantity) {
		$SQL="select prodId, prodName, prodPrice, prodQuantity from product where prodId='$newprodid'";
		$exeSQL=mysql_query($SQL) or die (mysql_error());
		$arrayprod=mysql_fetch_array($exeSQL);
    
		echo "<tr>";
		echo "<td>".$arrayprod['prodName'];
		echo "<td>"."$ ".$arrayprod['prodPrice'];
		echo "<td>".$reququantity;
		$subtotal = $arrayprod['prodPrice'] * $quantity;
		echo "<td>"."$ ".$subtotal.".00";
		echo "</tr>";
		$total += $subtotal;
	}
	echo "<tr>
			<td colspan=3>Total</td>
			<td>$ $total.00</td>
		</tr>
	</table></div>";

}


//include head layout
include("footfile.html");
?>
