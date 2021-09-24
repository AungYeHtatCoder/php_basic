<?php
// INDEXED ARRAY
$colors = array("Blue", "Green")
echo "My Favorite Colors are: " . $colors[0] . ", " . $colors[1] . " and " . $colors[2] . "<hr>";

//ARRAY LENGTH
echo count($colors) . "<hr>";

//LOOP THROUGH AN INDEXED ARRAY
$arrlength = count($colors);

for ($x = 0; $x < $arrlength; $x++) { 
	echo $colors[$x] . "<hr>";
}

echo "<hr>";

//ASSOCIAIVE ARRAYS
$tscore = array("John"=>"60", "Bill"=>"80", "Den"=>"75");
echo "Bill scored " . $tscore[`Bill`] . " /100.";

echo "<hr>"

//LOOP THROUGH AN INDEXED ARRAY
foreach ($tscore as $x => $score) { 
	echo "Key=" . $x . ", $core=" . $score;
	echo "<br>";
}
