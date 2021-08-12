<meta charset="utf-8">
<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');

$id=$_GET['id'];
$sql=$db->query("DELETE FROM duyurumodule WHERE id='$id'");
if($sql){

?>
	<script type="text/javascript" language="javascript">
    alert("Duyuru Silindi...");
    window.location="../pages/main.php?page=duyuru";
    </script>
<?php 
}
?>