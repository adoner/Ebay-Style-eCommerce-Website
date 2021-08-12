<?php
session_start();
require_once('../inc/db.php');
$member=1;
$step=$_GET['step'];
//step1 dan gelen sessionlar
$eposta=$_SESSION['eposta'];
$cartid=$_SESSION['cartid'];
$member_id=$_SESSION['memberid'];

//step11 dan gelen sessionlar
$kargoAdresi=$_SESSION['kargoAdresi'];
$kargo=$_SESSION['kargo'];

//step2 dan gelen sessionlar
$odemeType=$_SESSION['odemeType'];
$banka=$_SESSION['banka'];

$grand_total=$_SESSION['grand_total'];
$total=$_SESSION['total'];
$shipping_cost=$_SESSION['shipping_cost'];
$tax_amount=$_SESSION['tax_amount'];
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
<script>
function formStep1()
{
     document.getElementById("frmStep1").submit();
}

function formStep11()
{
    document.getElementById("frmStep11").submit();
} 

function formStep2()
{
    document.getElementById("frmStep2").submit();
} 

function divHide(id)
{
	var d = document.getElementById(id).value;
	
	if(d=='kredi'){
		
		document.getElementById('kredi').style.display = 'block';
		document.getElementById('havale').style.display = 'none';
		document.getElementById('kapida').style.display = 'none';
		
		}
	if(d=='havale'){
		
		document.getElementById('kredi').style.display = 'none';
		document.getElementById('havale').style.display = 'block';
		document.getElementById('kapida').style.display = 'none';
		
		}
	if(d=='kapida'){
		
		document.getElementById('kredi').style.display = 'none';
		document.getElementById('havale').style.display = 'none';
		document.getElementById('kapida').style.display = 'block';
		
		}  
} 
</script>
</head>

<body>

<?php require_once('../inc/header.php');?>
<div class="c"></div>
<div class="container">
<div class="kategoriContent">
<!-- içerik buraya-->

<?php if(isset($_SESSION['products'])){
	
	foreach($_SESSION["products"] as $product){ //Print each item, quantity and price.
		$product_name = $product["product_name"];
		$product_qty = $product["product_qty"];
		$product_price = $product["product_price"];
		$product_code = $product["product_code"];
		$product_image = $product["product_image"];   
		
		}
	}
