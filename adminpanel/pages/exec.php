<meta charset="utf-8">
<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');
require_once('../../inc/SimpleImage.php');

$islem=@$_GET['islem'];
$moduleid=@$_GET['moduleid'];

if($islem=="aktif"){
	
	$sql=$db->query("UPDATE modules SET status='1' WHERE id='$moduleid'");
	
	if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Modül Aktive Edildi...");
    window.location="main.php?page=modules";
    </script>
<?php 
}
	}

if($islem=="pasif"){
	$sql=$db->query("UPDATE modules SET status='0' WHERE id='$moduleid'");
	
	if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Modül Pasive Edildi...");
    window.location="main.php?page=modules";
    </script>
<?php 
}
	
	}

if (isset($_POST['menuadd'])) {
    $title=$_POST['title'];
	if(@$_POST['gallery']==1){$seo="galeriler";}
	if(@$_POST['gallery']==0){$seo=seo($title);}
	$icerik=$_POST['editor1'];
	$link=$_POST['link'];
	$rank=$_POST['rank'];
	$gallery=@$_POST['gallery'];
	$tarih=date('d.m.Y');
		
$sql=$db->query("INSERT INTO icerik (title, seo, link, content, gallery, ranking,tarih) VALUES ('$title','$seo','$link','$icerik','$gallery','$rank','$tarih')");
if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Menü Kaydı Yapılmıştır...");
    window.location="main.php?page=menus";
    </script>
<?php 
}}

if(isset($_POST['menuedit'])){
	
	$id=$_POST['id'];
	$title=$_POST['title'];
	if(@$_POST['gallery']==1){$seo="galeriler";}
	if(@$_POST['gallery']==0){$seo=seo($title);}
	$icerik=$_POST['editor1'];
	$link=$_POST['link'];
	$rank=$_POST['rank'];
	$gallery=@$_POST['gallery'];
	$tarih=date('d.m.Y');
		
	$sql=$db->query("UPDATE icerik SET title='$title',content='$icerik',seo='$seo',link='$link',gallery='$gallery',ranking='$rank',tarih='$tarih' WHERE id='$id'");
	if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Menü Güncellenmiştir...");
    window.location="main.php?page=menus";
    </script>
<?php 
		}	
}

if (isset($_POST['productmenuadd'])) {
    $title=$_POST['title'];
	if(@$_POST['gallery']==1){$seo="galeriler";}
	if(@$_POST['gallery']==0){$seo=seo($title);}
	$rank=$_POST['rank'];
	$date=date('d.m.Y');
		
$sql=$db->query("INSERT INTO productmenumodule (title, seo, date, ranking) VALUES ('$title','$seo','$date','$rank')");
if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Menü Kaydı Yapılmıştır...");
    window.location="main.php?page=productmenu";
    </script>
<?php 
}}

if (isset($_POST['pageadd'])) {
	
    $title=$_POST['title'];	
	$seo=seo($title);
	$icerik=$_POST['editor1'];
	$tarih=date('d.m.Y');
	$link="/".$seo;
	$indpages="1";
		
$sql=$db->query("INSERT INTO icerik (title, seo, link, content,tarih,indpages) VALUES ('$title','$seo','$link','$icerik','$tarih','$indpages')");
if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Sayfa Kaydı Yapılmıştır...");
    window.location="main.php?page=ind-pages";
    </script>
<?php 
}}

if(isset($_POST['pageedit'])){
	
	$id=$_POST['id'];
	$title=$_POST['title'];
	$seo=seo($title);
	$icerik=$_POST['editor1'];
	$link="/".$seo;
	$tarih=date('d.m.Y');
		
	$sql=$db->query("UPDATE icerik SET title='$title',content='$icerik',seo='$seo',link='$link',tarih='$tarih' WHERE id='$id'");
	if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Sayfa Güncellenmiştir...");
    window.location="main.php?page=ind-pages";
    </script>
<?php 
		}	
}

if (isset($_POST['duyuruadd'])) {
	
	$sayi=rand();
    $baslik=$_POST['baslik'];
	$seo=seo($baslik).'_'.$sayi;
	$govde=$_POST['editor1'];
	$altbaslik=$_POST['altbaslik'];
	$ozet=$_POST['ozet'];
	$tarih=date('d.m.Y');
	$sira=$_POST['sira'];
		
$sql=$db->query("INSERT INTO duyurumodule (baslik, seo, altbaslik, ozet, govde, tarih, sira) VALUES ('$baslik','$seo','$altbaslik','$ozet','$govde','$tarih','$sira')");
if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Duyuru Kaydı Yapılmıştır...");
    window.location="main.php?page=duyuru";
    </script>
<?php 
}
}

