<?php
ob_start();
session_start();
require_once('../inc/db.php');

$id = $_GET["id"];
$qry = $db->query("SELECT * FROM ilanlar WHERE id='$id'")->fetch();
$qry2 = $db->query("SELECT * FROM members WHERE id='$qry[memberid]'")->fetch();
$store = $db->query("SELECT * FROM stores WHERE storeno='$qry2[storeno]'")->fetch();
$ilanimage = $db->query("SELECT * FROM ilan_images WHERE ilan_no='$id'")->fetch();

if($qry["kategori3"]=='geven'){$mensei='Geven Balı';}
if($qry["kategori3"]=='kekik'){$mensei='Kekik Balı';}
if($qry["kategori3"]=='gevenkekik'){$mensei='Geven-Kekik Balı';}
if($qry["kategori3"]=='kestane'){$mensei='Kestane Balı';}
if($qry["kategori3"]=='sedir'){$mensei='Sedir Balı';}
if($qry["kategori3"]=='okaliptus'){$mensei='Okaliptus Balı';}
if($qry["kategori3"]=='hayit'){$mensei='Hayıt Balı';}
if($qry["kategori3"]=='maydanoz'){$mensei='Maydanoz Balı';}
if($qry["kategori3"]=='puren'){$mensei='Püren Balı';}
if($qry["kategori3"]=='pamuk'){$mensei='Pamuk Balı';}
if($qry["kategori3"]=='aycicegi'){$mensei='Ayçiçeği Balı';}
if($qry["kategori3"]=='narenciye'){$mensei='Narenciye Balı';}
if($qry["kategori3"]=='orman'){$mensei='Orman Gülü Balı';}
if($qry["kategori3"]=='ucgul'){$mensei='Üçgül Balı';}
if($qry["kategori3"]=='akasya'){$mensei='Akasya Balı';}
if($qry["kategori3"]=='ihlamur'){$mensei='Ihlamur Balı';}
if($qry["kategori3"]=='kir'){$mensei='Kır Çiçeği Balı';}
if($qry["kategori3"]=='yayla'){$mensei='Yayla Balı';}
if($qry["kategori3"]=='karacali'){$mensei='Karaçalı Balı';}
if($qry["kategori3"]=='kanola'){$mensei='Kanola Balı';}
if($qry["kategori3"]=='keciboynuzu'){$mensei='Keçiboynuzu(Harnup) Balı';}
if($qry["kategori3"]=='anason'){$mensei='Anason Balı';}
if($qry["kategori3"]=='lavanta'){$mensei='Lavanta Balı';}
if($qry["kategori3"]=='cam'){$mensei='Çam Balı';}
if($qry["kategori3"]=='mese'){$mensei='Meşe Balı';}
if($qry["kategori2"]=='yas'){$mensei='Yaş Polen';}
if($qry["kategori2"]=='kurutulmus'){$mensei='Kurutulmuş Polen';}
if($qry["kategori2"]=='yas2'){$mensei='Yaş Arısütü';}
if($qry["kategori2"]=='kurutulmus2'){$mensei='Kurutulmuş Arısütü';}
if($qry["kategori2"]=='kapsul'){$mensei='Kapsül Halinde Arısütü';}
if($qry["kategori2"]=='suda'){$mensei='Suda Propolis';}
if($qry["kategori2"]=='ham'){$mensei='Ham Propolis';}
if($qry["kategori2"]=='alkolde'){$mensei='Alkolde Propolis';}
if($qry["kategori2"]=='zeytinyaginda'){$mensei='Zeytinyağında Propolis';}
if($qry["kategori2"]=='arikolonisi'){$mensei='Arı Kolonisi';}
if($qry["kategori2"]=='anaari'){$mensei='Ana Arı';}
if($qry["kategori2"]=='damizlik'){$mensei='Damızlık Arı';}

