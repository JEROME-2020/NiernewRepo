<?php 
	// this is the code for destroying the session to totally logout your account
	session_start();

	session_unset();
	session_destroy();

	header('location: http://localhost/NIercode/index.php');

 ?>