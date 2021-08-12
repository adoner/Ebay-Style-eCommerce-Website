<?php
session_start(); 
require_once('../../inc/auth.php');
include("../../inc/db.php");
include("../../inc/functions.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="../../css/charisma-app.css">
<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../../css/default.css?update=01112013">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<!-- Jquery Plugins-->
<script type="text/javascript" src="../../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103223567-1', 'auto');
  ga('send', 'pageview');

</script>
<title>ARICIMDAN</title>
</head>

<body>

<?php require_once('../../inc/header.php');?>
<div class="c"></div>
<div class="container">

<div style="position:relative; margin:0 auto; width:1120px">

<!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menü</li>
                        <li><a class="ajax-link" href="/memberpanel/pages/main-page.php?page=anasayfa"><i class="glyphicon glyphicon-home"></i><span> Anasayfa</span></a>
                        </li>
                        <li><a class="ajax-link" href="/memberpanel/pages/main-page.php?page=menuler"><i class="glyphicon glyphicon-eye-open"></i><span> Menüler</span></a>
                        </li>
                        <li><a class="ajax-link" href="/memberpanel/pages/main-page.php?page=ilanlar"><i
                                    class="glyphicon glyphicon-edit"></i><span> İlanlar</span></a></li>
                        <li><a class="ajax-link" href="/memberpanel/pages/main-page.php?page=urunler"><i
                                    class="glyphicon glyphicon-tags"></i><span> Ürünler</span></a></li>
                                    <li><a class="ajax-link" href="/memberpanel/pages/main-page.php?page=i-mesajlar"><i class="glyphicon glyphicon-envelope"></i><span> İlan Mesajları</span></a>
                        </li>
                        <li><a class="ajax-link" href="/memberpanel/pages/main-page.php?page=e-mesajlar"><i class="glyphicon glyphicon-envelope"></i><span> Get Mesajları</span></a>
                        </li>
                        <li><a class="ajax-link" href="/logout"><i class="glyphicon glyphicon-off"></i><span> Çıkış</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
<!-- left menu ends -->
<div style="min-height:600px; width:920px; position:relative; float:left">
<?php 
$menu=@$_GET['page'];
$qry = $db->query("SELECT * FROM members WHERE id='$_SESSION[SESS_MEMBER_ID]'")->fetch();

switch($menu){
	
	case "anasayfa":
	if($qry['uyelik']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1){
		
		include("anasayfa.php");
		
		}
	break;
	case "menuler":
	if($qry['uyelik']==0 or $qry['store']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1 & $qry['store']==1){
		
		include("menus.php");
		
		}
	break;
	case "ilanlar":
	if($qry['uyelik']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1){
		
		include("ilanlar.php");
		
		}
	break;
	case "urunler":
	if($qry['uyelik']==0 or $qry['store']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1  & $qry['store']==1){
		
		include("urunler.php");
		
		}
	break;
	case "e-mesajlar":
	if($qry['uyelik']==0 or $qry['store']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1 & $qry['store']==1){
		
		include("e-mesajlar.php");
		
		}
	break;
	case "i-mesajlar":
	if($qry['uyelik']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1){
		
		include("i-mesajlar.php");
		
		}
	break;
	case "menuekle":
	include("menuekle.php");
	break;
	case "ilanekle":
	include("ilanekle.php");
	break;
	case "menuduzenle":
	include("menuduzenle.php");
	break;
	case "ilanduzenle":
	include("ilanduzenle.php");
	break;
	case "resimyukle":
	include("resim-upload.php");
	break;
	
	default: if($qry['uyelik']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1){
		
		include("anasayfa.php");
		
		}
	}

?>
    
</div>

</div>
</div>
<div class="c"></div>
<?php require_once('../../inc/footer.php');?>
</body>
</html>