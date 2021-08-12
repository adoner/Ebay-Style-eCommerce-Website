<?php
session_start(); 
require_once('../../inc/auth.php');
include("../../inc/db.php");
include("../../inc/functions.php");
$qry = $db->query("SELECT * FROM members WHERE id='$_SESSION[SESS_MEMBER_ID]'")->fetch();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ARICIMDAN</title>
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
<script>
function procBtn(val, param){
	
	var select2 = document.getElementById(val);

	if(select2.id=='home'){

		$("#1").trigger("click");
		$("#docking").load('anasayfa.php');
		
		}
	if(select2.id=='ilanlar'){

		$("#1").trigger("click");
		$("#docking").load('ilanlar.php');
		
		}
		
	if(select2.id=='ilanekle'){

		$("#1").trigger("click");
		$("#docking").load('ilanekle.php');
		
		}
		
	if(select2.id=='ilanduzenle'){

		$("#1").trigger("click");
		$("#docking").load('ilanduzenle.php?id='+param);
		
		}
		
	if(select2.id=='resimupload'){

		$("#1").trigger("click");
		$("#docking").load('resim-upload.php?id='+param);
		
		}
		
	if(select2.id=='home2'){

		$("#2").trigger("click");
		$("#docking2").load('anasayfa2.php');
		
		}
		
	if(select2.id=='menuler'){

		$("#2").trigger("click");
		$("#docking2").load('menus.php');
		
		}
		
	if(select2.id=='urunler'){

		$("#2").trigger("click");
		$("#docking2").load('urunler.php');
		
		}
		
	if(select2.id=='home3'){

		$("#3").trigger("click");
		$("#docking3").load('anasayfa3.php');
		
		}
		
	if(select2.id=='i-mesajlar'){

		$("#3").trigger("click");
		$("#docking3").load('i-mesajlar.php');
		
		}
		
	if(select2.id=='e-mesajlar'){

		$("#3").trigger("click");
		$("#docking3").load('e-mesajlar.php');
		
		}
		
	if(select2.id=='home4'){

		$("#4").trigger("click");
		$("#docking4").load('anasayfa4.php');
		
		}	
}

function tabClick(val2){
	
	if(val2==1){
		
		document.getElementById('tab1').style.display = 'block';
		document.getElementById('tab2').style.display = 'none';
		document.getElementById('tab3').style.display = 'none';
		document.getElementById('tab4').style.display = 'none';

		}
		
	if(val2==2){
		
		document.getElementById('tab1').style.display = 'none';
		document.getElementById('tab2').style.display = 'block';
		document.getElementById('tab3').style.display = 'none';
		document.getElementById('tab4').style.display = 'none';

		}
		
	if(val2==3){
		
		document.getElementById('tab1').style.display = 'none';
		document.getElementById('tab2').style.display = 'none';
		document.getElementById('tab3').style.display = 'block';
		document.getElementById('tab4').style.display = 'none';

		}
		
	if(val2==4){
		
		document.getElementById('tab1').style.display = 'none';
		document.getElementById('tab2').style.display = 'none';
		document.getElementById('tab3').style.display = 'none';
		document.getElementById('tab4').style.display = 'block';

		}
	
}
</script>
<script>
function strt(){
$("#1").trigger("click");
$("#docking").load('anasayfa.php');
}
</script>
<style>
#tab1 li a{
	cursor:pointer;
	}
#tab2 li a{
	cursor:pointer;
	}

#tab3 li a{
	cursor:pointer;
	}

#tab4 li a{
	cursor:pointer;
	}
</style>
</head>

<body onLoad="strt()">

<?php require_once('../../inc/header.php');?>
<div class="c"></div>
<div class="container">
<div style="position:relative; float:left; width:15%; padding-top:60px">
<!-- left menu starts -->
<div id="tab1">
<div class="sidebar-nav">
    <div class="nav-canvas">
        <div class="nav-sm nav nav-stacked">

        </div>
        <ul class="nav nav-pills nav-stacked main-menu">
            <li class="nav-header">Menü</li>
            <li><a id="home" class="ajax-link" onClick="procBtn(this.id)"><i class="glyphicon glyphicon-home"></i><span> Anasayfa</span></a></li>
            <li><a id="ilanlar" class="ajax-link" onClick="procBtn(this.id)"><i class="glyphicon glyphicon-edit"></i><span> İlanlar</span></a></li>
            <li><a class="ajax-link" href="/logout"><i class="glyphicon glyphicon-off"></i><span> Çıkış</span></a>
            </li>
        </ul>
    </div>
