<?php
$db_username        = 'beeuser'; //MySql database username
$db_password        = 'Bee_2020_Aricimdan'; //MySql dataabse password
$db_name            = 'beedata'; //MySql database name
$db_host            = '94.73.149.240'; //MySql hostname or IP

$currency			= '&#8378; '; //currency symbol
$taxes				= array( //List your Taxes percent here.
							'VAT' => 8);

$mysqli_conn = new mysqli($db_host, $db_username, $db_password,$db_name); //connect to MySql
$mysqli_conn->set_charset("utf8");
if ($mysqli_conn->connect_error) {//Output any connection error
    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
}