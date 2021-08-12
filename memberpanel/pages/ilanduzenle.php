<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');
$id = $_GET["id"];
$qry = $db->query("SELECT * FROM ilanlar WHERE id='$id'")->fetch();
?>
<script src="/adminpanel/ckeditor/ckeditor.js"></script>
<script>
function getAnaliz(){
	
	document.getElementById('certificate').style.display = 'block';
	
	}
	
function getOdeme(x)
{
	var slctmenu = document.getElementById(x);
	
	slctmenu.onchange=function(){
		
		var chosenoption=this.options[this.selectedIndex]
		
		if(chosenoption.value=='Banka EFT/Havale'){
			
			document.getElementById('banka').style.display = 'block';
			document.getElementById('iban').style.display = 'block';
			document.getElementById('hesapsahibi').style.display = 'block';
			
			}
		if(chosenoption.value=='Kapıda Ödeme'){
		
		document.getElementById('banka').style.display = 'none';
		document.getElementById('iban').style.display = 'none';
		document.getElementById('hesapsahibi').style.display = 'none';
		
		}
		
		if(chosenoption.value=='Havale/Kapıda'){
		
			document.getElementById('banka').style.display = 'block';
			document.getElementById('iban').style.display = 'block';
			document.getElementById('hesapsahibi').style.display = 'block';
		
		}
		
	}
}

function getKargo(x)
{
	var slctmenu = document.getElementById(x);
	
	slctmenu.onchange=function(){
		
		var chosenoption=this.options[this.selectedIndex]
		
		if(chosenoption.value=='Var'){
			
			document.getElementById('kargo').style.display = 'block';
			
			}
		if(chosenoption.value=='Yok'){
		
		document.getElementById('kargo').style.display = 'none';
		
		}
		
	}
}

function getMarka(x)
{
	var slctmenu = document.getElementById(x);
	
	slctmenu.onchange=function(){
		
		var chosenoption=this.options[this.selectedIndex]
		
		if(chosenoption.value=='Var'){
			
			document.getElementById('brand').style.display = 'block';
			document.getElementById('markaadi').setAttribute('required', 'required');
			
			}
		if(chosenoption.value=='Yok'){
		
		document.getElementById('brand').style.display = 'none';
		
		}
		
	}
}
		
function raporAnaliz(x){
	var slctmenu = document.getElementById(x);
	
	slctmenu.onchange=function(){
		
		var chosenoption=this.options[this.selectedIndex]
		if(chosenoption.value=='Yok'){
		
			document.getElementById('certificate').style.display = 'none';
			document.getElementById('raporButon').style.display = 'none';
		
		}
		
		if(chosenoption.value=='Var'){
		
			document.getElementById('certificate').style.display = 'none';
			document.getElementById('raporButon').style.display = 'block';
		
		}
		
	}
}
</script>
<style>
#certificate {display:none;}
</style>