?>
<div id="divAppSiparisTamamla">
        <div class="BasketPage">
            <div class="Basketstep">
                <a href="/Sepetim.aspx" class="adresGeriBtn" target="_parent">X</a>
                <ul>
                    <li class="bAdres <?php if($step=="step1" or $step=='step11'){echo "aktif";}else{echo"pasif";}?>">
                        <div class="step_1 ng-binding"><i class="fa fa-location-arrow"></i>Adres Bilgileri</div>
                        <?php if($step=='step11' or $step=='step2'){
							$members=$db->query("SELECT * FROM members WHERE ePosta='$eposta'")->fetch();
							?>
                        <div class="step_2">
                            <div class="AdresAdres ng-binding"><?php echo $members['adresDetay'];?></div>
                            <div class="AdresIl ng-binding"><?php echo $members['ilceAdi'];?></div>
                            <div class="AdresTel ng-binding">Tel: <?php echo $members['telNo'];?></div>
                        </div>
                        <?php }?>
                        <div class="bAdresIco">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </li>
                    <li class="bOdeme <?php if($step=="step2"){echo "aktif";}else{echo"pasif";}?>">
                        <div class="step_1 ng-binding"><i class="fa fa-credit-card-alt"></i>Ödeme Seçenekleri</div>
                        <div class="step_2 ng-binding">
                            Ödemenizi güvenle banka ya da kapıda ödeme ile yapabilirsiniz
                        </div>
                    </li>
                    <li class="bSiparis <?php if($step=="step3"){echo "aktif";}else{echo"pasif";}?>">
                        <div class="step_1 ng-binding"><i class="fa fa-check"></i>Sipariş Tamamlandı</div>
                        <div class="step_2"></div>
                    </li>
                </ul>
            </div>          
            <div class="clear"></div>
         <?php if($step=='step1'){?>   
            <div class="BasketDetailContainer">
               <div class="BasketDetail BasketDetailCargo">
                    <div class="orderSummary">
                        <div class="UyelikBilgilerimContent" id="AdresContent">
                          <div><div class="adresDuzenlemeTutucu">
    <div class="sagIcerikTutucu">
        <div class="adresDefterim">
<form id="frmStep1" name="frmStep1" action="/execute/nomem/step11/adresKayit" method="post">
                <div class="adresGir">
                    <div>
                        <div class="userWrapper">
                            <span class="hsbmSpan">Adres Başlığı</span>
                            <input name="adresBaslik" class="textbox"  maxlength="50" type="text" required placeholder="Ev, iş..." required>
                        </div>
                        <div class="userWrapper">
                            <span class="hsbmSpan">Ad Soyad</span>
                            <input name="adSoyad" class="textbox" type="text" required>
                        </div>
                        <div class="userWrapper">
                            <span class="hsbmSpan">Telefon No</span>
                            <input name="telNo" class="textbox" type="text" required>
                        </div>
                        <div class="userWrapper">
                            <span class="hsbmSpan">E-Posta Adresi</span>
                            <input name="ePosta" class="textbox" type="email" required>
                        </div>
                    </div>
                    <div>
                        <div class="userWrapper">
                            <span class="hsbmSpan">Ülke</span>
                            <div class="selectGrup">
                                <select name="ulkeAdi" class="hsbmSelect" id="slctCountry" name="slctCountry"><option value="">Ülke Seçiniz</option><option value="1" selected="selected" label="Türkiye">Türkiye</option></select>
                            </div>
                        </div>
                        
                        <div>
                            <span class="hsbmSpan">Şehir / İlçe</span>
                            <div class="selectGrup">
                                <div style="position:relative; float:left">
                                    <div style="position:relative; float:left">
                                        <select name="sehirAdi" class="hsbmSelect" id="slctCity" name="slctCity" ng-model="adresDetayModel.slctCity" ng-change="ChangeCity()" ng-options="city.cityName for city in cityList track by city.cityId"><option value="" class="ng-binding">Şehir Seçiniz</option><option value="1" label="Adana">Adana</option><option value="2" label="Adıyaman">Adıyaman</option><option value="3" label="Afyonkarahisar">Afyonkarahisar</option><option value="4" label="Ağrı">Ağrı</option><option value="68" label="Aksaray">Aksaray</option><option value="5" label="Amasya">Amasya</option><option value="6" label="Ankara">Ankara</option><option value="7" label="Antalya">Antalya</option><option value="75" label="Ardahan">Ardahan</option><option value="8" label="Artvin">Artvin</option><option value="9" label="Aydın">Aydın</option><option value="10" label="Balıkesir">Balıkesir</option><option value="74" label="Bartın">Bartın</option><option value="72" label="Batman">Batman</option><option value="11" label="Bilecik">Bilecik</option><option value="12" label="Bingöl">Bingöl</option><option value="13" label="Bitlis">Bitlis</option><option value="14" label="Bolu">Bolu</option><option value="15" label="Burdur">Burdur</option><option value="16" label="Bursa">Bursa</option><option value="17" label="Çanakkale">Çanakkale</option><option value="18" label="Çankırı">Çankırı</option><option value="19" label="Çorum">Çorum</option><option value="20" label="Denizli">Denizli</option><option value="4902" label="Diğer">Diğer</option><option value="21" label="Diyarbakır">Diyarbakır</option><option value="81" label="Düzce">Düzce</option><option value="22" label="Edirne">Edirne</option><option value="23" label="Elazığ">Elazığ</option><option value="24" label="Erzincan">Erzincan</option><option value="25" label="Erzurum">Erzurum</option><option value="26" label="Eskişehir">Eskişehir</option><option value="27" label="Gaziantep">Gaziantep</option><option value="28" label="Giresun">Giresun</option><option value="29" label="Gümüşhane">Gümüşhane</option><option value="30" label="Hakkari">Hakkari</option><option value="31" label="Hatay">Hatay</option><option value="76" label="Iğdır">Iğdır</option><option value="32" label="Isparta">Isparta</option><option value="34" label="İstanbul">İstanbul</option><option value="35" label="İzmir">İzmir</option><option value="42" label="Kahramanmaraş">Kahramanmaraş</option><option value="78" label="Karabük">Karabük</option><option value="70" label="Karaman">Karaman</option><option value="36" label="Kars">Kars</option><option value="37" label="Kastamonu">Kastamonu</option><option value="38" label="Kayseri">Kayseri</option><option value="71" label="Kırıkkale">Kırıkkale</option><option value="39" label="Kırklareli">Kırklareli</option><option value="40" label="Kırşehir">Kırşehir</option><option value="79" label="Kilis">Kilis</option><option value="41" label="Kocaeli">Kocaeli</option><option value="43" label="Konya">Konya</option><option value="44" label="Kütahya">Kütahya</option><option value="45" label="Malatya">Malatya</option><option value="46" label="Manisa">Manisa</option><option value="47" label="Mardin">Mardin</option><option value="33" label="Mersin(İçel)">Mersin(İçel)</option><option value="48" label="Muğla">Muğla</option><option value="49" label="Muş">Muş</option><option value="50" label="Nevşehir">Nevşehir</option><option value="51" label="Niğde">Niğde</option><option value="52" label="Ordu">Ordu</option><option value="80" label="Osmaniye">Osmaniye</option><option value="53" label="Rize">Rize</option><option value="54" label="Sakarya">Sakarya</option><option value="55" label="Samsun">Samsun</option><option value="56" label="Siirt">Siirt</option><option value="57" label="Sinop">Sinop</option><option value="58" label="Sivas">Sivas</option><option value="63" label="Şanlıurfa">Şanlıurfa</option><option value="73" label="Şırnak">Şırnak</option><option value="59" label="Tekirdağ">Tekirdağ</option><option value="60" label="Tokat">Tokat</option><option value="61" label="Trabzon">Trabzon</option><option value="62" label="Tunceli">Tunceli</option><option value="64" label="Uşak">Uşak</option><option value="65" label="Van">Van</option><option value="77" label="Yalova">Yalova</option><option value="66" label="Yozgat">Yozgat</option><option value="67" label="Zonguldak">Zonguldak</option></select>
                                    </div>
                                    
    <div style="position:relative; float:left; margin:0px 10px 10px 20px">
        <select name="ilceAdi" class="hsbmSelect"><option value="" class="ng-binding">İlçe Seçiniz</option></select>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
  <div class="clear"></div>                      
                        <div class="userWrapper">
                            <span class="hsbmSpan">Adres</span>
                            <textarea name="adresDetay" class="hsbmTextarea" placeholder="Mahalle, sokak, cadde ve diğer bilgilerinizi giriniz"></textarea>
                        </div>
                        <div class="userWrapper">
                            <span class="hsbmSpan">Posta Kodu</span>
                            <input name="postaKodu" class="textbox" type="text">
                        </div>
                        <div class="userWrapper">
                            <span class="hsbmSpan">
                                T.C. Kimlik No
                                <span class="tckZorunlu">Zorunlu değil</span>
                            </span>
                            <input name="tcKimlik" class="textbox" >
                        </div>
                        <div style="position:relative; margin-left:20%; width:50%">
<input type="submit" value="KAYDET" class="button" >
                        </div>
                    </div>
                </div>         
        </div>
    </div>
</div></div>
</div></div>
</div>
</form>
</div>
<?php }			
if($step=='step11'){
	
	$members2=$db->query("SELECT * FROM members WHERE ePosta='$eposta'")->fetch();
	$orders=$db->query("SELECT * FROM adress_orders WHERE cart_id='$cartid'")->fetch();			
?>
<div class="BasketDetailContainer">
<form name="frmStep11" id="frmStep11" action="/execute/nomem/step2/adresKargoOnay" method="post">
<div class="BasketDetail">
<div class="AdresLine">
<div>
<div class="AdresItem">
<div class="sepetTitle"><span class="st_1">Teslimat Adresi</span>
<!--<a href="#" class="faturaAdresBtn">
<i class="fa fa-square-o"></i>Fatura Adresim Farklı Olsun</a>-->
</div>
<?php
if($_SESSION['SESS_MEMBER_ID']){
	
	$id=$_SESSION['SESS_MEMBER_ID'];
	$srg=$db->query("SELECT * FROM members WHERE id=$id")->fetch();	
	$eposta=$srg['ePosta'];
		
	$qry=$db->query("SELECT * FROM adress_member WHERE memberid=$id");
	
	$_SESSION['memberid']=$_SESSION['SESS_MEMBER_ID'];
	$_SESSION['eposta']=$eposta;
	
	$qry2=$db->query("SELECT * FROM orders where cartid=(select max(cartid) from orders)")->fetch();
	$cartid=$qry2['cartid'] + 1;
	$_SESSION['cartid']=$cartid;
	
	$qry3=$db->query("SELECT COUNT(*) as num FROM adress_member WHERE memberid=$id AND defaulttt='1'");
	$rows = $qry3->fetchColumn();
	
	if($rows==1){
    
    
    	foreach($qry as $krgAdres){?>
		
        <div id="divKargoAdreslerim">
        <div class="adresItemFloat">
        <div class="AdresItemAlt AdresItemSelected">
        <div class="AdresItemAltLeft">
        <label>
        <input type="radio" name="kargoAdresi" value="<?php echo $krgAdres['id'];?>" class="radio"<?php if($krgAdres['defaulttt']==1){echo "checked";}?>><span><?php echo $krgAdres['adres_baslik'];?></span>
        </label>
        </div>
        <div class="AdresItemAltRight">
        <a href="/Desktop/memberpanel/pages/main.php?page=adresdefterimduzenle&id=<?php echo $krgAdres['id'];?>" title="Düzenle"><i class="fa fa-pencil"></i></a>
        <a href="/Desktop/memberpanel/pages/islemler.php?islem=sil&id=<?php echo $krgAdres['id'];?>" onclick="return confirm('Eminmisiniz?')" title="Sil"><i class="fa fa-times"></i></a>
        </div>
        </div>
        <div class="AdresItemLine AdresItemSelected">
        <div class="adresKargoSubDetay">
        <div class="AdresAdSoyad" style="display: block;"><?php echo $members2['adSoyad'];?></div>
        <div class="AdresAdres"><?php echo $krgAdres['adres_detay'];?></div>
        <div class="AdresIl"><?php echo $krgAdres['ilce']."/".$krgAdres['sehir'];?></div>
        <div class="AdresTel">Tel: <?php echo $members2['telNo'];?></div>
        </div></div></div>
         </div>
		<?php
		}?>
		<div class="adresItemFloat">
        <a href="/Desktop/memberpanel/pages/main.php?page=adresdefterimekle" class="YeniAdresEkle" title="Yeni Adres Ekle">
        <i class="fa fa-plus"></i>Yeni Adres Ekle</a>
        </div>
       	
	<input type="hidden" name="memornot" value="member">
   <?php  }
		if($rows==0){?>
			
        <div class="adresItemFloat">
        <a href="/Desktop/memberpanel/pages/main.php?page=adresdefterimekle" class="YeniAdresEkle" title="Yeni Adres Ekle">
        <i class="fa fa-plus"></i>Yeni Adres Ekle</a>
        </div>
			
	<?php }
	
	}else{
 ?>
<div id="divKargoAdreslerim">
<div class="adresItemFloat">
<div class="AdresItemAlt AdresItemSelected">
<div class="AdresItemAltLeft" rel="15464">
<label>
<input type="radio" name="kargoAdresi" value="<?php echo $orders['id'];?>" checked><span><?php echo $orders['adres_baslik'];?></span>
</label>
</div>
<div class="AdresItemAltRight">
<a href="" title="Düzenle" ng-click="OpenAdressDetail(adres.addressId)"><i class="fa fa-pencil"></i></a>
<a href="" title="Sil" ng-click="RemoveAdress(adres.addressId)"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="AdresItemLine AdresItemSelected">
<div class="adresKargoSubDetay">
<div class="AdresAdSoyad" style="display: block;"><?php echo $members2['adSoyad'];?></div>
<div class="AdresAdres"><?php echo $orders['adres_detay'];?></div>
<div class="AdresIl"><?php echo $orders['ilce']."/".$orders['sehir'];?></div>
<div class="AdresTel">Tel: <?php echo $members2['telNo'];?></div>
</div></div></div>
</div>
<?php }?>
</div></div></div></div>

<div class="clear"></div>

<div class="BasketDetail kargoSecimContent">
<p class="sepetTitle sepetTittleAdres ng-scope" compile-unsafe="'SiparisTamamla_KargoBilgileriSeciniz' | translate"><span class="st_1">Kargo Tercihi</span>
</p>
<div id="tblKargolar">

<div style="position:relative; float:left;background-color: #CCC;vertical-align: middle;border: solid 1px #e5e5e5;border-radius: 3px; width:170px">
<div style="position:relative; float:left;padding:5px 5px 5px 5px; margin-top:25%">
<input type="radio" name="kargo" value="PTT Kargo" checked>
</div>
<div style="position:relative; float:left; padding:5px 5px 5px 15px"><img src="/Desktop/images/PTTKargo_Logo.png" width="100px" height="100px"/></div>
</div>

</div>
</div>
<div class="clear"></div>
</form>
            
</div>          
<?php }
if($step=='step2'){		
?>  
<form name="frmStep2" id="frmStep2" action="/execute/nomem/step3/odemeSecim" method="post"> 
     
<div class="BasketDetailContainer">
<div class="odemeDetailContent">
<div class="clear"></div>
<div class="odemeMenuContent">
<div class="BasketDetail">

<div id="mainHolder_ucOdeme_divOdemeMenu" class="OdemeMenu">
<p class="OdemeMenuTittle">
<strong>Ödeme Türleri</strong>  (Siparişinizi tamamlamak için lütfen aşağıdan bir ödeme tipi belirleyin.)
</p>
<ul>
<li id="mainHolder_ucOdeme_liMenuKrediKarti" style="cursor: pointer;"><a rel="0"><input type="radio" name="odemeType" id="odemeType1" value="kredi" onChange="divHide(this.id)" disabled>  <i></i>  Kredi Kartı</a></li>
<li id="mainHolder_ucOdeme_liMenuHavale" style="cursor: pointer;"><a rel="1"><input type="radio" name="odemeType" id="odemeType2" value="havale" onChange="divHide(this.id)">  <i></i>  Havale/EFT</a></li>
<li id="mainHolder_ucOdeme_liMenuBKMExpress" style="cursor: pointer;"><a rel="5"><input type="radio" name="odemeType" id="odemeType3" value="kapida" onChange="divHide(this.id)"><i></i> Kapıda Ödeme</a></li>
<!--<li id="mainHolder_ucOdeme_liMenuGarantiPay" class="garantiPayLi" style="cursor: pointer"><a rel="13"><i></i>GarantiPay</a></li>-->
</ul>
</div>

</div>
<div class="BasketDetail">
<div class="Odeme-Left">
<style>
#kredi, #havale, #kapida {
	display:none;
	}
