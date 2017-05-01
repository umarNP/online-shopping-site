<?php

session_start();

//create a variable called $pagename which contains the actual name of the page
$pagename="Customer Registration";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
echo "<p> ";
echo "<form action=getregister.php method=post>
		<table>
			<thead>
				<tr>
					<td>First name</td>
					<td><label for='fName' ></label>
					<input type='text' name='fName' id='fName' required/></td>
				</tr>
				<tr>
					<td>Last name</td>
					<td><label for='lName' ></label>
					<input type='text' name='lName' id='lName' required/></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><label for='address' ></label>
					<input type='text' name='address' id='address' required/></td>
				</tr>
				<tr>
					<td>Postcode</td>
					<td><label for='pcode' ></label>
					<input type='text' name='pcode' id='pcode' required/></td>
				</tr>
				<tr>
					<td>Tel No</td>
					<td><label for='tNo' ></label>
					<input type='text' name='tNo' id='tNo' required/></td>
				</tr>
				<tr>
					<td>Email address</td>
					<td><label for='email' ></label>
					<input type='text' name='email' id='email' required/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><label for='password' ></label>
					<input type='text' name='password' id='password' required/></td>
				</tr>
				<tr>
					<td>Confirm password</td>
					<td><label for='confPassword' ></label>
					<input type='text' name='confPassword' id='confPassword' required/></td>
				</tr>
				<tr>
					<td><button input type='Submit'>Register</button></td>
					<td><button type='button'>Clear form</button></td>
				</tr>
			</thead>
		</table>
	</form>";

//include head layout
include("footfile.html");
?>
