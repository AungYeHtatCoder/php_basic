<?php
	$connect = mysqli_connect('localhost','root','','loginapp');
	if (!$connect) {
		echo "Connect Failed";
	}

		if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$username = mysqli_real_escape_string($connect,$username);
		$password = mysqli_real_escape_string($connect,$password);
		if ($username && $password) {
			$query = "INERT INTO users(username , password) VALUES
			('$username','$password)";		
			$result = mysqli_query($connect,$query);
			if (!$result) {
				die('Query Failed');
			}else {
				echo "<h2 class='text-center'>Successfully Insert Data</h2>";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- The above 3 meta tags *must* caome first in the head; any other head content must come *after* these tags -->
	<title>Insert Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!-- [if lt IE 9]> 
	<script src="https://os.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://os.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1 class="text-center">Log in Form</h1>
				<form action="" method="post">
					<br><br>
					<input type="text" class="form-control" placeholder="Please Enter Your Name" name="username">
					<br><br>
		           <input type="password" class="form-control" placeholder="Please Enter Your Password" name="password">
		           <br><br>
		          <input type="submit" class="btn btn-primary" name="submit">

				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>