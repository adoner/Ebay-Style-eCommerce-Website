<?php
session_start();
require_once('../../includes/db.php');
$memberid=$_GET['memberid'];
$cartid=$_GET['cartid'];
$qry=$db->query("SELECT * FROM orders WHERE memberid='$memberid' AND cartid='$cartid'");?>

<table>
<?php foreach($qry as $orders){?>

<tr><td><?php echo $orders['product_name'];?></td></tr>

<?php }?>
</table>