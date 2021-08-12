<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$qry=$db->query("SELECT * FROM fotokategori ORDER BY id ASC");

?>
<!-- Add jQuery library -->
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<div class="box col-md-12">
<div class="box-inner">
<div class="box-header well" data-original-title="">
<h2><i class="glyphicon glyphicon-picture"></i> Galeriler (Kategoriler)</h2>
</div>
<div class="box-content">
<p><a href="../pages/main.php?page=kategoriadd" title="Kategori Eklemek İçin Tıklayınız." data-placement="right" data-toggle="tooltip" class="btn btn-warning">Kategori Ekle</a></p>
<table class="table table-striped responsive">
<thead>
<tr>
    <th>Kategori Başlığı</th>
    <th>İşlem</th>
</tr>
</thead>
<tbody>

<?php

foreach($qry as $kat){ 
echo "<tr>
<td>$kat[kategori]</td>
<td class='center'>
	<a class='btn btn-success' href='main.php?page=katview&id=$kat[id]' id='mbox'>
		<i class='glyphicon glyphicon-zoom-in icon-white'></i>
		Gözat
	</a>
	<a class='btn btn-info' href='main.php?page=kategoriedit&id=$kat[id]'>
		<i class='glyphicon glyphicon-edit icon-white'></i>
		Düzenle
	</a>
	<a class='btn btn-danger' href='../modules/kategoridelete.php?id=$kat[id]' data-toggle='confirmation'>
		<i class='glyphicon glyphicon-trash icon-white'></i>
		Sil
	</a>
</td>
</tr>";
}?>
                        
</tbody>
</table>
</div>
</div>
</div>