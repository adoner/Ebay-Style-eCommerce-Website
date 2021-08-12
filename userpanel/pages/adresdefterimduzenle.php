<?php
session_start();
require_once("../../inc/db.php");

$id=$_GET['id'];
$sql=$db->query("SELECT * FROM member_adress WHERE id='$id'")->fetch();
 ?>
<div class="sagIcerikBolumu">
<div class="ng-scope"><h2 class="anaBaslik">Adres Defterim</h2>
<div class="icerikTutucu">
   <div class="adresDefterim">
<form id="adresDuzenleForm" name="adresDuzenleForm" action="islemler.php?islem=adresduzenle" method="post">

<input type="hidden" name="id" value="<?php echo $id;?>" />
                <div class="adresGir">
                    <div>
                        <div class="userWrapper">
                            <span class="hsbmSpan">Adres Başlığı</span>
                            <input name="adresBaslik" class="textbox"  maxlength="50" type="text" value="<?php echo $sql['adres_baslik'];?>" required placeholder="Ev, iş..." required>
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
                            <textarea name="adresDetay" class="hsbmTextarea" placeholder="Mahalle, sokak, cadde ve diğer bilgilerinizi giriniz"><?php echo $sql['adres_detay'];?></textarea>
                        </div>
                        <div class="userWrapper">
                            <span class="hsbmSpan">Posta Kodu</span>
                            <input name="postaKodu" class="textbox" type="text" value="<?php echo $sql['posta_kodu'];?>">
                        </div>
                        <div style="position:relative; margin-left:20%; width:50%">
<input type="submit" value="KAYDET" class="button" >
                        </div>
                    </div>
                </div>         
        </div>
</div></div>
</div>