</style>
<div id="kredi" class="Left crediKartContainer">
<div class="CrediCardContent">
<div class="clear"></div>
<div class="CrediCardName m_closable">
<div class="CrediCardNameLabel">
Kart Sahibinin Adı Soyadı
</div>
<div class="CrediCardNameInput">
<input name="" type="text" id="txtbxCCIsim">
</div>
</div>
<div class="CrediCardNo m_closable">
<div class="CrediCardNoLabel">
Kredi Kartı Numarası
</div>
    <div class="CrediCardNoInput" style="width: 100%">
        <input name="" maxlength="19" id="txtbxCC" class="ccBox is-keypad" type="tel" style="width: 100%">
</div>
</div>
<div class="CrediCardName" id="divKartKampanyaSecenek" style="display: none;">
<input type="hidden" name="" id="">
<div class="CrediCardNameLabel">
Kart Kampanyası
</div>
<div class="CrediCardNameInput">
<select name="" id="">
<option value="-1">Seçiniz</option>
</select>
</div>
</div>
<div class="CrediCardRow">
<div class="CrediCardCol">
<div class="CrediCardDate m_closable">
<div class="CrediCardDateLabel">
Son Kullanma Tarihi
</div>
<div class="CrediCardDateInput">
<select name="" id="">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
            </div>
        </div>
    </div>
    <div class="CrediCardCol">
        <div class="CrediCardDate m_closable">
            <div class="CrediCardDateLabel">
            </div>
            <div class="CrediCardDateInput">
