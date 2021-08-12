<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');

$id=@$_GET['id'];

$sql=$db->query("SELECT * FROM fotogaleri WHERE id='$id'")->fetch();

?>

<form role="form" data-toggle="validator" action="exec.php" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="resim">Resim</label>
<div><img src="../../images/fotogaleri/thumbs/<?php echo $sql['fotolink_thumb'];?>" height="100px" width="100px"/></div><br /><div>

<input type="file" id="resim" name="resim" />
</div>
</div>

<div class="form-group">
<label for="link">Açıklama</label>
<input type="text" class="form-control" id="aciklama" name="aciklama" value="<?php echo $sql['aciklama'];?>" placeholder="Açıklama Yazınız" required="required">
</div>

<input name="galeriedit" type="hidden" value="galeriedit"/>
<input name="id" type="hidden" value="<?php echo $id;?>"/>
<input name="kat" type="hidden" value="<?php echo $sql['kategori'];?>"/>
<button type="submit" class="btn btn-default" >Kaydet</button>
</form>