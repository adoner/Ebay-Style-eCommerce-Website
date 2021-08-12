<?php 
ob_start();
session_start();
require_once('../../inc/db.php');
require_once('../../inc/functions.php');
?>
<script src="/adminpanel/ckeditor/ckeditor.js"></script>
<script src="/js/validation.js"></script>
<style>
#kat2a {display:none;}
#kat2b {display:none;}
#kat2c {display:none;}
#kat2d {display:none;}
#kat2e {display:none;}
#kat2aa {display:none;}
#kat2ab {display:none;}
#kat1 {display:block;}
#certificate {display:none;}
#certificate2 {display:none;}
#iban {display:none;}
#banka {display:none;}
#hesapsahibi {display:none;}
#kargo {display:none;}
#brand {display:none;}
</style>
<form name="ilanForm" id="ilanForm" action="../../inc/islemler.php?islem=ilanekle" enctype="multipart/form-data" method="post">

	<div class="form-group" id="kat1">
    <label for="kategori1">Kategori</label>
        <select class="form-control" id="kategori1" name="kategori1" onClick="getkat(this.id)">
        <option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="bal">BAL</option>
        <option value="ari">ARI</option>
        <option value="polen">POLEN</option>
        <option value="arisutu">ARISÜTÜ</option>
        <option value="propolis">PROPOLİS</option>
        </select>         
    </div>
    <div class="form-group" id="kat2a">
    <label for="kategori2a">Alt Kategori</label>
        <select class="form-control" id="kategori2a" name="kategori2a" onClick="getkat(this.id)">
        <option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="cicek">Çiçek Balı</option>
        <option value="salgi">Salgı Balı</option>
        </select>      
    </div>
    <div class="form-group" id="kat2b">
    <label for="kategori2b">Alt Kategori</label>
        <select class="form-control" id="kategori2b" name="kategori2b" onClick="getkat(this.id)">
        <option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="yas">Yaş</option>
        <option value="kurutulmus">Kurutulmuş</option>
        </select>      
    </div>
    <div class="form-group" id="kat2c">
    <label for="kategori2c">Alt Kategori</label>
        <select class="form-control" id="kategori2c" name="kategori2c" onClick="getkat(this.id)">
        <option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="yas2">Yaş</option>
        <option value="kurutulmus2">Kurutulmuş</option>
        <option value="kapsul">Kapsül</option>
        </select>      
    </div>
    <div class="form-group" id="kat2d">
    <label for="kategori2d">Kategori</label>
        <select class="form-control" id="kategori2d" name="kategori2d" onClick="getkat(this.id)">
        <option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="suda">Suda</option>
        <option value="ham">Ham</option>
        <option value="alkolde">Alkolde</option>
        <option value="zeytinyaginda">Zeytinyağında</option>
        </select>      
    </div>
    <div class="form-group" id="kat2e">
    <label for="kategori2e">Kategori</label>
        <select class="form-control" id="kategori2e" name="kategori2e" onClick="getkat(this.id)">
       <option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="arikolonisi">Arı Kolonisi</option>
        <option value="anaari">Ana Arı</option>
        <option value="damizlik">Damızlık</option>
        </select>      
    </div>
    <div class="form-group" id="kat2aa">
    <label for="kategori2aa">Alt Kategori</label>
        <select class="form-control" id="kategori2aa" name="kategori2aa">
        <option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="geven">Geven Balı</option>
        <option value="kekik">Kekik Balı</option>
        <option value="gevenkekik">Geven-Kekik Balı</option>
        <option value="kestane">Kestane Balı</option>
        <option value="sedir">Sedir Balı</option>
        <option value="okaliptus">Okaliptus Balı</option>
        <option value="hayit">Hayıt Balı</option>
        <option value="maydanoz">Maydanoz Balı</option>
        <option value="puren">Püren Balı</option>
        <option value="pamuk">Pamuk Balı</option>
        <option value="aycicegi">Ayçiçeği Balı</option>
        <option value="narenciye">Narenciye Balı</option>
        <option value="orman">Orman Gülü Balı</option>
        <option value="ucgul">Üçgül Balı</option>
        <option value="akasya">Akasya Balı</option>
        <option value="ihlamur">Ihlamur Balı</option>
        <option value="kir">Kır Çiçeği Balı</option>
        <option value="yayla">Yayla Balı</option>
        <option value="karacali">Karaçalı Balı</option>
        <option value="kanola">Kanola Balı</option>
        <option value="keciboynuzu">Keçiboynuzu Balı</option>
        <option value="anason">Anason Balı</option>
        <option value="lavanta">Lavanta Balı</option>
        </select>      
    </div>
    <div class="form-group" id="kat2ab">
    <label for="kategori2ab">Alt Kategori</label>
        <select class="form-control" id="kategori2ab" name="kategori2ab">
        <option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="cam">Çam Balı</option>
        <option value="mese">Meşe Balı</option>
        </select>      
    </div>
    <div class="form-group">
        <label for="ilanbaslik">İlan Başlığı</label>
        <input type="text" class="form-control" id="baslik" name="baslik" placeholder="İlan Başlığını Yazınız" />
    </div>
    <div class="form-group">
    <label for="satis">Satış Şekli</label>
        <select class="form-control" id="satis" name="satis">
		<option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="Toptan">Toptan</option>
        <option value="Perakende">Perakende</option>
        </select>
    </div>
    <div class="form-group">
    <label for="sunum">Sunum Şekli</label>
        <select class="form-control" id="sunum" name="sunum">
		<option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="Kavanoz">Kavanoz</option>
        <option value="Paket">Paket</option>
        <option value="Teneke">Teneke</option>
        <option value="Düz Petekli">Düz Petekli</option>
        <option value="Kasnak Petekli">Kasnak Petekli</option>
        <option value="Karakovan">Karakovan</option>
        <option value="Krem Bal">Krem Bal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="rakim">Rakım</label>
        <input type="text" class="form-control" id="rakim" name="rakim" placeholder="Rakım Yazınız">       
    </div>
    <div class="form-group">
        <label for="yoresi">Yöresi</label>
        <input type="text" class="form-control" id="yoresi" name="yoresi" placeholder="Yöresini Yazınız">       
    </div>
    <div class="form-group">
        <label for="kimden">Kimden</label>
        <select class="form-control" id="kimden" name="kimden">
		<option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="Yerli Üretici">Yerli Üretici</option>
        <option value="Firmadan">Firmadan</option>
        </select>       
    </div>
    <div class="form-group">
        <label for="teslim">Teslim Süresi</label>
        <select class="form-control" id="teslim" name="teslim">
		<option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="1 gün">1 gün</option>
        <option value="2 gün">2 gün</option>
        <option value="2-3 gün">2-3 gün</option>
        </select>       
    </div>
    <div class="form-group">
        <label for="kargoucret">Kargo Ücreti</label>
        <select class="form-control" id="kargoucret" name="kargoucret">
		<option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="Alıcı Öder">Alıcı Öder</option>
        <option value="Satıcı Öder">Satıcı Öder</option>
        </select>       
    </div>
    <div class="form-group">
        <label for="kargoanlasma">Kargo Anlaşması</label>
        <select class="form-control" id="kargoanlasma" name="kargoanlasma" onClick="getKargo(this.id)">
		<option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="Var">Var</option>
        <option value="Yok">Yok</option>
        </select>       
    </div>
    <div class="form-group" id="kargo">
    <label for="kargo">Kargo Şirketi</label>
      <select class="form-control" name="kargo" id="kargosirket">
		<option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="Aras Kargo">Aras Kargo</option>
        <option value="DHL Kargo">DHL Kargo</option>
        <option value="MNG Kargo">MNG Kargo</option>
        <option value="Metro Kargo">Metro Kargo</option>
        <option value="PTT Kargo">PTT Kargo</option>
        <option value="Sürat Kargo">Sürat Kargo</option>
        <option value="TNT Kargo">TNT Kargo</option>
        <option value="UPS Kargo">UPS Kargo</option>
        <option value="Yurtiçi Kargo">Yurtiçi Kargo</option>
        </select>     
    </div>
    <div class="form-group">
        <label for="marka">Marka</label>
        <select class="form-control" id="marka" name="marka" onClick="getMarka(this.id)" required>
		<option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="Var">Var</option>
        <option value="Yok">Yok</option>
        </select>       
    </div>
    <div class="form-group" id="brand">
        <label for="markaadi">Marka Adı</label>
        <input type="text" class="form-control" id="markaadi" name="markaadi" placeholder="Marka Yazınız">       
    </div>
    <div class="form-group">
        <label for="uretim">Üretim Yılı</label>
        <input type="text" class="form-control" id="uretim" name="uretim" placeholder="Üretim Yılı Yazınız" required>       
    </div>
    <div class="form-group">
        <label for="fiyat">Fiyat</label>
        <input type="text" class="form-control" id="fiyat" name="fiyat" placeholder="Fiyat Yazınız" required>       
    </div>
    <div class="form-group">
        <label for="odemesekli">Ödeme Şekli</label>
        <select class="form-control" id="odemesekli" name="odemesekli" onClick="getOdeme(this.id)" required>
		<option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="Banka EFT/Havale">Banka EFT/Havale</option>
        <option value="Kapıda Ödeme">Kapıda Ödeme</option>
        <option value="Havale/Kapıda">Havale/Kapıda</option>
        </select>       
    </div>
    <div class="form-group" id="banka">
    <label for="banka">Banka</label>
      <select class="form-control" name="banka" id="bankaisim">
		<option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="Adabank A.Ş.">Adabank A.Ş.</option>
        <option value="Akbank T.A.Ş.">Akbank T.A.Ş.</option>
        <option value="Aktif Bank">Aktif Bank</option>
        <option value="Anadolu Bank A.Ş.">Anadolu Bank A.Ş.</option>
        <option value="Albaraka Türk Katılım Bankası A.Ş.">Albaraka Türk Katılım Bankası A.Ş.</option>
        <option value="Birleşik Fon Bankası A.Ş.">Birleşik Fon Bankası A.Ş.</option>
        <option value="Fibabanka A.Ş.">Fibabanka A.Ş.</option>
        <option value="Kuveyt Türk Katılım Bankası A.Ş.">Kuveyt Türk Katılım Bankası A.Ş.</option>
        <option value="Şekerbank T.A.Ş.">Şekerbank T.A.Ş.</option>
        <option value="Tekstilbank A.Ş.">Tekstilbank A.Ş.</option>
        <option value="Turkish Bank A.Ş.">Turkish Bank A.Ş.</option>
        <option value="Türk Ekonomi Bankası A.Ş.">Türk Ekonomi Bankası A.Ş.</option>
        <option value="Türkiye Finans Katılım Bankası A.Ş.">Türkiye Finans Katılım Bankası A.Ş.</option>
        <option value="Türkiye Garanti Bankası A.Ş.">Türkiye Garanti Bankası A.Ş.</option>
        <option value="Türkiye İş Bankası A.Ş.">Türkiye İş Bankası A.Ş.</option>
        <option value="Türkiye Halk Bankası A.Ş.">Türkiye Halk Bankası A.Ş.</option>
        <option value="Türkiye Vakıflar Bankası T.A.O.">Türkiye Vakıflar Bankası T.A.O.</option>
        <option value="Türkiye Cumhuriyeti Ziraat Bankası A.Ş.">Türkiye Cumhuriyeti Ziraat Bankası A.Ş.</option>
        <option value="Yapı ve Kredi Bankası A.Ş.">Yapı ve Kredi Bankası A.Ş.</option> 
        <option value="Ziraat Katılım Bankası A.Ş.">Ziraat Katılım Bankası A.Ş.</option>
        </select>     
    </div>
    <div class="form-group" id="hesapsahibi">
    <label for="hesapsahibi">Hesap Sahibi</label>
      <input type="text" name="hesapsahibi" id="hesap" class="form-control">     
    </div>
    <div class="form-group" id="iban">
    <label for="iban">IBAN No</label>
      <input type="text" name="iban" id="ibanno" class="form-control">     
    </div>
    <div class="form-group">
    <label for="analiz">Analiz</label>
        <select class="form-control" id="analiz" name="analiz" onClick="getAnaliz(this.id)" required>
		<option value="" disabled selected>Lütfen Seçim Yapınız</option>
        <option value="Var">Var</option>
        <option value="Yok">Yok</option>
        </select>
    </div>
    <div class="form-group" id="certificate">
    <label for="analizraporu">Analiz Raporu Yükle</label>
      <input type="file" name="analizrapor" id="analizrapor" class="form-control">     
    </div>
    <!--<div class="form-group">
    <label for="organik">Organik</label>
        <select class="form-control" id="organik" name="organik" onClick="getOrganik(this.id)" required>
		<option></option>
        <option value="Organik">Organik</option>
        <option value="Organik Değil">Organik Değil</option>
        </select>
    </div>
    <div class="form-group" id="certificate2">
    <label for="organikraporu">Organik Sertifikası Yükle</label>
      <input type="file" name="organikrapor" class="form-control">     
    </div>-->
    <br />
    <div class="form-group">
        <label for="aciklama">Açıklama</label>
        <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
        <script>
		CKEDITOR.replace( 'editor1', {
		fullPage: false,
		allowedContent: true,
		extraPlugins: 'wysiwygarea',
		enterMode    : Number(2),
		filebrowserBrowseUrl : '../ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : '../ckfinder/ckfinder.html?type=Images',
		filebrowserFlashBrowseUrl : '../ckfinder/ckfinder.html?type=Flash',
		filebrowserUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
		});
		</script>
    </div>
    <input type="hidden" name="memberid" value="<?php echo $_SESSION['SESS_MEMBER_ID'];?>" />
    <input type="hidden" name="storeno" value="<?php echo $_SESSION['SESS_MEMBER_STORENO'];?>" />
    <a class="btn btn-default" onClick="formSubmit()" >Kaydet</a>
</form>
<br />