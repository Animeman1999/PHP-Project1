<!doctype html>
<!--Jeffrey Martin
	CIS 193
	Project 1 
	Part 4-->
<html>
<head>
<meta charset="utf-8">
<title>Project 1 Part 1</title>

<!--Styiling for table -->
<style>
	table {width: "100%"; border-collapse: collapse; align-content: center; }
	table, td {border: 3px solid #190102 ;}
	td {padding: 15px}
</style>
</head>

<body>

<!--Example of using HTML tags for headings -->
<h1>Dynamic Credit Union</h1>
<h2>IRA Savings Rates.</h2>

<?php
	/*Example of using echo to create
	  a table and a paragraph*/
	echo"	<table>
			  <tbody>
				<tr>
				  <td>IRA Savings Account</td>
				  <td>up to $24,999.99</td>
				  <td>0.50%</td>
				</tr>
				<tr>
				  <td>IRA Savings Account</td>
				  <td>$25,000 - $99,999.99</td>
				  <td>0.60%</td>
				</tr>
				<tr>
				  <td>IRA Savings Account</td>
				  <td>$100,000 or more</td>
				  <td>0.75%</td>
				</tr>
			  </tbody> 
			</table> ";
	echo"<p>$1,000 minimum deposit required.</p> "
?>
</body>
</html>