if(isset($_POST['duyuruedit'])){
	
	$id=$_POST['id'];
	$sayi=rand();
    $baslik=$_POST['baslik'];
	$seo=seo($baslik).'_'.$sayi;
	$govde=$_POST['editor1'];
	$sira=$_POST['sira'];
	$altbaslik=$_POST['altbaslik'];
	$ozet=$_POST['ozet'];
	$tarih=date('d.m.Y');
		
	$sql=$db->query("UPDATE duyurumodule SET baslik='$baslik',seo='$seo',govde='$govde',altbaslik='$altbaslik',ozet='$ozet',sira='$sira',tarih='$tarih' WHERE id='$id'");
	if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Duyuru Güncellenmiştir...");
    window.location="main.php?page=duyuru";
    </script>
<?php 
		}	
}

if (isset($_POST['courseadd'])) {
	
    $kurs=$_POST['kurs'];
	$link=$_POST['link'];
	$sira=$_POST['sira'];
		
$sql=$db->query("INSERT INTO coursesmodule (kurs, link, sira) VALUES ('$kurs','$link','$sira')");
if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Kurs Kaydı Yapılmıştır...");
    window.location="main.php?page=courses";
    </script>
<?php 
}
}

if(isset($_POST['courseedit'])){
	
	$kurs=$_POST['kurs'];
	$link=$_POST['link'];
	$sira=$_POST['sira'];
	$id=$_POST['id'];	
	$sql=$db->query("UPDATE coursesmodule SET kurs='$kurs',link='$link',sira='$sira' WHERE id='$id'");
	if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Kurs Güncellenmiştir...");
    window.location="main.php?page=courses";
    </script>
<?php 
		}	
}

if (isset($_POST['mduyuruadd'])) {
	
    $baslik=$_POST['baslik'];
	$altbaslik=$_POST['altbaslik'];
	$ozet=$_POST['ozet'];
	$govde=$_POST['editor1'];
	$link=$_POST['link'];
	$sira=$_POST['sira'];
	
	## Uzantı Kontrollerim
	$uzanti=array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
	## Aynı Dizinde Bulunan Resimler Klasörüne Kaydet
	$dizin=     "../../images/mansetduyuru";
			
		if(in_array(strtolower(@$_FILES['resim']['type']),$uzanti)){			 
		move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$_FILES['resim']['name']}");			 
		$load_path= "../../images/mansetduyuru/". $_FILES["resim"]["name"];
		}


$sql=$db->query("INSERT INTO mduyurumodule (baslik, altbaslik, ozet, govde, resim, sira, link) VALUES ('$baslik','$altbaslik','$ozet','$govde','$load_path','$sira','$link')");
if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Manşet Duyuru Kaydı Yapılmıştır...");
    window.location="main.php?page=mduyuru";
    </script>
<?php 
}
}

if (isset($_POST['mduyuruedit'])) {
	
	
	if(@$_FILES['resim']['name']!=""){
	
	$id=$_POST['id'];
    $baslik=$_POST['baslik'];
	$altbaslik=$_POST['altbaslik'];
	$ozet=$_POST['ozet'];
	//$govde=$_POST['editor1'];
	$link=$_POST['link'];
	//$sira=$_POST['sira'];
	
	## Uzantı Kontrollerim
	$uzanti=array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
	## Aynı Dizinde Bulunan Resimler Klasörüne Kaydet
	$dizin=     "../../images/mansetduyuru";
			
		if(in_array(strtolower(@$_FILES['resim']['type']),$uzanti)){			 
		move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$_FILES['resim']['name']}");			 
		$load_path= "../../images/mansetduyuru/". $_FILES["resim"]["name"];
		}


	$sql=$db->query("UPDATE mduyurumodule SET baslik='$baslik', altbaslik='$altbaslik', ozet='$ozet', resim='$load_path', link='$link' WHERE id='$id'");
	if($sql){?>
		<script type="text/javascript" language="javascript">
		alert("Manşet Duyuru Güncellendi...");
		window.location="main.php?page=mduyuru";
		</script>
	<?php 
	}}

	if(@$_FILES['resim']['name']==""){
	
	$id=$_POST['id'];
    $baslik=$_POST['baslik'];
	$altbaslik=$_POST['altbaslik'];
	$ozet=$_POST['ozet'];
	//$govde=$_POST['editor1'];
	$link=$_POST['link'];
	//$sira=$_POST['sira'];
	
	$sql=$db->query("UPDATE mduyurumodule SET baslik='$baslik', altbaslik='$altbaslik', ozet='$ozet', link='$link' WHERE id='$id'");
	if($sql){?>
		<script type="text/javascript" language="javascript">
		alert("Manşet Duyuru Güncellendi...");
		window.location="main.php?page=mduyuru";
		</script>
	<?php 
	}}

}

