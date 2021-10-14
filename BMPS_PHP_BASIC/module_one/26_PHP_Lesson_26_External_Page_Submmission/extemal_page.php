<?php
	if (isset($_POST['submit'])) {
		$username = ['kokoaung','greenhackers','hellowrld','onlinestudents'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$min = 5;
		if (strlen($username) > $min) {
			if (in_array($username,$usernames)){
?>				
				<!DOCTYPE html>
				<html lang="en">
				<head>
					<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<title>Extemal Page</title>
				</head>
				<body>
					<h1>Hello Green Hackers Online Trainig Center</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore minus quasi ipsam cum sequi, obcaecati labore ratione, soluta nulla deleniti, eligendi distinctio consectetur est iure pariatur animi provident aliquid nesciunt.</p>
				</body>
				</html>
<?php
		}else {
			echo "Try Again";
			}
		}else {
			echo "Please Enter User Name more than 5 Characters";
		}
	}

?>

