<?php
try 
{
$db = new PDO("mysql:dbname=beedata;host=94.73.149.240", "beeuser", "Bee_2020_Aricimdan" );
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("SET NAMES utf8");
}
catch(PDOException $e)
{
echo $e->getMessage();
}
?>