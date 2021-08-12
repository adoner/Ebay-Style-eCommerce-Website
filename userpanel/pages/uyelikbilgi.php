<?php
require_once("../../inc/db.php");

$qry=$db->query("SELECT * FROM members WHERE id='$_SESSION[SESS_USER_ID]'")->fetch();

 ?>
<div class="sagIcerikBolumu">
<div class="icerikTutucu">
<h2 class="anaBaslik">Üyelik Bilgilerim</h2>
<form name="uyeGuncelleForm" id="uyeGuncelleForm" action="islemler.php?islem=uyeguncelle" method="post">

<input type="hidden" name="memberid" value="<?php echo $_SESSION['SESS_MEMBER_ID'];?> " />

<div style="position:relative; float:left; width:50%">

<label>Adınız Soyadınız</label>
<div style="width:70%"><input name="adSoyad" id="adSoyad" type="text" class="textbox" value="<?php echo $qry['ad']." ".$qry['soyad'];?>" required></div>
<br  />
<label>Cep Telefonunuz</label>
<div style="width:70%"><input name="telNo" type="text" class="textbox" value="<?php echo $qry['telefon'];?>" required></div>
<br  />
<label>E-Posta Adresiniz</label>
<div style="width:70%"><input name="ePosta" type="email" class="textbox" value="<?php echo $qry['eposta'];?>" disabled="disabled"></div>
</div>
<label>Şehir</label>
<div style="width:70%"><select name="sehir" class="selectboxx" required>
<option value="Adana" <?php if($qry['sehir']=='Adana'){echo "selected=selected";}?>>Adana</option>
<option value="Adıyaman" <?php if($qry['sehir']=='Adıyaman'){echo "selected=selected";}?>>Adıyaman</option>
<option value="Afyon" <?php if($qry['sehir']=='Afyon'){echo "selected=selected";}?>>Afyon</option>
<option value="Ağrı" <?php if($qry['sehir']=='Ağrı'){echo "selected=selected";}?>>Ağrı</option>
<option value="Aksaray" <?php if($qry['sehir']=='Aksaray'){echo "selected=selected";}?>>Aksaray</option>
<option value="Amasya" <?php if($qry['sehir']=='Amasya'){echo "selected=selected";}?>>Amasya</option>
<option value="Ankara" <?php if($qry['sehir']=='Ankara'){echo "selected=selected";}?>>Ankara</option>
<option value="Antalya" <?php if($qry['sehir']=='Antalya'){echo "selected=selected";}?>>Antalya</option>
<option value="Ardahan" <?php if($qry['sehir']=='Ardahan'){echo "selected=selected";}?>>Ardahan</option>
<option value="Artvin" <?php if($qry['sehir']=='Artvin'){echo "selected=selected";}?>>Artvin</option>
<option value="Aydın" <?php if($qry['sehir']=='Aydın'){echo "selected=selected";}?>>Aydın</option>
<option value="Balıkesir" <?php if($qry['sehir']=='Balıkesir'){echo "selected=selected";}?>>Balıkesir</option>
<option value="Bartın" <?php if($qry['sehir']=='Bartın'){echo "selected=selected";}?>>Bartın</option>
<option value="Batman" <?php if($qry['sehir']=='Batman'){echo "selected=selected";}?>>Batman</option>
<option value="Bayburt" <?php if($qry['sehir']=='Bayburt'){echo "selected=selected";}?>>Bayburt</option>
<option value="Bilecik" <?php if($qry['sehir']=='Bilecik'){echo "selected=selected";}?>>Bilecik</option>
<option value="Bingöl" <?php if($qry['sehir']=='Bingöl'){echo "selected=selected";}?>>Bingöl</option>
<option value="Bitlis" <?php if($qry['sehir']=='Bitlis'){echo "selected=selected";}?>>Bitlis</option>
<option value="Bolu" <?php if($qry['sehir']=='Bolu'){echo "selected=selected";}?>>Bolu</option>
<option value="Burdur" <?php if($qry['sehir']=='Burdur'){echo "selected=selected";}?>>Burdur</option>
<option value="Bursa" <?php if($qry['sehir']=='Bursa'){echo "selected=selected";}?>>Bursa</option>
<option value="Çanakkale" <?php if($qry['sehir']=='Çanakkale'){echo "selected=selected";}?>>Çanakkale</option>
<option value="Çankırı" <?php if($qry['sehir']=='Çankırı'){echo "selected=selected";}?>>Çankırı</option>
<option value="Çorum" <?php if($qry['sehir']=='Çorum'){echo "selected=selected";}?>>Çorum</option>
<option value="Denizli" <?php if($qry['sehir']=='Denizli'){echo "selected=selected";}?>>Denizli</option>
<option value="Diyarbakır" <?php if($qry['sehir']=='Diyarbakır'){echo "selected=selected";}?>>Diyarbakır</option>
<option value="Düzce" <?php if($qry['sehir']=='Düzce'){echo "selected=selected";}?>>Düzce</option>
<option value="Edirne" <?php if($qry['sehir']=='Edirne'){echo "selected=selected";}?>>Edirne</option>
<option value="Elazığ" <?php if($qry['sehir']=='Elazığ'){echo "selected=selected";}?>>Elazığ</option>
<option value="Erzincan" <?php if($qry['sehir']=='Erzincan'){echo "selected=selected";}?>>Erzincan</option>
<option value="Erzurum" <?php if($qry['sehir']=='Erzurum'){echo "selected=selected";}?>>Erzurum</option>
<option value="Eskişehir" <?php if($qry['sehir']=='Eskişehir'){echo "selected=selected";}?>>Eskişehir</option>
<option value="Gaziantep" <?php if($qry['sehir']=='Gaziantep'){echo "selected=selected";}?>>Gaziantep</option>
<option value="Giresun" <?php if($qry['sehir']=='Giresun'){echo "selected=selected";}?>>Giresun</option>
<option value="Gümüşhane" <?php if($qry['sehir']=='Gümüşhane'){echo "selected=selected";}?>>Gümüşhane</option>
<option value="Hakkari" <?php if($qry['sehir']=='Hakkari'){echo "selected=selected";}?>>Hakkari</option>
<option value="Hatay" <?php if($qry['sehir']=='Hatay'){echo "selected=selected";}?>>Hatay</option>
<option value="Iğdır" <?php if($qry['sehir']=='Iğdır'){echo "selected=selected";}?>>Iğdır</option>
<option value="Isparta" <?php if($qry['sehir']=='Isparta'){echo "selected=selected";}?>>Isparta</option>
<option value="İçel" <?php if($qry['sehir']=='İçel'){echo "selected=selected";}?>>İçel</option>
<option value="İstanbul" <?php if($qry['sehir']=='İstanbul'){echo "selected=selected";}?>>İstanbul</option>
<option value="İzmir" <?php if($qry['sehir']=='İzmir'){echo "selected=selected";}?>>İzmir</option>
<option value="Kahramanmaraş" <?php if($qry['sehir']=='Kahramanmaraş'){echo "selected=selected";}?>>Kahramanmaraş</option>
<option value="Karabük" <?php if($qry['sehir']=='Karabük'){echo "selected=selected";}?>>Karabük</option>
<option value="Karaman" <?php if($qry['sehir']=='Karaman'){echo "selected=selected";}?>>Karaman</option>
<option value="Kars" <?php if($qry['sehir']=='Kars'){echo "selected=selected";}?>>Kars</option>
<option value="Kastamonu" <?php if($qry['sehir']=='Kastamonu'){echo "selected=selected";}?>>Kastamonu</option>
<option value="Kayseri" <?php if($qry['sehir']=='Kayseri'){echo "selected=selected";}?>>Kayseri</option>
<option value="Kırıkkale" <?php if($qry['sehir']=='Kırıkkale'){echo "selected=selected";}?>>Kırıkkale</option>
<option value="Kırklareli" <?php if($qry['sehir']=='Kırklareli'){echo "selected=selected";}?>>Kırklareli</option>
<option value="Kırşehir" <?php if($qry['sehir']=='Kırşehir'){echo "selected=selected";}?>>Kırşehir</option>
<option value="Kilis" <?php if($qry['sehir']=='Kilis'){echo "selected=selected";}?>>Kilis</option>
<option value="Kocaeli" <?php if($qry['sehir']=='Kocaeli'){echo "selected=selected";}?>>Kocaeli</option>
<option value="Konya" <?php if($qry['sehir']=='Konya'){echo "selected=selected";}?>>Konya</option>
<option value="Kütahya" <?php if($qry['sehir']=='Kütahya'){echo "selected=selected";}?>>Kütahya</option>
<option value="Malatya" <?php if($qry['sehir']=='Malatya'){echo "selected=selected";}?>>Malatya</option>
<option value="Manisa" <?php if($qry['sehir']=='Manisa'){echo "selected=selected";}?>>Manisa</option>
<option value="Mardin" <?php if($qry['sehir']=='Mardin'){echo "selected=selected";}?>>Mardin</option>
<option value="Muğla" <?php if($qry['sehir']=='Muğla'){echo "selected=selected";}?>>Muğla</option>
<option value="Muş" <?php if($qry['sehir']=='Muş'){echo "selected=selected";}?>>Muş</option>
<option value="Nevşehir" <?php if($qry['sehir']=='Nevşehir'){echo "selected=selected";}?>>Nevşehir</option>
<option value="Niğde" <?php if($qry['sehir']=='Niğde'){echo "selected=selected";}?>>Niğde</option>
<option value="Ordu" <?php if($qry['sehir']=='Ordu'){echo "selected=selected";}?>>Ordu</option>
<option value="Osmaniye" <?php if($qry['sehir']=='Osmaniye'){echo "selected=selected";}?>>Osmaniye</option>
<option value="Rize" <?php if($qry['sehir']=='Rize'){echo "selected=selected";}?>>Rize</option>
<option value="Sakarya" <?php if($qry['sehir']=='Sakarya'){echo "selected=selected";}?>>Sakarya</option>
<option value="Samsun" <?php if($qry['sehir']=='Samsun'){echo "selected=selected";}?>>Samsun</option>
<option value="Siirt" <?php if($qry['sehir']=='Siirt'){echo "selected=selected";}?>>Siirt</option>
<option value="Sinop" <?php if($qry['sehir']=='Sinop'){echo "selected=selected";}?>>Sinop</option>
<option value="Sivas" <?php if($qry['sehir']=='Sivas'){echo "selected=selected";}?>>Sivas</option>
<option value="Şanlıurfa" <?php if($qry['sehir']=='Şanlıurfa'){echo "selected=selected";}?>>Şanlıurfa</option>
<option value="Şırnak" <?php if($qry['sehir']=='Şırnak'){echo "selected=selected";}?>>Şırnak</option>
<option value="Tekirdağ" <?php if($qry['sehir']=='Tekirdağ'){echo "selected=selected";}?>>Tekirdağ</option>
<option value="Tokat" <?php if($qry['sehir']=='Tokat'){echo "selected=selected";}?>>Tokat</option>
<option value="Trabzon" <?php if($qry['sehir']=='Trabzon'){echo "selected=selected";}?>>Trabzon</option>
<option value="Tunceli" <?php if($qry['sehir']=='Tunceli'){echo "selected=selected";}?>>Tunceli</option>
<option value="Uşak" <?php if($qry['sehir']=='Uşak'){echo "selected=selected";}?>>Uşak</option>
<option value="Van" <?php if($qry['sehir']=='Van'){echo "selected=selected";}?>>Van</option>
<option value="Yalova" <?php if($qry['sehir']=='Yalova'){echo "selected=selected";}?>>Yalova</option>
<option value="Yozgat" <?php if($qry['sehir']=='Yozgat'){echo "selected=selected";}?>>Yozgat</option>
<option value="Zonguldak" <?php if($qry['sehir']=='Zonguldak'){echo "selected=selected";}?>>Zonguldak</option>
</select></div>
<br  />
<label>İlçe</label>
<div style="width:70%"><input name="ilce" type="text" class="textbox" value="<?php echo $qry['ilce'];?>" required></div>
<br  />
<label>Doğum Tarihi</label>
<div class="userWrap" style="width:100%">
<select name="dtGun" class="selectboxx" style="width:50px">
<option value="1" <?php if($qry['dtGun']=='1'){echo "selected=selected";}?>>1</option>
<option value="2" <?php if($qry['dtGun']=='2'){echo "selected=selected";}?>>2</option>
<option value="3" <?php if($qry['dtGun']=='3'){echo "selected=selected";}?>>3</option>
<option value="4" <?php if($qry['dtGun']=='4'){echo "selected=selected";}?>>4</option>
<option value="5" <?php if($qry['dtGun']=='5'){echo "selected=selected";}?>>5</option>
<option value="6" <?php if($qry['dtGun']=='6'){echo "selected=selected";}?>>6</option>
<option value="7" <?php if($qry['dtGun']=='7'){echo "selected=selected";}?>>7</option>
<option value="8" <?php if($qry['dtGun']=='8'){echo "selected=selected";}?>>8</option>
<option value="9" <?php if($qry['dtGun']=='9'){echo "selected=selected";}?>>9</option>
<option value="10" <?php if($qry['dtGun']=='10'){echo "selected=selected";}?>>10</option>
<option value="11" <?php if($qry['dtGun']=='11'){echo "selected=selected";}?>>11</option>
<option value="12" <?php if($qry['dtGun']=='12'){echo "selected=selected";}?>>12</option>
<option value="13" <?php if($qry['dtGun']=='13'){echo "selected=selected";}?>>13</option>
<option value="14" <?php if($qry['dtGun']=='14'){echo "selected=selected";}?>>14</option>
<option value="15" <?php if($qry['dtGun']=='15'){echo "selected=selected";}?>>15</option>
<option value="16" <?php if($qry['dtGun']=='16'){echo "selected=selected";}?>>16</option>
<option value="17" <?php if($qry['dtGun']=='17'){echo "selected=selected";}?>>17</option>
<option value="18" <?php if($qry['dtGun']=='18'){echo "selected=selected";}?>>18</option>
<option value="19" <?php if($qry['dtGun']=='19'){echo "selected=selected";}?>>19</option>
<option value="20" <?php if($qry['dtGun']=='20'){echo "selected=selected";}?>>20</option>
<option value="21" <?php if($qry['dtGun']=='21'){echo "selected=selected";}?>>21</option>
<option value="22" <?php if($qry['dtGun']=='22'){echo "selected=selected";}?>>22</option>
<option value="23" <?php if($qry['dtGun']=='23'){echo "selected=selected";}?>>23</option>
<option value="24" <?php if($qry['dtGun']=='24'){echo "selected=selected";}?>>24</option>
<option value="25" <?php if($qry['dtGun']=='25'){echo "selected=selected";}?>>25</option>
<option value="26" <?php if($qry['dtGun']=='26'){echo "selected=selected";}?>>26</option>
<option value="27" <?php if($qry['dtGun']=='27'){echo "selected=selected";}?>>27</option>
<option value="28" <?php if($qry['dtGun']=='28'){echo "selected=selected";}?>>28</option>
<option value="29" <?php if($qry['dtGun']=='29'){echo "selected=selected";}?>>29</option>
<option value="30" <?php if($qry['dtGun']=='30'){echo "selected=selected";}?>>30</option>
<option value="31" <?php if($qry['dtGun']=='31'){echo "selected=selected";}?>>31</option>
</select>
<select name="dtAy" class="selectboxx" style="width:100px">
<option value="Ocak" <?php if($qry['dtAy']=='Ocak'){echo "selected=selected";}?>>Ocak</option>
<option value="Şubat" <?php if($qry['dtAy']=='Şubat'){echo "selected=selected";}?>>Şubat</option>
<option value="Mart" <?php if($qry['dtAy']=='Mart'){echo "selected=selected";}?>>Mart</option>
<option value="Nisan" <?php if($qry['dtAy']=='Nisan'){echo "selected=selected";}?>>Nisan</option>
<option value="Mayıs" <?php if($qry['dtAy']=='Mayıs'){echo "selected=selected";}?>>Mayıs</option>
<option value="Haziran" <?php if($qry['dtAy']=='Haziran'){echo "selected=selected";}?>>Haziran</option>
<option value="Temmuz" <?php if($qry['dtAy']=='Temmuz'){echo "selected=selected";}?>>Temmuz</option>
<option value="Ağustos" <?php if($qry['dtAy']=='Ağustos'){echo "selected=selected";}?>>Ağustos</option>
<option value="Eylül" <?php if($qry['dtAy']=='Eylül'){echo "selected=selected";}?>>Eylül</option>
<option value="Ekim" <?php if($qry['dtAy']=='Ekim'){echo "selected=selected";}?>>Ekim</option>
<option value="Kasım" <?php if($qry['dtAy']=='Kasım'){echo "selected=selected";}?>>Kasım</option>
<option value="Aralık" <?php if($qry['dtAy']=='Aralık'){echo "selected=selected";}?>>Aralık</option>
</select>
<select name="dtYil" class="selectboxx" style="width:100px">
<option value="2010" <?php if($qry['dtYil']=='2010'){echo "selected=selected";}?>>2010</option>
<option value="2009" <?php if($qry['dtYil']=='2009'){echo "selected=selected";}?>>2009</option>
<option value="2008" <?php if($qry['dtYil']=='2008'){echo "selected=selected";}?>>2008</option>
<option value="2007" <?php if($qry['dtYil']=='2007'){echo "selected=selected";}?>>2007</option>
<option value="2006" <?php if($qry['dtYil']=='2006'){echo "selected=selected";}?>>2006</option>
<option value="2005" <?php if($qry['dtYil']=='2005'){echo "selected=selected";}?>>2005</option>
<option value="2004" <?php if($qry['dtYil']=='2004'){echo "selected=selected";}?>>2004</option>
<option value="2003" <?php if($qry['dtYil']=='2003'){echo "selected=selected";}?>>2003</option>
<option value="2002" <?php if($qry['dtYil']=='2002'){echo "selected=selected";}?>>2002</option>
<option value="2001" <?php if($qry['dtYil']=='2001'){echo "selected=selected";}?>>2001</option>
<option value="2000" <?php if($qry['dtYil']=='2000'){echo "selected=selected";}?>>2000</option>
<option value="1999" <?php if($qry['dtYil']=='1999'){echo "selected=selected";}?>>1999</option>
<option value="1998" <?php if($qry['dtYil']=='1998'){echo "selected=selected";}?>>1998</option>
<option value="1997" <?php if($qry['dtYil']=='1997'){echo "selected=selected";}?>>1997</option>
<option value="1996" <?php if($qry['dtYil']=='1996'){echo "selected=selected";}?>>1996</option>
<option value="1995" <?php if($qry['dtYil']=='1995'){echo "selected=selected";}?>>1995</option>
<option value="1994" <?php if($qry['dtYil']=='1994'){echo "selected=selected";}?>>1994</option>
<option value="1993" <?php if($qry['dtYil']=='1993'){echo "selected=selected";}?>>1993</option>
<option value="1992" <?php if($qry['dtYil']=='1992'){echo "selected=selected";}?>>1992</option>
<option value="1991" <?php if($qry['dtYil']=='1991'){echo "selected=selected";}?>>1991</option>
<option value="1990" <?php if($qry['dtYil']=='1990'){echo "selected=selected";}?>>1990</option>
<option value="1989" <?php if($qry['dtYil']=='1989'){echo "selected=selected";}?>>1989</option>
<option value="1988" <?php if($qry['dtYil']=='1988'){echo "selected=selected";}?>>1988</option>
<option value="1987" <?php if($qry['dtYil']=='1987'){echo "selected=selected";}?>>1987</option>
<option value="1986" <?php if($qry['dtYil']=='1986'){echo "selected=selected";}?>>1986</option>
<option value="1985" <?php if($qry['dtYil']=='1985'){echo "selected=selected";}?>>1985</option>
<option value="1984" <?php if($qry['dtYil']=='1984'){echo "selected=selected";}?>>1984</option>
<option value="1983" <?php if($qry['dtYil']=='1983'){echo "selected=selected";}?>>1983</option>
<option value="1982" <?php if($qry['dtYil']=='1982'){echo "selected=selected";}?>>1982</option>
<option value="1981" <?php if($qry['dtYil']=='1981'){echo "selected=selected";}?>>1981</option>
<option value="1980" <?php if($qry['dtYil']=='1980'){echo "selected=selected";}?>>1980</option>
<option value="1979" <?php if($qry['dtYil']=='1979'){echo "selected=selected";}?>>1979</option>
<option value="1978" <?php if($qry['dtYil']=='1978'){echo "selected=selected";}?>>1978</option>
<option value="1977" <?php if($qry['dtYil']=='1977'){echo "selected=selected";}?>>1977</option>
<option value="1976" <?php if($qry['dtYil']=='1976'){echo "selected=selected";}?>>1976</option>
<option value="1975" <?php if($qry['dtYil']=='1975'){echo "selected=selected";}?>>1975</option>
<option value="1974" <?php if($qry['dtYil']=='1974'){echo "selected=selected";}?>>1974</option>
<option value="1973" <?php if($qry['dtYil']=='1973'){echo "selected=selected";}?>>1973</option>
<option value="1972" <?php if($qry['dtYil']=='1972'){echo "selected=selected";}?>>1972</option>
<option value="1971" <?php if($qry['dtYil']=='1971'){echo "selected=selected";}?>>1971</option>
<option value="1970" <?php if($qry['dtYil']=='1970'){echo "selected=selected";}?>>1970</option>
<option value="1969" <?php if($qry['dtYil']=='1969'){echo "selected=selected";}?>>1969</option>
<option value="1968" <?php if($qry['dtYil']=='1968'){echo "selected=selected";}?>>1968</option>
<option value="1967" <?php if($qry['dtYil']=='1967'){echo "selected=selected";}?>>1967</option>
<option value="1966" <?php if($qry['dtYil']=='1966'){echo "selected=selected";}?>>1966</option>
<option value="1965" <?php if($qry['dtYil']=='1965'){echo "selected=selected";}?>>1965</option>
<option value="1964" <?php if($qry['dtYil']=='1964'){echo "selected=selected";}?>>1964</option>
<option value="1963" <?php if($qry['dtYil']=='1963'){echo "selected=selected";}?>>1963</option>
<option value="1962" <?php if($qry['dtYil']=='1962'){echo "selected=selected";}?>>1962</option>
<option value="1961" <?php if($qry['dtYil']=='1961'){echo "selected=selected";}?>>1961</option>
<option value="1960" <?php if($qry['dtYil']=='1960'){echo "selected=selected";}?>>1960</option>
<option value="1959" <?php if($qry['dtYil']=='1959'){echo "selected=selected";}?>>1959</option>
<option value="1958" <?php if($qry['dtYil']=='1958'){echo "selected=selected";}?>>1958</option>
<option value="1957" <?php if($qry['dtYil']=='1957'){echo "selected=selected";}?>>1957</option>
<option value="1956" <?php if($qry['dtYil']=='1956'){echo "selected=selected";}?>>1956</option>
<option value="1955" <?php if($qry['dtYil']=='1955'){echo "selected=selected";}?>>1955</option>
<option value="1954" <?php if($qry['dtYil']=='1954'){echo "selected=selected";}?>>1954</option>
<option value="1953" <?php if($qry['dtYil']=='1953'){echo "selected=selected";}?>>1953</option>
<option value="1952" <?php if($qry['dtYil']=='1952'){echo "selected=selected";}?>>1952</option>
<option value="1951" <?php if($qry['dtYil']=='1951'){echo "selected=selected";}?>>1951</option>
<option value="1950" <?php if($qry['dtYil']=='1950'){echo "selected=selected";}?>>1950</option>
<option value="1949" <?php if($qry['dtYil']=='1949'){echo "selected=selected";}?>>1949</option>
<option value="1948" <?php if($qry['dtYil']=='1948'){echo "selected=selected";}?>>1948</option>
<option value="1947" <?php if($qry['dtYil']=='1947'){echo "selected=selected";}?>>1947</option>
<option value="1946" <?php if($qry['dtYil']=='1946'){echo "selected=selected";}?>>1946</option>
<option value="1945" <?php if($qry['dtYil']=='1945'){echo "selected=selected";}?>>1945</option>
<option value="1944" <?php if($qry['dtYil']=='1944'){echo "selected=selected";}?>>1944</option>
<option value="1943" <?php if($qry['dtYil']=='1943'){echo "selected=selected";}?>>1943</option>
<option value="1942" <?php if($qry['dtYil']=='1942'){echo "selected=selected";}?>>1942</option>
<option value="1941" <?php if($qry['dtYil']=='1941'){echo "selected=selected";}?>>1941</option>
<option value="1940" <?php if($qry['dtYil']=='1940'){echo "selected=selected";}?>>1940</option>
</select>
</div>
<div class="clear"></div>
<div style="position:relative; float:none; margin:0 auto; margin-top:20px; width:40%"><input type="submit" value="KAYDET" class="button"></div>

</form>
</div>

</div>