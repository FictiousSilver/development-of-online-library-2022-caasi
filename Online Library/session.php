<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// Include config file
require_once 'config.php';

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"SELECT username FROM users WHERE username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
	if(!isset($login_session)){
		mysqli_close($connection); // Closing Connection
		header('Location: home.html'); // Redirecting To Home Page
	}
?>
