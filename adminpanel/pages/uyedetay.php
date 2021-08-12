<meta charset="utf-8">
<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$id=$_GET['id'];
$sql=$db->query("SELECT * FROM members WHERE id='$id'")->fetch();

?>
<link href='/bower_components/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'>
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
<tr><td><strong>Şehir</strong></td><td><strong>:</strong></td><td><?php echo $sql["sehir"];?></td></tr>
<tr><td><strong>Kayıt Tarihi</strong></td><td><strong>:</strong></td><td><?php echo $sql["kayit_tarihi"];?></td></tr>
<tr><td><strong>Üyelik Türü</strong></td><td><strong>:</strong></td><td><?php echo $sql["kimlikturu"];?></td></tr>
<tr><td><strong>Kimlik</strong></td><td><strong>:</strong></td><td><img src="/images/user-id-images/<?php echo $sql["kimlik_image"];?>" width="300px" height="200px" /></td></tr>
<tr><td colspan="3"></td></tr>
</table>
<div style="position:relative; margin:0 auto; background-color:#999; margin-top:20px; padding:5px">
<?php if($sql["onay"]==0){?>
<a class="btn btn-success" href="../../inc/islemler.php?islem=uyeonay&id=<?php echo $id;?>" onclick="javascript: return confirm('Onay İçin Emin misiniz?')"><i class='glyphicon glyphicon-zoom-in icon-white'></i> Onayla</a>
<?php }?>
<?php if($sql["onay"]==1){?>
<a class="btn btn-success" href="../../inc/islemler.php?islem=uyeonaykaldir&id=<?php echo $id;?>" onclick="javascript: return confirm('Onay Kaldırma İçin Emin misiniz?')"><i class='glyphicon glyphicon-zoom-in icon-white'></i> Onay Kaldır</a>
<?php }?>
<a class="btn btn-success" href=""><i class='glyphicon glyphicon-zoom-in icon-white'></i> E-Posta Yolla</a>
<a class="btn btn-success" href=""><i class='glyphicon glyphicon-zoom-in icon-white'></i> Mesaj Yolla</a>
</div>
</div>