<?php
	if (isset($_POST['sub'])) {
		//echo "Hello Green Hackers Students";
		//echo $_POST['username'];
		//echo $_POST['password'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		echo $username ."<br>";
		echo $password;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Sbmit</title>
</head>
<body>
	<form action="">
		<input type="text"placeholder="Please Enter You Name"><br><br>
		<form action="">
		<input type="password"placeholder="Please Enter You Password"><br><br>
		<form action="">
		<input type="submit" name="sub">
	</form>
</body>
</html>