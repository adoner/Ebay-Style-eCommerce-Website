<?php
ob_start();
session_start();
require_once("db.php");

$qry = $db->query("SELECT * FROM members");

foreach($qry as $conf){
	
		if($conf['confirmation_code'] != ''){
		
			$datetime1 = new DateTime();
			$datetime2 = new DateTime($conf['confirmation_date']);
			$interval = $datetime1->diff($datetime2);
			$elapsed = $interval->format('%a');
		
			if($elapsed >= '1'){
				
				$sql = $db->query("UPDATE members SET confirmation_code = '', confirmation_date = '' WHERE id = '$conf[id]'");
				
				}
		}
	}
?>