<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Processed Form</title>
</head>
<body>
<?php

if ( !empty($_POST['number'])){
    $firstName = $_POST['firstName'];
}
echo '<p>You must have entered: &quot;', $firstName, 
	 '.&quot;</p>';

?>
</body>
</html>