<?php
session_start();
require_once('../inc/db.php');
$islem = $_GET["islem"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ARICIMDAN | <?php echo $sql["title"];?></title>
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/default.css?update=01112013">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"/>

<!-- Jquery Plugins-->
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<style>
#guestAddress {
	display:none;
	}
#degistir {
	display:none;
	}

</style>
<script type="text/javascript">

function devamBtn (){

document.getElementById('errorText').innerHTML = "";

	if (document.getElementById("guestEmail").value == "") {
		
		document.getElementById('errorText').innerHTML = "E-posta adresiniz gerekiyor. Sipariş detayı bu adrese 	gönderilecek.";
		document.getElementById('errorText').style.color = "red";
	 exit();
	 
	}
	if (document.getElementById("guestEmail").value != "") {
		
		var email = document.getElementById("guestEmail").value;
		
		function validateEmail(email) {
	  		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	  		return re.test(email);
		}
		
		if (validateEmail(email)) {
			
			document.getElementById("guestAddress").style.display = "block";
			
		  } else {
			  
			document.getElementById('errorText').innerHTML = "Geçerli bir eposta adresi yazınız.";
			document.getElementById('errorText').style.color = "red";
			exit();
			
		  }
	}
}

function degistirBtn (){
	
	
	
	}

</script>
</head>

<body>

<?php require_once('../inc/header.php');?>
<div class="c"></div>
<div class="container">
<div class="kategoriContent">
<!-- içerik buraya-->

<div style="position:relative; float:none; width:1250px;"><!--middle div-->
<?php
if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
	$total 			= 0;
	$list_tax 		= '';
?>
<div class="progress">
<hr style="width:450px; height:5px; position:absolute; top:25px; left:230px; background-color:#000; z-index:0">
    <ul>
        <li class="active">
            <i class="fas fa-shopping-cart fa-2x whiteiconcolor"></i>
            <span>Sepet</span>
        </li>
        <li>
            <i class="fas fa-money-check fa-2x grayiconcolor"></i>
            <span>Ödeme</span>
        </li>
        <li>
            <i class="fas fa-check fa-2x grayiconcolor"></i>
            <span>Onay</span>
        </li>
    </ul>
</div>
<div class="BasketPage BasketPageeStep_1">
<div class="BasketDetailContainer">
<div class="BasketDetail BasketDetailSepetList">
<div class="sepett">
<div class="sepetListConent">
<div class="sepetItemContent">
 <?php 
      foreach($_SESSION["products"] as $product){ //Print each item, quantity and price.
		$product_name = $product["product_name"];
		$product_qty = $product["product_qty"];
		$product_price = $product["product_price"];
		$product_code = $product["productcode"];
		$product_image = $product["product_image"];
		$ilan_srg = $db -> query("SELECT * FROM ilan_images WHERE ilan_no = $product_code")->fetch();
		$item_price 	= sprintf("%01.2f",($product_price * $product_qty));// price x qty = total item price
		 
		$subtotal 	= ($product_price * $product_qty); //Multiply item quantity * price
		$total 			= ($total + $subtotal); //Add up to total price 
		if($total < 150){$shipping_cost=5;}else{$shipping_cost=0;} //shipping cost            
?>
<div class="sepetItem">
<div class="sepetItemB sepetItemB0">
	<img class="sepetImg" src="/images/ilan-images/<?php echo $ilan_srg["image_name"];?>">
</div>
<div class="sepetItemB sepetItemB1"><a href="/ilandetay/<?php echo $product_code;?>" rel="0" target="_top"><?php echo $product_name;?></a>
</div>
<div class="sepetItemB sepetItemB2">
	<div class="adetGuncelleContent">
		<a href="" class="urunListeAdetAzalt" onclick="azalt(this)" style="display: none;">Azalt</a>
		<input type="number" class="textbox txtSepetAdet" id="txtbxAdet_12" name="sepet_adet" value="<?php echo $product_qty;?>" min="1" max="99999" step="1" data-double="True">
		<a href="" class="urunListeAdetArtir" onclick="artir(this)" style="display: none;">Artır</a>
		<a id="mainHolder_ucSepetim_rptSepet_lnkBtnAdetGuncelle_0" class="AdetGuncelle" href="">Güncelle</a>
	</div>
	
</div>
<div class="sepetItemB sepetItemBIndirimsiz sepetFiyatBold sepetItemB4">
	
	<span class="sepetItemB3_2"><?php echo $product_price;?> TL</span>
</div>
<div class="sepetItemB sepetItemB4 sepetFiyatBold">
	<?php echo $item_price;?> TL
</div>
<div style="position:relative; margin-top:40px">
	<a href="#"><i class="fas fa-trash-alt" style="color:#000"></i></a>
</div>
</div>
<?php  
}
$grand_total = $total + $shipping_cost; //grand total
	
