<?php
session_start();
require_once('../inc/db.php');
$seo=$_GET['p'];
$sql=$db->query("select * from icerik where seo='$seo'")->fetch();
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
<script type="text/javascript" src="../js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
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
<script>
function HideAd(){
	
document.getElementById('hide').style.display='none';
document.getElementById('show').style.display='block';
document.getElementById('reklam').style.display='none';

}

function ShowAd(){
	
document.getElementById('hide').style.display='block';
document.getElementById('show').style.display='none';
document.getElementById('reklam').style.display='block';

}
</script>
<style>
#show {
	display:none;
	position:relative;
	float:right;
	margin-top:-5px;
	width:730px;
	}
#hide {
	display:block;
	position:relative;
	float:right;
	margin-top:-5px;
	width:730px;
	height: 10px;
	}

</style>
</head>

<body>

<?php require_once('../inc/header.php');?>
<div class="clearfix"></div>
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
<span style="font-size:18px; font-weight:bold; color:#000;position:relative;left: 45%; top: 3%"><?php echo $sql['title'];?></span></div>


<div style='position:relative; float:left; width:730px; height:auto'>

<a id="hide" onclick="HideAd()"><center><font size="1"><span style="background-color: rgb(0, 255, 255); color: rgb(0, 0, 0); font-weight: bold;">
Reklamı Kapat</span></font></center></a>
<div id="reklam">
<img src="/images/test.jpg">
</div>
<a id="show" onclick="ShowAd()"><center><font size="1"><span style="background-color: rgb(0, 255, 255); color: rgb(0, 0, 0); font-weight: bold;">
Reklamı Göster</span></font></center></a>

</div>
<div style="padding:20px 5px 20px 5px;">
<!--//içerik-->
İçerik Buraya yazılacak
</div>
</div>
</div>

</div>
<div class="clearfix"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>
