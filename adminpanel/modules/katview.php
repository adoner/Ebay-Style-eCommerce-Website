<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');
$kat=$_GET['id'];
$qry=$db->query("SELECT * FROM fotogaleri WHERE kategori='$kat'");

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
    
<div class="row">
<div class="box col-md-12">
<div class="box-inner">
<div class="box-header well" data-original-title="">
<h2><i class="glyphicon glyphicon-picture"></i> Kategori Resimler</h2>
</div>
<div class="box-content">
<p><a href="../pages/main.php?page=galeriadd&kat=<?php echo $kat;?>" title="Resim Eklemek İçin Tıklayınız." data-placement="right" data-toggle="tooltip" class="btn btn-warning">Resim Ekle</a></p>

<ul class="thumbnails gallery">
<?php foreach ($qry as $galeri) { ?>
<li id="<?php echo $galeri['id']; ?>" class="thumbnail" kat="<?php echo $kat; ?>">
<a style="background:url(../../images/fotogaleri/thumbs/<?php echo $galeri['fotolink_thumb']; ?>)"
href="../../images/fotogaleri/thumbs/<?php echo $galeri['fotolink_thumb']; ?>"><img class="grayscale" src="../../images/fotogaleri/thumbs/<?php echo $galeri['fotolink_thumb']; ?>" alt="<?php echo $galeri['aciklama']; ?>"></a>
</li>
<?php } ?>
</ul>
</div>
</div>
</div>
<!--/span-->

</div><!--/row-->

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