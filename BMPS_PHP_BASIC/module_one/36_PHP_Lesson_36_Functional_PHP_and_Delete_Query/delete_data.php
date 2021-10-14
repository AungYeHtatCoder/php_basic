<?php
		include_once "db.php";
		include_once "function.php";
		if(isset($_POST['delete'])) {
		$id = $_POST['id'];
			$query = "UPDATE username SET username='$username',password='$password' WHERE id=$id";
			$result=mysqli_query($connect,$query);

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
			<div class="col-md-8">
				<h1 class="text-center">Log in Form</h1>
				<form action="" method="post">
					<br><br>
					<input type="text" class="form-control" placeholder="Please Enter You Name" name="username">
					<br><br>
		         <input type="password" class="form-control" placeholder="Please Enter You Password" name="password">
		         <select name="" id="" class="form-control">
		         	<?php
		         	$query="SELECT id, username FORM users";
		         	$result = mysqli_query($connect,$query);
		         	while($row=mysqli_fetch_assoc($result)){
		         		$id=$row['id'];
		         		$username = $row['username'];
		         	?>
		         		<option value="<?php echo $id ?>"><?php echo $username ?></option>
		         		<?php
		         		}
		         	?>
		     </select>
		        <input type="submit" class="btn-primary" name="delete" value="Delete">
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>