<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_MEMBER_NAME']);
	unset($_SESSION['ROLE']);
	
	header("location:/");
?>