if($qry["yayin"]==1){
?>

<!DOCTYPE HTML>
<html>
<head>
<title>ARICIMDAN | <?php echo $mensei;?></title>
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
<!-- Social: Facebook -->
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $qry["baslik"];?>" />
<meta property="og:description" content="<?php echo strip_tags($qry["aciklama"]);?>" />
<meta property="og:image" content="http://www.aricimdan.com/images/ilan-images/<?php echo $ilanimage["image_name"];?>" />
<meta property="og:url" content="http://www.aricimdan.com/ilandetay/<?php echo $id;?>" />

<!-- Social: Twitter -->  
<meta name="twitter:card" value="summary_large_image">    
<meta property="twitter:title" content="<?php echo $qry["baslik"];?>"> 
<meta property="twitter:url" content="http://www.aricimdan.com/ilandetay/<?php echo $id;?>"> 
<meta property="twitter:description" content="<?php echo strip_tags($qry["aciklama"]);?>">  
<meta property="twitter:image:src" content="http://www.aricimdan.com/images/ilan-images/<?php echo $ilanimage["image_name"];?>">  

<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="../css/charisma-app.css">
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/default.css?update=01112013">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
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

$(document).ready(function () {
    $(".various").fancybox({
        type: "iframe", //<--added
        maxWidth: 800,
        maxHeight: 600,
        fitToView: true,
        width: '100%',
        height: '100%',
        autoSize: false,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none'
    });
})
</script>

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
<script type="text/javascript">
function myResim(aydi){
	// Yöntem 1: Resmi değiştirme
	// document.myresim.src =  ""+ aydi +"";
	
	// Yöntem 2: Taşıyıcı div'e html import etme
	document.getElementById("resimdiv").innerHTML = "<img name=\"myresim\" src=\""+ aydi +"\" />";
}
</script>

<title>ARICIMDAN</title>
<style>
.tablo1 {
	width: 100%;
	}
.tablo1 tr {
	text-align:left;
	width:300px;
	line-height:30px;
	border-bottom: 1px dotted #999
	}
	
.tablo1 td span {
	font-size:14px;
	font-weight:800;
	margin: 10px;
	}
.tablo2 {
	width: 100%;
	}
.tablo2 tr {
	text-align:left;
	width:800px;
	line-height:40px;
	border-bottom: 1px dotted #999
	}
.shorttd {width: 10px}	
.tablo2 td span {
	font-size:14px;
	font-weight:800;
	margin: 10px;
	}
	
.tablo3 {
	width: 100%;
	}
.tablo3 tr {
	text-align:left;
	width:500px;
	line-height:40px;
	border-bottom: 1px dotted #999
	}
.tablo3 td span {
	font-size:14px;
	font-weight:800;
	margin: 10px;
	}
input[type="number"] {
    width: 50px;
}
</style>
<script type="text/javascript">

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*10*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
	
	jQuery(document).ready( function() {
		
    	var x = getCookie("cerez");
	
		if (x != "<?php echo $id;?>") {
			
				$.ajax({
					type: "POST",
					url: '../inc/counter.php',
					data: {id: <?php echo $id;?>},
					success: function(data){
						
						setCookie('cerez','<?php echo $id;?>',1);

					}
				});
		} 
	});
}
</script>
</head>

<body onLoad="checkCookie()">

<?php require_once('../inc/header.php');?>
<div class="c"></div>
<div class="container">

<div style="position:relative; float:left; margin:0 auto; width:800px"><!---sol div-->
<div style="position:relative; float:left; width:1050px; height:40px;padding:10px 10px 10px 20px;border-bottom: 1px solid #999; line-height:30px">
<div style="position:relative; float:left; width:800px"><span style="font-size:18px; font-weight:800; color:#000"><?php echo $qry['baslik'];?></span></div>

<div style="position:relative; float:left; width:150px; margin-left:780px; margin-top:-40px"><a href="javascript:window.history.back()"><< Önceki Sayfa</a></div>
<div style="position:relative; float:left; width:250px; margin-left:900px; margin-top:-40px"><!--sosyal medya paylaşım-->

