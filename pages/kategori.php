<?php
session_start();
require_once('../inc/db.php');

$kat = $_GET["kat"];
$altkat = $_GET["altkat"];
$altaltkat = $_GET["altaltkat"];

if($kat!=''){$kateg="kategori1"; $kategori=$kat;}
if($altkat!=''){$kateg="kategori2"; $kategori=$altkat;}
if($altaltkat!=''){$kateg="kategori3"; $kategori=$altaltkat;}

$limit=10;
$page=$_GET['p'];
if($page==''){
	  $page=1;
	  $start=0;
}else{
  	$start=$limit*($page-1);
 }

$tot= $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE ".$kateg."='$kategori' and yayin='1'");
$total=$tot->fetchColumn();
$num_page=ceil($total/$limit);

$qry = $db->query("SELECT * FROM ilanlar WHERE ".$kateg."='$kategori' and yayin='1' ORDER BY id DESC LIMIT $start, $limit");

$qry1 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori1='bal' and yayin='1'");
$bal = $qry1->fetchColumn();
$qry2 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori1='polen' and yayin='1'");
$polen = $qry2->fetchColumn();
$qry3 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori1='arisutu' and yayin='1'");
$arisutu = $qry3->fetchColumn();
$qry4 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori1='propolis' and yayin='1'");
$propolis = $qry4->fetchColumn();
$qry5 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='cicek' and yayin='1'");
$cicek = $qry5->fetchColumn();
$qry6 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='salgi' and yayin='1'");
$salgi = $qry6->fetchColumn();
$qry7 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='yas' and yayin='1'");
$yas = $qry7->fetchColumn();
$qry8 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='kurutulmus' and yayin='1'");
$kurutulmus = $qry8->fetchColumn();
$qry9 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='yas2' and yayin='1'");
$yas2 = $qry9->fetchColumn();
$qry10 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='kurutulmus2' and yayin='1'");
$kurutulmus2 = $qry10->fetchColumn();
$qry11 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='kapsul' and yayin='1'");
$kapsul = $qry11->fetchColumn();
$qry12 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='suda' and yayin='1'");
$suda = $qry12->fetchColumn();
$qry122 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='ham' and yayin='1'");
$ham = $qry122->fetchColumn();
$qry13 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='alkolde' and yayin='1'");
$alkolde = $qry13->fetchColumn();
$qry14 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='zeytinyaginda' and yayin='1'");
$zeytinyaginda = $qry14->fetchColumn();
$qry15 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='geven' and yayin='1'");
$geven = $qry15->fetchColumn();
$qry16 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='kekik' and yayin='1'");
$kekik = $qry16->fetchColumn();
$qry17 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='kestane' and yayin='1'");
$kestane = $qry17->fetchColumn();
$qry18 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='sedir' and yayin='1'");
$sedir = $qry18->fetchColumn();
$qry19 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='okaliptus' and yayin='1'");
$okaliptus = $qry19->fetchColumn();
$qry20 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='hayit' and yayin='1'");
$hayit = $qry20->fetchColumn();
$qry21 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='maydanoz' and yayin='1'");
$maydanoz = $qry21->fetchColumn();
$qry22 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='puren' and yayin='1'");
$puren = $qry22->fetchColumn();
$qry23 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='pamuk' and yayin='1'");
$pamuk = $qry23->fetchColumn();
$qry24 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='aycicegi' and yayin='1'");
$aycicegi = $qry24->fetchColumn();
$qry25 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='narenciye' and yayin='1'");
$narenciye = $qry25->fetchColumn();
$qry26 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='orman' and yayin='1'");
$orman = $qry26->fetchColumn();
$qry27 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='ucgul' and yayin='1'");
$ucgul = $qry27->fetchColumn();
$qry28 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='akasya' and yayin='1'");
$akasya = $qry28->fetchColumn();
$qry29 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='ihlamur' and yayin='1'");
$ihlamur = $qry29->fetchColumn();
$qry30 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='kir' and yayin='1'");
$kir = $qry30->fetchColumn();
$qry31 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='yayla' and yayin='1'");
$yayla = $qry31->fetchColumn();
$qry32 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='karacali' and yayin='1'");
$karacali = $qry32->fetchColumn();
$qry33 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='kanola' and yayin='1'");
$kanola = $qry33->fetchColumn();
$qry34 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='keciboynuzu' and yayin='1'");
$keciboynuzu = $qry34->fetchColumn();
$qry35 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='anason' and yayin='1'");
$anason = $qry35->fetchColumn();
$qry36 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='lavanta' and yayin='1'");
$lavanta = $qry36->fetchColumn();
$qry37 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='cam' and yayin='1'");
$cam = $qry37->fetchColumn();
$qry38 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='mese' and yayin='1'");
$mese = $qry38->fetchColumn();
$qry39 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='gevenkekik' and yayin='1'");
$geven_kekik = $qry39->fetchColumn();
$qry40 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori1='ari' and yayin='1'");
$ari = $qry40->fetchColumn();
$qry41 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='arikolonisi' and yayin='1'");
$arikolonisi = $qry41->fetchColumn();
$qry42 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='anaari' and yayin='1'");
$anaari = $qry42->fetchColumn();
$qry43 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='damizlik' and yayin='1'");
$damizlik = $qry43->fetchColumn();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>ARICIMDAN | <?php echo $kategori;?></title>
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
<link rel="stylesheet" type="text/css" href="/css/charisma-app.css">
<link rel="stylesheet" type="text/css" href="/css/normalize.css">
<link rel="stylesheet" type="text/css" href="/css/default.css?update=01112013">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<!-- Jquery Plugins-->
<script type="text/javascript" src="/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
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