foreach($taxes as $key => $value){ //list and calculate all taxes in array
		$tax_amount 	= round($total * ($value / 100));
		$tax_item[$key] = $tax_amount;
		$grand_total 	= $grand_total + $tax_amount; 
}

foreach($tax_item as $key => $value){ //taxes List
	$list_tax .= $key. ' '. $currency. sprintf("%01.2f", $value).'<br />';
}
$_SESSION['grand_total']=$grand_total;
$_SESSION['total']=$total;
$_SESSION['shipping_cost']=$shipping_cost;
$_SESSION['tax_amount']=$tax_amount;
?>           
</div>
</div>
<div class="sepetListAlt">          
<a id="mainHolder_ucSepetim_btnSepetiTemizle" class="sepetiTemizle" href="">Sepeti Temizle</a>
</div>
</div>
</div>      
</div>
<div class="BasketAccountContainer">
<div class="BasketRigth">
<span style="font-size:18px; top:5px;">Sipariş Özeti</span>
<ul>
<li>
<span>Sipariş Tutarı</span>
<span class="tut ng-binding"><?php echo $total;?> TL</span>
</li>
<li>
<span>Kargo </span>

<span class="tut ng-binding"><?php echo $shipping_cost;?> TL</span>
</li>
<li>
<span>Kdv </span>
<span class="tut ng-binding"><?php echo $tax_amount;?> TL</span>
</li>
<li class="genelToplam">
<span>Sepet Toplamı </span>
<span class="tut ng-binding"><?php echo $grand_total;?> TL</span>
</li>
</ul>
<?php
if($_SESSION["SESS_USER_ID"]){
?>
<div class="basketCompleteContent">
<a href="" class="button basketCompletebtn"> Satın Al <i class="fa fa-chevron-right"></i></a>
</div>
<?php
}
?>

<?php
if($islem=="adresbilgi"){
?>
<div class="basketCompleteContent">
<a href="" class="button basketCompletebtn"> Ödemeye Geç <i class="fa fa-chevron-right"></i></a>
</div>
<?php
}
?>
<a href="/" style=" margin: 10px 10px 10px 25px"><span> Alışverişe Devam Et</a> </span>
</div>

</div>

</div>
    <?php }else{echo "Sepetiniz Boş";}?>
</div>

</div>
<div class="c"></div>
<?php
if($islem=="uyeliksiz" or $islem=="adresbilgi"){
?>

<div id="guestContact" class="box boxQuestAddressForm clearfix">
    <h2 class="box__title">İletişim Bilgileri</h2>
    <h3 class="box__subTitle">E-POSTA ADRESİ</h3>
    <div class="questForm formLight">
    <p>Sipariş bilgilerinizin gönderileceği e-posta adresinizi girin.</p>
    <form id="guestButtonForm" action="/inc/islemler.php">
    <div class="formfield">
    <input type="email" name="guestEmail" id="guestEmail" autocomplete="off">
    <div id="errorText" style="position:relative; float:right; width:800px; text-align:right;"></div>
    </div>
    <a id="devam" href = "javascript: devamBtn()" ><span id="guestBtn" class="btnBlack">Devam</span></a>
    </form>
    </div>
</div>
<?php
}
?>
<div class="c"></div>

<div id="guestAddress" class="uyesizEposta">

<div class="box formField"><!--Adres Container-->
<h2 class="box__title">Adres Seçimi</h2>
<h3 class="box__subTitle">TESLİMAT ADRESİ</h3>

<form id="shippingAddress">
<div style="position:relative; float:left; width:50%"><!--Sağ taraf-->
<div class="formLight">
<input id="fullName" type="text" name="fullName" data-maxlength="100" maxlength="100">
<label for="fullName">Adı Soyadı</label>
</div>

