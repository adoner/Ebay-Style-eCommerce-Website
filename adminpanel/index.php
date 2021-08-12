<?php 
session_start();
if(isset($_SESSION['login'])){
	header('location:pages/main.php');
	}

header('location:/adminpanel/pages/login.php');

?>