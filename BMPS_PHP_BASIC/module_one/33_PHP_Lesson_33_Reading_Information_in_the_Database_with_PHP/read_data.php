<?php
	$connect=mysqli_connect('localhost','root','','loginapp');
		if ($connect) {
			//echo "Hello Deabase";
		}else{
			die();
		}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- The above 3 meta tags *must* caome first in the head; any other head content must come *after* these tags -->
	<title>Read Data</title>
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
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th>User Id</th>
						<th>Use Name</th>
						<th>Password</th>
						<th>Remark</th>
					</tr>
					<?php
					$query ="SELECT id, username, password FROM users";
					$result =mysqli_query($connect,$query);
					if (!$result) {
					die('Query Failed');
					}
					// while($row=mysqli_fetch_row($result)) {
					//     print_r($row);
					//     echo "<br>";
					// }
					// while($row=mysqli_fetch_row($result)) {
					//     print_r($row);
					//     echo "<br>";

					while ($row=mysqli_fetch_assoc($result)) {
						$id=$row['id'];
					    $username = $row['username'];
					    $password = $row['password'];
					?>
					<tr>
						<td><?php echo $id; ?></td>
						<td><?php echo $username; ?></td>
						<td><?php echo $password; ?></td>
						<td></td>
					</tr>
				<?php
				}
				?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>