<?php 
session_start();
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$qry=$db->query("SELECT * FROM store_menus WHERE storeno='$_SESSION[SESS_MEMBER_STORENO]' AND sabit='0'");
$qry2=$db->query("SELECT * FROM store_menus WHERE storeno='$_SESSION[SESS_MEMBER_STORENO]' AND sabit='1'");


?>
           <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-eye-open"></i> Menüler</h2>
                </div>
                <div class="box-content">
                <p style="position:relative; float:left"><a href="/memberpanel/pages/main-page.php?page=menuekle" title="Menü Eklemek İçin Tıklayınız." data-placement="right" data-toggle="tooltip" class="btn btn-warning">Menü Ekle</a></p>
                    <table class="table table-striped responsive">
                        <thead>
                        <tr>
                            <th>Menü Başlığı</th>
                            <th>Link</th>
                            <th>Kayıt Tarihi</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
      <?php      
	  foreach($qry2 as $menu2){?>
       	<tr><td><?php echo $menu2['menuadi'];?></td><td><?php echo $menu2['menuseo'];?></td><td><?php echo $menu2['kayit_tarihi'];?></td><td><a class='btn btn-info' href='/memberpanel/pages/main-page.php?page=menuduzenle&id= <?php echo $menu2['id'];?>'>
		<i class='glyphicon glyphicon-edit icon-white'></i>
		Düzenle
	</a>
    <a>Sabit Menü</a>
	</td></tr>
    <?php }
	
foreach($qry as $menu){ ?>
<tr>
<td><?php echo $menu['menuadi'];?></td>
<td class="center"><?php echo $menu['menuseo'];?></td>
<td class="center"><?php echo $menu['kayit_tarihi'];?></td>
<td class="center">
	<a class="btn btn-info" href="/memberpanel/pages/main-page.php?page=menuduzenle&id=<?php echo $menu['id'];?>">
		<i class="glyphicon glyphicon-edit icon-white"></i>
		Düzenle
	</a>
	<a class="btn btn-danger" href="../../inc/islemler.php?islem=menusil&id=<?php echo $menu['id'];?>" onclick="return confirm('Eminmisiniz?')">
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