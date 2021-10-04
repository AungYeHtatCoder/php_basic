<?php
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$min = 5;
		if (strlen($username) > $min) {
			if (in_array($username,$username)) {
			?>

			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Document</title>
			</head>
			<body>
				<h1>Hello Green Hackers Online Trainig Center</h1>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Ea laboriosam cum autem porro asperiores delectus ipsa, consequuntur deserunt officia, voluptas iste, similique magnam, eveniet repellat distinctio doloribus itaque facere accusamus.</p>
			</body>
			</html>
			<?php
			else {
			echo "Please Enter User Name more than 5 Characters";
		}
		if (strlen($username,$username) {
			echo "Welcome To My Site";
		}
	}
