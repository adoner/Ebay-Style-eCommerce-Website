<?php
session_start();
require_once("../../includes/db.php");

$sql=$db->query("SELECT cartid FROM orders WHERE cartid NOT IN (SELECT cartid FROM havalebildirim WHERE memberid='".$_SESSION[SESS_MEMBER_ID]."') AND memberid='".$_SESSION[SESS_MEMBER_ID]."' GROUP BY cartid");
 ?>
<div class="sagIcerikBolumu">
<div><h2 class="anaBaslik ng-binding ng-scope">İade Taleplerim</h2>
<div class="icerikTutucu">
    <div class="hesabimFormTutucu">
        <div class="hesabimForm yeniIadeTalebiForm">
            <form name="frmIadeTaleplerim">
                <div class="satirBlok satirBlok25">
                    <span class="hsbmSpan">Sipariş No</span>
                    <div class="selectGrup">
                        <select class="hsbmSelect" id="slctOrder" name="slctOrder">
                        <option value="">Seçiniz</option>
                        <option value="75414" label="75414 - 4.6.2017 22:11:46 - 87,7 TL">75414 - 4.6.2017 22:11:46 - 87,7 TL</option>
                        </select>
                    </div>
                </div>
                <div class="satirBlok satirBlok26">
                    <span class="hsbmSpan ng-binding">Notlar</span>
                    <textarea class="hsbmTextarea ng-pristine ng-untouched ng-valid" id="txtNot" name="txtNot" ng-model="iadeTaleplerimModel.txtNot"></textarea>
                </div>
                <div class="satirBlok satirBlok27">
                    <span class="hsbmSpan ng-binding">Para İade Tipi</span>
                    <div class="selectGrup">
                        <select class="hsbmSelect ng-pristine ng-untouched ng-invalid ng-invalid-required" id="slctParaIadeTipi" name="slctParaIadeTipi" ng-model="iadeTaleplerimModel.slctParaIadeTipi" required="">
                            <option value="" class="ng-binding">Seçiniz</option>
                            <option value="1" class="ng-binding">Para İadesi</option>
                            <option value="2" class="ng-binding">Hediye Çeki</option>
                            <option value="3" class="ng-binding">Değişim</option>
                        </select>
                    </div>
                </div>
                <div class="altButonTutucu">
                    <button type="button" class="yesilButon iadeTalebiKaydet ng-binding" ng-click="CreateClaim(frmIadeTaleplerim.$valid)">
                        Kaydet
                    </button>
                </div>
            </form>
        </div>

        <table class="hesabimTablo" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <td><span class="baslik ng-binding"> Sipariş No</span></td>
                    <td><span class="baslik ng-binding"> Durum</span></td>
                    <td><span class="baslik ng-binding"> Ekleme Tarihi</span></td>
                    <td><span class="baslik ng-binding"> Talep</span></td>
                </tr>
            </thead>
            <tbody>
               <tr class="tabloBeyaz ng-scope" ng-repeat="rClaims in ReturnClaimsList | orderBy : '-dateAdded'">

                    <td data-baslik="Sipariş No :"><span class="baslik ng-binding">74262</span></td>
                    <td data-baslik="Durum :"><span class="baslik ng-binding">Onaylandı</span></td>
                    <td data-baslik="Ekleme Tarihi :"><span class="baslik ng-binding">21-05-2017 22:51:26</span></td>
                    <td data-baslik="Talep :">
                        <span class="baslik">
                            <a href="javascript:void(0)" type="button" class="iadeCevap"></a>
                        </span>
                        </td>
                
                </tr>
                <tr class="tabloBeyaz">

                    <td data-baslik="Sipariş No :"><span class="baslik ng-binding">74262</span></td>
                    <td data-baslik="Durum :"><span class="baslik ng-binding">Onaylandı</span></td>
                    <td data-baslik="Ekleme Tarihi :"><span class="baslik ng-binding">21-05-2017 22:50:58</span></td>
                    <td data-baslik="Talep :">
                        <span class="baslik">
                            <a href="" type="button" class="iadeCevap" ></a>
                        </span>
                        </td>
                </tr>
            </tbody>
        </table>
        <div  style="visibility: visible;">
            <div class="iadeTalebiYazisi" id="divIadeTalepDetay">
                <span class="baslik ng-binding">TALEP</span>
                <span class="ng-binding"><strong class="ng-binding">Ekleme Tarihi : </strong></span>
                <span class="ng-binding"><strong class="ng-binding">Sipariş No : </strong> </span>
                <span class="ng-binding"><strong class="ng-binding">Para İade Tipi : </strong> </span>
                <span class="ng-binding"><strong class="ng-binding">Notlar : </strong> </span>
            </div>
          	<div class="iadeTalepCevabi">
                <span class="baslik ng-binding">CEVAP</span>
                <span class="ng-binding"><strong class="ng-binding">Ekleme Tarihi : </strong></span>
                <span class="ng-binding"><strong class="ng-binding">Cevap : </strong> </span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
