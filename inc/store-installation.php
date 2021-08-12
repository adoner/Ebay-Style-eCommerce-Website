<?php
session_start();
include("db.php");
include("functions.php");
 ?>
 <!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/default.css?update=01112013">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<!-- Jquery Plugins-->
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<style>
#instal_aciklama {
	display:block;
	}
#instal_form {
	display:none;
	}
</style>
<script>
function install (){

  document.getElementById('instal_aciklama').style.display = 'none';
  document.getElementById('instal_form').style.display = 'block';

}
</script>

<title>ARICIMDAN</title>
</head>

<body>

<?php require_once('../inc/header.php');?>
<div class="c"></div>
<div class="container">

<div class="base" id="instal_aciklama">

Mağaza Kurulumu

<a class="btn btn-default" onClick="install()">Kuruluma Başla</a>
</div>

<div class="base" id="instal_form">
<div class="title">Mağaza Kurulum</div>
<form role="form" data-toggle="validator" action="../inc/islemler.php?islem=MagazaKurulum" method="post">
<div class="form-group">
<label for="ad">Mağaza Adı*</label>
<input type="text" class="form-control" id="magazaad" name="magazaad" placeholder="Mağaza adı.." required>
</div>
<div class="form-group">
<label for="soyad">Yetkili Adı Soyadı*</label>
<input type="text" class="form-control" id="yetkili" name="yetkili" placeholder="Yetkili Adı Soyadı.." required>
</div>
<div class="form-group">
<label for="eposta">Telefon*</label>
<input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon no.." required>
</div>
<div class="form-group">
<label for="fax">Fax</label>
<input type="text" class="form-control" id="fax" name="fax" placeholder="Fax no..">
</div>
<div class="form-group">
<label for="eposta">E-Posta*</label>
<input type="text" class="form-control" id="eposta" name="eposta" placeholder="E-postanız.." required>
</div>
<div class="form-group">
<label for="sifre">Adres*</label>
<input type="text" class="form-control" id="adres" name="adres" placeholder="Adresiniz.." required>
</div>
<div class="form-group">
<label for="sifre">Web</label>
<input type="text" class="form-control" id="web" name="web" placeholder="Web adresi..">
</div>
<div class="form-group">
<label for="sifre">Facebook</label>
<input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook adresi..">
</div>
<div class="form-group">
<label for="sifre">Twitter</label>
<input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter adresi..">
</div>
<div class="form-group">
<label for="sifre">Youtube</label>
<input type="text" class="form-control" id="youtube" name="youtube" placeholder="youtube adresi..">
</div>
<div class="form-group">
<label for="sifre">Instagram</label>
<input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram adresi..">
</div>
<div class="form-group">
<label for="sifre">Google+</label>
<input type="text" class="form-control" id="gplus" name="gplus" placeholder="Google plus adresi..">
</div>
<div><span style="font-size:16px; color:#F00">*zorunlu alanlar</span></div><br>
<button type="submit" class="btn btn-default" ><strong>KAYDET</strong></button>
</form>
</div>
</div>

</div>
<?php require_once('../inc/footer.php');?>
</body>
</html>