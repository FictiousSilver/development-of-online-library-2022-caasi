<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
else{
	// Define $username and $password
	$username=$_POST['username'];
	$password=$_POST['password'];

	// Include config file
	require_once 'config.php';

	// To protect MySQLi injection for Security purpose
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);

	// SQL query to fetch information of registerd users and finds user match.
	$query = mysqli_query($connection, "SELECT * FROM admin WHERE password='$password' AND username='$username'");
	$rows = mysqli_num_rows($query);
	if ($rows == 1) {
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: admin.html"); // Redirecting To Other Page
	}
	else{
		$error = "Username or Password is invalid";
		header("location: admin_login.html?error=signin_properly");
	}
	mysqli_close($connection); // Closing Connection
}
}
?>