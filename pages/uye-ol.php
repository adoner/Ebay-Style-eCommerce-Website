<?php
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>ARICIMDAN</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/default.css?update=01112013">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

<!-- Jquery Plugins-->
<script type="text/javascript" src="../js/jquery-1.8.2.min.js"></script>
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
<script>

function submitForm(){
	
	var checkedValue = $('#onay:checked').val();

	if(checkedValue==1){
		
		var icerik1 = document.getElementById('ad').value;
		var icerik2 = document.getElementById('soyad').value;
		var icerik3 = document.getElementById('eposta').value;
		var icerik4 = document.getElementById('TlfMask').value;
		var icerik5 = document.getElementById('sehir').value;
		var icerik6 = document.getElementById('kimlik').value;
		var icerik7 = document.getElementById('resim').value;
		var icerik8 = document.getElementById('sifre').value;
			
		if(icerik1 == "" || icerik2 == "" || icerik3 == "" || icerik4 == "" || icerik5 == "" || icerik6 == "" || icerik7 == "" || icerik8 == ""){
			
				if(icerik1 == ""){
					
					$("#ad").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
					
				}else{
				
					$("#ad").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
				
				}
				
				if(icerik2 == ""){
					
					$("#soyad").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
					
				}else{
				
					$("#soyad").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
				
				}
				
				if(icerik3 == ""){
					
					$("#eposta").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
					
				}else{
				
					$("#eposta").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
				
				}
				
				if(icerik4 == ""){
					
					$("#TlfMask").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
					
				}else{
				
					$("#TlfMask").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
				
				}
				
				if(icerik5 == ""){
					
					$("#sehir").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#sehir").css({"border":"3px solid #ccc"});
				
				}
				
				if(icerik6 == ""){
					
					$("#kimlik").css({"border":"3px solid red"}).attr("hidden");
					
				}else{
				
					$("#kimlik").css({"border":"3px solid #ccc"});
				
				}
				
				if(icerik7 == ""){
					
					$("#resim").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
					
				}else{
				
					$("#resim").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
				
				}
				
				if(icerik8 == ""){
					
					$("#sifre").css({"border":"3px solid red"}).attr("placeholder","Lütfen boş bırakmayınız.");
					
				}else{
				
					$("#sifre").css({"border":"3px solid #ccc"}).removeAttr("placeholder");
				
				}
			
		}else{

			$("#uyelikForm").submit();
		
		}
	}else{
		 alert("Lütfen Onay Kutucuğunu İşaretleyiniz");
		exit();
	
	}
}

</script>
<script type="text/javascript">		
	$(document).ready(function()
	{
		$("#TlfMask").mask("(999) 999-99-99");
	})
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
	'height': 170,
	'padding': 20,
	'width': 520, 
	'type': 'iframe'
	
	});

});
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

