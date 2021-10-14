<?php
	if (isset($_POST['submit'])) {
		$username = ['kokoaung','greenhackers','hellowrld','onlinestudents'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$min = 5;
		if (strlen($username) > $min) {
			if (in_array($username,$usernames)){
			echo "Welcome To My site";
		}else {
			echo "Try Again";
			}
		}else {
			echo "Please Enter User Name more than 5 Characters";
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
	<form action="extemal_page" method="post">
		<input type="text" placeholder="Please Enter Your Name" name="username"><br><br>
		<input type="password" placeholder="Please Enter Your Password" name="password"><br><br>
		<input type="submit" name="sub">

	</form>
</body>
</html>