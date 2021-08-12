<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');
$id = $_GET["id"];

$qry = $db->query("SELECT * FROM store_menus WHERE id='$id'")->fetch();

/*$sql=$db->query("SELECT * FROM icerik ORDER BY ranking ASC");
$sql2 = $db->query("SELECT COUNT(*) as num FROM icerik"); 
$rows = $sql2->fetchColumn();
$row=$rows-1;
foreach($sql as $ranking){
	
	$rank[]=$ranking['ranking'];
	
	}
$srg=$db->query("SELECT * FROM modules WHERE modulecode='fg'")->fetch();*/
?>
<script src="/adminpanel/ckeditor/ckeditor.js"></script>
<form name="menuForm" action="../../inc/islemler.php?islem=menuduzenle" method="post">
    <div class="form-group">
        <label for="title">Menü Adı</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Menü Adı Yazınız" value="<?php echo $qry['menuadi'];?>" required>
         
    </div>
    <!--<div class="form-group">
        <label for="link">Dış Link</label>
        <input type="text" class="form-control" id="link" name="link" placeholder="Dış Link Yazınız">
    </div>
    <div class="control-group">
    <label class="control-label" for="selectError">Menü Sıralama</label>
    <div class="controls">
        <select id="selectError" data-rel="chosen" name="rank">-->
        <?php 	
		/*for($x = $rank[$row]+1; $x <= 10; $x++){		
		echo"<option value='$x'>$x</option>";	
		}*/
		?>
       <!-- </select>
    </div>
    </div>-->
    <br />
    <div class="form-group">
        <label for="icerik">Sayfa İçerik</label>
        <textarea name="editor1" id="editor1" rows="10" cols="80"><?php echo $qry['icerik'];?></textarea>
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
    <input type="hidden" name="id" value="<?php echo $id;?>" />
    <button type="submit" class="btn btn-default" >Kaydet</button>
</form>
<br />