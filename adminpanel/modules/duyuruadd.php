<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');
$sql=$db->query("SELECT * FROM duyurumodule ORDER BY sira ASC");
$sql2 = $db->query("SELECT COUNT(*) as num FROM duyurumodule"); 
$rows = $sql2->fetchColumn();
$row=$rows-1;
foreach($sql as $ranking){
	
	$rank[]=$ranking['sira'];
	
	}
?>
<script src="../ckeditor/ckeditor.js"></script>
<form role="form" data-toggle="validator" action="exec.php" method="post">
    <div class="form-group">
        <label for="title">Duyuru Başlık</label>
        <input type="text" class="form-control" id="baslik" name="baslik" placeholder="Duyuru Başlık Yazınız" required="required">
    </div>
    <div class="form-group">
        <label for="link">Alt Başlık</label>
        <input type="text" class="form-control" id="altbaslik" name="altbaslik" placeholder="Alt Başlık Yazınız" required="required">
    </div>
    <div class="form-group">
        <label for="link">Özet</label>
        <input type="text" class="form-control" id="ozet" name="ozet" placeholder="Duyuru Özeti" required="required">
    </div>
  
    <div class="control-group">
    <label class="control-label" for="selectError">Duyuru Sıra</label>
    <div class="controls">
        <select id="selectError" data-rel="chosen" name="sira">
        <?php 	
		for($x = $rank[$row]+1; $x <= 10; $x++){		
		echo"<option value='$x'>$x</option>";	
		}?>
        </select>
    </div>
    </div>
    <br />
    <div class="form-group">
        <label for="icerik">Duyuru İçerik</label>
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
    <input name="duyuruadd" type="hidden" value="duyuruadd"/>
    <button type="submit" class="btn btn-default" >Kaydet</button>
</form>