<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$qry=$db->query("SELECT * FROM icerik WHERE indpages='1' ORDER BY id ASC");
?>
<!-- Add jQuery library -->
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> Bağımsız Sayfa</h2>
                </div>
                <div class="box-content">
                <p><a href="main.php?page=pageadd" title="Sayfa Eklemek İçin Tıklayınız." data-placement="right" data-toggle="tooltip" class="btn btn-warning">Sayfa Ekle</a></p>
                    <table class="table table-striped responsive">
                        <thead>
                        <tr>
                            <th>Sayfa Başlığı</th>
                            <th>Link</th>
                            <th>Seo</th>
                            <th>Kayıt Tarihi</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>

<?php

foreach($qry as $menu){ 
echo "<tr>
<td>$menu[title]</td>
<td class='center'>$menu[link]</td>
<td class='center'>$menu[seo]</td>
<td class='center'>$menu[tarih]</td>
<td class='center'>
	<a class='btn btn-success' href='#'>
		<i class='glyphicon glyphicon-zoom-in icon-white'></i>
		Gözat
	</a>
	<a class='btn btn-info' href='main.php?page=pageedit&id=$menu[id]'>
		<i class='glyphicon glyphicon-edit icon-white'></i>
		Düzenle
	</a>
	<a class='btn btn-danger' href='pagedelete.php?id=$menu[id]' data-toggle='confirmation'>
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