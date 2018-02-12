<!doctype html>
<!-- Jeffrey Martin
	 CIS 193
	 Project 2 Part C
	 
	 This file is posted pennies and if it has data this file will calculate
	 the number of dollars, quaters, dimes, nickels, and pennies that would 
	 make up and then displays them. -->
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	//Test that the post contains data.
	if ( !empty($_POST['pennies'])){

		//Extract the number of pennies
		$pennies = $_POST['pennies'];
		
		//Message Heading
		echo '<h2> From '.$pennies.' Pennies, you will recieve: ';
		
		//Check if need to give dollars and output how many if needed.
		if ($pennies >= 100){
			$dollars = intval($pennies/100);
			echo ("<br>".$dollars." Dollar(s)");
			$pennies = $pennies % 100;
		}
		//Check if need to give quarters and output how many if needed.
		if ($pennies >= 25){
			$quarters = intval($pennies / 25);
			$pennies = $pennies % 25;
			echo '<br>'.$quarters." Quarter(s)";
		}
		//Check if need to give dimes and output how many if needed.
		if ($pennies >= 10){
			$dimes = intval($pennies / 10);
			$pennies = $pennies % 10;
			echo '<br>'.$dimes." Dime(s)";
		}
		//Check if need to give a nickel and output 1 f needed.
		if ($pennies >= 5) {
			$pennies = $pennies - 5;
			echo '<br>1 Nickel';
		}
		//Check if need to give pennies and output how many if needed.
		if ($pennies > 0){
			echo '<br>'.$pennies.' Pennies';
		}

	} else {
		//Message when nothing is input or 0.
		echo 'You recive nothing from nothing';
	}
?>
</body>
</html>