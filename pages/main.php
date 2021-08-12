<?php
ob_start();
session_start();
require_once("../inc/db.php");

$qry1 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='adana' and onay='1'");
$uyesayi_01 = $qry1->fetchColumn();
$qry2 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='adıyaman' and onay='1'");
$uyesayi_02 = $qry2->fetchColumn();
$qry3 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='afyon' and onay='1'");
$uyesayi_03 = $qry3->fetchColumn();
$qry4 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='ağrı' and onay='1'");
$uyesayi_04 = $qry4->fetchColumn();
$qry5 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='amasya' and onay='1'");
$uyesayi_05 = $qry5->fetchColumn();
$qry6 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='ankara' and onay='1'");
$uyesayi_06 = $qry6->fetchColumn();
$qry7 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='antalya' and onay='1'");
$uyesayi_07 = $qry7->fetchColumn();
$qry8 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='artvin' and onay='1'");
$uyesayi_08 = $qry8->fetchColumn();
$qry9 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='aydın' and onay='1'");
$uyesayi_09 = $qry9->fetchColumn();
$qry10 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='balıkesir' and onay='1'");
$uyesayi_10 = $qry10->fetchColumn();
$qry11 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='bilecik' and onay='1'");
$uyesayi_11 = $qry11->fetchColumn();
$qry12 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='bingöl' and onay='1'");
$uyesayi_12 = $qry12->fetchColumn();
$qry13 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='bitlis' and onay='1'");
$uyesayi_13 = $qry13->fetchColumn();
$qry14 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='bolu' and onay='1'");
$uyesayi_14 = $qry14->fetchColumn();
$qry15 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='burdur' and onay='1'");
$uyesayi_15 = $qry15->fetchColumn();
$qry16 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='bursa' and onay='1'");
$uyesayi_16 = $qry16->fetchColumn();
$qry17 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='çanakkale' and onay='1'");
$uyesayi_17 = $qry17->fetchColumn();
$qry18 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='çankırı' and onay='1'");
$uyesayi_18 = $qry18->fetchColumn();
$qry19 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='çorum' and onay='1'");
$uyesayi_19 = $qry19->fetchColumn();
$qry20 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='denizli' and onay='1'");
$uyesayi_20 = $qry20->fetchColumn();
$qry21 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='diyarbakır' and onay='1'");
$uyesayi_21 = $qry21->fetchColumn();
$qry22 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='edirne' and onay='1'");
$uyesayi_22 = $qry22->fetchColumn();
$qry23 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='elazığ' and onay='1'");
$uyesayi_23 = $qry23->fetchColumn();
$qry24 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='erzincan' and onay='1'");
$uyesayi_24 = $qry24->fetchColumn();
$qry25 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='erzurum' and onay='1'");
$uyesayi_25 = $qry25->fetchColumn();
$qry26 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='eskişehir' and onay='1'");
$uyesayi_26 = $qry26->fetchColumn();
$qry27 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='gaziantep' and onay='1'");
$uyesayi_27 = $qry27->fetchColumn();
$qry28 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='giresun' and onay='1'");
$uyesayi_28 = $qry28->fetchColumn();
$qry29 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='gümüşhane' and onay='1'");
$uyesayi_29 = $qry29->fetchColumn();
$qry30 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='hakkari' and onay='1'");
$uyesayi_30 = $qry30->fetchColumn();
$qry31 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='hatay' and onay='1'");
$uyesayi_31 = $qry31->fetchColumn();
$qry32 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='ısparta' and onay='1'");
$uyesayi_32 = $qry32->fetchColumn();
$qry33 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='içel' and onay='1'");
$uyesayi_33 = $qry33->fetchColumn();
$qry34 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='istanbul' and onay='1'");
$uyesayi_34 = $qry34->fetchColumn();
$qry35 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='izmir' and onay='1'");
$uyesayi_35 = $qry35->fetchColumn();
$qry36 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='kars' and onay='1'");
$uyesayi_36 = $qry36->fetchColumn();
$qry37 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='kastamonu' and onay='1'");
$uyesayi_37 = $qry37->fetchColumn();
$qry38 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='kayseri' and onay='1'");
$uyesayi_38 = $qry38->fetchColumn();
$qry39 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='kıklareli' and onay='1'");
$uyesayi_39 = $qry39->fetchColumn();
$qry40 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='kırşehir' and onay='1'");
$uyesayi_40 = $qry40->fetchColumn();
$qry41 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='kocaeli' and onay='1'");
$uyesayi_41 = $qry41->fetchColumn();
$qry42 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='konya' and onay='1'");
$uyesayi_42 = $qry42->fetchColumn();
$qry43 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='kütahya' and onay='1'");
$uyesayi_43 = $qry43->fetchColumn();
$qry44 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='malatya' and onay='1'");
$uyesayi_44 = $qry44->fetchColumn();
$qry45 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='manisa' and onay='1'");
$uyesayi_45 = $qry45->fetchColumn();
$qry46 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='kahramanmaraş' and onay='1'");
$uyesayi_46 = $qry46->fetchColumn();
$qry47 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='mardin' and onay='1'");
$uyesayi_47 = $qry47->fetchColumn();
$qry48 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='muğla' and onay='1'");
$uyesayi_48 = $qry48->fetchColumn();
$qry49 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='muş' and onay='1'");
$uyesayi_49 = $qry49->fetchColumn();
$qry50 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='nevşehir' and onay='1'");
$uyesayi_50 = $qry50->fetchColumn();
$qry51 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='niğde' and onay='1'");
$uyesayi_51 = $qry51->fetchColumn();
$qry52 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='ordu' and onay='1'");
$uyesayi_52 = $qry52->fetchColumn();
$qry53 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='rize' and onay='1'");
$uyesayi_53 = $qry53->fetchColumn();
$qry54 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='sakarya' and onay='1'");
$uyesayi_54 = $qry54->fetchColumn();
$qry55 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='samsun' and onay='1'");
$uyesayi_55 = $qry55->fetchColumn();
$qry56 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='siirt' and onay='1'");
$uyesayi_56 = $qry56->fetchColumn();
$qry57 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='sinop' and onay='1'");
$uyesayi_57 = $qry57->fetchColumn();
$qry58 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='sivas' and onay='1'");
$uyesayi_58 = $qry58->fetchColumn();
$qry59 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='tekirdağ' and onay='1'");
$uyesayi_59 = $qry59->fetchColumn();
$qry60 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='tokat' and onay='1'");
$uyesayi_60 = $qry60->fetchColumn();
$qry61 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='trabzon' and onay='1'");
$uyesayi_61 = $qry61->fetchColumn();
$qry62 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='tunceli' and onay='1'");
$uyesayi_62 = $qry62->fetchColumn();
$qry63 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='şanlıurfa' and onay='1'");
$uyesayi_63 = $qry63->fetchColumn();
$qry64 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='uşak' and onay='1'");
$uyesayi_64 = $qry64->fetchColumn();
$qry65 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='van' and onay='1'");
$uyesayi_65 = $qry65->fetchColumn();
$qry66 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='yozgat' and onay='1'");
$uyesayi_66 = $qry66->fetchColumn();
$qry67 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='zonguldak' and onay='1'");
$uyesayi_67 = $qry67->fetchColumn();
$qry68 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='aksaray' and onay='1'");
$uyesayi_68 = $qry68->fetchColumn();
$qry69 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='bayburt' and onay='1'");
$uyesayi_69 = $qry69->fetchColumn();
$qry70 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='karaman' and onay='1'");
$uyesayi_70 = $qry70->fetchColumn();
$qry71 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='kırıkkale' and onay='1'");
$uyesayi_71 = $qry71->fetchColumn();
$qry72 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='batman' and onay='1'");
$uyesayi_72 = $qry72->fetchColumn();
$qry73 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='şırnak' and onay='1'");
$uyesayi_73 = $qry73->fetchColumn();
$qry74 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='bartın' and onay='1'");
$uyesayi_74 = $qry74->fetchColumn();
$qry75 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='ardahan' and onay='1'");
$uyesayi_75 = $qry75->fetchColumn();
$qry76 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='ığdır' and onay='1'");
$uyesayi_76 = $qry76->fetchColumn();
$qry77 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='yalova' and onay='1'");
$uyesayi_77 = $qry77->fetchColumn();
$qry78 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='karabük' and onay='1'");
$uyesayi_78 = $qry78->fetchColumn();
$qry79 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='kilis' and onay='1'");
$uyesayi_79 = $qry79->fetchColumn();
$qry80 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='osmaniye' and onay='1'");
$uyesayi_80 = $qry80->fetchColumn();
$qry81 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='düzce' and onay='1'");
$uyesayi_81 = $qry81->fetchColumn();
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
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
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

