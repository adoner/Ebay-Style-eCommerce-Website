<?php
session_start();
require_once("../../inc/db.php");

$qry = $db->query("SELECT * FROM i_messages WHERE memberid='$_SESSION[SESS_MEMBER_ID]'")->fetch();
$qry2 = $db->query("SELECT COUNT(*) as num FROM i_messages WHERE memberid='$_SESSION[SESS_MEMBER_ID]'"); 
$rows = $qry2->fetchColumn();
$qry3 = $db->query("SELECT COUNT(*) as num FROM i_messages WHERE memberid='$_SESSION[SESS_MEMBER_ID]' and durum='0'"); 
$rows2 = $qry3->fetchColumn();
 ?>
 <script>
function pencereAc(){
	
	window.open("https://www.youtube.com/embed/Urwu1OIkS0A", 
	"Video Yardım","menubar=0,resizable=0,width=560,height=315");

}
</script>
<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="yeni ziyaret." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Toplam Ziyaret</div>
            <div>0</div>
            <span class="notification">0</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="yeni satış." class="well top-block" href="#">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Satışlar</div>
            <div>0 TL</div>
            <span class="notification yellow">0 TL</span>
        </a>
    </div>
    
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="<?php echo $rows2;?> yeni mesaj" class="well top-block" href="/memberpanel/pages/main-page.php?page=i-mesajlar">
            <i class="glyphicon glyphicon-envelope green"></i>

            <div>İlan Mesajları</div>
            <div><?php echo $rows;?></div>
            <span class="notification green"><?php echo $rows2;?></span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="yeni mesaj." class="well top-block" href="#">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>E-Mağaza Mesajları</div>
            <div>0</div>
            <span class="notification red">0</span>
        </a>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Açıklamalar</h2>
            </div>
            <div class="box-content row">
               <div style="padding:0px 20px 5px 25px"> 
               
               <p style="font-size:18px; color:#F30">Hoşgeldiniz!!</p>
               <p>ARICIMDAN.COM dünyasının fırsatlarını kullanmaya başlayabilirsiniz, <strong>30 Nisan 2018 tarihine kadar ücretsiz olarak,</strong> başta Bal olmak üzere tüm arı ürünlerinizin tanıtımı ve satışı için ilanlar verebilir çok yakında başlayacak olan E-Ticaret özelliğini kullanarak ürünlerinizi online satabilir ve müşterilerinizden gelen mesajları okuyup cevaplayabilirsiniz.</p>
               </div>
            </div>
        </div>
    </div>
</div>
</div><!--/row-->