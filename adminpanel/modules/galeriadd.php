<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');

$kat=@$_GET['kat'];

?>

<form role="form" data-toggle="validator" action="exec.php" method="post" enctype="multipart/form-data">

<div class="form-group">
<label for="resim">Resim</label>
<input type="file" id="resim" name="resim" required="required" />
</div>

<div class="form-group">
<label for="link">Açıklama</label>
<input type="text" class="form-control" id="aciklama" name="aciklama" placeholder="Açıklama Yazınız" required="required">
</div>

<input name="galeriadd" type="hidden" value="galeriadd"/>
<input name="kat" type="hidden" value="<?php echo $kat;?>"/>
<button type="submit" class="btn btn-default" >Kaydet</button>
</form>