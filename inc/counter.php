<?php
ob_start();
session_start();
require_once('db.php');

$id = $_POST["id"];

$qry = $db->query("SELECT * FROM ilanlar WHERE id = '$id'")->fetch();
$sayac = $qry["sayac"] + 1;

$sorgu = $db->query("UPDATE ilanlar SET sayac = '$sayac' WHERE id = '$id'");
?>