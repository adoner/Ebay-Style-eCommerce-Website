<?php
session_start();
require_once('../inc/db.php');
require_once('../inc/auth2.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ARICIMDAN | <?php echo $sql["title"];?></title>
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
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/default.css?update=01112013">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"/>

<!-- Jquery Plugins-->
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

</head>

<body>
<?php 
require_once('../inc/header.php');
?>
<div class="c"></div>
<div class="container">

<div style="padding:20px 5px 20px 5px;">

<div class="userContainer">
<div class="userDivRow">
    <div class="userDivLeft">
        <div class="userLeftBox">  
                                     
<div>
    <span class="spanTittle">ÜYE GİRİŞİ</span>
    <form name="uyeGiris" action="/login/uyeGiris" method="post">
    <input  type="hidden" name="chartLogin" value="sepetGiris">
    <div class="userWrapper">
        <input name="login" class="textbox" type="login" placeholder="E-posta" required>
    </div>
    <div class="userWrapper">
        <input name="password" class="textbox" type="password" placeholder="Şifre" required>
    </div>
    <button type="submit" class="userLoginBtn button"><strong>GİRİŞ YAP</strong></button>
    <a href="/sifremiunuttum" class="userPassBtn">Şifremi Unuttum</a>
    <label class="uyeGirisBeniHatirla">
        <input type="checkbox">
        Beni Hatırla
    </label>
    </form>
<a href="/sepetim/uyeliksiz" class="userLoginBtn button"><strong>ÜYELİKSİZ DEVAM ET</strong></a>
<!--<a class="userSignUp">Üye değilsen ÜYE OL</a>-->
</div>

</div>
</div>
               
<div class="userDivRight">
<div class="userRightBox">
<div>
    <span class="spanTittle">HIZLI ÜYELİK</span>
    <form name="hizliUyeForm" id="hizliUyeForm" action="/exec/uyeKayit" method="post">
    
    <input type="hidden" name="Uye" value="hizli">
    <div class="userWrapper">
        <input name="adSoyad" class="textbox" type="text" placeholder="Adınız Soyadınız" required>
    </div>
    
    <div class="userWrapper">
        <input name="ePosta" class="textbox" type="email" placeholder="E-posta" required>
    </div>
    
    <div class="userWrapper">
        <input name="password" class="textbox" type="password" placeholder="Şifre" required>
    </div>
    
    <div class="userWrapper">
<input name="telNo" class="textbox"  type="text" placeholder="Telefon" required></div>

<div class="g-recaptcha" data-sitekey="6LfxxSEUAAAAAPj6crxEBpsxVkrSoTKywljvVEMD"></div>
 
    <div class="userWrapper">Hesap oluşturarak <strong><a href="#divSozlesme" class="fancybox" style="color: #ff0000;">üyelik sözleşmesini</a></strong> okuduğunuzu ve kabul ettiğinizi onaylıyorsunuz.</div>
    <button type="submit" class="userLoginBtn button" >
        <strong>ÜYE OL</strong>
    </button>
</div>
</form>
</div>
</div>
</div>                      
</div>

</div>

</div>
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>