</div>
</div>
<div id="tab2">
<div class="sidebar-nav">
    <div class="nav-canvas">
        <div class="nav-sm nav nav-stacked">

        </div>
        <ul class="nav nav-pills nav-stacked main-menu">
            <li class="nav-header">Menü</li>
            <li><a  id="home2" class="ajax-link" onClick="procBtn(this.id)"><i class="glyphicon glyphicon-home"></i><span> Anasayfa</span></a></li>
            <li><a id="menuler" class="ajax-link" onClick="procBtn(this.id)"><i class="glyphicon glyphicon-eye-open"></i><span> Menüler</span></a></li>
            <li><a id="urunler"  class="ajax-link" onClick="procBtn(this.id)"><i class="glyphicon glyphicon-tags"></i><span> Ürünler</span></a></li>
            <li><a class="ajax-link" href="/logout"><i class="glyphicon glyphicon-off"></i><span> Çıkış</span></a>
            </li>
        </ul>
    </div>
</div>
</div>
<div id="tab3">
<div class="sidebar-nav">
    <div class="nav-canvas">
        <div class="nav-sm nav nav-stacked">

        </div>
        <ul class="nav nav-pills nav-stacked main-menu">
            <li class="nav-header">Menü</li>
            <li><a  id="home3" class="ajax-link" onClick="procBtn(this.id)"><i class="glyphicon glyphicon-home"></i><span> Anasayfa</span></a></li>
            <li><a id="i-mesajlar" class="ajax-link" onClick="procBtn(this.id)"><i class="glyphicon glyphicon-eye-open"></i><span> İlan Mesajları</span></a></li>
            <li><a id="e-mesajlar"  class="ajax-link" onClick="procBtn(this.id)"><i class="glyphicon glyphicon-tags"></i><span> GET Mesajları</span></a></li>
            <li><a class="ajax-link" href="/logout"><i class="glyphicon glyphicon-off"></i><span> Çıkış</span></a>
            </li>
        </ul>
    </div>
</div>
</div>
<div id="tab4">
<div class="sidebar-nav">
    <div class="nav-canvas">
        <div class="nav-sm nav nav-stacked">

        </div>
        <ul class="nav nav-pills nav-stacked main-menu">
            <li class="nav-header">Menü</li>
            <li><a  id="home4" class="ajax-link" onClick="procBtn(this.id)"><i class="glyphicon glyphicon-home"></i><span> Anasayfa</span></a></li>

            <li><a class="ajax-link" href="/logout"><i class="glyphicon glyphicon-off"></i><span> Çıkış</span></a>
            </li>
        </ul>
    </div>
</div>
</div>
<!-- left menu ends -->
</div>
<div style="position:relative; float:left; width:85%">
<div class="box-content">

<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" id="1" href="#menu" onClick="tabClick(this.id)">İlan İşlemleri</a></li>
<li><a data-toggle="tab" id="2" href="#menu1" onClick="tabClick(this.id)">Güvenli E-Mağaza</a></li>
<li><a data-toggle="tab" id="3" href="#menu2" onClick="tabClick(this.id)">Mesajlar ve Bildirimler</a></li>
<li><a data-toggle="tab" id="4" href="#menu3" onClick="tabClick(this.id)"><?php echo $_SESSION["SESS_MEMBER_NAME"]." ".$_SESSION["SESS_MEMBER_LASTNAME"];?> <i class="glyphicon glyphicon-cog"></i></a></li>
</ul>

<div class="tab-content">

<div id="menu" class="tab-pane fade in active">
<div style="min-height:500px; margin-top: 75px">
<div style="min-height:600px; width:920px; position:relative; float:left" id="docking"></div>    
</div>
</div>

<div id="menu1" class="tab-pane fade">
<div style="min-height:500px; margin-top: 75px">
<div style="min-height:600px; width:920px; position:relative; float:left" id="docking2"></div>
</div>
</div>

<div id="menu2" class="tab-pane fade">
<div style="min-height:500px; margin-top: 75px">
<div style="min-height:600px; width:920px; position:relative; float:left" id="docking3"></div>
</div>
</div>

<div id="menu3" class="tab-pane fade">
<div style="min-height:500px; margin-top: 75px">
<div style="min-height:600px; width:920px; position:relative; float:left" id="docking4"></div>
</div></div></div></div>
</div>

</div>
<div class="c"></div>
<?php require_once('../../inc/footer.php');?>
</body>
</html>