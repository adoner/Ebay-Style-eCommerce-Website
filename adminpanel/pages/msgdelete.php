<meta charset="utf-8">
<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$id=$_GET['id'];
$sql=$db->query("DELETE FROM messages WHERE id='$id'");
if($sql){

?>
	<script type="text/javascript" language="javascript">
    alert("Mesaj Silindi...");
    window.location="main.php?page=messages";
    </script>
<?php 
}
?>