<!--Stylesheets-->
<!--<link rel="stylesheet" type="text/css" href="../css/normalize.css">-->
<link rel="stylesheet" type="text/css" href="/css/default.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<!-- Jquery Plugins-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.js"></script>
<script type="text/javascript" src="/js/paths.js"></script>
<script type="text/javascript" src="/js/init.js"></script>
<script type="text/javascript" src="/js/jquery.tipsy.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.jcarousellite-1.0.1.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.tabSlideOut.v1.3.js"></script>
<script>
$(function(){
 $('.slide-out-div').tabSlideOut({
	 tabHandle: '.handle', //class of the element that will be your tab
	 pathToTabImage: '../images/sehirler.png',//path to the image for the tab (optionaly can be set using css)
	 imageHeight: '122px', //height of tab image
	 imageWidth: '40px',   //width of tab image    
	 tabLocation: 'right',  //side of screen where tab lives, top, right, bottom, or left
	 speed: 300,           //speed of animation
	 action: 'click',      //options: 'click' or 'hover', action to trigger animation
	 topPos: '200px',      //position from the top
	 fixedPosition: false  //options: true makes it stick(fixed position) on scroll
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
		'height': '60%',
		'padding': 20,
		'width': '99%', 
		'type': 'iframe',
	});

});
</script>
<script>
$(".basic2 .carousel").jCarouselLite({
    btnNext: ".basic2 .next",
    btnPrev: ".basic2 .prev"
});

