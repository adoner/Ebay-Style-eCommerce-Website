<?php 
session_start();
require_once('auth.php');
require_once("../../inc/db.php");
require_once("../../inc/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ARICIMDAN</title>
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
<style>
.ticiContainer {
    width: 1050px;
    margin: 0px auto;
    position: relative;
    transition-duration: 0.7s, 0.7s !important;
    -webkit-transition-duration: 0.7s, 0.7s !important;
}
.displayBlock {
    display: block;
}
.hesabimBolumuTutucu {
    float: left;
    width: 100%;
    margin: 30px 0;
}
.solAnaMenu {
    float: left;
    width: 23%;
    background: #f2f2f2;
    padding: 0 20px;
}
.sagIcerikTutucu .sagIcerikBolumu {
    background-color: #fff !important;
}
.solAnaMenu ul {
    margin: 0;
    padding: 0;
}
ol, ul {
    list-style: none;
}
.solAnaMenu ul li {
    margin: 0;
    padding: 0;
    list-style: none;
}
.solAnaMenu ul li a {
    display: block;
    text-decoration: none;
    line-height: 49px;
    color: #393737;
    font-size: 14px;
    border-bottom: 1px solid #dddddd;
}
.solAnaMenu ul li a .fa {
    margin-right: 5px;
}
.sagIcerikTutucu {
    float: left;
    width: 77%;
    padding-left: 20px;
}
.hesabimMenuDon {
    display: none;
    border: 1px solid #333;
    padding: 5px;
    font-size: 13px;
    color: #000;
    margin-bottom: 10px;
    float: left;
    clear: left;
    text-decoration: none;
}
.hesabimMenuDon .fa {
    margin-right: 3px;
    font-size: 15px;
}
.sagIcerikTutucu .sagIcerikBolumu {
    float: left;
    background: #f2f2f2;
    padding: 15px 18px;
}

.hesabimBolumuTutucu {
    float: left;
    width: 100%;
    margin: 30px 0;
	-moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.hesabimAnasayfa {
    float: left;
    width: 100%;
}
.hesabimAnasayfa .hesabimAnasayfaBaslik {
    float: left;
    width: 100%;
    margin-bottom: 10px;
}
.hesabimAnasayfa .hesabimAnasayfaBaslik h2 {
    display: block;
    margin: 0;
    padding: 0;
    font-size: 25px;
    color: #2b2a2a;
    font-weight: 500;
    line-height: 30px;
    margin-bottom: 10px;
}
.hesabimAnasayfa .hesabimAnasayfaBaslik p {
    color: #393737;
    font-size: 16px;
    font-weight: normal;
    line-height: 25px;
}
.hesabimAnasayfaMenuler {
    float: left;
    width: 100%;
}
.hesabimAnasayfaMenuler ul {
    margin: 0 -15px;
    padding: 0;
}
.hesabimAnasayfaMenuler ul li {
    float: left;
    width: 25%;
    padding: 0 15px;
    list-style: none;
    margin-bottom: 15px;
}
.hesabimAnasayfaMenuler ul li a:hover {
    background: #333333;
    color: #ffffff;
    transition: 0.3s;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
}
.hesabimAnasayfaMenuler ul li a {
    display: block;
    text-decoration: none;
    background: #fff;
    color: #333333;
    font-size: 14px;
    text-align: center;
    padding: 115px 5px 55px 5px;
    position: relative;
    transition: 0.3s;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
}
.hesabimAnasayfaMenuler ul li a .glyphicon {
    font-size: 42px;
    position: absolute;
    top: 51px;
    left: 0;
    width: 100%;
    text-align: center;
}

.sagIcerikBolumu .glyphicon {
    margin-right: 5px;
}
.glyphicon {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    display: inline-block;
    font: normal normal normal 14px/1 'Glyphicons Halflings';
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    transform: translate(0, 0);
    vertical-align: text-bottom;
}

</style>

</head>

<body>

<?php require_once('../../inc/header.php');?>
<div class="c"></div>
<div class="container">
<div id="divIcerik" class="ticiContainer">
    <div class="examples displayNone hesabimContent displayBlock">
        <div class="hesabimBolumuTutucu">
            <div class="solAnaMenu">
                <ul>
                    <li><a href="/userpanel/pages/main.php?page=uyelikbilgi"><i class="glyphicon glyphicon-user"></i> Üyelik Bilgilerim</a></li>
                    <li><a href="/userpanel/pages/main.php?page=adresdefterim"><i class="glyphicon glyphicon-map-marker"></i> Adres Defterim</a></li>
                    <li><a href="/userpanel/pages/main.php?page=siparislerim"><i class="glyphicon glyphicon-bell"></i> Siparişlerim</a></li>
                    <li><a href="/userpanel/pages/main.php?page=iadetaleplerim"><i class="glyphicon glyphicon-refresh"></i> İade Taleplerim </a></li>
                    <li><a href="/sepetim"><i class="glyphicon glyphicon-shopping-cart"></i> Alışveriş Sepetim</a></li>
                    <li><a href="/userpanel/pages/main.php?page=hediyeceklerim"><i class="glyphicon glyphicon-tags"></i> Hediye Çeklerim</a></li>
                    <li><a href="/userpanel/pages/main.php?page=havalebildirim"><i class="glyphicon glyphicon-share"></i> Havale Bildirim Formu </a></li> 
                    <li><a href="/userlogout"><i class="glyphicon glyphicon-log-out"></i> Güvenli Çıkış </a></li>
                </ul>
            </div>
            
<div class="sagIcerikTutucu">
<div class="sagIcerikBolumu">
<?php 
$menu=@$_GET['page'];

switch($menu){
	
	case "uyelikbilgi":
	include("uyelikbilgi.php");
	break;
	case "adresdefterim":
	include("adresdefterim.php");
	break;
	case "siparislerim":
	include("siparislerim.php");
	break;
	case "iadetaleplerim":
	include("iadetaleplerim.php");
	break;
	case "hediyeceklerim":
	include("hediyeceklerim.php");
	break;
	case "havalebildirim":
	include("havalebildirim.php");
	break;
	case "adresdefterimduzenle":
	include("adresdefterimduzenle.php");
	break;
	case "adresdefterimekle":
	include("adresdefterimekle.php");
	break;
	default: include("dashboard.php");
	}

?>
</div>
</div>
</div>
</div>
</div>
</div>
<?php require_once('../../inc/footer.php');?>
</body>
</html>