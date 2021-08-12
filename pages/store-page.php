<?php
session_start();
include("../inc/db.php");

$storeno = 101;
$store = $db->query("SELECT * FROM stores WHERE storeno='$storeno'")->Fetch();

?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/default.css?update=01112013">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<!-- Jquery Plugins-->
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/maskedinput-1.3.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103223567-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
		
		$(document).ready(function()
		{
			$("#TlfMask").mask("(999) 999-99-99");
		})
</script>
<title>ARICIMDAN</title>
</head>

<body>

<?php require_once('../inc/header.php');?>
<div class="c"></div>
<div class="container">

<div style="position:relative; margin:0 auto; width:1050px">
<div class="box-content">
  <ul class="nav nav-tabs">

    <?php 
	$qry = $db->query("SELECT * FROM store_menus WHERE storeno='$storeno'");
	
	foreach($qry as $menus){?> 
    
    <li><a data-toggle="tab" href="#<?php echo $menus['menuseo'];?>"><?php echo $menus['menuadi'];?></a></li>

    <?php }?>
    <li><a data-toggle="tab" href="#ilanlar">İLANLAR</a></li>
    <li><a data-toggle="tab" href="#products">ÜRÜNLER</a></li>
    <li><a data-toggle="tab" href="#contact">İLETİŞİM</a></li>
  </ul>
  <div class="tab-content"> 
    <?php
	$qry2 = $db->query("SELECT * FROM store_menus WHERE storeno='$storeno'");
	foreach($qry2 as $page){?> 
    
    <div id="<?php echo $page['menuseo'];?>" class="tab-pane fade">
    
      <div style=" position:relative; float:left; width:800px;min-height:500px; padding-top:10px;padding-left:10px;background-color: #fff;border: 1px solid #CCC;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
	  
	  <?php echo $page['icerik'];?>

      </div>
      
      <div style="position:absolute;float:right; margin-left:800px; margin-top:43px;width:250px;min-height:498px;background-color: #fff;border: 1px solid #CCC;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
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
    <a href="<?php echo $store['facebook'];?>" target="_blank"><img src="../images/sosyalmedya/fbicon.png" width="30px" height="30px" /></a>
    <?php }?>
    <?php 
	if($store['twitter']!=''){?>
<a href="<?php echo $store['twitter'];?>" target="_blank"><img src="../images/sosyalmedya/twicon.png" width="30px" height="30px" /></a>
 <?php }?>
<?php 
	if($store['youtube']!=''){?>
<a href="<?php echo $store['youtube'];?>" target="_blank"><img src="../images/sosyalmedya/yticon.png" width="30px" height="30px" /></a>
 <?php }?>
<?php 
	if($store['instagram']!=''){?>
<a href="<?php echo $store['instagram'];?>" target="_blank"><img src="../images/sosyalmedya/insicon.png" width="30px" height="30px" /></a>
 <?php }?>
	</li>
    </ul>
    </div>
      </div>

</div>
<?php }?>

<div id="ilanlar" class="tab-pane fade">

      <div style=" position:relative; float:left; width:800px;min-height:500px; padding-top:10px;padding-left:10px;background-color: #fff;border: 1px solid #CCC;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
      
      gfhgfhgf

      </div>
      
      <div style="position:absolute;float:right; margin-left:800px; margin-top:43px;width:250px;min-height:498px;background-color: #fff;border: 1px solid #CCC;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
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
    <a href="<?php echo $store['facebook'];?>" target="_blank"><img src="../images/sosyalmedya/fbicon.png" width="30px" height="30px" /></a>
    <?php }?>
    <?php 
	if($store['twitter']!=''){?>
<a href="<?php echo $store['twitter'];?>" target="_blank"><img src="../images/sosyalmedya/twicon.png" width="30px" height="30px" /></a>
 <?php }?>
<?php 
	if($store['youtube']!=''){?>
<a href="<?php echo $store['youtube'];?>" target="_blank"><img src="../images/sosyalmedya/yticon.png" width="30px" height="30px" /></a>
 <?php }?>
