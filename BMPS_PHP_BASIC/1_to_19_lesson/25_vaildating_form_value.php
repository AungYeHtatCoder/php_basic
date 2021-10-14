<?php
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$min = 5;
		if (strlen($username) > $min) {
			echo $username;
		}else {
			echo "Please Enter User Name more than 5 Characters";
		}
		if (strlen($username,$username) {
			echo "Welcome To My Site";
		}else {
			echo "Try Again";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vaildating Form</title>
</head>
<body>
	<form action="vaildating_form" method="post">
		<input type="text"placeholder="Please Enter You Name"><br><br>
		<input type="password"placeholder="Please Enter You Password"><br><br>
		<input type="submit" name="submit">
	</form>
</body>