<?php
session_start();
require_once("../inc/db.php");

$memberid = $_GET["memberid"];
$ilanid = $_GET["ilanid"];
$_SESSION["memberid"] = $memberid;
$_SESSION["ilanid"] = $ilanid;
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>ARICIMDAN</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="/css/normalize.css">
<link rel="stylesheet" type="text/css" href="/css/default.css?update=01112013">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

<!-- Jquery Plugins-->
<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/maskedinput-1.3.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103223567-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">		
$(document).ready(function()
{
	$("#TlfMask").mask("(999) 999-99-99");
})
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

<?php require_once('../inc/header.php');?>
<div class="clearfix"></div>
<div class="container">

<div style="position:relative; margin:0 auto; width:700px">

<form name="ilanMesajForm" action="/inc/islemler.php?islem=ilanMesajKayit" method="post">
<div class="form-group">
<label for="ad">Adınız</label>
<input type="text" class="form-control" id="ad" name="ad" placeholder="Adınız.." required>
</div>
<div class="form-group">
<label for="soyad">Soyadınız</label>
<input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyadınız.." required>
</div>
<div class="form-group">
<label for="eposta">E-Posta</label>
<input type="email" class="form-control" id="eposta" name="eposta" placeholder="E-Posta Adresiniz.." required>
</div>
<div class="form-group">
<label for="telefon">Telefon (GSM)</label>
<input type="text" class="form-control" id="TlfMask" name="telefon" placeholder="Telefon no.." required>
</div>
<div class="form-group">
<label for="sifre">Mesajınız</label>
<textarea name="mesaj" rows="10" cols="100" placeholder="Mesajınız.." required></textarea>
</div>
<div class="clearfix"></div>
<div class="g-recaptcha" data-sitekey="6Ld3SS4UAAAAAKlchZHjaalgVQs5aZdsnbb73H7J"></div>
<div class="clearfix"></div>
<input type="hidden" name="memberid" value="<?php echo $memberid;?>">
<input type="hidden" name="ilanid" value="<?php echo $ilanid;?>">
<button type="submit" class="btn btn-default" ><strong>GÖNDER</strong></button>
</form>
</div>

</div>
<div class="clearfix"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>
