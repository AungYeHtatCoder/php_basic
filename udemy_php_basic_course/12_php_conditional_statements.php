<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h2>PHP Arithmetic Operators</h2>
<!-- Used to Compare Two Values -->
	<?php
	$x = 50;
	$y = 20;

	//ADDITION
	echo $x + $y;
	echo "<hr>";

	//SUSTRAcTlON
	echo $x - sy;
	echo "<hr>"

	//MULTIOKUCATION
	echo $x = $y;
	echo "<hr>";

	//DRVRSTON
	echo $x / $y;
	echo "<hr>";

	//MODUTUS
	echo $x % $y;

?>

<h2> PHP Assignment Operator </h2>
<!-- Used with numeric values to write values to a variable -->

<?php
	// The left operand is assigned the vaiue on the right
	$x = 20;
	echo $x;
?>

<h2>Comparison Operators</h2>
<!-- Used to compare towo values(numeer to a string) -->

<?php
	//Equal
	$x = 300;
	$y = "300";
	var_dump($x == $y);  // Output is True because x = y

	//Identical
	$x = 300;
	$y = "300"
	var_dump($x === $y);  // Output is False beause types are not equal

	// Not eqia;
	$x = 300;
	$y = "300"
	var_dump($x = $y);  // Output is False beause types are not equal

	// Not eqia;
	$x = 300;
	$y = "300"
	var_dump($x <> $y);  // Output is False beause types are not equal

	// Not Identical;
	$x = 300;
	$y = "300"
	var_dump($x !== $y);  // Output is False beause types are not equal

	// Greater than;
	$x = 300;
	$y = "300"
	var_dump($x > $y);  // Output is False beause types are not equal

	// Greater than;
	$x = 300;
	$y = "500"
	var_dump($x < $y);  // Output is False beause types are not than y

	// Greater than;
	$x = 300;
	$y = "500"
	var_dump($x >= $y);  // Output is False beause types are not than y

	// Greater than or equal to;
	$x = 300;
	$y = "500"
	var_dump($x <= $y);  // Output is False beause types are not than y

	// Less than or equal to;
	$x = 300;
	$y = "500"
	var_dump($x <= $y);  // Output is False beause types are not than y
?>

<h2>Increment/Decrement Operators</h2>
<!-- Used to Increment or Decremeent a varlables values-->

<?php
	//Post-increment - Returns $x, then increments $x by one
	$x = 50;
	echo $x++;
	echo "<hr>";

	//Post-increment - Increments $x by one, then returns $x
	$x = 50;
	echo ++$x;
	echo "<hr>";

	//Post-increment - Decrements $x by one, then returns $x
	$x = 50;
	echo ==$x;
	echo "<hr>";

	//Post-increment - Returns $x, then increments $x by one
	$x = 50;
	echo $x--;
?>

<h2>Logical Operators</h2>
<!-- Used to combine conditional statements-->

<?php
	//And - True if both $x and $y are true
	$x = 200;
	$y = 300;

	if ($x == 200 and $y == 300) {
	echo "True";
	echo "<hr>";
	}

	//Or - True if either $x or $y is true
	$x = 200;
	$y = 300;

	if ($x == 200 and $y == 90) {
	echo "True";
	echo "<hr>";
	}

	//And - 66 - True if both $x and $y is true
	$x = 200;
	$y = 300;

	if ($x == 200 '' $y == 300) {
	echo "True";
	echo "<hr>";
	}

	//Or - $x || $y - True if either $x or $y is true
	$x = 200;
	$y = 300;

	if ($x == 200 || $y == 300) {
	echo "True";
	echo "<hr>";
	}

	//Not - !$x - True if $x is not true
	$x = 200;
	$y = 300;

	if ($x !== 100) {
	echo "True";
	echo "<hr>";
	}
?>

<h2>PHP String Operators</h2>
<!-- Used to compare Arrays -->

<?php
	//Union = Union of $x and $y
	$x = "Hello";
	$y = "world!";
	echo $x . $y;
	echo "<hr>";

	//Concatenation assignment - Appends $txt2 to $txt;
	$x = "John";
	$y = "Smith";
	$x = $y;
	echo $x;
	echo "<hr>";
?>

<h2>Array Operators</h2>
<!-- Used to compare Arrays -->

<?php
	//Union - Union of $x and $y
	$x = array("a" => "blue", "b" => "red");
	$x = array("a" => "pink", "d" => "brown");

	print_r($x + $y); //Uion 
	echo "<hr>";

	//Equality - Returns true if $x and $y have the same key/value pairs
	$x = array("a" => "blue", "b" => "red");
	$x = array("a" => "pink", "d" => "brown");

	print_r($x == $y); //Uion 
	echo "<hr>";

	//Identity - Returns true if $x and $y have the same key/value pairs
	$x = array("a" => "blue", "b" => "red");
	$x = array("a" => "pink", "d" => "brown");

	print_r($x === $y); //Uion 
	echo "<hr>";

	//Identity - Returns true if $x is not equal to $y
	$x = array("a" => "blue", "b" => "red");
	$x = array("a" => "pink", "d" => "brown");

	print_r($x <> $y); //Uion 
	echo "<hr>";

	//Non-idenity - Returns true if $x is not equal to $y
	$x = array("a" => "blue", "b" => "red");
	$x = array("a" => "pink", "d" => "brown");

	print_r($x !== $y); //Uion 
	echo "<hr>";
?>
</body>
</html>