<div class="kategoriContent">

<div style="position:relative; float:left; width:200px; height:auto">
<div class="kategoriMenu">

<div class="title"><span style="font-size:18px; font-weight:bold; color:#000;position:absolute;left: 18%; top: 3%"><i class="glyphicon glyphicon-list"></i> KATEGORİ</span></div>
<nav>
<ul>
<?php 
if($kategori=="bal" or $kategori=="cicek" or $kategori=="salgi" or $kategori=="geven" or $kategori=="kekik" or $kategori=="gevenkekik" or $kategori=="kestane" or $kategori=="sedir" or $kategori=="okaliptus" or $kategori=="hayit" or $kategori=="maydanoz" or $kategori=="puren" or $kategori=="pamuk" or $kategori=="aycicegi" or $kategori=="narenciye" or $kategori=="orman" or $kategori=="ucgul" or $kategori=="akasya" or $kategori=="ihlamur" or $kategori=="kir" or $kategori=="yayla" or $kategori=="karacali" or $kategori=="kanola" or $kategori=="keciboynuzu" or $kategori=="anason" or $kategori=="lavanta" or $kategori=="cam" or $kategori=="mese"){?>
<li><a href="/kategori/bal/1">BAL (<?php echo $bal;?>)</a></li>
    <ul>
    <?php if($kategori=="cicek" or $kategori=="bal" or $kategori=="geven" or $kategori=="kekik" or $kategori=="gevenkekik" or $kategori=="kestane" or $kategori=="sedir" or $kategori=="okaliptus" or $kategori=="hayit" or $kategori=="maydanoz" or $kategori=="puren" or $kategori=="pamuk" or $kategori=="aycicegi" or $kategori=="narenciye" or $kategori=="orman" or $kategori=="ucgul" or $kategori=="akasya" or $kategori=="ihlamur" or $kategori=="kir" or $kategori=="yayla" or $kategori=="karacali" or $kategori=="kanola" or $kategori=="keciboynuzu" or $kategori=="anason" or $kategori=="lavanta"){?>
    <li><a href="/altkategori/cicek/1">Çiçek Balı (<?php echo $cicek;?>)</a></li>
    	<ul>
        <?php if($geven!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="geven"){?>
   		<li><a href="/altaltkategori/geven/1">Geven Balı (<?php echo $geven;?>)</a></li>
        <?php }?>
        <?php if($kekik!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="kekik"){?>
        <li><a href="/altaltkategori/kekik/1">Kekik Balı (<?php echo $kekik;?>)</a></li>
        <?php }?>
        <?php if($geven_kekik!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="gevenkekik"){?>
        <li><a href="/altaltkategori/gevenkekik/1">Geven-Kekik Balı (<?php echo $geven_kekik;?>)</a></li>
        <?php }?>
        <?php if($kestane!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="kestane"){?>
        <li><a href="/altaltkategori/kestane/1">Kestane Balı (<?php echo $kestane;?>)</a></li>
        <?php }?>
        <?php if($sedir!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="sedir"){?>
        <li><a href="/altaltkategori/sedir/1">Sedir Balı (<?php echo $sedir;?>)</a></li>
        <?php }?>
        <?php if($okaliptus!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="okaliptus"){?>
        <li><a href="/altaltkategori/okaliptus/1">Okaliptus Balı (<?php echo $okaliptus;?>)</a></li>
        <?php }?>
        <?php if($hayit!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="hayit"){?>
        <li><a href="/altaltkategori/hayit/1">Hayıt Balı (<?php echo $hayit;?>)</a></li>
        <?php }?>
        <?php if($maydanoz!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="maydanoz"){?>
        <li><a href="/altaltkategori/maydanoz/1">Maydanoz Balı (<?php echo $maydanoz;?>)</a></li>
        <?php }?>
        <?php if($puren!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="puren"){?>
        <li><a href="/altaltkategori/puren/1">Püren Balı (<?php echo $puren;?>)</a></li>
        <?php }?>
        <?php if($pamuk!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="pamuk"){?>
        <li><a href="/altaltkategori/pamuk/1">Pamuk Balı (<?php echo $pamuk;?>)</a></li>
        <?php }?>
        <?php if($aycicegi!=0 and$kategori=="cicek" or $kategori=="bal" or $kategori=="aycicegi"){?>
        <li><a href="/altaltkategori/aycicegi/1">Ayçiçeği Balı (<?php echo $aycicegi;?>)</a></li>
        <?php }?>
        <?php if($narenciye!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="narenciye"){?>
        <li><a href="/altaltkategori/narenciye/1">Narenciye Balı (<?php echo $narenciye;?>)</a></li>
        <?php }?>
        <?php if($orman!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="orman"){?>
        <li><a href="/altaltkategori/orman/1">Orman Gülü Balı (<?php echo $orman;?>)</a></li>
        <?php }?>
        <?php if($ucgul!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="ucgul"){?>
        <li><a href="/altaltkategori/ucgul/1">Üçgül Balı (<?php echo $ucgul;?>)</a></li>
        <?php }?>
        <?php if($akasya!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="akasya"){?>
        <li><a href="/altaltkategori/akasya/1">Akasya Balı (<?php echo $akasya;?>)</a></li>
        <?php }?>
        <?php if($ihlamur!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="ihlamur"){?>
        <li><a href="/altaltkategori/ihlamur/1">Ihlamur Balı (<?php echo $ihlamur;?>)</a></li>
        <?php }?>
        <?php if($kir!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="kir"){?>
        <li><a href="/altaltkategori/kir/1">Kır Çiçeği Balı (<?php echo $kir;?>)</a></li>
        <?php }?>
        <?php if($yayla!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="yayla"){?>
        <li><a href="/altaltkategori/yayla/1">Yayla Balı (<?php echo $yayla;?>)</a></li>
        <?php }?>
         <?php if($karacali!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="karacali"){?>
        <li><a href="/altaltkategori/karacali/1">Karaçalı Balı (<?php echo $karacali;?>)</a></li>
        <?php }?>
        <?php if($kanola!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="kanola"){?>
        <li><a href="/altaltkategori/kanola/1">Kanola Balı (<?php echo $kanola;?>)</a></li>
        <?php }?>
        <?php if($keciboynuzu!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="keciboynuzu"){?>
        <li><a href="/altaltkategori/keciboynuzu/1">Keçiboynuzu Balı (<?php echo $keciboynuzu;?>)</a></li>
        <?php }?>
        <?php if($anason!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="anason"){?>
        <li><a href="/altaltkategori/anason/1">Anason Balı (<?php echo $anason;?>)</a></li>
        <?php }?>
        <?php if($lavanta!=0 and $kategori=="cicek" or $kategori=="bal" or $kategori=="lavanta"){?>
        <li><a href="/altaltkategori/lavanta/1">Lavanta Balı (<?php echo $lavanta;?>)</a></li>
        <?php }?>
        </ul>
      <?php }?>
      <?php if($kategori=="salgi" or $kategori=="bal" or $kategori=="cam" or $kategori=="mese"){?>
    <li><a href="/altkategori/salgi/1">Salgı Balı (<?php echo $salgi;?>)</a></li>
    	<ul>
        <?php if($cam!=0 and $kategori=="salgi" or $kategori=="bal" or $kategori=="cam"){?>
    	<li><a href="/altaltkategori/cam/1">Çam Balı (<?php echo $cam;?>)</a></li>
        <?php }?>
        <?php if($mese!=0 and $kategori=="salgi" or $kategori=="bal" or $kategori=="mese"){?>
        <li><a href="/altaltkategori/mese/1">Meşe Balı (<?php echo $mese;?>)</a></li>
        <?php }?>
        </ul>
     <?php }?>
    </ul>
<?php }?>
<?php 
if($kategori=="ari" or $kategori=="arikolonisi" or $kategori=="anaari" or $kategori=="damizlik"){?>
<li><a href="/kategori/ari/1">ARI (<?php echo $ari;?>)</a></li>
    <ul>
    <?php if($arikolonisi!=0 and $kategori=="ari" or $kategori=="arikolonisi"){?>
    <li><a href="/altkategori/arikolonisi/1">Arı Kolonisi (<?php echo $arikolonisi;?>)</a></li>
    <?php }?>
    <?php if($anaari!=0 and $kategori=="ari" or $kategori=="anaari"){?>
    <li><a href="/altkategori/anaari/1">Ana Arı (<?php echo $anaari;?>)</a></li>
    <?php }?>
    <?php if($damizlik!=0 and $kategori=="ari" or $kategori=="damizlik"){?>
    <li><a href="/altkategori/damizlik/1">Damızlık (<?php echo $damizlik;?>)</a></li>
    <?php }?>
    </ul>
<?php }?>
<?php 
if($kategori=="polen" or $kategori=="yas" or $kategori=="kurutulmus"){?>
<li><a href="/kategori/polen/1">POLEN (<?php echo $polen;?>)</a></li>
    <ul>
    <?php if($yas!=0 and $kategori=="polen" or $kategori=="yas"){?>
    <li><a href="/altkategori/yas/1">Yaş (<?php echo $yas;?>)</a></li>
    <?php }?>
    <?php if($kurutulmus!=0 and $kategori=="polen" or $kategori=="kurutulmus"){?>
    <li><a href="/altkategori/kurutulmus/1">Kurutulmuş (<?php echo $kurutulmus;?>)</a></li>
    <?php }?>
    </ul>
<?php }?>
<?php 
if($kategori=="arisutu" or $kategori=="yas2" or $kategori=="kurutulmus2" or $kategori=="kapsul"){?>
<li><a href="/kategori/arisutu/1">ARISÜTÜ (<?php echo $arisutu;?>)</a></li>
    <ul>
    <?php if($yas2!=0 and $kategori=="arisutu" or $kategori=="yas2"){?>
    <li><a href="/altkategori/yas2/1">Yaş (<?php echo $yas2;?>)</a></li>
    <?php }?>
    <?php if($kurutulmus2!=0 and $kategori=="arisutu" or $kategori=="kurutulmus2"){?>
    <li><a href="/altkategori/kurutulmus2/1">Kurutulmuş (<?php echo $kurutulmus2;?>)</a></li>
    <?php }?>
    <?php if($kapsul!=0 and $kategori=="arisutu" or $kategori=="kapsul"){?>
    <li><a href="/altkategori/kapsul/1">Kapsül (<?php echo $kapsul;?>)</a></li>
    <?php }?>
    </ul>
<?php }?>
<?php 
if($kategori=="propolis" or $kategori=="suda" or $kategori=="ham" or $kategori=="alkolde" or $kategori=="zeytinyaginda"){?>
<li><a href="/kategori/propolis/1">PROPOLİS (<?php echo $propolis;?>)</a></li>
    <ul>
    <?php if($suda!=0 and $kategori=="propolis" or $kategori=="suda"){?>
    <li><a href="/altkategori/suda/1">Suda (<?php echo $suda;?>)</a></li>
    <?php }?>
    <?php if($ham!=0 and $kategori=="propolis" or $kategori=="ham"){?>
    <li><a href="/altkategori/ham/1">Ham (<?php echo $ham;?>)</a></li>
    <?php }?>
    <?php if($alkolde!=0 and $kategori=="propolis" or $kategori=="alkolde"){?>
    <li><a href="/altkategori/alkolde/1">Alkolde (<?php echo $alkolde;?>)</a></li>
    <?php }?>
    <?php if($zeytinyaginda!=0 and $kategori=="propolis" or $kategori=="zeytinyaginda"){?>
    <li><a href="/altkategori/zeytinyaginda/1">Zeytin Yağında (<?php echo $zeytinyaginda;?>)</a></li>
    <?php }?>
    </ul>
<?php }?>
</ul>
</nav>
</div>

