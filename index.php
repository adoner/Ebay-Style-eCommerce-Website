<?php
session_start();
//include file
include_once 'user_agent.php';
$visitor = $_SERVER['REMOTE_ADDR'];

//create an instance of UserAgent class
$ua = new UserAgent();

//echo $visitor;
/*if (preg_match("/180.3.13.245/",$visitor)) {

	
	header('Location: /desktop');
}else{

	//header('Location: /maintain');
	
}*/

if($ua->is_mobile()){
		header("Location: http://mobile.aricimdan.com");
		exit;
	}
if($ua->is_platform()){
	header("Location: /desktop");
	exit;
	}
?>