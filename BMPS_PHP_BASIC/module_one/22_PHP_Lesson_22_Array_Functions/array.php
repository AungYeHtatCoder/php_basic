<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array Function</title>
</head>
<body>
	<?php
		$count =
		[15,78,58,98,67,96,32,54,69,];

		echo max($count);
		echo '<br>';
		echo min($count);
		echo "<br>";
		echo "<pre>";
		echo Print_r($count);
		echo "</pre>";
		sort($count);
		echo "<br>";
		Print_r($count);
	?>
</body>
</html>