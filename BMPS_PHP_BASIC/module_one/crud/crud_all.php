<?php
	require_once "db.php";
	require_once("function.php");

		if(isset ($_POST['delet'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username && $password) {
			$query = "INERT INTO users(username , password) VALUES
			('$username','$password)";
			$result = mysqli_query($connect,$query);
			result_query($result);
		}
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Date</title>
	<!-- The above 3 meta tags *must* caome first in the head; any other head content must come *after* these tags -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!-- [if lt IE 9]> 
	<script src="https://os.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://os.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="text-center">CRUD Operation</h1>
				<form action="" method="post">
					<br><br>
					<input type="text" class="form-control" placeholder="Please Enter You Name" name="username">
					<br><br>
		         <input type="password" class="form-control" placeholder="Please Enter You Password" name="password">
		         <br><br>	
		        <input type="submit" class="btn-primary" name="submit">
				</div>
			<div class="col-md-6">
				<table class="table table-bordered">
           </form>
          </table>
			</div>
		</div>
	</div>
</body>
</html>