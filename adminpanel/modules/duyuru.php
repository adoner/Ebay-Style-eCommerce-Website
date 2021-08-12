<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');

$qry=$db->query("SELECT * FROM duyurumodule ORDER BY sira ASC");
?>
<!-- The styles -->
    <link id="bs-css" href="../css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="../css/charisma-app.css" rel="stylesheet">
	<link href='../bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='../bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='../bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='../bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='../bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='../bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='../bower_components/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='../css/jquery.noty.css' rel='stylesheet'>
    <link href='../css/noty_theme_default.css' rel='stylesheet'>
    <link href='../css/elfinder.min.css' rel='stylesheet'>
    <link href='../css/elfinder.theme.css' rel='stylesheet'>
    <link href='../css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='../css/uploadify.css' rel='stylesheet'>
    <link href='../css/animate.min.css' rel='stylesheet'>

<!-- jQuery -->
    <script src="../bower_components/jquery/jquery.min.js"></script>
    
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
	$('[data-toggle="confirmation"]').confirmation();   
});
</script>
    
<div class="box col-md-12">
<div class="box-inner">
<div class="box-header well" data-original-title="">
<h2><i class="glyphicon glyphicon-bullhorn"></i> Duyurular</h2>
</div>
<div class="box-content">
<p><a href="../pages/main.php?page=duyuruadd" title="Duyuru Eklemek İçin Tıklayınız." data-placement="right" data-toggle="tooltip" class="btn btn-warning">Duyuru Ekle</a></p>
<table class="table table-striped responsive">
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
	<a class='btn btn-danger' href='../modules/duyurudelete.php?id=$duyuru[id]' data-toggle='confirmation'>
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

<!-- external javascript -->

<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="../js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='../bower_components/moment/min/moment.min.js'></script>
<script src='../bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='../js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="../bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="../bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="../js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="../bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="../bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="../js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="../js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="../js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="../js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="../js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="../js/charisma.js"></script>