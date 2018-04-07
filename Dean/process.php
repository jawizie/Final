<?php
	//require_once 'details.php';
	//login using root
	$username = $_POST['username'];
	$password = $_POST['password'];
	//echo ("and  the user name is ".$username);
	$conn = mysqli_connect('localhost', 'root', '');
	if(!$conn)
		die('Unable to connect'.mysqli_connect_errors($conn));
	//select database
	$select_db = mysqli_select_db($conn, 'test');
	if(!$select_db)
		die('Unable to select database');
	else
	include_once 'register.php';

	
?>