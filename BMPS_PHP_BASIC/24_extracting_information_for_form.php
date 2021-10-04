<?php
	if (isset($_POST['sub'])) {
		//echo "Hello Green Hackers Students";
		//echo $_POST['username'];
		//echo $_POST['password'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		echo $username ."<br>";
		echo $password;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Sbmit</title>
</head>
<body>
	<form action="form_submit.php" method="post">
		<input type="text"placeholder="Please Enter You Name"><br><br>
		<input type="password"placeholder="Please Enter You Password"><br><br>
		<input type="tel"placeholder="Please Enter You Password" name="tel"><br><br>
		<input type="number" name="number" placeholder="Dusation Date"><br><br>
		<input type="date" name="start_date" placeholder="Start Stay Date"><br><br>
		<input type="date" name="end_date" placeholder="End Stay Date"><br><br>
		<input type="submit" name="sub">
	</form>
	<br><br><br>
	<table border="1px">
		<tr>
			<th>No.</th>
			<th>Customer Name</th>
			<th>Customer Password</th>
			<th>Customer Phone Number</th>
			<th>Duration Date</th>
			<th>Start Stay Date</th>
			<th>End Stay Date</th>
		</tr>
		<tr>
			<td><?php echo @$username ?></td>
			<td><?php echo $password ?></td>
			<td><?php echo $tel ?></td>
			<td><?php echo $number ?></td>
			<td><?php echo $start_date ?></td>
			<td><?php echo $end_date ?></td>
		</tr>
	</table>
</body>
</html>