<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['USER_ID']);
	unset($_SESSION['USER_FIRST_NAME']);
	unset($_SESSION['USER_LAST_NAME']);
	
	header("location: login.php");
?>
