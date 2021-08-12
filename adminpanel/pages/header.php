<?php 
include 'config.php';
require_once('../../inc/db.php');
require_once('../../inc/functions.php');
 ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Arıcımdan.com | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ahmet Döner">

    <!-- The styles -->
    <link id="bs-css" href="../css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="../css/charisma-app.css" rel="stylesheet">
	<link href='../../bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='../../bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='../../bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='../../bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='../../bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='../../bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='../../bower_components/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='../css/jquery.noty.css' rel='stylesheet'>
    <link href='../css/noty_theme_default.css' rel='stylesheet'>
    <link href='../css/elfinder.min.css' rel='stylesheet'>
    <link href='../css/elfinder.theme.css' rel='stylesheet'>
    <link href='../css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='../css/uploadify.css' rel='stylesheet'>
    <link href='../css/animate.min.css' rel='stylesheet'>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="confirmation"]').confirmation();   
});
</script>
</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="main.php"><span>Arıcımdan.com</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profil</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php">Çıkış</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->
            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="/" target="_blank"><i class="glyphicon glyphicon-globe"></i> Siteye Gözat</a></li>
<!--                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Menü - Sayfa Ara" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>-->
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menü</li>
                        <li><a class="ajax-link" href="main.php?page=dashboard"><i class="glyphicon glyphicon-home"></i><span> Ana Panel</span></a>
                        </li>
                        <li><a class="ajax-link" href="main.php?page=uyeler"><i class="glyphicon glyphicon-user"></i><span> Üyeler</span></a>
                        </li>
                        <li><a class="ajax-link" href="main.php?page=users"><i class="glyphicon glyphicon-user"></i><span> Kullanıcılar</span></a>
                        </li>
                        <li><a class="ajax-link" href="main.php?page=ilanlar"><i class="glyphicon glyphicon-list-alt"></i><span> İlanlar</span></a>
                        </li>
                        <li><a class="ajax-link" href="main.php?page=sms-eposta"><i class="glyphicon glyphicon-globe"></i><span> SMS & E-Posta</span></a>
                        </li>
                        <li><a class="ajax-link" href="main.php?page=messages"><i class="glyphicon glyphicon-envelope"></i><span> Mesajlar</span></a>
                        </li>
                        <li><a class="ajax-link" href="main.php?page=menus"><i class="glyphicon glyphicon-eye-open"></i><span> Menü ve İçerik</span></a>
                        </li>
                        <li><a class="ajax-link" href="main.php?page=ind-pages"><i class="glyphicon glyphicon-edit"></i><span> Bağımsız Sayfa</span></a></li>
                        <li><a class="ajax-link" href="main.php?page=modules"><i class="glyphicon glyphicon-wrench"></i><span> Modüller</span></a>
                        </li>
<?php
 $sql=$db->query("SELECT * FROM modules WHERE modulecode='dm'")->fetch(); 
 if($sql['status']==1){
	 echo"<li><a class='ajax-link' href='main.php?page=duyuru'>
	 <i class='glyphicon glyphicon-bullhorn'></i><span> Duyurular</span></a></li>";}

 $sql2=$db->query("SELECT * FROM modules WHERE modulecode='fg'")->fetch(); 
 if($sql2['status']==1){
	 echo"<li><a class='ajax-link' href='main.php?page=galeri'>
	 <i class='glyphicon glyphicon-picture'></i><span> Galeriler</span></a></li>";}
	 
$sql3=$db->query("SELECT * FROM modules WHERE modulecode='pm'")->fetch(); 
 if($sql3['status']==1){
	 echo"<li><a class='ajax-link' href='main.php?page=productmenu'>
	 <i class='glyphicon glyphicon-wrench'></i><span> Ürün Menü Modülü</span></a></li>";}
	 
$sql4=$db->query("SELECT * FROM modules WHERE modulecode='sm'")->fetch(); 
 if($sql4['status']==1){
	 echo"<li><a class='ajax-link' href='main.php?page=slidermenu'>
	 <i class='glyphicon glyphicon-wrench'></i><span> Slider Menü Modülü</span></a></li>";}
?>
                        
                       <li><a class="ajax-link" href="main.php?page=settings"><i class="glyphicon glyphicon-cog"></i><span> Ayarlar</span></a>
                        </li>                      
                    </ul>
                   
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php } ?>
