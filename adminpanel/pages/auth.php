<?php	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['USER_ID']) || (trim($_SESSION['USER_ID']) == '')) {
		header("location: login.php");
		exit();
	}
?>