if (isset($_POST['aboutmoduleedit'])) {
	
	$id=$_POST['id'];
	
	## Uzantı Kontrollerim
	$uzanti=array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
	## Aynı Dizinde Bulunan Resimler Klasörüne Kaydet
	$dizin=     "../../images";
		
	if(in_array(strtolower(@$_FILES['resim']['type']),$uzanti)){			 
	move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$_FILES['resim']['name']}");			 
	$load_path= "images/". $_FILES["resim"]["name"];
	}

	$sql=$db->query("UPDATE aboutmodule SET pic_path='$load_path' WHERE id='$id'");
	if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Resim Güncellendi...");
    window.location="main.php?page=about";
    </script>
	<?php 
	}
}

if (isset($_POST['galeriadd'])) {
	
    $aciklama=$_POST['aciklama'];
	$kat=$_POST['kat'];
	
	## Uzantı Kontrollerim
	$uzanti=array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
	## Aynı Dizinde Bulunan Resimler Klasörüne Kaydet
	$dizin=     "../../images/fotogaleri";
			
	if(in_array(strtolower(@$_FILES['resim']['type']),$uzanti)){			 
	move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$_FILES['resim']['name']}");			 
	$fotolink= $_FILES["resim"]["name"];
	}
	
	$load_path="../../images/fotogaleri/". $_FILES["resim"]["name"];
	$target_path = "../../images/fotogaleri/thumbs/". $_FILES["resim"]["name"];
		
	$image = new SimpleImage();
	$image->load($load_path);
	$image->resize(150,150);
	$image->save($target_path);
	
	$fotolink_thumb = $_FILES["resim"]["name"];


$sql=$db->query("INSERT INTO fotogaleri (fotolink_thumb, fotolink, kategori, aciklama) VALUES ('$fotolink_thumb','$fotolink','$kat','$aciklama')");
if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Resim Kaydı Yapılmıştır...");
    window.location="main.php?page=katview&id="+ <?php echo $kat;?>;
    </script>
<?php 
}
}

if (isset($_POST['galeriedit'])) {
	
	
	if(@$_FILES['resim']['name']!=""){
	
	$id=$_POST['id'];
   	$aciklama=$_POST['aciklama'];
	$kat=$_POST['kat'];
	
	## Uzantı Kontrollerim
	$uzanti=array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
	## Aynı Dizinde Bulunan Resimler Klasörüne Kaydet
	$dizin=     "../../images/fotogaleri";
			
		if(in_array(strtolower(@$_FILES['resim']['type']),$uzanti)){			 
		move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$_FILES['resim']['name']}");			 
		$fotolink= $_FILES["resim"]["name"];
		}

	$load_path="../../images/fotogaleri/". $_FILES["resim"]["name"];
	$target_path = "../../images/fotogaleri/thumbs/". $_FILES["resim"]["name"];
		
	$image = new SimpleImage();
	$image->load($load_path);
	$image->resize(150,150);
	$image->save($target_path);
	
	$fotolink_thumb = $_FILES["resim"]["name"];

	$sql=$db->query("UPDATE fotogaleri SET fotolink_thumb='$fotolink_thumb', fotolink='$fotolink', aciklama='$aciklama' WHERE id='$id'");
	if($sql){?>
		<script type="text/javascript" language="javascript">
		alert("Galeri Resmi Güncellendi...");
		window.location="main.php?page=katview&id=<?php echo $kat;?>";
		</script>
	<?php 
	}}

	if(@$_FILES['resim']['name']==""){
	
	$id=$_POST['id'];
   	$aciklama=$_POST['aciklama'];
	$kat=$_POST['kat'];
	
	$sql=$db->query("UPDATE fotogaleri SET aciklama='$aciklama' WHERE id='$id'");
	if($sql){?>
		<script type="text/javascript" language="javascript">
		alert("Galeri Resmi Güncellendi...");
		window.location="main.php?page=katview&id=<?php echo $kat;?>";
		</script>
	<?php 
	}}

}


if (isset($_POST['kategoriadd'])) {
	
    $kategori=$_POST['kategori'];
		
$sql=$db->query("INSERT INTO fotokategori (kategori) VALUES ('$kategori')");
if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Kategori Kaydı Yapılmıştır...");
    window.location="main.php?page=galeri";
    </script>
<?php 
}
}

if(isset($_POST['kategoriedit'])){
	
	$kategori=$_POST['kategori'];
	$id=$_POST['id'];
		
	$sql=$db->query("UPDATE fotokategori SET kategori='$kategori' WHERE id='$id'");
	if($sql){?>
	<script type="text/javascript" language="javascript">
    alert("Kategori Güncellenmiştir...");
    window.location="main.php?page=galeri";
    </script>
<?php 
		}	
}

?>	
