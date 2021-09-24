<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	// Case-Sensitive
	define("WELCOME", "Hello my name is Joh Smith");
	echo WELCOME;

	echo "<hr>";
	// Case-Sensitive
	define("WELCOME", "Hello my name is Joh Smith", true);
	echo welcome2;

	echo "<hr>";
	// Constants are Global
	define("CAR", "VOLVO");
	echo welcome2;

	function mycar() {
		echo CAR;
	}

	mycar();
	?>
</body>
</html>