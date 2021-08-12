<meta charset="utf-8">
<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$id=$_GET['id'];
$sql=$db->query("SELECT * FROM messages WHERE id='$id'")->fetch();

if($sql){
	
	$qry=$db->query("UPDATE messages SET okundu='1' WHERE id='$id'");
	
?>
<div><?php echo $sql['mesaj'];?></div>

<?php }?>