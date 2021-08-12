<?php
ob_start();
session_start();
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$ilanno = $_GET["id"];
$memberid = $_SESSION["SESS_MEMBER_ID"];
$_SESSION["ilanno"] = $ilanno;
$qry = $db->query("SELECT * FROM ilanlar WHERE id = '$ilanno'")->fetch();
$sql = $db->query("SELECT * FROM ilan_images WHERE ilan_no='$ilanno'");
 ?>
 
<script src="../../uploads/jquery.js"></script>
<script src="../../uploads/javascript.js"></script>
<!-- The styles -->
<link rel="stylesheet" type="text/css" href="../../uploads/upload_style.css" />
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="../../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="../../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="../../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="../../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="../../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="../../fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="../../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="../../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<script type="text/javascript">

$(document).ready(function() {

	$('.fancybox').fancybox({
		
	'autoSize' : false,
	'type': 'iframe'
	
	});

});
</script>
<style>
.clearfix:before,
.clearfix:after,
.container:before,
.container:after,
.column:before,
.column:after {
  content:".";
  display:block;
  height:0;
  overflow:hidden;
}
.clearfix:after, .container:after, .column:after {clear:both;}
.clearfix, .container, .column {zoom:1;} /* IE < 8 */

</style>
<div class="box">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-upload"></i> İlan Resmi Yükleme</h2>
                </div>
                <div class="box-content">
                
<div style="position:relative; margin-left:25%">

<table style="width:50%; line-height:30px">
<tr><td><b>İlan No</b></td><td><b>:</b></td><td><?php echo $ilanno;?></td></tr>
<tr><td><b>İlan Başlık</b></td><td><b>:</b></td><td><?php echo $qry['baslik'];?></td></tr>
</table>
<div style="position:relative; margin:0 auto; width:700px">
<?php

foreach($sql as $array_image){?>
	
<div style="position: relative; float:left; margin:5px 5px 25px 5px; border-radius: 5px; border: 2px solid #999; width:115px; height:115px; padding:5px; background-color:#CCC">
<img src="../../images/ilan-images/<?php echo $array_image['image_name'];?>" width="100px" height="100px" />
<div style="position:relative; border-radius: 5px; border: 2px solid #999; background-color:#CCC; width:100px; height:30px">
<a style="position:relative; top:5px; left:10px" class="fancybox fancybox.iframe" href="../../images/ilan-images/<?php echo $array_image['image_name'];?>" title="Gözat"><i class="glyphicon glyphicon-eye-open"></i></a>
<a style="position:relative; top:5px; left:55px" href="/inc/islemler.php?islem=imagesil&id=<?php echo $array_image['id'];?>&ilanno=<?php echo $ilanno;?>" onclick="return confirm('Eminmisiniz?')" title="Sil"><i class="glyphicon glyphicon-remove"></i></a>
</div>
</div>

<?php }?>
</div>
<div class="clearfix"></div>
        <div id="drop-files" ondragover="return false">
            <p>Resimleri buraya sürükleyip bırakınız.<br />En fazla 10 resim lütfen.</p>
        </div>
    </div>
    <div id="uploaded-holder">
		<div id="dropped-files">
			<div id="upload-button">
				<a href="#" class="upload">Yükle!</a>
				<a href="#" class="delete">Sil</a>
				<span>0 Dosya</span>
			</div>
		</div>
		<div id="extra-files">
			<div class="number">
				0
			</div>
			<div id="file-list">
				<ul></ul>
			</div>
		</div>
	</div>
    <div id="loading">
		<div id="loading-bar">
			<div class="loading-color"> </div>
		</div>
		<div id="loading-content">Uploading file.jpg</div>
	</div>
    <div class="clearfix"></div>
    </div>
    
    </div></div>