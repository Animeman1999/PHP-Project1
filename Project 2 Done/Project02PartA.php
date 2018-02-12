<!doctype html>
<!-- Jeffrey Martin
	 CIS 193
	 Project 2 Part A
	 
	 This file will recive from a post the length and width of an area
	 that needs flooring and the price per square feet and  if they all
	 have data, this file will calculate the requred material needed and
	 its cost then will display the result. -->
<html>
<head>
<meta charset="utf-8">
<title>Calculate Flooring</title>
</head>

<body>
<?php
	//Check post has data.
	if ( !empty($_POST['length']) && !empty($_POST['width']) && !empty($_POST['price'])){
		
		//Extact the data from the post.
    	$length = $_POST['length'];
		$width = $_POST['width'];
		$price = $_POST['price'];
		
		//Do the calculatons
		$squareFeet = $length * $width;
		$requiredSquareFeet = $squareFeet * 1.1;
		$cost = $requiredSquareFeet * $price;
		
		//Output the results in a formated table.
		echo "<h2>Summary of Flooring</h2>";
		echo '<p>
			<table>
				<tr><td>Length: </td><td align="right">'.number_format($length, 2,".",",").'</td></tr>
				<tr><td>Width:</td><td align="right">'.number_format($width, 2,".",",").'</td></tr>
				<tr><td>Price per Square Foot:</td><td align="right">$'.number_format($price, 2,".",",").'</td></tr>
				<tr><td>Base Square Foot:</td><td align="right">'.number_format($squareFeet, 2,".",",").'</td></tr>
				<tr><td>Square Foot of Material Needed:</td><td align="right"> '.number_format($requiredSquareFeet, 2,".",",").'</td></tr>
				<tr><td>Cost:</td><td align="right">$'.number_format($cost, 2,".",",").'</td></tr>
			</table></p>';	
		
	} else {
		//Output when no data was passed in or was zero.
		echo "length, width and price must be greater than zero.";
	}
?>
	
</body>
</html>