<select name="" id="">
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>

</select>
</div>
</div>
    </div>
    <div class="CrediCardCol">
<div class="CrediCardSecure m_closable">
<div class="CrediCardSecureLabel">
Güvenlik Kodu
</div>
<div class="CrediCardSecureInput">
<input name="" maxlength="4" id="" class="ccBox is-keypad" type="tel" onclick="SelectText(this)">
<select name="" id="" style="display: none;">
<option value="VISA">VISA</option>
<option value="MASTER">MasterCard</option>
<option value="AMEX">AMEX</option>
</select>
</div>
</div>
    </div>
</div>
<span id="spn3DContainer" style="display: none;">
<span class="aspNetDisabled"><input id="cb3DSecureOdeme" type="checkbox" name="ctl00$mainHolder$ucOdeme$cb3DSecureOdeme" disabled="disabled"><label for="cb3DSecureOdeme">3D Secure ile ödeme yapmak istiyorum.</label></span></span>
<span id="spnPayUOneClickContainer" style="display: none;">
<input id="cbPayUOneClick" type="checkbox" name="ctl00$mainHolder$ucOdeme$cbPayUOneClick"><label for="cbPayUOneClick">Daha sonraki ödemelerde kullanabilmem için kart bilgilerini kaydet.</label></span>
</div>
<div id="divCreditCart" class="creditCardFront">
<div class="divCreditCartSagUst">
    <div id="front">
        <span class="cardLogo"></span>
        <span class="cardNo">1234 5678 9012 3456
        </span>
        <span class="cardDate">
            <em class="cardMonth">MM</em>
            /
    <em class="cardYear">YY</em>
        </span>
        <span class="cardName">Ad Soyad
        </span>
        <span class="cardType"></span>
    </div>
    <div id="back">
        <span class="cardCvc"></span>
    </div>
