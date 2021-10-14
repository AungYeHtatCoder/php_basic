 <?php
 	$connect-mysqli_connect('localhost','root','','loginapp');
	if (!$connect) {
		die('Connect Failed');
	}

	if (isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = mysqli_real_escape_string($connect,$username);
	$password = mysqli_real_escape_string($connect,$password);
	$hash_salt_function="$2y$10$";
	$salt = "iusesomecrazystrings22";
	$hash_salt_function = $hash_function . $salt;
	$password= crypt(password,$hash_salt_format);
	if ($username && $password) {
			$query = "INERT INTO users(username , password) ";
			$query .="VALUES ('$username','$password)";		
			$result=mysqli_query($connect,$query);
		if (!$result) {
				die('Query Failed');
			
		}else{
			echo "<h2 class='text-center'>Successfully Insert Data</h2>";
		}
	}	
}