<div class="aramaDiv"><!---Arama-->
<form name="aramaForm" action="<?php ($_SERVER['PHP_SELF'])?>" method="post">

<div class="form-group">
<label for="satissekli">Satış Şekli</label>
<select name="satissekli" type="selectbox" class="form-control">
<option></option>
<option value="Perakende">Perakende</option>
<option value="Toptan">Toptan</option>
</select>
</div>
<div class="form-group">
    <label for="sunum">Sunum Şekli</label>
    <select class="form-control" id="sunum" name="sunum">
    <option></option>
    <option value="Kavanoz">Kavanoz</option>
    <option value="Paket">Paket</option>
    <option value="Teneke">Teneke</option>
    <option value="Düz Petekli">Düz Petekli</option>
    <option value="Kasnak Petekli">Kasnak Petekli</option>
    <option value="Karakovan">Karakovan</option>
    <option value="Krem Bal">Krem Bal</option>
    </select>
</div>
<div class="form-group">
    <label for="fiyat">Fiyat Aralığı</label>
    <div class="clearfix"></div>
    <div style="position:relative; float:left; width:75px;"><input type="text" class="form-control" id="fiyat_min" name="fiyat_min" placeholder="Min TL" width="75px"></div>
    <div class="clearfix"></div>
    <div style="position:relative; float:left; width:75px; margin-left:90px; margin-top:-33px"><input type="text" class="form-control" id="fiyat_max" name="fiyat_max" placeholder="Max TL" width="75px"></div>  
    <div class="clearfix"></div>    
