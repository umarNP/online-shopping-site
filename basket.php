<?php

session_start();
include ("db.php");

//create a variable called $pagename which contains the actual name of the page
$pagename="Ordering Basket";

if (isset($_POST['h_prodid'])) {
    
$newprodid = $_POST['h_prodid'];
$reququantity = $_POST['qty'];

$_SESSION['basket'][$newprodid] = $reququantity;

}

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
echo "<p> Your basket has been updated!";

echo "<br><br>";

$subtotal = 0.0;
$total = 0.0;

if(isset($_SESSION['basket'])){

echo "<div class='col-md-5'><table class='table'>
	  <thead class='thead-inverse'>
	      <tr>
	        <th>Product Name</th>
	        <th>Price</th>
	        <th>Quantity</th>
	        <th>Subtotal</th>
	      </tr>
    </thead>";



foreach ($_SESSION['basket'] as $newprodid => $reququantity) {
	$SQL="select prodId, prodName, prodPrice from product where prodId='$newprodid'";
	$exeSQL=mysql_query($SQL) or die (mysql_error());
	$arrayprod=mysql_fetch_array($exeSQL);
    
	echo "<tr>";
	echo "<td>".$arrayprod['prodName'];
	echo "<td>"."$ ".$arrayprod['prodPrice'];
	echo "<td>".$reququantity;
	$subtotal = $arrayprod['prodPrice'] * $reququantity;
	echo "<td>"."$ ".$subtotal.".00";
	echo "</tr>";
	$total += $subtotal;
}

echo "<tr>
	<td colspan=3>Total</td>
	<td>$ $total.00</td>
	</tr></table></div>";


echo "<br><a href='clearBasket.php' class='btn btn-default'>Clear Basket<i class='fa fa-shopping-basket right'></i></a>";
    
}
else{
    echo "Your basket is empty!";
}


if(!isset($_SESSION['c_userid'])){
	echo "<br><a href='register.php' class='btn btn-default'>Register</a>";
	echo "<br><a href='login.php' class='btn btn-default'>Login</a>";
}
else{
	echo "<br><a href='checkout.php' class='btn btn-default'>Checkout</a>";
}


//include head layout
include("footfile.html");
?>
