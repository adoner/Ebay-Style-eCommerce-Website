<meta charset="utf-8">
<?php 
require_once('../../includes/db.php');
require_once('../../includes/functions.php');
$id=$_GET['id'];
$kat=$_GET['kat'];

$sql=$db->query("DELETE FROM fotogaleri WHERE id='$id'");
if($sql){

?>
	<script type="text/javascript" language="javascript">
    alert("Galeri Resmi Silindi...");
    window.location="../pages/main.php?page=katview&id=<?php echo $kat;?>";
    </script>
<?php 
}
?>