<div class="formLight">
<select id="cityId" name="cityId">
	<option value="">İl</option>
	<option value="01">Adana</option>
	<option value="02">Adıyaman</option>
	<option value="03">Afyon</option>
	<option value="04">Ağrı</option>
	<option value="68">Aksaray</option>
	<option value="05">Amasya</option>
	<option value="06">Ankara</option>
	<option value="07">Antalya</option>
	<option value="75">Ardahan</option>
	<option value="08">Artvin</option>
	<option value="09">Aydın</option>
	<option value="10">Balıkesir</option>
	<option value="74">Bartın</option>
	<option value="72">Batman</option>
	<option value="69">Bayburt</option>
	<option value="11">Bilecik</option>
	<option value="12">Bingöl</option>
	<option value="13">Bitlis</option>
	<option value="14">Bolu</option>
	<option value="15">Burdur</option>
	<option value="16">Bursa</option>
	<option value="17">Çanakkale</option>
	<option value="18">Çankırı</option>
	<option value="19">Çorum</option>
	<option value="20">Denizli</option>
	<option value="21">Diyarbakır</option>
	<option value="81">Düzce</option>
	<option value="22">Edirne</option>
	<option value="23">Elazığ</option>
	<option value="24">Erzincan</option>
	<option value="25">Erzurum</option>
	<option value="26">Eskişehir</option>
	<option value="27">Gaziantep</option>
	<option value="28">Giresun</option>
	<option value="29">Gümüşhane</option>
	<option value="30">Hakkari</option>
	<option value="31">Hatay</option>
	<option value="76">Iğdır</option>
	<option value="32">Isparta</option>
	<option value="34">İstanbul</option>
	<option value="35">İzmir</option>
	<option value="46">K.Maraş</option>
	<option value="78">Karabük</option>
	<option value="70">Karaman</option>
	<option value="36">Kars</option>
	<option value="37">Kastamonu</option>
	<option value="38">Kayseri</option>
	<option value="79">Kilis</option>
	<option value="71">Kırıkkale</option>
	<option value="39">Kırklareli</option>
	<option value="40">Kırşehir</option>
	<option value="41">Kocaeli</option>
	<option value="42">Konya</option>
	<option value="43">Kütahya</option>
	<option value="44">Malatya</option>
	<option value="45">Manisa</option>
	<option value="47">Mardin</option>
	<option value="33">Mersin</option>
	<option value="48">Muğla</option>
	<option value="49">Muş</option>
	<option value="50">Nevşehir</option>
	<option value="51">Niğde</option>
	<option value="52">Ordu</option>
	<option value="80">Osmaniye</option>
	<option value="53">Rize</option>
	<option value="54">Sakarya</option>
	<option value="55">Samsun</option>
	<option value="63">Şanlıurfa</option>
	<option value="56">Siirt</option>
	<option value="57">Sinop</option>
	<option value="73">Şırnak</option>
	<option value="58">Sivas</option>
	<option value="59">Tekirdağ</option>
	<option value="60">Tokat</option>
	<option value="61">Trabzon</option>
	<option value="62">Tunceli</option>
	<option value="64">Uşak</option>
	<option value="65">Van</option>
	<option value="77">Yalova</option>
	<option value="66">Yozgat</option>
	<option value="67">Zonguldak</option>
</select>
</div>

<div class="formLight">
<select id="districtId" name="districtId">
<option value="">İlçe</option>
</select>
</div>

<div class="formLight">
<input id="postalCode" name="postCode" type="text">
<label for="postalCode">Posta Kodu</label>
</div>

<div class="formLight">
<textarea name="address" id="addressDetail" placeholder="Adres"></textarea>
</div>
</div><!--Sol taraf son-->

<div style="position:relative; float:right; width:50%"><!--Sağ Taraf-->
<div class="formLight">
<input id="gsm" type="text" name="gsm">
<label for="gsm">Cep Telefonu</label>
<div class="formFieldInfo">
<span>Siparişin gönderimi ve takibi için talep edilir.</span>
</div>
</div>
<div>
<div class="formLight">
<input id="shippingAddresstcNO" type="text" name="tcId">
<label for="shippingAddresstcNO">TC Kimlik No</label>
<div class="formFieldInfo">
<span>T.C. Kimlik Numarası, mağazanın göndereceği fatura için istenmektedir.</span>
</div>
</div>
</div>
<div class="formLight">
<input id="addressName" name="title" type="text">
<label for="addressName">Adres Başlığı </label>
</div>
<div>
<span><b>Fatura Türü</b></span>
<input type="radio" data-type="individual" id="Individual" name="invoiceType" value="INDIVIDUAL">
<label for="shippingAddress.Individual" class="svgIcon">Bireysel</label>
<input type="radio" id="Corporate" name="invoiceType" value="CORPORATE">
<label for="shippingAddress.Corporate" class="svgIcon">Kurumsal</label>
</div>
<div>
<div>
<input id="companyName" name="shippingAddress.companyName" type="text">
<label for="companyName">Firma Adı</label>
</div>
<div>
<input id="taxOffice" type="text" name="shippingAddress.taxHouse">
<label for="taxOffice">Vergi Dairesi</label>
</div>
<div>
<input id="taxId" name="shippingAddress.taxId" type="text">
<label for="taxId">Vergi Numarası</label>
</div>
</div>
</div><!--Sağ taraf son-->
</form>
<h3>FATURA BİLGİLERİ</h3>
<div>
<input type="checkbox" id="syncAddress" name="isShippingAndBillingSame">
<label for="syncAddress" >Faturaya teslimat adresi yazılsın. </label>
</div>
<div class="c"></div>
</div><!--Adres Container son-->

</div>

</div>

<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>
