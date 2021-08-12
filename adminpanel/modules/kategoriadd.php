<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');
/*$sql=$db->query("SELECT * FROM coursesmodule ORDER BY sira ASC");
$sql2 = $db->query("SELECT COUNT(*) as num FROM coursesmodule"); 
$rows = $sql2->fetchColumn();
$row=$rows-1;
foreach($sql as $ranking){
	
	$rank[]=$ranking['sira'];
	
	}*/
?>
<form role="form" data-toggle="validator" action="exec.php" method="post">
    <div class="form-group">
        <label for="kategori">Kategori Başlık</label>
        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori Başlık Yazınız" required="required">
    </div>
    <br />
    <input name="kategoriadd" type="hidden" value="kategoriadd"/>
    <button type="submit" class="btn btn-default" >Kaydet</button>
</form>