$(document).ready(function(){
	$("#sehirgoster").click(function(){
	
		var sehir = document.getElementById("sehirler").value;
		$.get("city-info/"+sehir+".php", function (html){							
					$("#detail").fadeIn(700).append(html).css("display", "block");				
					$("#detail").css({
						"position": "absolute",
						"top": ((($("#detail").parent().height() +100 -  $("#detail").height()) / 2) + "px")
					})
		});

	});

});

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

$(document).ready(function(){

	if($(window).width()<1250){
		
		document.getElementById('adLeft').style.display='none';
		document.getElementById('adRight').style.display='none';
		}

});
</script>

<style>
#show {
	display:none;
	position:relative;
	float:right;
	margin-top:-5px;
	right:-330px;
	width:730px;
	z-index:100000;
	}
#hide {
	display:block;
	position:relative;
	float:right;
	margin-top:-5px;
	right:-330px;
	width:730px;
	height: 10px;
	z-index:100000;
	}
.adDiv {
	
	position:relative;
	width:780px;
	height:auto;
	margin:10px;
	
	}
.adLeft{
	position:absolute; 
	width:100px; 
	height:auto; 
	left:-3%; 
	z-index:100
	}

.adRight{
	position:absolute; 
	width:100px; 
	height:auto; 
	left:94.5%; 
	z-index:100
	}
</style>
</head>

<body>
<?php if($_COOKIE["popup"]!="advertise"){?>

<script type="text/javascript">
        $(document).ready(function() {
            $.fancybox("#advertise");
        });
</script>

<?php 
setcookie("popup","advertise");
}?>
<?php require_once('../inc/header.php');?>
<div class="clearfix"></div>
<div class="container">

<div id="advertise" style="display:none;">
<iframe width="560" height="315" src="https://www.youtube.com/embed/MaIkX-9-iuk?autoplay=0&loop=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
</div>

<div class="adLeft" id="adLeft">
<a href="http://muratemir.com/" target="_blank"><img src="../images/files/images/reklam.png"/></a>
</div>
<div class="adRight" id="adRight">
<a href="http://muratemir.com/" target="_blank"><img src="../images/files/images/reklam.png"/></a>
</div>

