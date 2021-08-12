<?php
session_start();
require_once('../inc/db.php');
$productid='1';
$sql=$db->query("SELECT * FROM store_products WHERE id=$productid")->fetch();
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
<script type="text/javascript" src="../js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
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
<title>ARICIMDAN</title>
</head>

<body>

<?php require_once('../inc/header.php');?>
<div class="c"></div>

<div class="product-detail">

<div style="background-color: #F5F5F5;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-box-shadow: 1px 1px 3px 0 rgba(0,0,0,0.2);box-shadow: 1px 1px 3px 0 rgba(0,0,0,0.2);width:797px;height:30px;">
<span style="position:absolute; float:none;margin:4px 5px 4px 10px; font-size:16px; font-weight:bold; color:#ff6c00"><?php echo $sql['productname'];?></span><span style="position:relative; float:right;margin:8px 5px 8px 0px; font-size:12px; font-weight:bold"><a href=""><< Önceki Sayfaya Dön</a></span>
</div>

<div class="clear"></div>

<div style="position:relative; float:left; width:800px">

<div style="position:relative; float:left; width:270px;"><img src="../images/user-images/products/<?php echo $sql['image'];?>" width="250px" height="300px" style="margin:10px 10px 10px 10px"/></div>

<div style="position:relative; float:left; width:530px;">
<div style="position:relative; float:left">
<div style="position:relative; margin: 40px 10px 20px 40px;"><span style="font-size:20px; font-weight:bold"><?php echo $sql['productname'];?></span></div>
<div style="position:relative; margin: 20px 10px 20px 40px;"><span style="font-size:30px; font-weight:bold; color: #ff6c00 "><?php echo $sql['price'];?> TL</span></div>
</div>

<div class="c"></div>

<div class="socialButons">
<script type="text/javascript">
	window.___gcfg = { lang: 'tr' };
	(function () {
		var po = document.createElement('script');
		po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/platform.js';
		po.defer = true;
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();
</script>
<script type="text/javascript">
	!function (d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (!d.getElementById(id)) {
			js = d.createElement(s);
			js.id = id;
			js.defer = true;
			js.src = "https://platform.twitter.com/widgets.js";
			fjs.parentNode.insertBefore(js, fjs);
		}
	}(document, "script", "twitter-wjs");
</script>
<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" style="position: static; visibility: visible; width: 60px; height: 20px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.5c39137502ea1894df4434ae5ed041c5.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https://www.şavşatbalı.com/<?php ?>&amp;size=m&amp;text=Şavşat Balı 1000 gr.&amp;time=1492769175669&amp;type=share&amp;url=http://www.şavşatbalı.com/urundetay/<?php ?>" data-url="http://www.şavşatbalı.com/<?php ?>"></iframe>

<!--<iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 87px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1492769173163" name="I0_1492769173163" src="https://apis.google.com/u/0/se/0/_/+1/sharebutton?plusShare=true&amp;usegapi=1&amp;action=share&amp;annotation=bubble&amp;hl=tr&amp;origin=https%3A%2F%2Fwww.tazemasa.com&amp;url=https%3A%2F%2Fwww.tazemasa.com%2Farmut-ankara-kg-8&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.tr.3qGsWoXzsDA.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPJhUkwbOXdXfQZDyH8otQOk9oTig#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1492769173163&amp;parent=https%3A%2F%2Fwww.tazemasa.com&amp;pfname=&amp;rpctoken=22455560" data-gapiattached="true" title="+Paylaş"></iframe>-->

<iframe scrolling="no" frameborder="0" style="position: static; visibility: visible; width: 60px; height: 20px;" title="Facebook Share Button"  overflow:"hidden" allowTransparency="true" src="//www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.şavşatbalı.com.com&amp;layout=button_count&amp;appId=688937844491820"></iframe>
</div></div>

</div>
<div class="c"></div>
<div class="box-content">
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#aciklama">AÇIKLAMA</a></li>
<li><a data-toggle="tab" href="#yorumlar">YORUMLAR</a></li>
</ul>


<div id="aciklama" class="tab-pane fade in active" style="position:relative; margin:40px 20px 40px 20px; overflow-y:scroll; overflow-style:auto; height:190px; overflow:auto"><span style="font-size:12px;">aaa</span></div>

<div id="yorumlar" class="tab-pane fade" style="position:relative; margin:40px 20px 40px 20px; overflow-y:scroll; overflow-style:auto; height:190px; overflow:auto"><span style="font-size:12px;">bbb</span></div>
</div>

</div><!--urundetayson-->

<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>
