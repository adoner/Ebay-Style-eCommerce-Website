<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');

$qry=$db->query("SELECT * FROM duyurumodule ORDER BY sira ASC");


?>
<div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-bullhorn"></i> Duyurular</h2>
                </div>
                <div class="box-content">
                <p><a href="main.php?page=menuadd" title="Duyuru Eklemek İçin Tıklayınız." data-placement="right" data-toggle="tooltip" class="btn btn-warning">Duyuru Ekle</a></p>
                    <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>Duyuru Başlığı</th>
                            <th>Alt Başlık</th>
                            <th>Özet</th>
                            <th>Tarih</th>
                            <th>Sıra</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>

<?php

foreach($qry as $duyuru){ 
echo "<tr>
<td>$duyuru[baslik]</td>
<td class='center'>$duyuru[altbaslik]</td>
<td class='center'>$duyuru[ozet]</td>
<td class='center'>$duyuru[tarih]</td>
<td class='center'>$duyuru[sira]</td>
<td class='center'>
	<a class='btn btn-success' href='#' id='mbox'>
		<i class='glyphicon glyphicon-zoom-in icon-white'></i>
		Gözat
	</a>
	<a class='btn btn-info' href='main.php?page=duyuruedit&id=$duyuru[id]'>
		<i class='glyphicon glyphicon-edit icon-white'></i>
		Düzenle
	</a>
	<a class='btn btn-danger' href='duyurudelete.php?id=$duyuru[id]' data-toggle='confirmation'>
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