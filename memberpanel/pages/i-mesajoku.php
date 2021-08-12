<?php
ob_start();
session_start();
require_once("../../inc/db.php");

$id = $_GET["id"];

$sql = $db->query("SELECT * FROM i_messages WHERE id ='$id'")->fetch();

if($sql){
	
	$qry=$db->query("UPDATE i_messages SET durum='1' WHERE id='$id'");
 ?>
<style>
.tablo1 {
	width: 100%;
	}
.tablo1 tr {
	text-align:left;
	width:400px;
	line-height:40px;
	border-bottom: 1px dotted #999
	}
</style>
<div style="position:relative; margin:0 auto;width:500px; height:350px">
<table class="tablo1" align="center">
<tr><td><strong>Adı Soyadı</strong></td><td><strong>:</strong></td><td><?php echo $sql["ad"]." ".$sql["soyad"];?></td></tr>
<tr><td><strong>Telefon</strong></td><td><strong>:</strong></td><td><?php echo $sql["telefon"];?></td></tr>
<tr><td><strong>E-Posta</strong></td><td><strong>:</strong></td><td><?php echo $sql["eposta"];?></td></tr>
<tr><td><strong>Kayıt Tarihi</strong></td><td><strong>:</strong></td><td><?php echo $sql["kayit_tarihi"];?></td></tr>
<tr><td><strong>Mesaj</strong></td><td><strong>:</strong></td><td></td></tr>
<tr><td colspan="3"><?php echo $sql["mesaj"];?></td></tr>
</table>
</div>
<?php }?>