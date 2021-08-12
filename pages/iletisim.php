<?php
session_start();
require_once("../inc/db.php");

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>ARICIMDAN</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="bal, arı sütü, polen, propolis, arı zehiri, 
perga, apilarnil, kurutulmuş, taze, sağlıklı, sağlık, kalite, uygun, gerçek, 
hakiki, doğal, organik, arı, ana arı, arıcı, arıcımdan, Murat Emir, arıcılık, 
arıcılık ekonomisi, apiterapi, doğal ürün, sağlıklı ürün, honey, royal jelly, 
pollen, propolis, bee venom, ham, zeytinyağlı, suda çözünmüş, kapsül, perakende, 
toptan, süzme, petek, kasnak, karakovan, sızma, krem, ARIMO, apimondia, arıcı birlikleri, 
birlik balı, anzer balı, Pervari, organik bal, sertifika, analiz">
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
    (function(p,u,s,h){
        p._pcq=p._pcq||[];
        p._pcq.push(['_currentTime',Date.now()]);
        s=u.createElement('script');
        s.type='text/javascript';
        s.async=true;
        s.src='https://cdn.pushcrew.com/js/98f480332205c4adb4cd97f5b8be4bab.js';
        h=u.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s,h);
    })(window,document);
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
<div class="c"></div>
<div class="container">

<div class="kategoriContent">

<div style="position:relative; float:left; width:200px; height:auto; padding:10px">
<div class="sayfaMenu">
<div class="title"><span style="font-size:18px; font-weight:bold; color:#000;position:absolute;left: 20%; top: 3%">KURUMSAL</span></div>

<ul>
<li><a href="/hakkimizda">Hakkımızda</a></li>
<li><a href="/hizmetlerimiz">Hizmetlerimiz</a></li>
<li><a href="/yardim">Yardım</a></li>
<li><a href="/iletisim">İletişim</a></li>
</ul>

</div>
</div>
<div style="position:relative; float:left; width:800px; height:auto; padding:10px 40px 10px 40px; min-height:500px">
<div style="background-color: #F5F5F5;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-box-shadow: 1px 1px 3px 0 rgba(0,0,0,0.2);box-shadow: 1px 1px 3px 0 rgba(0,0,0,0.2);width:734px;height:30px; border-bottom:none;">
<span style="font-size:18px; font-weight:bold; color:#000;position:relative;left: 45%; top: 3%">İletişim</span></div>

<div style="position:relative; margin:0 auto; width:700px; padding-top:20px">

<form name="ilanMesajForm" action="/inc/islemler.php?islem=mesajKayit" method="post">
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
<div class="g-recaptcha" data-sitekey="6Ld3SS4UAAAAAKlchZHjaalgVQs5aZdsnbb73H7J"></div>
<br>
<button type="submit" class="btn btn-default" ><strong>GÖNDER</strong></button>
</form>
</div>

</div>
</div>

</div>
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>
