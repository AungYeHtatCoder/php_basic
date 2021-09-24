<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$y = 30;
	$y = 20;
	function test1() {
    global $x, $y;
    $y = $x + $y;
	}

	test1 (); // Exxecute Function
	echo $y; // Output Value of Variable y
	?>
</body>
</html>