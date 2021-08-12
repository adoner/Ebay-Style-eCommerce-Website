<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');
$id=$_GET['id'];

$sql=$db->query("SELECT * FROM fotokategori WHERE id='$id'")->fetch();
/*$qry=$db->query("SELECT * FROM duyurumodule");
$sql2 = $db->query("SELECT COUNT(*) as num FROM duyurumodule"); 
$rows = $sql2->fetchColumn();
$row=$rows-1;
foreach($qry as $ranking){
	
$rank[]=$ranking['sira'];
	
	}*/

?>
<form role="form" data-toggle="validator" action="exec.php" method="post">
    <div class="form-group">
        <label for="kategori">Kategori Başlık</label>
        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori Başlık Yazınız" value="<?php echo $sql['kategori'];?>" required="required">
    </div>
  
    <input name="kategoriedit" type="hidden" value="kategoriedit"/>
    <input name="id" type="hidden" value="<?php echo $id;?>"/>
    <button type="submit" class="btn btn-default" >Kaydet</button>
</form>