<?php

//SORT
$names = array("John", "Bodb", "Dana", "Sue", "Ted", "Sam", "Xena", "Zara");
sort($names);

$nlen = count ($names);
for ($x = 0; $x < $nlen; $x++) { 
    echo $names[$x];
    echo "<br>";
}

echo "<hr>";

//ASSOCIATIVE ARRAY SORT ACCORDING TO VALUE
$tscore = array("John"=>"60", "Bill"=>"80", "Dan"=>"75");
krsort($tscore);

foreach ($tscore as $key => $_value) {
    echo "Key=" . $x . ", value=" . $_value;
    echo "<br>";
}