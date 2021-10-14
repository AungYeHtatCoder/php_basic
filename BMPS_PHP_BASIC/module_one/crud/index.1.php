<?php
if (isset($_POST['submit'])) {
	
	$connect-mysqli_connect('localhost','root','','loginapp');
	if (!$connect) {
		die('Connect Failed');
	}

	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username && $password) {
			$query = "INERT INTO users(username , password) ";
			$query .="VALUES ('$username','$password)";		
			$result=mysqli_query($connect,$query);
		if (!$result) {
				die('Query Failed');
			}
		}else{
			echo "<h2 class='text-center'>Successfully Insert Data</h2>";
		}

	}