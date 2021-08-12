<meta charset="utf-8">
<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');

$id=$_GET['id'];
$sql=$db->query("DELETE FROM icerik WHERE id='$id'");
if($sql){

?>
	<script type="text/javascript" language="javascript">
    alert("Menü Silindi...");
    window.location="main.php?page=menus";
    </script>
<?php 
}
?>