<div style='position:relative; float:none; margin:0 auto; bottom:10px; width:1000px; height:auto; z-index:1'>
<a id="hide" onclick="HideAd()"><center><font size="1"><span style="background-color: rgb(0, 255, 255); color: rgb(0, 0, 0); font-weight: bold">
Reklamı Kapat</span></font></center></a>
<div id="reklam">
<a href="" target="_blank"><img src="/images/files/images/propolis.png"></a>
</div>
<a id="show" onclick="ShowAd()"><center><font size="1"><span style="background-color: rgb(0, 255, 255); color: rgb(0, 0, 0); font-weight: bold">
Reklamı Göster</span></font></center></a>

</div>
<div class="clearfix"></div>
<div class="content">
<?php require_once('../inc/leftside.php');?>
<!--<div class="nav-bar"></div>-->
<div style="position:relative;float:left;">

<div style="position:relative; float:left; left:5px; width:780px; height:40px; padding:8px; background-color: #F5F5F5; 
border: 1px solid #CCC; border-radius: 3px; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
<ul style="list-style: none outside none; z-index:2000">
<li style="position: relative;display: inline;margin: 10px; font-size:16px; font-weight:600"><a href="/hakkimizda">Hakkımızda</a></li>
<li style="position: relative;display: inline;margin: 15px; font-size:16px; font-weight:600"><a href="/hizmetlerimiz">Hizmetlerimiz</a></li>
<li style="position: relative;display: inline;margin: 15px; font-size:16px; font-weight:600"><a href="/nasil-calisir">Nasıl Çalışır?</a></li>
<li style="position: relative;display: inline;margin: 15px; font-size:16px; font-weight:600"><a href="/yardim">Yardım</a></li>
<li style="position: relative;display: inline;margin: 15px; font-size:16px; font-weight:600"><a href="/iletisim">İletişim</a></li>
<li style="position: relative;display: inline;margin: 15px; font-size:16px; font-weight:600"><a href="/aricimdan-akademi"><img style="margin-top:-8px !important" src="../images/akademi.png"></a></li>
</ul>
</div>

<div id="map">
<div id="detail"></div>
</div>
<div class="c"></div>
<div class="vitrin">
<div class="title"><span style="font-size:18px; font-weight:bold; color:#000;position:absolute;left: 45%; top: 3%">VİTRİNDEKİLER</span></div>
<div style="position:relative;margin-top:15px">
<?php

$qry = $db->query("SELECT * FROM ilanlar WHERE vitrin='1' and yayin='1'"); 

