<?php
session_start();
require_once('../inc/db.php');
$seo=$_GET['p'];
$sql=$db->query("select * from icerik where seo='$seo'")->fetch();
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

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="../fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<script type="text/javascript">

$(document).ready(function() {

	$('.fancybox').fancybox({
		
	'autoSize' : false,
	'height': 350,
	'padding': 20,
	'width': 600, 
	'type': 'iframe'
	
	});

});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103223567-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-103223567-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-103223567-1');
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
<li><a href="/nasil-calisir">Nasıl Çalışır?</a></li>
<li><a href="/yardim">Yardım</a></li>
<li><a href="/iletisim">İletişim</a></li>
</ul>

</div>
</div>
<div style="position:relative; float:left; width:800px; height:auto; padding:10px 40px 10px 40px; min-height:500px">
<div style="background-color: #F5F5F5;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-box-shadow: 1px 1px 3px 0 rgba(0,0,0,0.2);box-shadow: 1px 1px 3px 0 rgba(0,0,0,0.2);width:734px;height:30px; border-bottom:none;">
<span style="font-size:18px; font-weight:bold; color:#000;position:relative;left: 45%; top: 3%"><?php echo $sql['title'];?></span></div>
<div style="padding:20px 5px 20px 5px;">
 <?php 		
if($sql['content']==""){

echo "<p align='center'><img src='/images/icerik_hazirlaniyor.jpg'></p>";

}else{

echo $sql['content'];
}		
?>
</div>
</div>
</div>

</div>
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>
