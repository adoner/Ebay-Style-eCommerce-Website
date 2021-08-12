<?php
ob_start();
session_start();
include("../inc/db.php");
include("../inc/functions.php");
require_once("../inc/class.phpmailer.php");

$activationcode = $_GET["activationcode"];
$member_id = $_GET["id"];
$sql = $db->query("SELECT * FROM members WHERE id='$member_id'")->fetch();
$code_confirm = $sql["confirmation_code"];
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
<link rel="stylesheet" type="text/css" href="/css/default.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<!-- Jquery Plugins-->
<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103223567-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>

<?php require_once('../inc/header.php');?>
<div class="c"></div>
<div class="container">

<div class="base">
<form name="loginForm" id="loginForm" action="/inc/islemler.php?islem=sifre_degistir" method="post">
    
    <div class="form-group">
        <input name="sifre" type="password" class="form-control" placeholder="Şifre giriniz" required>
    </div>
    
    <div class="form-group">
        <input name="sifre2" type="password" class="form-control" placeholder="Şifre yeniden giriniz" required>
    </div>
    
    <button type="submit" class="btn btn-default">
        <strong>ŞİFRE DEĞİŞTİR</strong>
    </button>
    
    <?php if($activationcode == $code_confirm){$confirm = 1;}else{$confirm = 0;}?>
    
    <input type="hidden" name="confirmation" value="<?php echo $confirm;?>">
    <input type="hidden" name="member_id" value="<?php echo $member_id;?>">
    <input type="hidden" name="activationcode" value="<?php echo $activationcode;?>">
    
    </form>
</div>

</div>
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>
