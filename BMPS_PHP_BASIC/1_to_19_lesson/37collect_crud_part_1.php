<?php
	inclcdude_once "db.php";
		if(isset ($_POST['delet'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username && $password) {
			$query = "INERT INTO users(username , password) VALUES
			('$username','$password)";		
			$result=mysqli_query($connect,$query);
			result_query($result);
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
				<h1 class="text-center">Register Form</h1>
				<form action="" method="post">
					<br><br>
					<input type="text" class="form-control" placeholder="Please Enter You Name" name="username">
					<br><br>
		         <input type="password" class="form-control" placeholder="Please Enter You Password" name="password">
		         <select name="id" id="" class="form-control">
		         	<?php
		         	$query="SELECT id, username FORM users";
		         	$result = mysqli_query($connect,$query);
		         	while($row=mysqli_query($connect,$query));
		         	while$row=(mysqli_fetch_assoc($result));
		         		$id=$row['id'];
		         		$username = $row['username'];
		         	?>
		         		<option value="<?php echo $id ?>"><?php echo $username ?></option>
		         		<?php
		         		}
		         	?>
		         <option value="1">1</option>
		         <option value="2">2</option>
		     </select>
		        <input type="submit" class="btn-primary" name="delete" val="Delete">
				</form></div>
			<div class="col-md-6">
				<table class="table">
					<tr>
						<th>id</th>
						<th>Name</th>
						<th>Password</th>
						<th></th>
						<th></th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>