<div>
	<a href="http://www.facebook.com/sharer.php?u=http://aricimdan.com/ilandetay/<?php echo $id;?>" onclick="window.open('', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" target="popupwindow"><i class="fa fa-facebook-square fa-2x"></i></a>
	<a href="https://twitter.com/intent/tweet?url=http://aricimdan.com/ilandetay/<?php echo $id;?>&text=<?php echo $qry['baslik'];?>" onclick="window.open('', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" target="popupwindow"><i class="fa fa-twitter-square fa-2x"></i></a>
	<a href="https://plus.google.com/share?url=http://aricimdan.com/ilandetay/<?php echo $id;?>" title="Google Plus da Paylaş" onclick="window.open('', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" target="popupwindow"><i class="fa fa-google-plus-square fa-2x"></i></a>
</div>

</div>

</div>

<div style="position:relative; float:left; width:800px; height:500px;padding:10px 10px 10px 10px"><!---üst div-->

<div style="position:absolute; float:left; width:470px; height:500px;padding:10px 10px 10px 10px">

<div id="resimContainer">
<div id="resimdiv" name="resimdiv">
<img name="myresim" src="/images/ilan-images/<?php if($ilanimage['image_name']!=''){echo $ilanimage['image_name'];} if($ilanimage['image_name']==''){echo "no-image.png";}?>" />
</div>

<div id="thumb">
<?php 
$ilanimage2 = $db->query("SELECT * FROM ilan_images WHERE ilan_no='$id'");

foreach($ilanimage2 as $images){?>
 <a href="javascript:;" onClick="myResim('/images/ilan-images/<?php echo $images['image_name'];?>');"><img src="/images/ilan-images/<?php echo $images['image_name'];?>" width="100" /></a>
 <?php }?>
</div></div>
        
</div>
<div style="position:absolute; float:left; margin-left:430px; width:360px; height:500px;padding:10px 10px 10px 10px">
<table class="tablo1">
<tr><td width="100px"><span>İlan No</span></td><td><span>:</span></td><td><?php echo $qry['id'];?></td></tr>
<tr><td><span>Menşei</span></td><td><span>:</span></td><td><?php echo $mensei;?></td></tr>
<tr><td><span>Fiyat</span></td><td><span>:</span></td><td>
<?php 
if($qry['indirim']==0){echo $qry['fiyat'];} 
if($qry['indirim']==1){echo $qry['indirim_fiyat'];}
?>  TL</td></tr>
<tr><td><span>Yöresi</span></td><td><span>:</span></td><td><?php echo $qry['yoresi'];?></td></tr>
<tr><td><span>İkamet</span></td><td><span>:</span></td><td><?php echo $qry2['sehir'];?></td></tr>
<tr><td><span>Türü</span></td><td><span>:</span></td><td><?php echo $qry['sunum_sekli'];?></td></tr>
<tr><td><span>Yılı</span></td><td><span>:</span></td><td><?php echo $qry['uretim_yili'];?></td></tr>
<tr><td><span>Rakım</span></td><td><span>:</span></td><td><?php echo $qry['rakim'];?>  m.</td></tr>
<tr><td><span>İlan Tarihi</span></td><td><span>:</span></td><td><?php echo $qry['kayit_tarihi'];?></td></tr>
</table>
<?php if(true){?>
<br><br>
<table align="center"><tr><td>
<form class="form-item" id="cart-form">
<input name="productcode" type="hidden" value="<?php echo $qry['id'];?>">
Adet : <input  name="product_qty" type="number" width="20px" min="1" step="1" data-double="true" value="1">
<button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-shopping-cart"></i>  SEPETE EKLE</button>
</form>
</td></tr></table>
<?php }?>
</div>

</div><!---.üst div-->

