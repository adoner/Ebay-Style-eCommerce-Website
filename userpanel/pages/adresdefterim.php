<?php
session_start();
require_once("../../inc/db.php");

$sql=$db->query("SELECT * FROM member_adress WHERE memberid='$_SESSION[SESS_USER_ID]'");
 ?>
<div class="sagIcerikBolumu">
<div class="ng-scope"><h2 class="anaBaslik">Adres Defterim</h2>
<div class="icerikTutucu">
   <div class="adresDefterim">
        <div class="satirBlokRow">
            <div class="adreslerim">
            <?php 
			foreach($sql as $member){?>
             <div class="adresBlok">
                    <div class="adresBlokIcerik">
                        <h5 class="ng-binding"><?php echo $member['adres_baslik'];?><?php if($member['defaulttt']==1){?><span style="font-size:11px; color:#F00">  ( Varsayılan Adres )</span><?php }?></h5>
                        <p class="ng-binding">
                            <?php echo $_SESSION['SESS_USER_NAME']." ".$_SESSION['SESS_USER_LASTNAME'];?>
                            <br>
                            <?php echo $member['adres_detay'];?>
                            <br>
                            <?php echo $member['posta_kodu'];?>
                            <br />
                           <?php echo $member['ulke']." / ".$member['sehir']." / ".$member['ilce'];?>
                            <br>
                        </p>
                        <div class="adresButonlar">
                       <?php if($member['defaulttt']==0){?> <a href="islemler.php?islem=varsayilan&id=<?php echo $member['id'];?>&memberid=<?php echo $member['memberid'];?>" class="ng-binding ng-scope"><i class="fa fa-check-square-o" aria-hidden="true"></i>Varsayılan Yap</a><?php }?>
                            <a href="main.php?page=adresdefterimduzenle&id=<?php echo $member['id'];?>" class="ng-binding"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Düzenle</a>
                            <a href="islemler.php?islem=sil&id=<?php echo $member['id'];?>" onclick="return confirm('Eminmisiniz?')" class="ng-binding"><i class="fa fa-times" aria-hidden="true"></i>Sil</a>
                        </div>
                    </div>
                </div>
        <?php }?>        
                <div class="adresBlok">
                    <div class="adresBlokIcerik">
                        <a class="adresEkle" href="main.php?page=adresdefterimekle&memberid=<?php echo $member['memberid'];?>">Yeni Ekle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
</div>