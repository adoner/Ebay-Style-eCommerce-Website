<?php 
session_start();
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$qry=$db->query("SELECT * FROM store_products WHERE storeno='$_SESSION[SESS_MEMBER_STORENO]'");


?>
           <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-tags"></i> Ürünler</h2>
                </div>
                <div class="box-content">
                <p style="position:relative; float:left"><a href="main.php?page=urunekle" title="Ürün Eklemek İçin Tıklayınız." data-placement="right" data-toggle="tooltip" class="btn btn-warning">Ürün Ekle</a></p>
                    <table class="table table-striped responsive">
                        <thead>
                        <tr>
                            <th>Ürün Adı</th>
                            <th>Fiyatı</th>
                            <th>Kategorisi</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>

<?php

foreach($qry as $menu){ ?>
<tr>
<td><?php echo $menu['productname'];?></td>
<td class='center'><?php echo $menu['price'];?></td>
<td class='center'></td>
<td class='center'>
	<a class='btn btn-info' href='urunduzenle.php?id=<?php echo $menu['id'];?>'>
		<i class='glyphicon glyphicon-edit icon-white'></i>
		Düzenle
	</a>
	<a class='btn btn-danger' href='../../inc/islemler.php?islem=urunsil&id=<?php echo $menu['id'];?>' onclick="return confirm('Eminmisiniz?')">
		<i class='glyphicon glyphicon-trash icon-white'></i>
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