<?php
$sentence = "The rain in Myanmar falls mainly on the plain";
//retrieve located characters and thire corresponding frequency.
$char = count_chars($sentence, 1);
foreach($char as $letter=>$frequency) {
 echo "Character " . chr($letter). " appears $frequency times<br><hr>";
}

  echo "<hr><br>";

$pargraph = "Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Dolor ipsam quam aperiam officia non tenetur nisi, magni reprehenderit deserunt sint adipisci eligendi facilis reiciendis aliquid explicabo culpa ab quibusdam. Veniam.";

$char = count_chars($sentence, 1);
foreach($char as $letter=>$frequency) {
 echo "Character " . chr($letter). " appears $frequency times<br><hr>";
}