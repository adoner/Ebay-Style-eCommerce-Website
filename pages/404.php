<?php
session_start();
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
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/default.css?update=01112013">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<!-- Jquery Plugins-->
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
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
<div class="container">

<style type="text/css">
.404{
	position:fixed;
	text-align:center;
	z-index:99999;
	width:100%;
	height:100%;
	background-color:#fff;
	}
	input[type=text] {
            border: hsl(247, 89%, 72%) solid 1px;
            outline: none;
            padding: 5px 3px;
            font-size: 16px;
            border-radius: 8px;
			color:#000;
        }
</style>

<div class="404">
<center>
<div style="background:#fff url(/images/404.jpg) no-repeat top left;width:600px;height:450px;"></div>

<div style="text-align:center;width:480px;height:80px;font-family:Helvetica, Arial sans-serif;font-size:23px;font-weight:bold;color:#fff;text-shadow:0 0 3px #000000;border:1px solid #ccc;margin:5px !important;padding:10px !important;background-color:#444;">
İlan Bulunamadı<br/><a href="/" style="display:inline-block;margin-top:4px;font-family:Helvetica, Arial sans-serif;font-size:16px;font-weight:bold;color:#fff;text-shadow:0 0 3px #000000;text-decoration:none;">Anasayfa</a><br>
</div>
<div class="clearfix"></div>
<div style="text-align:center;width:480px;height:80px;font-family:Helvetica, Arial sans-serif;font-size:23px;font-weight:bold;color:#fff;text-shadow:0 0 3px #000000;border:1px solid #ccc;margin:0px !important;padding:10px !important;background-color:#444;">
<form name="searchForm" action="/inc/islemler.php?islem=arama" method="post">
<input name="query_text" type="text" placeholder="Kelime ile ara" required>
<button class="btn btn-info" type="submit">İLAN ARA</button>
</form>
</div>
</center>
<div class="clearfix"></div>
</div>

</div>
</body>
</html>