<div style="position:relative; float:left; width:820px; padding:10px 10px 10px 10px"><!---alt div-->
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Satış Detayları</h2>
            </div>
            <div class="box-content row">
            <div style="padding:0px 20px 5px 20px">
              <table class="tablo2">
              <tr><td><span>Satış</span></td><td class="shorttd"><span>:</span></td><td><?php echo $qry['satis_sekli'];?></td><td><span>Ödeme Şekli</span></td><td class="shorttd"><span>:</span></td><td><?php echo $qry['odeme_sekli'];?></td><td><span>Sunum</span></td><td class="shorttd"><span>:</span></td><td><?php echo $qry['sunum_sekli'];?></td></tr>
	<tr><td><span>Tahmini Teslim</span></td><td class="shorttd"><span>:</span></td><td><?php echo $qry['teslim'];?></td><td><span>Kargo Ücreti</span></td><td class="shorttd"><span>:</span></td><td><?php echo $qry['kargo_ucret'];?></td><td><span>Kargo Anlaşması</span></td><td class="shorttd"><span>:</span></td><td><?php echo $qry['kargo_anlasma'];?><?php if($qry['kargo_anlasma']=='Var'){?> (<font style="font-size:11px"><?php echo $qry['kargosirketi'];?></font>)<?php }?></td></tr>
    <tr><td><span>Nereden</span></td><td class="shorttd"><span>:</span></td><td><?php if($qry2['store']==0){echo "Bireysel";} if($qry2['store']==1){echo "Kurumsal";}?></td><td><span>Kimden</span></td><td class="shorttd"><span>:</span></td><td><?php echo $qry['kimden'];?></td><td><span></span></td><td class="shorttd"><span></span></td><td></td></tr>
              </table>
              </div> 
            </div>
        </div>
    </div>
</div>

<!--<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Sertifikalar</h2>
            </div>
            <div class="box-content row">
               
               <div style="padding:0px 20px 5px 20px">
              <table class="tablo3">
              <tr><td><span>Marka</span></td><td class="shorttd"><span>:</span></td><td><?php echo $qry['marka'];?></td><td><span>Marka İsmi</span></td><td class="shorttd"><span>:</span></td><td><?php if($qry['marka_adi']==''){echo "Yok";}else{echo $qry['marka_adi'];} ?></td><td><span>Analiz</span></td><td class="shorttd"><span>:</span></td><td colspan="4"><?php if($qry["analiz_rapor"]=='1'){echo $qry['analiz'];}else{echo "Yok";} ?></td><?php if($qry["analiz_rapor"]=='1'){?><td><a class="various fancybox" href="../images/ilan-images/sertifikalar/<?php echo $qry["analiz_rapor_path"];?>">(Rapor)</a></td><?php }?></tr>
             <tr><!--<td><span>Organik</span></td><td class="shorttd"><span>:</span></td><td><?php echo $qry['organik'];?></td></tr>
              </table>
              </div> 
               
            </div>
        </div>
    </div>
</div>-->

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Açıklama</h2>
            </div>
            <div class="box-content row">
             <div style="padding:0px 20px 5px 25px"> <?php echo $qry['aciklama'];?> </div>
            </div>
        </div>
    </div>
</div>
</div><!---.alt div-->
</div><!---.sol div-->

<div style="position:relative; float:left; margin-top:40px; width:250px;padding:10px 10px 10px 10px"><!---sağ div-->

<?php if($qry2['store']==0){?>
<div style="background-color: #FFF;border: 1px solid #999;border-radius: 1px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; width:250px; height:auto; padding: 4px"><div style="background-color: #efefef;border: 1px solid #999;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; width:240px; height:190px">

<div style="position:relative; margin:0 auto;width:240px;padding:10px 15px 10px 15px"><span style="font-size:16px; font-weight:700"><?php echo $qry2['ad']." ".$qry2['soyad'];?></span></div>
<!--<div style="background-color: #FFF;border: 1px solid #999;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;box-shadow: 1px 1px; margin-left:10px;width:200px;padding:10px 15px 10px 15px"><span style="font-size:14px; font-weight:600">Cep</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--><?php /*echo $qry2['telefon'];*/?><!--</div>-->
<!--<div style="position:relative; margin:0 auto;width:240px;padding:10px 15px 10px 15px"><a href="mailto:--><?php /*echo $qry2['eposta'];*/?><!--">--><?php /*echo $qry2['eposta'];*/?></a><!--</div>-->

<div style="position:relative; margin:0 auto;width:240px;padding:5px">
<?php 
if($qry2["kimlikturu"]=='Birliğe Kayıtlı Arıcı'){?>
<img style="position:relative; margin-left:40%" src="/images/tab.png" width="50px" height="50px" />
<p style="font-size:12px; font-weight:700">Türkiye Arı Yetiştiricileri Merkez Birliği<br />Kayıtlı Arıcı</p>
<?php }?>
<?php 
if($qry2["kimlikturu"]=='Kayıtsız Arıcı'){?>
<p style="font-size:16px; font-weight:700; margin-top:35px">Kayıtsız Arıcı</p>
<?php }?>
<?php 
if($qry2["kimlikturu"]=='Kurumsal İşletme'){?>
<img style="position:relative; margin-left:37%; margin-bottom:10px" src="/images/shop.png" width="50px" height="50px" />
<p style="font-size:14px; font-weight:700">Kurumsal Üye</p>
<?php }?>
<?php 
if($qry2["kimlikturu"]=='Birlik veya Kooperatif'){?>
<img style="position:relative; margin-left:37%; margin-bottom:10px" src="/images/shop.png" width="50px" height="50px" />
<p style="font-size:14px; font-weight:700">Birlik veya Kooperatif Kayıtlı Üye</p>
<?php }?>
</div>

<div style="position:relative; margin:0 auto;width:240px;padding:10px 15px 10px 15px"><span style="font-size:12px; font-weight:300; padding-left:15%"><a href="/uye/<?php echo $qry2["id"];?>">Tüm İlanları</a></span> | <span style="font-size:12px; font-weight:300"><a href="/ilanmesaj/<?php echo $qry2['id'];?>/<?php echo $id;?>">Mesaj gönder</a></span></div>

</div></div>
<?php }?>