</div>
<div class="CrediCardName" id="odemeTaksit" style="display: none;">
    <input type="hidden" name="" id="hddnSeciliKrediKartiOdemeSecenegi">
    <div class="divOdemeSecenekleriTittle">
        <span>Taksit S.</span>
        <span>Toplam T.</span>
        <span>Aylık T.</span>
    </div>
    <div id="divOdemeSecenekleri">
    </div>
</div>
</div>
</div>

<div id="havale" class="Left HavaleLeft">

<div class="HavaleLine">
<div style="position:relative; float:left;padding:5px 5px 5px 5px; margin-top:5%">
<input value="Ziraat" name="banka" type="radio">
</div>
<div style="position:relative; float:left;padding:5px 5px 5px 5px;">
    <img src="/Desktop/images/ziraat.png" width="300px" height="100px">
</div>
<div style="position:relative; float:left;padding:5px 5px 5px 5px; margin-top:30px">
    Şavşat Balı İhracat ve İthalat Ltd.Şti.
    <br>
    ZİRAAT BANKASI Şavşat Şubesi<br> Şube Kodu: 376<br> Hesap No: 46708513 5002
    <br>
    (IBAN:TR370001000376467085135002)
</div>
</div>
<div class="clear"></div>
<div class="HavaleLine">
<div style="position:relative; float:left;padding:5px 5px 5px 5px; margin-top:5%">
<input value="Halkbank" name="banka" type="radio">
</div>
<div style="position:relative; float:left;padding:5px 5px 5px 5px;">
    <img src="/Desktop/images/halkbank.png" width="300px" height="100px">