<?php 
	if($store['instagram']!=''){?>
<a href="<?php echo $store['instagram'];?>" target="_blank"><img src="../images/sosyalmedya/insicon.png" width="30px" height="30px" /></a>
 <?php }?>
	</li>
    </ul>
    </div>
      </div>
      
</div>

    
<div id="products" class="tab-pane fade">
    
      <div style=" position:relative; float:left; width:800px;min-height:500px; padding-top:10px;padding-left:10px;background-color: #fff;border: 1px solid #CCC;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
      
	  <?php require_once('urunler.php');?>

      </div>
      
<div style="position:absolute;float:right; margin-left:800px; margin-top:43px;width:250px;min-height:498px;background-color: #fff;border: 1px solid #CCC;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
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
    <a href="<?php echo $store['facebook'];?>" target="_blank"><img src="../images/sosyalmedya/fbicon.png" width="30px" height="30px" /></a>
    <?php }?>
    <?php 
	if($store['twitter']!=''){?>
<a href="<?php echo $store['twitter'];?>" target="_blank"><img src="../images/sosyalmedya/twicon.png" width="30px" height="30px" /></a>
 <?php }?>
<?php 
	if($store['youtube']!=''){?>
<a href="<?php echo $store['youtube'];?>" target="_blank"><img src="../images/sosyalmedya/yticon.png" width="30px" height="30px" /></a>
 <?php }?>
<?php 
	if($store['instagram']!=''){?>
<a href="<?php echo $store['instagram'];?>" target="_blank"><img src="../images/sosyalmedya/insicon.png" width="30px" height="30px" /></a>
 <?php }?>
	</li>
    </ul>
    </div>
      </div>
      
</div>

<div id="contact" class="tab-pane fade">

      <div style=" position:relative; float:left; width:800px;min-height:500px; padding: 10px;background-color: #fff;border: 1px solid #CCC;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">

<div class="title">İletişim Formu</div>
<form role="form" data-toggle="validator" action="../inc/islemler.php?islem=getMesajKayit" method="post">
<div class="form-group">
<label for="ad">Adınız</label>
<input type="text" class="form-control" id="ad" name="ad" placeholder="Adınız.." required>
</div>
<div class="form-group">
<label for="soyad">Soyadınız</label>
<input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyadınız.." required>
</div>
<div class="form-group">
<label for="eposta">E-Posta</label>
<input type="email" class="form-control" id="eposta" name="eposta" placeholder="E-Posta Adresiniz.." required>
</div>
<div class="form-group">
<label for="telefon">Telefon (GSM)</label>
<input type="text" class="form-control" id="TlfMask" name="telefon" placeholder="Telefon no.." required>
</div>
<div class="form-group">
<label for="sifre">Mesajınız</label>
<textarea name="mesaj" rows="10" cols="100" placeholder="Mesajınız.." required></textarea>
</div>
<input type="hidden" name="storeno" value="1">
<button type="submit" class="btn btn-default" ><strong>GÖNDER</strong></button>
</form>
  </div>
  
 <div style="position:absolute;float:right; margin-left:800px; margin-top:43px;width:250px;min-height:498px;background-color: #fff;border: 1px solid #CCC;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
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
    <a href="<?php echo $store['facebook'];?>" target="_blank"><img src="../images/sosyalmedya/fbicon.png" width="30px" height="30px" /></a>
    <?php }?>
    <?php 
	if($store['twitter']!=''){?>
<a href="<?php echo $store['twitter'];?>" target="_blank"><img src="../images/sosyalmedya/twicon.png" width="30px" height="30px" /></a>
 <?php }?>
<?php 
	if($store['youtube']!=''){?>
<a href="<?php echo $store['youtube'];?>" target="_blank"><img src="../images/sosyalmedya/yticon.png" width="30px" height="30px" /></a>
 <?php }?>
<?php 
	if($store['instagram']!=''){?>
<a href="<?php echo $store['instagram'];?>" target="_blank"><img src="../images/sosyalmedya/insicon.png" width="30px" height="30px" /></a>
 <?php }?>
	</li>
    </ul>
    </div>
      </div>
</div>
    
  </div>
</div>

</div>
</div>
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>