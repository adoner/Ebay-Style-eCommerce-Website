<?php
session_start();
require_once('../inc/db.php');

$id = $_GET["uyeid"];
$qry = $db->query("SELECT * FROM members WHERE id='$id'")->fetch();
$qry2 = $db->query("SELECT * FROM ilanlar WHERE memberid='$id' AND yayin='1'");
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
<link rel="stylesheet" type="text/css" href="../css/charisma-app.css">
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
<style>
.tablo {
	width: 790px;
	}
.tablo th {
	line-height:30px;
	background-color: #E9E9E9;
	font-size:14px;
	font-weight:600;
	padding:10px;
	}
.tablo tr {
	text-align:left;
	width:790px;
	line-height:90px;
	border-bottom: 1px dotted #999
	}
	
.tablo td {
	font-size:14px;
	text-align:left;
	vertical-align:middle;
	}
tr:nth-child(odd) { background-color:#ffffff; }
tr:nth-child(even) { background-color: #F7F7F7; }
</style>
</head>

<body>

<?php require_once('../inc/header.php');?>
<div class="c"></div>
<div class="container">

<div style="position:relative; margin:0 auto; width:1000">

<div style="position:relative; float:left; width:800px"><!---sol div-->
<div style="position:relative; float:left; width:800px; height:auto; z-index:11000">
<table class="tablo">
<thead>
<tr >
    <th>Fotoğraf</th>
    <th>İlan Başlığı</th>
    <th>Fiyat</th>
    <th>İlan Tarihi</th>
</tr>
</thead>
<tbody>
<?php 
foreach($qry2 as $ktgr){
	
	$sql = $db->query("SELECT * FROM ilan_images WHERE ilan_no = '$ktgr[id]'")->fetch();

	?>
	<tr>
    <td><a href="/ilandetay/<?php echo $ktgr['id'];?>"><img src="/images/ilan-images/<?php if($sql['image_name']!=''){echo $sql['image_name'];}else{echo "fotoyok.jpg";}?>" width="80px" height="80px" ></a></td>
    <td><a href="/ilandetay/<?php echo $ktgr['id'];?>"><?php echo $ktgr['baslik'];?></a></td>
    <td><?php echo $ktgr['fiyat'];?> TL</td>
    <td><?php echo $ktgr['kayit_tarihi'];?></td>
    </tr>
<?php 
}
?>
</tbody>
</table>
</div>
</div><!---.sol div-->

<div style="position:relative; float:left; width:250px; padding-left:10px"><!---sağ div-->

<div style="background-color: #FFF;border: 1px solid #999;border-radius: 1px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; width:250px; height:200px; padding: 4px"><div style="background-color: #efefef;border: 1px solid #999;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; width:240px; height:190px">

<div style="position:relative; margin:0 auto;width:240px;padding:10px 15px 10px 15px"><span style="font-size:16px; font-weight:700"><?php echo $qry['ad']." ".$qry['soyad'];?></span></div>
<!--<div style="background-color: #FFF;border: 1px solid #999;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;box-shadow: 1px 1px; margin-left:10px;width:200px;padding:10px 15px 10px 15px"><span style="font-size:14px; font-weight:600">Cep</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--><?php /*echo $qry['telefon'];*/?><!--</div>
<div style="position:relative; margin:0 auto;width:240px;padding:10px 15px 10px 15px"><a href="mailto:--><?php /*echo $qry['eposta'];*/?><!--">--><?php /*echo $qry['eposta'];*/?></a><!--</div>-->
<div style="position:relative; margin:0 auto;width:240px;padding:5px">
<?php 
if($qry["kimlikturu"]=='Birliğe Kayıtlı Arıcı'){?>
<img style="position:relative; margin-left:40%" src="/images/tab.png" width="50px" height="50px" />
<p style="font-size:12px; font-weight:700">Türkiye Arı Yetiştiricileri Merkez Birliği<br />Kayıtlı Arıcı</p>
<?php }?>
<?php 
if($qry["kimlikturu"]=='Kayıtsız Arıcı'){?>
<p style="font-size:16px; font-weight:700; margin-top:35px">Kayıtsız Arıcı</p>
<?php }?>
<?php 
if($qry["kimlikturu"]=='Kurumsal İşletme'){?>
<img style="position:relative; margin-left:37%; margin-bottom:10px" src="/images/shop.png" width="50px" height="50px" />
<p style="font-size:14px; font-weight:700">Kurumsal Üye</p>
<?php }?>
<?php 
if($qry["kimlikturu"]=='Birlik veya Kooperatif'){?>
<img style="position:relative; margin-left:37%; margin-bottom:10px" src="/images/shop.png" width="50px" height="50px" />
<p style="font-size:14px; font-weight:700">Birlik veya Kooperatif Kayıtlı Üye</p>
<?php }?>
</div>

</div></div>
</div><!---.sağ div-->
</div>

</div>
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>