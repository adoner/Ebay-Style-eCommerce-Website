<?php
session_start(); 
require_once('auth.php');
require('header.php');
$title=@$_GET['page'];

?>
<div>
<ul class="breadcrumb">
<li>
<a href="main.php">Home</a>
</li>
<?php
switch($title){

case "dashboard":
echo "<li><a href='main.php?page=dashboard'>Dashboard</a></li>";
break;
case "menus":
echo "<li><a href='main.php?page=menus'>Menüler</a></li>";
break;
case "uyeler":
echo "<li><a href='main.php?page=uyeler'>Üyeler</a></li>";
break;
case "users":
echo "<li><a href='main.php?page=users'>Kullanıcılar</a></li>";
break;
case "ilanlar":
echo "<li><a href='main.php?page=ilanlar'>İlanlar</a></li>";
break;
case "sms-eposta":
echo "<li><a href='main.php?page=sms-eposta'>SMS & E-Posta</a></li>";
break;
case "menuadd":
echo "<li><a href='main.php?page=menus'>Menüler</a></li>";
echo "<li><a href='main.php?page=menuadd'>Menü Ekle</a></li>";
break;
case "menuedit":
echo "<li><a href='main.php?page=menus'>Menüler</a></li>";
echo "<li><a href='main.php?page=menuedit'>Menü Düzenle</a></li>";
break;
case "pageadd":
echo "<li><a href='main.php?page=ind-pages'>Bağımsız Sayfa</a></li>";
echo "<li><a href='main.php?page=pageadd'>Sayfa Ekle</a></li>";
break;
case "pageedit":
echo "<li><a href='main.php?page=ind-pages'>Bağımsız Sayfa</a></li>";
echo "<li><a href='main.php?page=pageedit'>Sayfa Düzenle</a></li>";
break;
case "ind-pages":
echo "<li><a href='main.php?page=ind-pages'>Bağımsız Sayfa</a></li>";
break;
case "modules":
echo "<li><a href='main.php?page=modules'>Modüller</a></li>";
break;
case "messages":
echo "<li><a href='main.php?page=messages'>Mesajlar</a></li>";
break;
case "duyuru":
echo "<li><a href='main.php?page=duyuru'>Duyurular</a></li>";
break;
case "settings":
echo "<li><a href='main.php?page=settings'>Ayarlar</a></li>";
break;
case "galeri":
echo "<li><a href='main.php?page=galeri'>Galeriler</a></li>";
break;
case "duyuruadd":
echo "<li><a href='main.php?page=duyuru'>Duyurular</a></li>";
echo "<li><a href='main.php?page=duyuruadd'>Duyuru Ekle</a></li>";
break;
case "duyuruedit":
echo "<li><a href='main.php?page=duyuru'>Duyurular</a></li>";
echo "<li><a href='main.php?page=duyuruedit'>Duyuru Düzenle</a></li>";
break;
case "katview":
echo "<li><a href='main.php?page=galeri'>Galeriler (Kategoriler)</a></li>";
echo "<li><a href='main.php?page=katview'>Kategori Gözat</a></li>";
break;
case "galeriadd":
echo "<li><a href='main.php?page=galeri'>Galeriler (Kategoriler)</a></li>";
echo "<li><a href='main.php?page=galeriadd'>Resim Ekle</a></li>";
break;
case "galeriedit":
echo "<li><a href='main.php?page=galeri'>Galeriler (Kategoriler)</a></li>";
echo "<li><a href='main.php?page=galeriedit'>Resim Düzenle</a></li>";
break;
case "kategoriadd":
echo "<li><a href='main.php?page=galeri'>Galeriler (Kategoriler)</a></li>";
echo "<li><a href='main.php?page=kategoriadd'>Kategori Ekle</a></li>";
break;
case "kategoriedit":
echo "<li><a href='main.php?page=galeri'>Galeriler (Kategoriler)</a></li>";
echo "<li><a href='main.php?page=kategoriedit'>Kategori Düzenle</a></li>";
break;

}?>
</ul>
</div>
<div style="min-height:600px">
<?php 
$menu=@$_GET['page'];

switch($menu){
	
	case "dashboard":
	include("dashboard.php");
	break;
	case "uyeler":
	include("uyeler.php");
	break;
	case "users":
	include("users.php");
	break;
	case "ilanlar":
	include("ilanlar.php");
	break;
	case "sms-eposta":
	include("sms_eposta.php");
	break;
	case "menus":
	include("menus.php");
	break;
	case "menuadd":
	include("menuadd.php");
	break;
	case "menuedit":
	include("menuedit.php");
	break;
	case "pageadd":
	include("pageadd.php");
	break;
	case "pageedit":
	include("pageedit.php");
	break;
	case "ind-pages":
	include("pages.php");
	break;
	case "modules":
	include("modules.php");
	break;
	case "messages":
	include("messages.php");
	break;
	case "duyuru":
	include("../modules/duyuru.php");
	break;
	case "settings":
	include("settings.php");
	break;
	case "duyuruadd":
	include("../modules/duyuruadd.php");
	break;
	case "duyuruedit":
	include("../modules/duyuruedit.php");
	break;
	case "galeri":
	include("../modules/galeri.php");
	break;
	case "katview":
	include("../modules/katview.php");
	break;
	case "galeriadd":
	include("../modules/galeriadd.php");
	break;
	case "galeriedit":
	include("../modules/galeriedit.php");
	break;
	case "kategoriadd":
	include("../modules/kategoriadd.php");
	break;
	case "kategoriedit":
	include("../modules/kategoriedit.php");
	break;
	case "uyearama":
	include("uye-arama.php");
	break;
	
	default: include("dashboard.php");
	}

?>
    
</div>
<?php require('footer.php'); ?>
