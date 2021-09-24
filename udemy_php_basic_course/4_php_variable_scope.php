<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	// GLOBAL SCOPE EXAMPLE
	$x = 5; // qlobal scope

	function test1() {
		// Will Generate Error
		echo "<p>Value of x is: $x</p>";
	}
	test1();

	echo "<p>Value of x is: $x</p><hr>";

	// LocAl SCOPE EXAMPLE
    
    function test2() {
    	$y = 5; // local scope
    	echo "<p>Value of y is: $y</p>";
    }
    test2();
    // will Generate Error
    echo "<p>Value of y is: $y</p>";

	?>
</body>
</html>