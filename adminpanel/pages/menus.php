<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$qry=$db->query("SELECT * FROM icerik WHERE indpages='0' ORDER BY ranking ASC");
?>
<!-- Add jQuery library -->
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

<div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-eye-open"></i> Menüler</h2>
                </div>
                <div class="box-content">
                <p><a href="main.php?page=menuadd" title="Menü Eklemek İçin Tıklayınız." data-placement="right" data-toggle="tooltip" class="btn btn-warning">Menü Ekle</a></p>
                    <table class="table table-striped responsive">
                        <thead>
                        <tr>
                            <th>Menü Başlığı</th>
                            <th>Link</th>
                            <th>Kayıt Tarihi</th>
                            <th>Sıra</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>

<?php

foreach($qry as $menu){ 
echo "<tr>
<td>$menu[title]</td>
<td class='center'>$menu[link]</td>
<td class='center'>$menu[tarih]</td>
<td class='center'>$menu[ranking]</td>
<td class='center'>
	<a class='btn btn-success' href='#' id='mbox'>
		<i class='glyphicon glyphicon-zoom-in icon-white'></i>
		Gözat
	</a>
	<a class='btn btn-info' href='main.php?page=menuedit&id=$menu[id]'>
		<i class='glyphicon glyphicon-edit icon-white'></i>
		Düzenle
	</a>
	<a class='btn btn-danger' href='menudelete.php?id=$menu[id]' data-toggle='confirmation'>
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