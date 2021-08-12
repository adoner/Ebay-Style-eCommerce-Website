<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');
$id=$_GET['id'];

$sql=$db->query("SELECT * FROM icerik WHERE id='$id'")->fetch();
?>
<script src="../ckeditor/ckeditor.js"></script>
<form role="form" data-toggle="validator" action="exec.php" method="post">
    <div class="form-group">
        <label for="title">Sayfa Başlığı</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Menü Adı Yazınız" value="<?php echo $sql['title'];?>" required="required">
    </div>
    <div class="form-group">
        <label for="icerik">Sayfa İçerik</label>
        <textarea name="editor1" id="editor1" rows="10" cols="80"><?php echo $sql['content'];?></textarea>
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
    <input type="hidden" name="pageedit" value="pageedit"/>
    <input type="hidden" name="id" value="<?php echo $id;?>"/>
    <button type="submit" class="btn btn-default">Kaydet</button>
</form>