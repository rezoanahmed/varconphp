<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Variables and Constants</title>
</head>
<body>
	
	<div id="header">
		
	
	<?php

	echo "Variables can be reassigned but constants can't be...";

	?>

	</div>


	<div id="variables">
	
	<?php
	echo "Examples of Variables";
	echo "<br>";

	// we can assign variables with $ sign

	$name = "Md Rezoan Ahmed";
	$department = "CSE";
	$batch = 2018;

	echo "Name : $name";
	echo "<br>";
	echo "Department : $department";
	echo "<br>";
	echo "Batch : $batch";



	?>
	</div>
	

	<br>
	<div id="constants">
	<?php
	echo "Examples of Constants";
	echo "<br>";
	// we can assign constants with a function called define()
	// constants can't be reassigned

	define("emid", "h2106185");
	define('bankAccount', 'xxxxxxxxxxxxxxxxxxx');
	
	// echo emid;
	// echo "<br>";
	// echo bankAccount;

	echo "EMID : " . emid;
	echo "<br>"; 
	echo "Bank Account : " . bankAccount;

	?>
	</div>

</body>
</html>