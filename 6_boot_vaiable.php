<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Home Page</h1>

	<?php $hour = date('h') ?>

	<p>
	 <?php
if ($hour < 6 || $hour >18) { ?>
	<b>Night Time</b>
	<?php } else { ?>
		<i>Day Time</i>
	<?php } ?>
	</p>
</body>
</html>