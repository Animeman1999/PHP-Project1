<!doctype html>
<!-- Jeffrey Martin
	 CIS 193
	 Project 2 Part C
	 
	 This file is posted a year and if it has data this file will calculate
	 if it is a leap year then display the result. -->
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	//Test that the post contains data.
	if ( !empty($_POST['year'])){

		//Extract posts
		$year = $_POST['year'];
		$leapYear = false;
		
		//Test if the year is evenly divisable by 4.
		if ($year % 4 === 0){
			
			//If the year ends in a 100 years, it might not be a leap year.
			if ($year % 100 === 0){
				
				//As the years is also divisable by 400 evenly, it is a leap year.
				if ($year % 400 === 0){
				
					$leapYear = true;	
			}
				
			} else {
				
				//Year is not divisable by 100 evenly but is divisable by 4 evenly so is a leap year.
				$leapYear = true;
			}
		}
		
		//If a leap year or not give the year.
		echo ('<h2>'.$year);
		
		if ($leapYear) {
			//Message for when it is a leap year.
			echo (" is a leap year.</h2>");
			
		} else {
			//Message for when it is not a leap year.
			echo (' is not a leap year.</h2>');
		}
		
	} else {
		
		//Message for when no year or zero was entered.
		echo 'Year 0 does not exist, years started with year 1!';
	}
?>
</body>
</html>