<?php if($qry2['store']==1){?>

<div style="width:250px;min-height:498px;background-color: #fff;border: 1px solid #CCC;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
      <div style="width:200px; height:auto"><img src="../images/user-images/logolar/<?php echo $store['logo'];?>"/></div>
    <div style="width:200px; height:50px; padding-top:5px"><p><?php echo $store['mgzadi'];?></p></div>
    <div style="width:200px; height:300px; padding: 5px 5px 5px 5px;">
    <ul>
    <li><span><b>Yetkili:</b><?php echo $store['yetkili'];?></span></li>
    <li><span><b>Tel:</b><?php echo $store['tel'];?></span></li>
    <li><span><b>Fax:</b><?php echo $store['fax'];?></span></li>
    <li><span><b>E-Posta:</b><?php echo $store['eposta'];?></span></li>
    <li><span><b>Adres:</b> <?php echo $store['adres'];?></span></li>
    <li><span><b>Web:</b> <?php echo $store['web'];?></span></li>
    <li><span><b>Sosyal Medya:</b></span></li>
    <li>
    <?php 
	if($store['facebook']!=''){?>
    <a href="https://<?php echo $store['facebook'];?>" target="_blank"><img src="../images/sosyalmedya/fbicon.png" width="30px" height="30px" /></a>
    <?php }?>
    <?php 
	if($store['twitter']!=''){?>
<a href="https://<?php echo $store['twitter'];?>" target="_blank"><img src="../images/sosyalmedya/twicon.png" width="30px" height="30px" /></a>
 <?php }?>
<?php 
	if($store['youtube']!=''){?>
<a href="https://<?php echo $store['youtube'];?>" target="_blank"><img src="../images/sosyalmedya/yticon.png" width="30px" height="30px" /></a>
 <?php }?>
<?php 
	if($store['instagram']!=''){?>
<a href="https://<?php echo $store['instagram'];?>" target="_blank"><img src="../images/sosyalmedya/insicon.png" width="30px" height="30px" /></a>
 <?php }?>
	</li>
    </ul>
    </div>
      </div>

<?php }?>

<div style="background-color: #FFF;border: 1px solid #999;border-radius: 1px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; width:250px; height:70px; padding: 4px; margin-top:10px">
<div style="background-color: #efefef;border: 1px solid #999;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; width:240px; height:60px; padding:10px">
<div style="position:relative; margin:0 auto;width:240px;padding:10px 15px 10px 15px"><span style="font-size:12px; font-weight:700"> Bu ilan <?php echo $qry["sayac"];?> kez görüntülendi</span></div>
</div><!--İstatistik-->
</div><!---.sağ div-->

</div>
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>
<?php 
}else{
	header("location:/404");
	}
?>