foreach($qry as $vitrin){

$sql = $db->query("SELECT * FROM ilan_images WHERE ilan_no = '$vitrin[id]'")->fetch();

?>
<a href="/ilandetay/<?php echo $vitrin["id"];?>"><div style="position:relative; float:left; margin:20px 6px 20px 6px; width:100px; height:110px">
<div style="width:100px; height:100px"><img src="/images/ilan-images/<?php if($sql["image_name"]!=''){echo $sql["image_name"];}else{echo "fotoyok.jpg";}?>" width="100px" height="100px"/></div>
<div style="width:100px; line-height:10px; text-align:center; font-size:10px; padding-top:2px"><?php echo $vitrin["baslik"];?></div>
</div></a>
<?php }?>
</div>
</div>
<div class="clearfix"></div>
<div class="adDiv"><img src="/images/files/images/advertise2.jpg"></div>
<div class="clearfix"></div>
<div class="guncel">
<div class="title"><span style="font-size:18px; font-weight:bold; color:#000;position:absolute;left: 42%; top: 3%">FIRSAT ÜRÜNLERİ</span></div>
<?php
$sorgu = $db->query("SELECT * FROM ilanlar WHERE firsat='1'");
$i = 0;
foreach($sorgu as $firsat){
	
	$srg = $db->query("SELECT * FROM ilan_images WHERE ilan_no='$firsat[id]'")->fetch();
 ?>
 <a href="/ilandetay/<?php echo $firsat["id"];?>">
<div class="firsat">
<div class="bgfirsat"></div>
<?php if($firsat['indirim']==1){
	
	$indirim = floor(($firsat['fiyat'] - $firsat['indirim_fiyat'])*100/$firsat['fiyat']);
	
	?>
<div class="dailyOpportunityPriceTag">
    <span>%</span>
    <span class="dailyOpportunityDiscountRate">
        <?php echo $indirim;?></span>
    <span class="dailyOpportunityDiscountText">indirim</span>
</div>
<?php }?>
<div style="position:relative; float:left; margin:0 auto; width:140px; height:140px;"><img style="position:relative;left:1%; top:15%" src="/images/ilan-images/<?php echo $srg["image_name"];?>" width="140px" height="140px"/></div>
<div style="position:relative; margin-top:170px; width:245px; text-align:center; line-height:40px; font-size:12px; color:#69F"><?php echo $firsat["baslik"];?></div>

<div style="position:relative; width:245px; left:10%">
<?php if($firsat['indirim']==0){?>
<font style="line-height:40px; font-size:24px; color:#F30"><?php echo $firsat["fiyat"];?> TL</font>
<?php }?>
<?php if($firsat['indirim']==1){?>
<font style="line-height:40px; font-size:16px; color:#F30; text-decoration:line-through"><?php echo $firsat["fiyat"];?> TL</font>
<font style="position:relative; float:right;line-height:40px; font-size:24px; color:#F30; right:30px"><?php echo $firsat["indirim_fiyat"];?> TL</font>
<?php }?>
</div>

</div>
<?php if($i!=2){?>
<div class="sep"></div>
</a>
<?php }?>
<?php $i++;}?>
</div>
<div class="clearfix"></div>
<div class="adDiv"><img src="/images/files/images/advertise2.jpg"></div>
<div class="clearfix"></div>
<div class="soneklenen">
<div class="title"><span style="font-size:18px; font-weight:bold; color:#000;position:absolute;left: 42%; top: 3%">SON EKLENEN İLANLAR</span></div>
<?php
$sorgu2 = $db->query("SELECT * FROM ilanlar WHERE yayin='1' ORDER BY id DESC LIMIT 5");
$i = 0;
foreach($sorgu2 as $sonek){
	
	$srg2 = $db->query("SELECT * FROM ilan_images WHERE ilan_no='$sonek[id]'")->fetch();
 ?>
 <a href="/ilandetay/<?php echo $sonek["id"];?>">
<div class="soneklenenilan">
<div style="position:relative; float:left; margin:0 auto; width:120px; height:120px;"><img style="position:relative;left:10%; top:15%" src="/images/ilan-images/<?php if($srg2["image_name"]!=''){echo $srg2["image_name"];}else{echo "fotoyok.jpg";}?>" width="120px" height="120px"/></div>
<div style="position:relative; margin-top:140px; width:140px; text-align:center; font-size:12px; color:#69F"><?php echo $sonek["baslik"];?></div>
<div style="position:relative; width:140px; left:10%; font-size:24px; color:#F30"><?php echo $sonek["fiyat"];?> TL</div>
</div>
<?php if($i!=4){?>
<div class="sep2"></div>
</a>
<?php }?>
<?php $i++;}?>
</div>
<div class="clearfix"></div>
<div class="video">
<div class="title"><span style="font-size:18px; font-weight:bold; color:#000;position:absolute;left: 45%; top: 3%">VİDEOLAR</span></div>

<!--<div class="custom-container basic2" id="jcl">
    <a href="#" class="prev">&lsaquo;</a>
    <div class="carousel" id="jcl">
        <ul>
            <li><iframe src="https://www.youtube.com/embed/pjuT3JY_020" frameborder="0" allowfullscreen></iframe></li>
            <li><iframe src="https://www.youtube.com/embed/pjuT3JY_020" frameborder="0" allowfullscreen></iframe></li>
            <li><iframe src="https://www.youtube.com/embed/pjuT3JY_020" frameborder="0" allowfullscreen></iframe></li>
            <li><iframe src="https://www.youtube.com/embed/pjuT3JY_020" frameborder="0" allowfullscreen></iframe></li>
            <li><iframe src="https://www.youtube.com/embed/pjuT3JY_020" frameborder="0" allowfullscreen></iframe></li>
        </ul>
    </div>
    <a href="#" class="next">&rsaquo;</a>
    <div class="clear"></div>
</div>-->

