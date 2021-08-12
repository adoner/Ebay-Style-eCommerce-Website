<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');

$sql=$db->query("SELECT * FROM icerik ORDER BY ranking ASC");
$sql2 = $db->query("SELECT COUNT(*) as num FROM icerik"); 
$rows = $sql2->fetchColumn();
$row=$rows-1;
foreach($sql as $ranking){
	
	$rank[]=$ranking['ranking'];
	
	}
//echo $rank[5];
?>
<script src="../ckeditor/ckeditor.js"></script>
<form role="form" action="exec.php" method="post">
    <div class="form-group">
        <label for="title">Menü Adı</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Menü Adı Yazınız">
    </div>
    <div class="form-group">
        <label for="link">Dış Link</label>
        <input type="text" class="form-control" id="link" name="link" placeholder="Dış Link Yazınız">
    </div>
    <!--<div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">

        <p class="help-block">Example block-level help text here.</p>
    </div>-->

    <div class="control-group">
    <label class="control-label" for="selectError">Menü Sıralama</label>
    <div class="controls">
        <select id="selectError" data-rel="chosen" name="rank">
        <?php 	
		for($x = $rank[$row]+1; $x <= 10; $x++){		
		echo"<option value='$x'>$x</option>";	
		}?>
        </select>
    </div>
    </div>
    <br />
    <div class="form-group">
        <label for="icerik">Sayfa İçerik</label>
        <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
        <script>
		CKEDITOR.replace( 'editor1', {
		fullPage: false,
		allowedContent: true,
		extraPlugins: 'wysiwygarea',
		enterMode    : Number(2),
		filebrowserBrowseUrl : '../ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl : '../ckfinder/ckfinder.html?type=Images',
		filebrowserFlashBrowseUrl : '../ckfinder/ckfinder.html?type=Flash',
		filebrowserUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		filebrowserImageUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUploadUrl : '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
		});
		</script>
    </div>
    <input name="menuadd" type="hidden" value="menuadd"/>
    <button type="submit" class="btn btn-default" >Kaydet</button>
</form>