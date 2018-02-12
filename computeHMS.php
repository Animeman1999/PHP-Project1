<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Processed Form</title>
</head>
<body>
<?php

if ( !empty($_POST['totalSeconds'])){
    $totalSeconds = $_POST['totalSeconds'];
}
	
$remainder = $totalSeconds;
$hours = 0;
$minutes = 0;
	
if ($remainder >= 3600){
	$hours = intval($remainder / 3600);
	$remainder %= 3600;	
}	
	
if ($remainder >= 60){
	$minutes = intval($remainder / 60);
	$remainder = $remainder % 60;	
}
	
echo 'Total Seconds: ', $totalSeconds, '<br>';
echo 'Hours: ', $hours, '<br>';
echo 'Minutes: ', $minutes, '<br>';	
echo 'Seconds: ', $remainder, '<br>';

	
?>
</body>
</html>