<!--<iframe width="560" height="315" src="https://youtu.be/qNlNZl2nUiMhttps://www.youtube.com/embed/pjuT3JY_020" frameborder="0" allowfullscreen></iframe>-->
<iframe width="560" height="315" src="https://www.youtube.com/embed/qNlNZl2nUiM" frameborder="0" allowfullscreen></iframe>
</div>
<div class="clearfix"></div>
</div>       
</div><!--Content end--->
</div><!--Container end--->
<div class="clearfix"></div>
<div class="slide-out-div">
    <a class="handle" href="http://link-for-non-js-users">Content</a>

    <div class="form-group">
    <select name="sehirler" id="sehirler" class="form-control">
    <option>Şehir Seçiniz...</option>
    <option value="adana" >Adana (<?php echo $uyesayi_01;?>)</option>
    <option value="adiyaman">Adıyaman (<?php echo $uyesayi_02;?>)</option>
    <option value="afyon">Afyon (<?php echo $uyesayi_03;?>)</option>
    <option value="agri">Ağrı (<?php echo $uyesayi_04;?>)</option>
    <option value="aksaray" >Aksaray (<?php echo $uyesayi_68;?>)</option>
    <option value="amasya" >Amasya (<?php echo $uyesayi_05;?>)</option>
    <option value="ankara" >Ankara (<?php echo $uyesayi_06;?>)</option>
    <option value="antalya">Antalya (<?php echo $uyesayi_07;?>)</option>
    <option value="ardahan">Ardahan (<?php echo $uyesayi_75;?>)</option>
    <option value="artvin">Artvin (<?php echo $uyesayi_08;?>)</option>
    <option value="aydin" >Aydın (<?php echo $uyesayi_09;?>)</option>
    <option value="balikesir">Balıkesir (<?php echo $uyesayi_10;?>)</option>
    <option value="bartin" >Bartın (<?php echo $uyesayi_74;?>)</option>
    <option value="batman" >Batman (<?php echo $uyesayi_72;?>)</option>
    <option value="bayburt" >Bayburt (<?php echo $uyesayi_69;?>)</option>
    <option value="bilecik" >Bilecik (<?php echo $uyesayi_11;?>)</option>
    <option value="bingol">Bingöl (<?php echo $uyesayi_12;?>)</option>
    <option value="bitlis">Bitlis (<?php echo $uyesayi_13;?>)</option>
    <option value="bolu">Bolu (<?php echo $uyesayi_14;?>)</option>
    <option value="burdur">Burdur (<?php echo $uyesayi_15;?>)</option>
    <option value="bursa">Bursa (<?php echo $uyesayi_16;?>)</option>
    <option value="canakkale">Çanakkale (<?php echo $uyesayi_17;?>)</option>
    <option value="cankiri">Çankırı (<?php echo $uyesayi_18;?>)</option>
    <option value="corum">Çorum (<?php echo $uyesayi_19;?>)</option>
    <option value="denizli">Denizli (<?php echo $uyesayi_20;?>)</option>
    <option value="diyarbakir">Diyarbakır (<?php echo $uyesayi_21;?>)</option>
    <option value="duzce">Düzce (<?php echo $uyesayi_81;?>)</option>
    <option value="edirne">Edirne (<?php echo $uyesayi_22;?>)</option>
    <option value="elazig">Elazığ (<?php echo $uyesayi_23;?>)</option>
    <option value="erzincan">Erzincan (<?php echo $uyesayi_24;?>)</option>
    <option value="erzurum">Erzurum (<?php echo $uyesayi_25;?>)</option>
    <option value="eskisehir">Eskişehir (<?php echo $uyesayi_26;?>)</option>
    <option value="gaziantep">Gaziantep (<?php echo $uyesayi_27;?>)</option>
    <option value="giresun">Giresun (<?php echo $uyesayi_28;?>)</option>
    <option value="gumushane">Gümüşhane (<?php echo $uyesayi_29;?>)</option>
    <option value="hakkari">Hakkari (<?php echo $uyesayi_30;?>)</option>
    <option value="hatay">Hatay (<?php echo $uyesayi_31;?>)</option>
    <option value="igdir">Iğdır (<?php echo $uyesayi_76;?>)</option>
    <option value="isparta">Isparta (<?php echo $uyesayi_32;?>)</option>
    <option value="icel">İçel (<?php echo $uyesayi_33;?>)</option>
    <option value="istanbul">İstanbul (<?php echo $uyesayi_34;?>)</option>
    <option value="izmir">İzmir (<?php echo $uyesayi_35;?>)</option>
    <option value="kahramanmaras">Kahramanmaraş (<?php echo $uyesayi_46;?>)</option>
    <option value="karabuk">Karabük (<?php echo $uyesayi_78;?>)</option>
    <option value="karaman">Karaman (<?php echo $uyesayi_70;?>)</option>
    <option value="kars">Kars (<?php echo $uyesayi_36;?>)</option>
    <option value="kastamonu">Kastamonu (<?php echo $uyesayi_37;?>)</option>
    <option value="kayseri">Kayseri (<?php echo $uyesayi_38;?>)</option>
    <option value="kirikkale">Kırıkkale (<?php echo $uyesayi_71;?>)</option>
    <option value="kirklareli">Kırklareli (<?php echo $uyesayi_39;?>)</option>
    <option value="kirsehir">Kırşehir (<?php echo $uyesayi_40;?>)</option>
    <option value="kilis">Kilis (<?php echo $uyesayi_79;?>)</option>
    <option value="kocaeli">Kocaeli (<?php echo $uyesayi_41;?>)</option>
    <option value="konya">Konya (<?php echo $uyesayi_42;?>)</option>
    <option value="kutahya">Kütahya (<?php echo $uyesayi_43;?>)</option>
    <option value="malatya">Malatya (<?php echo $uyesayi_44;?>)</option>
    <option value="manisa">Manisa (<?php echo $uyesayi_45;?>)</option>
    <option value="mardin">Mardin (<?php echo $uyesayi_47;?>)</option>
    <option value="mugla">Muğla (<?php echo $uyesayi_48;?>)</option>
    <option value="mus">Muş (<?php echo $uyesayi_49;?>)</option>
    <option value="nevsehir">Nevşehir (<?php echo $uyesayi_50;?>)</option>
    <option value="nigde">Niğde (<?php echo $uyesayi_51;?>)</option>
    <option value="ordu">Ordu (<?php echo $uyesayi_52;?>)</option>
    <option value="osmaniye">Osmaniye (<?php echo $uyesayi_80;?>)</option>
    <option value="rize">Rize (<?php echo $uyesayi_53;?>)</option>
    <option value="sakarya">Sakarya (<?php echo $uyesayi_54;?>)</option>
    <option value="samsun">Samsun (<?php echo $uyesayi_55;?>)</option>
    <option value="siirt">Siirt (<?php echo $uyesayi_56;?>)</option>
    <option value="sinop">Sinop (<?php echo $uyesayi_57;?>)</option>
    <option value="sivas">Sivas (<?php echo $uyesayi_58;?>)</option>
    <option value="sanliurfa">Şanlıurfa (<?php echo $uyesayi_63;?>)</option>
    <option value="sirnak">Şırnak (<?php echo $uyesayi_73;?>)</option>
    <option value="tekirdag">Tekirdağ (<?php echo $uyesayi_59;?>)</option>
    <option value="tokat">Tokat (<?php echo $uyesayi_60;?>)</option>
    <option value="trabzon">Trabzon (<?php echo $uyesayi_61;?>)</option>
    <option value="tunceli">Tunceli (<?php echo $uyesayi_62;?>)</option>
    <option value="usak">Uşak (<?php echo $uyesayi_64;?>)</option>
    <option value="van">Van (<?php echo $uyesayi_65;?>)</option>
    <option value="yalova" >Yalova (<?php echo $uyesayi_77;?>)</option>
    <option value="yozgat">Yozgat (<?php echo $uyesayi_66;?>)</option>
    <option value="zonguldak">Zonguldak (<?php echo $uyesayi_67;?>)</option>
    </select>
    </div>
    <p style="text-align:center"><a class="btn btn-info" id="sehirgoster">GÖSTER</a></p>
</div>
<div class="clearfix"></div>
<?php require_once('../inc/footer.php');?>

</body>
</html>
