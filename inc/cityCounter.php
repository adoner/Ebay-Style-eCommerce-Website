<?php
ob_start();
session_start();
require_once("db.php");

$sehir = $_POST["sehir"];

$qry = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='$sehir' and onay='1'");
$sayi = $qry->fetchColumn();

echo $sayi;
?>