<?php
	$name = "CookieName";
	$value = 500;
	$date = time() * (60 * 60 * 24 * 30);
	setcookie($name,$value,$date);
?>