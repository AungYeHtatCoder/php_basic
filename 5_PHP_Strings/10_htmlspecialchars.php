<?php
	$input = "I just can't get <<enough>> of PHP!";
	echo htmlentities($input);

	echo "<br><hr>";

	$str = "this is some <b>bold</b> text.";
	echo htmlspecialchars($str);
	