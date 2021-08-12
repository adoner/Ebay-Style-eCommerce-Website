<?php ?>

<div class="hesabimBolumuTutucu">
    <div class="hesabimAnasayfa">
        <div class="hesabimAnasayfaBaslik">
            <h2 class="ng-binding">MERHABA <?php echo $_SESSION['SESS_USER_NAME']." ".$_SESSION['SESS_USER_LASTNAME'];?><span class="ng-binding"> HOŞGELDİNİZ </span></h2>
            <p class="ng-binding">Buradan siparişlerinizi ve iade/değişim işlemlerinizi takip edebilir, kazandığınız hediye çeki ve puanları görüntüleyebilir, üyelik bilgisi güncelleme, şifre ve adres değişikliği gibi hesap ayarlarınızı kolayca yapabilirsiniz.</p>
        </div>
        <div class="hesabimAnasayfaMenuler">
            <ul>
                <li><a href="main.php?page=havalebildirim"><i class="glyphicon glyphicon-share" aria-hidden="true"></i> <span class="ng-binding">Havale Bildirim Formu</span></a></li>
                <li><a href="main.php?page=siparislerim"><i class="glyphicon glyphicon-bell" aria-hidden="true"></i> <span class="ng-binding">Siparişlerim</span></a></li>
                <li><a href="main.php?page=uyelikbilgi"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> <span class="ng-binding">Üyelik Bilgilerim</span></a></li>
                <li><a href="main.php?page=adresdefterim"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> <span class="ng-binding">Adres Defterim</span></a></li>
                <li><a href="main.php?page=hediyeceklerim"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i> <span class="ng-binding">Hediye Çeklerim</span></a></li>
                <li><a href="main.php?page=parapuan"><i class="glyphicon glyphicon-star" aria-hidden="true"></i> <span class="ng-binding">Para Puanlarım</span></a></li>
                <li><a href="main.php?page=iadetaleplerim"><i class="glyphicon glyphicon-refresh" aria-hidden="true"></i> <span class="ng-binding">İade Taleplerim</span></a></li>
                <li><a href="/sepetim"><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i> <span class="ng-binding">Alışveriş Sepetim</span></a></li>
            </ul>
        </div>
    </div>
</div>