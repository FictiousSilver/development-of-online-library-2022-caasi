<?php
session_start();
if(session_destroy()){// Destroying All Sessions
	header("Location: landing_page.html"); // Redirecting To Home Page
}
?>
