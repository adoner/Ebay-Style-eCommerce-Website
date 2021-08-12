<?php
ob_start();
session_start();
require_once('../inc/db.php');

$query = $_SESSION["query_text"];
$qry = $db->query("SELECT * FROM ilanlar WHERE yayin='1' and baslik LIKE '%$query%' or aciklama LIKE '%$query%'");
$qry2 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE yayin='1' and baslik LIKE '%$query%' or aciklama LIKE '%$query%'");
$rows = $qry2->fetchColumn()
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
<style>
.tablo {
	width: 780px;
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
	width:780px;
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
<div style="position:relative; float:left; margin-left:15%; width:800px; padding:10px"><span style="font-size:14px; font-weight:600">Toplam <font color="#FF0033"><?php echo $rows;?></font> sonuç bulundu.</span></div>
<div style="position:relative; float:left; margin-left:15%; width:800px; height:auto; padding:10px; z-index:11000">
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
foreach($qry as $ktgr){
	
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

</div><!-- .container-->
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>