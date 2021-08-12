<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$qry=$db->query("SELECT * FROM modules ORDER BY id ASC");
?>
<!-- Add jQuery library -->
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-wrench"></i> Modüller</h2>
                </div>
                <div class="box-content">
               
                    <table class="table table-striped responsive">
                        <thead>
                        <tr>
                            <th>Modül Adı</th>
                            <th>Durumu</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>

<?php

foreach($qry as $menu){ 
echo "<tr>
<td>$menu[module]</td>
<td class='center'>";
if($menu['status']==1){echo"<span class='label label-success'>Aktif</span>";}
if($menu['status']==0){echo"<span class='label label-warning'>Pasif</span>";}
?>
</td>
<td class="center">

<?php 
	if($menu['status']=="0"){?>
	<a class="btn btn-success" href="exec.php?moduleid=<?php echo $menu['id'];?>&islem=aktif">
		<i class="glyphicon glyphicon-zoom-in icon-white"></i>
		Aktif
	</a>
    <?php }
	if($menu['status']=="1"){?>
	<a class="btn btn-success" href="exec.php?moduleid=<?php echo $menu['id'];?>&islem=aktif" disabled>
		<i class="glyphicon glyphicon-zoom-in icon-white"></i>
		Aktif
	</a>
    <?php }
	
	if($menu['status']=="1"){
	?>
	<a class="btn btn-info" href="exec.php?moduleid=<?php echo $menu['id'];?>&islem=pasif">
		<i class="glyphicon glyphicon-edit icon-white"></i>
		Pasif
	</a>
     <?php }
	
	if($menu['status']=="0"){
	?>
    <a class="btn btn-info" href="exec.php?moduleid=<?php echo $menu['id'];?>&islem=pasif" disabled>
		<i class="glyphicon glyphicon-edit icon-white"></i>
		Pasif
	</a>
    <?php }?>
	<a class="btn btn-danger" href="menudelete.php?id=<?php echo $menu['id'];?>" data-toggle="confirmation" disabled>
		<i class="glyphicon glyphicon-trash icon-white"></i>
		Sil
	</a>
</td>
</tr>
<?php
}?>
                        
</tbody>
</table>
</div>
</div>
</div>