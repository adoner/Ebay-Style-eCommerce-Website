<?php
session_start();
require_once("../../inc/db.php");

$islem=$_GET['islem'];

if($islem=='sil'){
	
	$id=$_GET['id'];
	
	$sql = $db->query("SELECT * FROM member_adress WHERE id='$id'")->fetch();
	
	if($sql["defaulttt"]==1){?>
		
	<script>
	alert("Varsayılan Adres Silinemez");
	window.location.href = 'main.php?page=adresdefterim';
	</script>
		
	<?php	}
	
	if($sql["defaulttt"]==0){
		
	$qry=$db->query("DELETE FROM member_adress WHERE id='$id'");?>
	
	<script>
	alert("Adres Silindi");
	window.location.href = 'main.php?page=adresdefterim';
	</script>
	
	<?php
	exit();
	}
}

if($islem=='havalebildirim'){
	
	$banka=$_POST['banka'];
	$tutar=$_POST['tutar'];
	$not=$_POST['not'];
	$cartid=$_POST['cartid'];
	$memberid=$_POST['memberid'];
	$tarih=date("d-m-Y");
	
	$qry=$db->query("INSERT INTO havalebildirim (banka, tutar, mesaj, cartid, memberid, tarih) VALUES ('$banka','$tutar','$not','$cartid','$memberid','$tarih')");
	
	if($qry){?>
		
        <script>
		alert("Havale Bildirimi Kaydedildi");
		window.location.href = 'main.php?page=havalebildirim';
		</script>
		
	<?php	}	
	exit();	
}
	
if($islem=='adresduzenle'){
	
	$id=$_POST['id'];
	$adres_baslik=$_POST['adresBaslik'];
	$adres_detay=$_POST['adresDetay'];
	$ulke=$_POST['ulkeAdi'];
	$sehir=$_POST['sehirAdi'];
	$ilce=$_POST['ilceAdi'];
	$posta_kodu=$_POST['postaKodu'];
	
	$qry=$db->query("UPDATE member_adress SET adres_baslik='$adres_baslik', adres_detay='$adres_detay', ulke='$ulke', sehir='$sehir', ilce='$ilce', posta_kodu='$posta_kodu' WHERE id='$id'");
	
	if($qry){?>
		
        <script>
		alert("Adres Güncellendi");
		window.location.href = 'main.php?page=adresdefterim';
		</script>
		
	<?php	}	
	exit();	
}

if($islem=='varsayilan'){
	
	$id=$_GET['id'];
	$memberid=$_GET['memberid'];
	
	$sql=$db->query("UPDATE member_adress SET defaulttt='0' WHERE memberid='$memberid' AND defaulttt='1'");
	
		if($sql){
			$qry=$db->query("UPDATE member_adress SET defaulttt='1' WHERE id='$id'");
			
			if($qry){?>
		
        <script>
		alert("Varsayılan Adres Ayarlandı");
		window.location.href = 'main.php?page=adresdefterim';
		</script>
		
	<?php	}	
				
		}
		exit();
}
	
if($islem=='adresekle'){
	
	$memberid=$_POST['memberid'];
	$adres_baslik=$_POST['adresBaslik'];
	$adres_detay=$_POST['adresDetay'];
	$ulke=$_POST['ulkeAdi'];
	$sehir=$_POST['sehirAdi'];
	$ilce=$_POST['ilceAdi'];
	$posta_kodu=$_POST['postaKodu'];
	
	$qry=$db->query("INSERT INTO member_adress (memberid, adres_baslik, adres_detay, ulke, sehir, ilce, posta_kodu) VALUES ('$memberid','$adres_baslik','$adres_detay','$ulke','$sehir','$ilce','$posta_kodu')");
	
	if($qry){?>
		
        <script>
		alert("Adres Eklendi");
		window.location.href = 'main.php?page=adresdefterim';
		</script>
		
	<?php	}	
	exit();	
}

if($islem=='uyeguncelle'){
	
	$memberid=$_POST['memberid'];
	$adSoyad=$_POST['adSoyad'];
	$telNo=$_POST['telNo'];
	//$ePosta=$_POST['ePosta'];
	$tcKimlik=$_POST['tcKimlik'];
	$ulke=$_POST['ulke'];
	$sehir=$_POST['sehir'];
	$ilce=$_POST['ilce'];
	$ogrenimDurum=$_POST['ogrenimDurum'];
	$meslek=$_POST['meslek'];
	$cinsiyet=$_POST['cinsiyet'];
	$password=$_POST['password'];
	$passOnay=$_POST['passOnay'];
	$dtGun=$_POST['dtGun'];
	$dtAy=$_POST['dtAy'];
	$dtYil=$_POST['dtYil'];

	if($passOnay==''){
	$qry=$db->query("UPDATE members SET adSoyad='$adSoyad', telNo='$telNo', tcKimlik='$tcKimlik', ulke='$ulke', sehir='$sehir', ilce='$ilce', ogrenim='$ogrenimDurum', meslek='$meslek', cinsiyet='$cinsiyet', dtAy='$dtAy', dtYil='$dtYil', dtGun='$dtGun' WHERE id='$memberid'");
	}
	if($passOnay=='on'){
	$qry=$db->query("UPDATE members SET adSoyad='$adSoyad', telNo='$telNo', tcKimlik='$tcKimlik', ulke='$ulke', sehir='$sehir', ilce='$ilce', ogrenim='$ogrenimDurum', meslek='$meslek', cinsiyet='$cinsiyet',  password='".md5($password)."', dtAy='$dtAy', dtYil='$dtYil', dtGun='$dtGun' WHERE id='$memberid'");
	}
	if($qry){?>
		
        <script>
		alert("Üye Bilgileri Güncellendi");
		window.location.href = 'main.php?page=uyelikbilgi';
		</script>
		
	<?php	}	
	exit();
}
 ?>