<?php
	require_once "db.php";
	include_once "function.php";

		if(isset ($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username && $password) {
			$query = "INERT INTO users(username , password) VALUES
			('$username','$password)";		
			$result = mysqli_query($connect,$query);
			result_query($result);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- The above 3 meta tags *must* caome first in the head; any other head content must come *after* these tags -->
	<title>Insert Date</title>
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
			<div class="col-md-6">
				<h1 class="text-center">Register Form</h1>
				<form action="" method="post">
					<br><br>
					<input type="text" class="form-control" placeholder="Please Enter You Name" name="username">
					<br><br>
		         <input type="password" class="form-control" placeholder="Please Enter You Password" name="password">
		         <br><br>
		        <input type="submit" class="btn-primary" name="submit">
				</form></div>
				<div class="col-md-6">
					<h1>User Data</h1>
					<br><br>
					<table class="table table-bordered">
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>Password</th>
							<th></th>
							<th></th>
						</tr>
						<?php
						$query ="SELECT * FROM users";
						$result = mysqli_query($connect,$query);
						result_query($result);

						while($row = mysqli_fatch_assoc($result)) {
						    $userid = $row['id'];
						    $username = $_POST['username'];
							$password = $_POST['password'];
						
						?>
						<tr>
							<td><?php echo $userid; ?></td>
							<td><?php echo $username; ?></td>
							<td><?php echo $password; ?></td>
							<td><button class="btn btn-success">Update</button></td>
							<td><button class="btn btn-danger">Delete</button></td>
						</tr>
					<?php
					}  
					?>

				</table>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>