<?php require_once('../inc/header.php');?>
<div class="c"></div>
<div class="container">
<div class="base">
<!-- Content -->
<div class="title">Üyelik Formu</div>
<form id="uyelikForm" action="../inc/islemler.php?islem=uyeKayit" enctype="multipart/form-data" method="post">
<div class="form-group">
<label for="ad">Adınız</label>
<input type="text" class="form-control" id="ad" name="ad" placeholder="Adınız..">
</div>
<div class="form-group">
<label for="soyad">Soyadınız</label>
<input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyadınız..">
</div>
<div class="form-group">
<label for="eposta">E-Posta</label>
<input type="email" class="form-control" id="eposta" name="eposta" placeholder="E-Posta Adresiniz..">
</div>
<div class="form-group">
<label for="telefon">Telefon (GSM)</label>
<input type="tel" class="form-control" id="TlfMask" name="telefon" placeholder="Telefon no..">
</div>
<div class="form-group">
<label for="sehir">Şehir</label>
<select id="sehir" name="sehir" type="selectbox" class="form-control">
<option value="" disabled selected>Lütfen Seçim Yapınız</option>
<option value="Adana" >Adana</option>
<option value="Adıyaman">Adıyaman</option>
<option value="Afyon">Afyon</option>
<option value="Ağrı">Ağrı</option>
<option value="Aksaray" >Aksaray</option>
<option value="Amasya" >Amasya</option>
<option value="Ankara" >Ankara</option>
<option value="Antalya">Antalya</option>
<option value="Ardahan">Ardahan</option>
<option value="Artvin">Artvin</option>
<option value="Aydın" >Aydın</option>
<option value="Balıkesir">Balıkesir</option>
<option value="Bartın" >Bartın</option>
<option value="Batman" >Batman</option>
<option value="Bayburt" >Bayburt</option>
<option value="Bilecik" >Bilecik</option>
<option value="Bingöl">Bingöl</option>
<option value="Bitlis">Bitlis</option>
<option value="Bolu">Bolu</option>
<option value="Burdur">Burdur</option>
<option value="Bursa">Bursa</option>
<option value="Çanakkale">Çanakkale</option>
<option value="Çankırı">Çankırı</option>
<option value="Çorum">Çorum</option>
<option value="Denizli">Denizli</option>
<option value="Diyarbakır">Diyarbakır</option>
<option value="Düzce">Düzce</option>
<option value="Edirne">Edirne</option>
<option value="Elazığ">Elazığ</option>
<option value="Erzincan">Erzincan</option>
<option value="Erzurum">Erzurum</option>
<option value="Eskişehir">Eskişehir</option>
<option value="Gaziantep">Gaziantep</option>
<option value="Giresun">Giresun</option>
<option value="Gümüşhane">Gümüşhane</option>
<option value="Hakkari">Hakkari</option>
<option value="Hatay">Hatay</option>
<option value="Iğdır">Iğdır</option>
<option value="Isparta">Isparta</option>
<option value="İçel">İçel</option>
<option value="İstanbul">İstanbul</option>
<option value="İzmir">İzmir</option>
<option value="Kahramanmaraş">Kahramanmaraş</option>
<option value="Karabük">Karabük</option>
<option value="Karaman">Karaman</option>
<option value="Kars">Kars</option>
<option value="Kastamonu">Kastamonu</option>
<option value="Kayseri">Kayseri</option>
<option value="Kırıkkale">Kırıkkale</option>
<option value="Kırklareli">Kırklareli</option>
<option value="Kırşehir">Kırşehir</option>
<option value="Kilis">Kilis</option>
<option value="Kocaeli">Kocaeli</option>
<option value="Konya">Konya</option>
<option value="Kütahya">Kütahya</option>
<option value="Malatya">Malatya</option>
<option value="Manisa">Manisa</option>
<option value="Mardin">Mardin</option>
<option value="Muğla">Muğla</option>
<option value="Muş">Muş</option>
<option value="Nevşehir">Nevşehir</option>
<option value="Niğde">Niğde</option>
<option value="Ordu">Ordu</option>
<option value="Osmaniye">Osmaniye</option>
<option value="Rize">Rize</option>
<option value="Sakarya">Sakarya</option>
<option value="Samsun">Samsun</option>
<option value="Siirt">Siirt</option>
<option value="Sinop">Sinop</option>
<option value="Sivas">Sivas</option>
<option value="Şanlıurfa">Şanlıurfa</option>
<option value="Şırnak">Şırnak</option>
<option value="Tekirdağ">Tekirdağ</option>
<option value="Tokat">Tokat</option>
<option value="Trabzon">Trabzon</option>
<option value="Tunceli">Tunceli</option>
<option value="Uşak">Uşak</option>
<option value="Van">Van</option>
<option value="Yalova" >Yalova</option>
<option value="Yozgat">Yozgat</option>
<option value="Zonguldak">Zonguldak</option>
</select>
</div>
<div class="form-group">
<label for="Kimlik Türü">Üyelik Türü</label>
<select id="kimlik" name="kimlik" type="selectbox" class="form-control">
<option value="" disabled selected>Lütfen Seçim Yapınız</option>
<option value="Birliğe Kayıtlı Arıcı">Birliğe Kayıtlı Arıcı</option>
<option value="Kayıtsız Arıcı">Kayıtsız Arıcı</option>
<option value="Birlik veya Kooperatif">Birlik veya Kooperatif</option>
<option value="Kurumsal İşletme">Kurumsal İşletme</option>
</select>
</div>
<div class="form-group">
<div><label for="sifre">Belge Yükleme</label></div>
<div style="position:relative; float:left; width:300px"><input type="file" name="resim" id="resim" class="form-control"></div><div style="position:relative; float:left; margin-top:5px; margin-left:5px"><a class="fancybox fancybox.iframe" href="../inc/uyari.php" title="Belge Yükleme Açıklaması"><img id="question" src="/images/questionmark.jpg" width="20px" height="20px" /></a></div>
</div>  
<div class="clearfix"></div>
<br>
<div class="form-group">
<label for="sifre">Şifre</label>
<input type="password" class="form-control" id="sifre" name="sifre" placeholder="Şifre..">
</div>
<div class="checkbox">
<label>
<input type="checkbox" name="onay" id="onay" value="1">
<a href="/uyelik-sozlesmesi" target="_blank">Üyelik Sözleşmesi</a>'ni ve <a href="gizlilik-politikasi" target="_blank">Gizlilik Politikası</a>'nı kabul ediyorum.
</label>
</div>
<div class="g-recaptcha" data-sitekey="6Ld3SS4UAAAAAKlchZHjaalgVQs5aZdsnbb73H7J"></div>
<br>
<input name="role" type="hidden" value="member">
<a class="btn btn-default" id="onayButon" onClick="submitForm(this.id)"><strong>KAYDET</strong></a>

</form>
</div>
</div>   
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>