<form name="ilanForm" id="ilanForm" action="../../inc/islemler.php?islem=ilanduzenle" enctype="multipart/form-data" method="post">
    <div class="form-group">
        <label for="ilanbaslik">İlan Başlığı</label>
        <input type="text" class="form-control" id="baslik" name="baslik" value="<?php echo $qry['baslik'];?>" placeholder="İlan Başlığını Yazınız" required>       
    </div>
    <div class="form-group">
    <label for="satis">Satış Şekli</label>
        <select class="form-control" id="satis" name="satis">
		<option>Seçiniz</option>
        <option value="Toptan" <?php if($qry['satis_sekli']=="Toptan"){?>selected="selected"<?php }?>>Toptan</option>
        <option value="Perakende" <?php if($qry['satis_sekli']=="Perakende"){?>selected="selected"<?php }?>>Perakende</option>
        </select>
    </div>
    <div class="form-group">
    <label for="sunum">Sunum Şekli</label>
        <select class="form-control" id="sunum" name="sunum">
		<option>Seçiniz</option>
        <option value="Kavanoz" <?php if($qry['sunum_sekli']=="Kavanoz"){?>selected="selected"<?php }?>>Kavanoz</option>
        <option value="Paket" <?php if($qry['sunum_sekli']=="Paket"){?>selected="selected"<?php }?>>Paket</option>
        <option value="Teneke" <?php if($qry['sunum_sekli']=="Teneke"){?>selected="selected"<?php }?>>Teneke</option>
        <option value="Düz Petekli" <?php if($qry['sunum_sekli']=="Düz Petekli"){?>selected="selected"<?php }?>>Düz Petekli</option>
        <option value="Kasnak Petekli" <?php if($qry['sunum_sekli']=="Kasnak Petekli"){?>selected="selected"<?php }?>>Kasnak Petekli</option>
        <option value="Karakovan" <?php if($qry['sunum_sekli']=="Karakovan"){?>selected="selected"<?php }?>>Karakovan</option>
        <option value="Krem Bal" <?php if($qry['sunum_sekli']=="Krem Bal"){?>selected="selected"<?php }?>>Krem Bal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="rakim">Rakım</label>
        <input type="text" class="form-control" id="rakim" name="rakim" value="<?php echo $qry['rakim'];?>" placeholder="Rakım Yazınız" required>       
    </div>
    <div class="form-group">
        <label for="yoresi">Yöresi</label>
        <input type="text" class="form-control" id="yoresi" name="yoresi" value="<?php echo $qry['yoresi'];?>" placeholder="Yöresini Yazınız" required>       
    </div>
    <div class="form-group">
        <label for="kimden">Kimden</label>
        <select class="form-control" id="kimden" name="kimden">
		<option>Seçiniz</option>
        <option value="Yerli Üretici" <?php if($qry['kimden']=="Yerli Üretici"){?>selected="selected"<?php }?>>Yerli Üretici</option>
        <option value="Firmadan" <?php if($qry['kimden']=="Firmadan"){?>selected="selected"<?php }?>>Firmadan</option>
        </select>       
    </div>
    <div class="form-group">
        <label for="teslim">Teslim Süresi</label>
        <select class="form-control" id="teslim" name="teslim">
		<option>Seçiniz</option>
        <option value="1 gün" <?php if($qry['teslim']=="1 gün"){?>selected="selected"<?php }?>>1 gün</option>
        <option value="2 gün" <?php if($qry['teslim']=="2 gün"){?>selected="selected"<?php }?>>2 gün</option>
        <option value="2-3 gün" <?php if($qry['teslim']=="2-3 gün"){?>selected="selected"<?php }?>>2-3 gün</option>
        </select>       
    </div>
    <div class="form-group">
        <label for="kargoucret">Kargo Ücreti</label>
        <select class="form-control" id="kargoucret" name="kargoucret">
		<option>Seçiniz</option>
        <option value="Alıcı Öder" <?php if($qry['kargo_ucret']=="Alıcı Öder"){?>selected="selected"<?php }?>>Alıcı Öder</option>
        <option value="Satıcı Öder" <?php if($qry['kargo_ucret']=="Satıcı Öder"){?>selected="selected"<?php }?>>Satıcı Öder</option>
        </select>       
    </div>
    <div class="form-group">
        <label for="kargoanlasma">Kargo Anlaşması</label>
        <select class="form-control" id="kargoanlasma" name="kargoanlasma" onClick="getKargo(this.id)" required>
		<option></option>
        <option value="Var" <?php if($qry['kargo_anlasma']=="Var"){?>selected="selected"<?php }?>>Var</option>
        <option value="Yok" <?php if($qry['kargo_anlasma']=="Yok"){?>selected="selected"<?php }?>>Yok</option>
        </select>       
    </div>
    <div class="form-group" id="kargo" style="display:<?php if($qry['kargo_anlasma']=="Var"){echo"block";} if($qry['kargo_anlasma']=="Yok"){echo"none";}?>">
    <label for="kargo">Kargo Şirketi</label>
      <select class="form-control" name="kargo">
      	<option></option>
		<option value="Aras Kargo" <?php if($qry['kargosirketi']=="Aras Kargo"){?>selected="selected"<?php }?>>Aras Kargo</option>
        <option value="DHL Kargo" <?php if($qry['kargosirketi']=="DHL Kargo"){?>selected="selected"<?php }?>>DHL Kargo</option>
        <option value="MNG Kargo" <?php if($qry['kargosirketi']=="MNG Kargo"){?>selected="selected"<?php }?>>MNG Kargo</option>
        <option value="Metro Kargo" <?php if($qry['kargosirketi']=="Metro Kargo"){?>selected="selected"<?php }?>>Metro Kargo</option>
        <option value="PTT Kargo" <?php if($qry['kargosirketi']=="PTT Kargo"){?>selected="selected"<?php }?>>PTT Kargo</option>
        <option value="Sürat Kargo" <?php if($qry['kargosirketi']=="Sürat Kargo"){?>selected="selected"<?php }?>>Sürat Kargo</option>
        <option value="TNT Kargo" <?php if($qry['kargosirketi']=="TNT Kargo"){?>selected="selected"<?php }?>>TNT Kargo</option>
        <option value="UPS Kargo" <?php if($qry['kargosirketi']=="UPS Kargo"){?>selected="selected"<?php }?>>UPS Kargo</option>
        <option value="Yurtiçi Kargo" <?php if($qry['kargosirketi']=="Yurtiçi Kargo"){?>selected="selected"<?php }?>>Yurtiçi Kargo</option>
        </select>     
    </div>
    <div class="form-group">
        <label for="marka">Marka</label>
        <select class="form-control" id="marka" name="marka" onClick="getMarka(this.id)" required>
		<option></option>
        <option value="Var" <?php if($qry['marka']=="Var"){?>selected="selected"<?php }?>>Var</option>
        <option value="Yok" <?php if($qry['marka']=="Yok"){?>selected="selected"<?php }?>>Yok</option>
        </select>       
    </div>
    <div class="form-group" id="brand" style="display:<?php if($qry['marka']=="Var"){echo"block";} if($qry['marka']=="Yok"){echo"none";}?>">
        <label for="markaadi">Marka Adı</label>
        <input type="text" class="form-control" id="markaadi" name="markaadi" value="<?php echo $qry['marka_adi'];?>" placeholder="Marka adı">       
    </div>
    <div class="form-group">
        <label for="uretim">Üretim Yılı</label>
        <input type="text" class="form-control" id="uretim" name="uretim" value="<?php echo $qry['uretim_yili'];?>" placeholder="Üretim Yılı Yazınız" required>       
    </div>
    <div class="form-group">
        <label for="fiyat">Fiyat</label>
        <input type="text" class="form-control" id="fiyat" name="fiyat" value="<?php echo $qry['fiyat'];?>" placeholder="Fiyat Yazınız" required>       
    </div>
    <div class="form-group">
        <label for="odemesekli">Ödeme Şekli</label>
        <select class="form-control" id="odemesekli" name="odemesekli" onClick="getOdeme(this.id)" required>
		<option></option>
        <option value="Banka EFT/Havale" <?php if($qry['odeme_sekli']=="Banka EFT/Havale"){?>selected="selected"<?php }?>>Banka EFT/Havale</option>
        <option value="Kapıda Ödeme" <?php if($qry['odeme_sekli']=="Kapıda Ödeme"){?>selected="selected"<?php }?>>Kapıda Ödeme</option>
        <option value="Havale/Kapıda" <?php if($qry['odeme_sekli']=="Havale/Kapıda"){?>selected="selected"<?php }?>>Havale/Kapıda</option>
        </select>       
    </div>
    <div class="form-group" id="banka" style="display:<?php if($qry['odeme_sekli']=="Banka EFT/Havale"){echo"block";} if($qry['odeme_sekli']=="Kapıda Ödeme"){echo"none";}?>">
    <label for="banka">Banka</label>
      <select class="form-control" name="banka">
		<option></option>
        <option value="Adabank A.Ş." <?php if($qry['banka']=="Adabank A.Ş."){?>selected="selected"<?php }?>>Adabank A.Ş.</option>
        <option value="Akbank T.A.Ş." <?php if($qry['banka']=="Akbank T.A.Ş."){?>selected="selected"<?php }?>>Akbank T.A.Ş.</option>
        <option value="Aktif Bank" <?php if($qry['banka']=="Aktif Bank"){?>selected="selected"<?php }?>>Aktif Bank</option>
        <option value="Anadolu Bank A.Ş." <?php if($qry['banka']=="Anadolu Bank A.Ş."){?>selected="selected"<?php }?>>Anadolu Bank A.Ş.</option>
        <option value="Albaraka Türk Katılım Bankası A.Ş." <?php if($qry['banka']=="Albaraka Türk Katılım Bankası A.Ş."){?>selected="selected"<?php }?>>Albaraka Türk Katılım Bankası A.Ş.</option>
        <option value="Birleşik Fon Bankası A.Ş." <?php if($qry['banka']=="Birleşik Fon Bankası A.Ş."){?>selected="selected"<?php }?>>Birleşik Fon Bankası A.Ş.</option>
        <option value="Fibabanka A.Ş." <?php if($qry['banka']=="Fibabanka A.Ş."){?>selected="selected"<?php }?>>Fibabanka A.Ş.</option>
        <option value="Kuveyt Türk Katılım Bankası A.Ş." <?php if($qry['banka']=="Kuveyt Türk Katılım Bankası A.Ş."){?>selected="selected"<?php }?>>Kuveyt Türk Katılım Bankası A.Ş.</option>
        <option value="Şekerbank T.A.Ş." <?php if($qry['banka']=="Şekerbank T.A.Ş."){?>selected="selected"<?php }?>>Şekerbank T.A.Ş.</option>
        <option value="Tekstilbank A.Ş." <?php if($qry['banka']=="Tekstilbank A.Ş."){?>selected="selected"<?php }?>>Tekstilbank A.Ş.</option>
        <option value="Turkish Bank A.Ş." <?php if($qry['banka']=="Turkish Bank A.Ş."){?>selected="selected"<?php }?>>Turkish Bank A.Ş.</option>
        <option value="Türk Ekonomi Bankası A.Ş." <?php if($qry['banka']=="Türk Ekonomi Bankası A.Ş."){?>selected="selected"<?php }?>>Türk Ekonomi Bankası A.Ş.</option>
        <option value="Türkiye Finans Katılım Bankası A.Ş." <?php if($qry['banka']=="Türkiye Finans Katılım Bankası A.Ş."){?>selected="selected"<?php }?>>Türkiye Finans Katılım Bankası A.Ş.</option>
        <option value="Türkiye Garanti Bankası A.Ş." <?php if($qry['banka']=="Türkiye Garanti Bankası A.Ş."){?>selected="selected"<?php }?>>Türkiye Garanti Bankası A.Ş.</option>
        <option value="Türkiye İş Bankası A.Ş." <?php if($qry['banka']=="Türkiye İş Bankası A.Ş."){?>selected="selected"<?php }?>>Türkiye İş Bankası A.Ş.</option>
        <option value="Türkiye Halk Bankası A.Ş." <?php if($qry['banka']=="Türkiye Halk Bankası A.Ş."){?>selected="selected"<?php }?>>Türkiye Halk Bankası A.Ş.</option>
        <option value="Türkiye Vakıflar Bankası T.A.O." <?php if($qry['banka']=="Türkiye Vakıflar Bankası T.A.O."){?>selected="selected"<?php }?>>Türkiye Vakıflar Bankası T.A.O.</option>
        <option value="Türkiye Cumhuriyeti Ziraat Bankası A.Ş." <?php if($qry['banka']=="Türkiye Cumhuriyeti Ziraat Bankası A.Ş."){?>selected="selected"<?php }?>>Türkiye Cumhuriyeti Ziraat Bankası A.Ş.</option>
        <option value="Yapı ve Kredi Bankası A.Ş." <?php if($qry['banka']=="Yapı ve Kredi Bankası A.Ş."){?>selected="selected"<?php }?>>Yapı ve Kredi Bankası A.Ş.</option> 
        <option value="Ziraat Katılım Bankası A.Ş." <?php if($qry['banka']=="Ziraat Katılım Bankası A.Ş."){?>selected="selected"<?php }?>>Ziraat Katılım Bankası A.Ş.</option>
        </select>     
    </div>
    <div class="form-group" id="hesapsahibi" style="display:<?php if($qry['odeme_sekli']=="Banka EFT/Havale"){echo"block";} if($qry['odeme_sekli']=="Kapıda Ödeme"){echo"none";}?>">
    <label for="hesapsahibi">Hesap Sahibi</label>
      <input type="text" name="hesapsahibi" class="form-control" value="<?php echo $qry["hesapsahibi"];?>">     
    </div>
    <div class="form-group" id="iban" style="display:<?php if($qry['odeme_sekli']=="Banka EFT/Havale"){echo"block";} if($qry['odeme_sekli']=="Kapıda Ödeme"){echo"none";}?>">
    <label for="iban">IBAN No</label>
      <input type="text" name="iban" class="form-control" value="<?php echo $qry["ibanno"];?>">     
    </div>
    <div class="form-group">
    <label for="analiz">Analiz</label>
    <div class="clearfix"></div>
       <div style="position:relative; float:left; width:200px"> 
       <select class="form-control" id="analiz" name="analiz" onClick="raporAnaliz(this.id)">
        <option value="Var" <?php if($qry['analiz']=="Var"){?>selected="selected"<?php }?>>Var</option>
        <option value="Yok" <?php if($qry['analiz']=="Yok"){?>selected="selected"<?php }?>>Yok</option>
        </select></div>
		
        <div id="raporButon" style="position:relative; float:left; margin-left:50px; display:<?php if($qry['analiz']=="Var"){echo"block";} if($qry['analiz']=="Yok"){echo"none";}?>">
        <a class="btn btn-warning" onclick="getAnaliz()">Rapor Yükle / Değiştir</a></div>
    </div>
    
    <div class="clearfix"></div><br />
    
    <div class="form-group" id="certificate">
    <label for="analizrapor">Analiz Raporu Yükle</label>
      <input type="file" name="analizrapor" class="form-control">     
    </div>
    
    <!--<div class="form-group">
    <label for="organik">Organik</label>
        <select class="form-control" id="organik" name="organik">
		<option>Seçiniz</option>
        <option value="Organik" <?php /*if($qry['organik']=="Organik"){*/?>selected="selected"<?php/* }*/?>>Evet Organik</option>
        <option value="Organik Değil" <?php /*if($qry['organik']=="Organik Değil"){*/?>selected="selected"<?php /*}*/?>>Hayır Organik Değil</option>
        </select>
    </div>-->
    <br />
    <div class="form-group">
        <label for="aciklama">Açıklama</label>
        <textarea name="editor1" id="editor1" rows="10" cols="80"><?php echo $qry['aciklama'];?></textarea>
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
    <input type="hidden" name="id" value="<?php echo $id;?>" />
    <input type="hidden" name="analizraporpath" value="<?php echo $qry["analiz_rapor_path"];?>" />
    <button type="submit" class="btn btn-default">Kaydet</button>
</form>
<br />