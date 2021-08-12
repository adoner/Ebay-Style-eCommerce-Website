<?php
session_start();
$eposta = $_SESSION["eposta"];
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
<style>
.block {
	position:relative;
	margin-left:20%;
    width: 984px;
}
.c10 {
    width: 689px;
    float: left;
    min-height: 12px;
}
.mhdef {
    margin-right: 15px;
    margin-left: 15px;
}
.userRegisterLeft {
    border: 1px solid #dedede;
}
.userRegisterLeft p {
	text-align:center;
	
	}
.prdef, .phdef {
    padding-right: 15px;
    padding-left: 15px;
    padding-bottom: 15px;
    padding-top: 15px;
}
h1.okHeader {
    font-size: 40px;
    color: #7aba55;
    margin: 0;
    padding: 0;
    background: no-repeat 0 0;
}
h2.okHeader2 {
    font-size: 30px;
    color: #222;
    font-weight: normal;
    margin-bottom: 15px;
	text-align:center;
}
ul.suggestion {
    margin-top: 30px;
}
ol, ul {
    list-style: none;
}
ul.suggestion li {
    float: left;
    width: 306px;
    margin-right: 15px;
    border: 1px solid #e1e1e1;
    padding: 6px 6px 25px 6px;
    text-align: center;
}
.c3 {
    width: 250px;
    float: left;
    min-height: 12px;
}
.userRegisterRight {
    background-color: #f8f8f8;
    border: 1px solid #dedede;
}
ul.suggestion li#suggestion1 span {
    background-position: 111px 6px;
}
ul.suggestion li#suggestion2 span {
    background-position: 111px -86px;
}
ul.suggestion li span {
    display: block;
    height: 90px;
    text-indent: -9999px;
    background: url(/images/c02ebb27fae36d8d5aa5b37e4073f6fc.png) 111px 5px no-repeat;
}
</style>
</head>

<body>

<?php require_once('../inc/header.php');?>
<div class="c"></div>
<div class="container">

<div class="block">

<div class="c10 mhdef">
<div class="userRegisterLeft clearfix phdef">
<h1 class="okHeader">Tebrikler!</h1><h2 class="okHeader2">arıcımdan.com'un ayrıcalıklı dünyasına hoşgeldiniz.</h2><p>Türkiye'deki tüm arıcıların ürünlerini pazarladığı platformumuzda; baldan arısütüne, polenden propolise hertürlü arı ürününü pazarlayabilir ve satabilirsiniz</p><p>Dilerseniz kurumsal üyemiz olarak E-Ticaret imkanlarıyla ürünlerinizi satabilirsiniz..</p><p><span style="font-size:16px; color:#F60"><?php echo $eposta;?></span> E-posta adresinize üyelikle ilgili açıklamalar gönderilmiştir, lütfen kontrol ediniz</p>

<ul class="suggestion">
<li id="suggestion1"> <span>İlan Ver</span><h4>İlan verebilirsiniz</h4><p>arıcımdan.com'da ilan vermek çok etkili ve kolay.</p></li>
<li id="suggestion2"> <span>E-Ticaret yapabilirsiniz</span><h4>E-Ticarete Başla</h4><p>arıcımdan.com'da E-ticaret ile ürünlerinizi satabilirsiniz.</p></li>
</ul>
<div style="position:relative; margin-left:40%"><a class="btn btn-default" href="/">Anasayfaya Git</a></div>
</div></div>

</div>

</div>
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>