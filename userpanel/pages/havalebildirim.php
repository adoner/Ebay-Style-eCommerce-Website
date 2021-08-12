<?php
session_start();
require_once("../../includes/db.php");

$sql=$db->query("SELECT * FROM orders WHERE cartid NOT IN (SELECT cartid FROM havalebildirim WHERE memberid='".$_SESSION[SESS_MEMBER_ID]."') AND memberid='".$_SESSION[SESS_MEMBER_ID]."' AND payment_type='havale' GROUP BY cartid");
 ?>
<div class="sagIcerikBolumu">
<h2 class="anaBaslik">Ödeme Bildirim Formu</h2>
<div class="icerikTutucu">
    <div class="havaleBildirimFormu">
        <form id="frmHavaleBildirim" name="frmHavaleBildirim" action="islemler.php?islem=havalebildirim" method="post">
        <input type="hidden" name="memberid" value="<?php echo $_SESSION['SESS_MEMBER_ID'];?>" />
            <div class="hesabimForm">
                <div class="satirBlok">
                    <span class="hsbmSpan">Tutar</span>
                    <input class="hsbmTextbox" id="tutar" name="tutar" type="text" required="required">
                </div>
                <div class="satirBlok">
                    <span class="hsbmSpan">Banka</span>
                    <div class="selectGrup">
                        <select class="hsbmSelect" id="banka" name="banka" required="required">
                            <option>Seçiniz</option>
                            <option value="ZİRAAT BANKASI">ZİRAAT BANKASI 46708513</option>
                            <option value="HALK BANK">HALK BANK 90003Y10</option>
                        </select>
                    </div>
                </div>
                <div class="satirBlok">
                    <span class="hsbmSpan">Sipariş No</span>
                    <div class="selectGrup">
                        <select class="hsbmSelect" id="cartid" name="cartid" required="required">
                            <option>Seçiniz</option>
                            <?php
							foreach($sql as $result){?>  
							<option value="<?php echo $result['cartid'];?>"><?php echo "Sipariş No: ".$result['cartid'].", Toplam Fiyat: ".$result['grand_total'];?></option>						
							<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="satirBlok">
                    <span class="hsbmSpan">Notlar</span>
                    <textarea id="not" name="not" class="Textarea" type="text" required="required"></textarea>
                </div>
                <div class="altButonTutucu">
                    <button class="yesilButon" type="submit">
                        Gönder
                    </button>

                </div>
            </div>

        </form>
        
        <?php 
		
		$sql2=$db->query("SELECT * FROM havalebildirim WHERE memberid='".$_SESSION[SESS_MEMBER_ID]."'");
		$qry=$db->query("SELECT COUNT(*) as num FROM havalebildirim WHERE memberid='".$_SESSION[SESS_MEMBER_ID]."'");
		$rows = $qry->fetchColumn();
		?>
        <table class="hesabimTablo" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <td><span class="baslik ng-binding">Sipariş No</span></td>
                    <td><span class="baslik ng-binding">Banka</span></td>
                    <td><span class="baslik ng-binding">Tutar</span></td>
                    <td><span class="baslik ng-binding">Tarih</span></td>
                    <td><span class="baslik ng-binding">Notlar</span></td>
                </tr>
            </thead>
            <tbody>
            <?php
			if($rows==0){?>
                    <tr class="satirBosluk tableRowDisplay">
                            <td colspan="5">
                                <span class="maviUyari">
                                    Kayıt bulunamadı.
                                </span>
                            </td>
                     </tr>
            <?php }
			
			if($rows > 0){
				
				foreach($sql2 as $result2){?>
                    <tr class="satirBosluk tableRowDisplay">
                       <td><?php echo $result2['cartid'];?></td>
                       <td><?php echo $result2['banka'];?></td>
                       <td><?php echo $result2['tutar'];?></td>
                       <td><?php echo $result2['tarih'];?></td>
                       <td><?php echo $result2['mesaj'];?></td>
                     </tr>		
			<?php
				}
			}?>
            </tbody>
        </table>
    </div>
</div>
</div>