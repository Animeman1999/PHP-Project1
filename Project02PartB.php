<!doctype html>
<!-- Jeffrey Martin
	 CIS 193
	 Project 2 Part B 
	 
	 This file is posted wage and hours and if they both have data will calculate
	 the base pay, overtime pay, and gross hours then display them. -->
<html>
<head>
<meta charset="utf-8">
<title>Project02PartB</title>
</head>

<body>
<?php
	//Innitialize Variables
	$overTime = 0;
	$basePay = 0;
	$overTimePay = 0;
	$grossPay = 0;
	$wage = 0;
	$hours = 0;
	
	//Test that the post contains data.
	if ( !empty($_POST['wage']) && !empty($_POST['hours'])){
		
		//Extract the data. If there is no data, it was initialezed to zero, so there will be no error.
    	$wage = $_POST['wage'];
		$hours = $_POST['hours'];
		
	} 
		//Calcuate there is overtime pay.
		if ($hours > 40){
			$overTime = $hours - 40;
			$basePay = 40 * $wage;
			$overTimePay = $overTime * $wage * 1.5;
			
		//Calculate when there is no overtime pay.
		} else {
			
			$basePay = $hours * $wage;
		}
		
		//Add base pay and overtime pay.
		$grossPay = $basePay + $overTimePay;
		
		//Output the results.
		echo "<h2> Employee's Gross Wages</h2>";
		echo '<p>
			<table>
				<tr><td>Hours Worked:</td><td align="right">'.number_format($hours, 2,".",",").'</td></tr>
				<tr><td>Hourly Rate:</td><td align="right">$'.number_format($wage, 2,".",",").'</td></tr>
				<tr><td>Base Pay:</td><td align="right">$'.number_format($basePay, 2,".",",").'</td></tr>
				<tr><td>Overtime Pay:</td><td align="right">$'.number_format($overTimePay, 2,".",",").'</td></tr>
				<tr><td>Total Pay:</td><td align="right"> $'.number_format($grossPay, 2,".",",").'</td></tr>
			</table></p>';	
	
?>
</body>
</html>