</div>
<div class="form-group">
    <label for="kimden">Kimden</label>
    <select class="form-control" id="kimden" name="kimden">
    <option></option>
    <option value="Yerli Üretici">Yerli Üretici</option>
    <option value="Firmadan">Firmadan</option>
    </select>       
</div>
<div class="form-group">
<label for="analiz">Analiz</label>
    <select class="form-control" id="analiz" name="analiz">
    <option></option>
    <option value="Evet Analiz Var">Evet Analiz Var</option>
    <option value="Hayır Analiz Yok">Hayır Analiz Yok</option>
    </select>
</div>
<!--<div class="form-group">
<label for="organik">Organik</label>
    <select class="form-control" id="organik" name="organik">
    <option></option>
    <option value="Evet Organik">Evet Organik</option>
    <option value="Hayır Organik Değil">Hayır Organik Değil</option>
    </select>
</div>-->
<div style="position:relative; margin-left:65px"><button type="submit" class="btn btn-info">ARA</button></div>
</form>
</div>

</div>
<?php if(!isset($_POST["satissekli"]) and !isset($_POST["sunum"]) and !isset($_POST["fiyat_min"]) and !isset($_POST["fiyat_max"]) and !isset($_POST["kimden"]) and !isset($_POST["analiz"])){?>
<div style="position:relative; float:left; width:800px; height:auto; padding:10px; z-index:11000">
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
<?php }?>

