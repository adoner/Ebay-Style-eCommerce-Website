<?php	
	if($_SESSION['SESS_USER_ID'] != '') {
		header("location: /userpanel/pages/main.php");
		exit();
	}
?>
