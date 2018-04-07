<?php
	include('process.php');  
	ob_start();
	session_start();
	if(isset($_POST['username']) and isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];		//variable for password
		$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

		//

		$count = mysqli_num_rows($result);
		//If the posted values are equal to the database values, then session will be created for the user.
		if ($count == 1){
		$_SESSION['username'] = $username;
		include'jabulani.html';
		
		}else{
		//If the login credentials doesn't match, he will be shown with an error message.
			include('accessdenied.html');
		}
		if(isset($_SESSION['username']) and isset($_SESSION['password'])){
			$username = $_SESSION['username'];
			echo "hie ";

		}
	}


?>