<?php if(isset($_POST["satissekli"]) and isset($_POST["sunum"]) and isset($_POST["fiyat_min"]) and isset($_POST["fiyat_max"]) and isset($_POST["kimden"]) and isset($_POST["analiz"])){
	
$satissekli = $_POST["satissekli"];
$sunum = $_POST["sunum"];
$fiyat_min = $_POST["fiyat_min"];
$fiyat_max = $_POST["fiyat_max"];
$kimden = $_POST["kimden"];
$analiz = $_POST["analiz"];
//$organik = $_POST["organik"];

$search_array = array($_POST["satissekli"],$_POST["sunum"],$_POST["fiyat_min"],$_POST["fiyat_max"],$_POST["kimden"],$_POST["analiz"]);

$keywords = array('satis_sekli','sunum_sekli','fiyat','fiyat','kimden','analiz');

/*print_r($search_array);
echo $search_array[1];
*/
$x = 0; 
//echo $search_array[$x];
$construct = " "; 

foreach( $search_array as $search_each ) {
	
	if($search_array[$x]!=''){
		
		if( $x == 0 or $x-1 == 0 or $x-2 == 0 or $x-3 == 0 or $x-4 == 0 or $x-5 == 0 or $x-6 == 0 ){
		
			$construct .= "$keywords[$x] LIKE '%$search_each%' ";
			
			} 
				
		elseif($x == 2){
			
				if($fiyat_max==''){	
						
					$construct .= "AND $keywords[$x] GREATER THAN '%$search_each%' ";
				
				}
				if($fiyat_max!=''){	
						
					$construct .= "AND $keywords[$x] BETWEEN '%$search_each%' ";
				
				}
			
			}
			
		elseif($x == 3){
			
				if($fiyat_min==''){
				
					$construct .= "AND $keywords[$x] LESS THAN '%$search_each%' ";
				}
				if($fiyat_min!=''){
				
					$construct .= "AND '%$search_each%' ";
				}
			
			}
		else {
			
			$construct .= "AND $keywords[$x] LIKE '%$search_each%' ";
			 
			}
		
	}
$x++;

} 
//echo $construct;	
$arama = $db->query("SELECT * FROM ilanlar WHERE ".$construct." AND ".$kateg."='$kategori' AND yayin='1'");
?>
<div style="position:relative; float:left; width:800px; height:auto; padding:10px; z-index:11000">
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
foreach($arama as $ktgr){
	
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

<?php }?>
<div style="position:relative; float:none; margin-left:210px">
<ul class="pagination pagination-centered">
<li><a <?php if($page!=1){?>href="<?php echo $page-1;?>"<?php }?>>Prev</a></li>
<?php 
for($i=1; $i <= $num_page; $i++){?>
    
    <li <?php if($page==$i){echo "class='active'";}?>>
        <a href="<?php echo $i;?>"><?php echo $i;?></a>
    </li>
    
	<?php }?>
    <li><a <?php if($page!=$num_page){?>href="<?php echo $page+1;?>"<?php }?>>Next</a></li>
</ul>
</div>


</div><!-- .kategoriContent-->
</div><!-- .container-->
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>