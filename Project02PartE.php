<!doctype html>
<!-- Jeffrey Martin
	 CIS 193
	 Project 2 Part D
	 
	 This file will recive from a post the three sides of a triangle and 
	 if they all have data, this file will calculate if it will make
	 a triangle and then display the result. -->
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	//Test that the post contains data.
	if ( !empty($_POST['side1']) && !empty($_POST['side2']) && !empty($_POST['side3'])){
		
		//Extract post
    	$side1 = $_POST['side1'];
		$side2 = $_POST['side2'];
		$side3 = $_POST['side3'];
		
		//1st part of message is the same no matter if a traingle or not.
		echo ($side1.", ".$side2.", ".$side3);
		
		if (($side1 + $side2 > $side3) && ($side2 + $side3 > $side1) && ($side3 + $side1 > $side2)) {
			//Is a triangle
			echo " makes a Triangle";
			
		} else {
			//Is not a Triangle.
			echo " does not make a Triagnle";
		}
	} else {
		//One of the sides is equal to zero or was not entered.
		echo ("It is not possible to have a length of zero for a side of a triangle.");
	}
?>
</body>
</html>