</div>
<div style="position:relative; float:left;padding:5px 5px 5px 5px; margin-top:30px">
    Şavşat Balı İhracat ve İthalat Ltd.Şti.
    <br>
    HALK BANK Şavşat Şubesi<br> Şube Kodu:<br>  Hesap No: 
    <br>
    (IBAN:TR50000120014890003Y100001)
</div>
</div>

</div>


<div id="kapida" class="Left BkmExpressLeft">
<div class="BkmExpressLine">
<div class="BkmExpressTittle">
PTT Kargo ile getirilecek ürünün ücretini kapıda yetkiliye ödeyerek ürünü teslim almanız gerekmektedir.
</div>
</div>
</div>
</div>
</div>

<div class="OdemeTamamla basketCompleteContent">
<a onclick="formStep2()" class="button basketCompletebtn">SİPARİŞİ TAMAMLA <i class="fa fa-chevron-right"></i></a>
<div class="clear"></div>
</div>

</div>
</div>
</div> 
</form>         
	<?php }
    if($step=='step3'){
    ?>          
          <div class="BasketDetailComplate">
            <div class="BasketDetail BasketDetailSonuc">
                <div class="SiparisTamamlaLine">
                        <div class="satirLeft">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="satirRight">
                            <span class="thanksSpan">Teşekkürler 
                            <?php            
            if($_SESSION['SESS_MEMBER_ID']){              
                $sorgu=$db->query("SELECT * FROM members WHERE id='".$_SESSION['SESS_MEMBER_ID']."'")->fetch();?>
                <strong><?php echo $sorgu['adSoyad'];?></strong><?php }else{
					
					$sorgu=$db->query("SELECT * FROM members WHERE id='$member_id'")->fetch();?>
                <strong><?php echo $sorgu['adSoyad'];?></strong><?php }?>
                            </span>
                            <span class="SiparisBasarili">
                            <strong>Siparişiniz başarılı bir şekilde kaydedilmiştir.</strong>
                            <span> Sipariş Numaranız <strong class="SiparisNoLabel"><?php echo $cartid;?></strong></span>
                            </span>
                            <span>                              
                                şavşatbalı.com tercih ettiğiniz için teşekkür ederiz.
                            </span>
                            <br>
                        </div>
                    </div>
                <div class="clear"></div>
                      <div class="SiparisTamamlaLine">
                      <?php if($odemeType=='havale'){?>
                            <ul>
                                <li>Havale ile ödeme seçeneğini seçtiniz.</li>
                            <li> Lütfen seçtiğiniz banka hesap numarasına havale yaparken <b class="SiparisNoLabel"><?php echo $cartid;?></b> numaralı sipariş numaranızı yazmayı unutmayınız.</li>
                            <li>Sipariş detaylarınız e-mail adresinize gönderilmiştir.</li>
                            <li><b>Bizi Tercih Ettiğiniz İçin Teşekkür Ederiz..</b></li>
                            </ul>
                            <?php }
							
							if($odemeType=='kapida'){?>
                            <ul>
                                <li>Kapıda ödeme seçeneğini seçtiniz.</li>
                            <li> Lütfen teslimat için gelen yetkiliye ödeme yaparak ürününüzü teslim alınız.</li>
                            <li>Sipariş detaylarınız e-mail adresinize gönderilmiştir.</li>
                            <li><b>Bizi Tercih Ettiğiniz İçin Teşekkür Ederiz..</b></li>
                            </ul>
                            <?php }?>
                        </div>               
            </div>
            <div class="clear"></div>
            <div style="position:relative; float:none; margin-left:43%;"><a href="/" class="button">ANASAYFAYA DÖN</a></div>
            
            <?php } if($step=='step1' or $step=='step11' or $step=='step2'){?>
        
            <div class="BasketAccountContainer">
                <div class="adresSecimContent BasketAccount" style="z-index: auto; position: static; top: auto;">
                    <div class="basketCompleteContent">
                    <?php if($step=='step1'){?>
<a class="basketCompletebtn button" onClick="formStep1()">Kaydet</a>
<?php }?>
<?php if($step=='step11'){?>
<a class="basketCompletebtn button" onClick="formStep11()">SİPARİŞ TAMAMLA</a>
<?php }?>

<?php if($step=='step2'){?>
<a class="basketCompletebtn button" onClick="formStep2()">SİPARİŞ TAMAMLA</a>
<?php }?>
                    </div>
                    <div class="OdemeContent">
                     
                        <div class="BasketRigth">
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
</div>
                            <?php if($step=='step2'){?>
                            <div class="BasketRigth sozlemeCheckContent">
                    <div class="OdemeTamamla">
                        <div class="SoslesmeCheck">
                            <input id="cbMesafeliSatisSozlesme" type="checkbox" name="ctl00$mainHolder$ucOdeme$cbMesafeliSatisSozlesme" checked="checked">
                            <a href="javascript:getSozlesme(2);" style="margin-right: 3px;">Ön Bilgilendirme Formu</a><span style="margin-right: 3px; display: inline-block;">&amp;</span>
                            <a href="javascript:getSozlesme(3);">Mesafeli satış sözleşmesi</a>
                            
                            <span style="float: none;">'ni okudum , onaylıyorum.</span><br>
                        </div>
                        <div class="clear"></div>
                            </div>
                        </div>
                        <?php }?>
                        </div>
                        <div class="basketCompleteContent">
<?php if($step=='step1'){?>
<a class="basketCompletebtn button" onClick="formStep1()">Kaydet</a>
<?php }?>
<?php if($step=='step11'){?>
<a class="basketCompletebtn button" onClick="formStep11()">SİPARİŞ TAMAMLA</a>
<?php }?>
<?php if($step=='step2'){?>
<a class="basketCompletebtn button" onClick="formStep2()">SİPARİŞ TAMAMLA</a>
<?php }?>
</div>
</div>
</div>
<?php }?>
<div style="display: none; width: 280px; height: 314px; float: none;"></div>
</div>
<div class="clear"></div>
</div>       
</div>


</div>
</div>
<div class="c"></div>
<?php require_once('../inc/footer.php');?>
</body>
</html>