<?php 
session_start();
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$qry=$db->query("SELECT * FROM ilanlar WHERE memberid='$_SESSION[SESS_MEMBER_ID]'");
$qry2=$db->query("SELECT * FROM ilanlar WHERE memberid='$_SESSION[SESS_MEMBER_ID]'")->fetch();

$_SESSION["ilanno"] = $qry2["id"];

?>

<script>
function pencereAc(){
	
	window.open("https://www.youtube.com/embed/Urwu1OIkS0A", 
	"Video Yardım","menubar=0,resizable=0,width=560,height=315");

}
</script>
           <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> İlanlar</h2>
                </div>
                <div class="box-content">
                <p style="position:relative; float:left"><a id="ilanekle" title="İlan Eklemek İçin Tıklayınız." data-placement="right" data-toggle="tooltip" class="btn btn-warning" onClick="procBtn(this.id)">İlan Ekle</a></p><p style="position:relative; float:right; margin-top:5px"><a href="" onclick="pencereAc()"><i class="glyphicon glyphicon-film"></i> Video Yardım</a></p>
                    <table class="table table-striped responsive">
                        <thead>
                        <tr>
                            <th>İlan No</th>
                            <th>İlan Başlık</th>
                            <th>Kayıt Tarihi</th>
                            <th>Durumu</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
<?php

foreach($qry as $ilan){ ?>
    <tr>
    <td><?php echo $ilan['id'];?></td>
    <td class="center"><?php echo $ilan['baslik'];?></td>
    <td class="center"><?php echo $ilan['kayit_tarihi'];?></td>
    <td class='center'><?php
	if($ilan['yayin']==1){echo"<span class='label label-success'>Yayında</span>";}
	if($ilan['yayin']==0){echo"<span class='label label-warning'>Yayında Değil</span>";}
	?>
	</td>
    <td class="center">
    	<?php if($ilan["yayin"]==0){?>
    	<a class="btn btn-info" href="../../inc/islemler.php?islem=yayinla&id=<?php echo $ilan['id'];?>">
            <i class="glyphicon glyphicon-play icon-white"></i>
            Yayınla
        </a>
        <?php }?>
        <?php if($ilan["yayin"]==1){?>
    	<a class="btn btn-info" href="../../inc/islemler.php?islem=yayinkaldir&id=<?php echo $ilan['id'];?>">
            <i class="glyphicon glyphicon-stop icon-white"></i>
            Yayından Al
        </a>
        <?php }?>
    	<a class="btn btn-info" id="resimupload" onClick="procBtn(this.id, <?php echo $ilan['id'];?>)">
            <i class="glyphicon glyphicon-upload icon-white"></i>
            Resim Yükle
        </a>
        <a class="btn btn-info" id="ilanduzenle" onClick="procBtn(this.id, <?php echo $ilan['id'];?>)">
            <i class="glyphicon glyphicon-edit icon-white"></i>
            Düzenle
        </a>
        <a class="btn btn-danger" href="../../inc/islemler.php?islem=ilansil&id=<?php echo $ilan['id'];?>" onclick="return confirm('Eminmisiniz?')">
            <i class="glyphicon glyphicon-trash icon-white"></i>
            Sil
        </a>
    </td>
    </tr>
<?php }?>
                        
</tbody>
</table>
</div>
</div>
</div>