<?php
	$x = "ousite";
	function scope() {
		global $x;
		// $x = "insite";
		echo $x;;
	}
	echo $x;
	echo "<br>";
	scope();