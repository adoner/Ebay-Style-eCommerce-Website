<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');
$id=$_GET['id'];

$sql=$db->query("SELECT * FROM icerik WHERE id='$id'")->fetch();
$qry=$db->query("SELECT * FROM icerik");
$sql2 = $db->query("SELECT COUNT(*) as num FROM icerik"); 
$rows = $sql2->fetchColumn();
$row=$rows-1;
foreach($qry as $ranking){
	
$rank[]=$ranking['ranking'];
	
	}
$srg=$db->query("SELECT * FROM modules WHERE modulecode='fg'")->fetch();
?>
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="../ckeditor/ckeditor.js"></script>
<form role="form" data-toggle="validator" action="exec.php" method="post">
    <div class="form-group">
        <label for="title">Menü Adı</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Menü Adı Yazınız" value="<?php echo $sql['title'];?>" required>
    </div>
    <div class="form-group">
        <label for="link">Dış Link</label>
        <input type="text" class="form-control" id="link" name="link" placeholder="Dış Link Yazınız" value="<?php echo $sql['link'];?>">
    </div>
    <!--<div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">

        <p class="help-block">Example block-level help text here.</p>
    </div>-->
    
    <?php if($srg['status']==1){echo"<div class='checkbox'>
        <label>
            <input type='checkbox'"; if($sql['gallery']==1){echo'checked=checked';} echo"name='gallery' value='1'> Galeri Sayfası
        </label>
    </div>";}?>

    <div class="control-group">
    <label class="control-label" for="selectError">Menü Sıralama</label>
    <div class="controls">
        <select id="selectError" data-rel="chosen" name="rank">
            <option value="<?php echo $sql['ranking'];?>"><?php echo $sql['ranking'];?></option>
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
    <input type="hidden" name="menuedit" value="menuedit"/>
    <input type="hidden" name="id" value="<?php echo $id;?>"/>
    <button type="submit" class="btn btn-default">Kaydet</button>
</form>