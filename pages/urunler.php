<?php
include("../inc/db.php");
 
$sql=$db->query("SELECT * FROM store_products WHERE storeno='1'");?>
<?php 
foreach($sql as $row){ 
?>
<div class="item-box">
<div><a href="/urundetay/<?php echo $row['id'];?>"><img src="../images/user-images/products/<?php echo $row['image'];?>" width="188px" height="216px" /></a></div>
<div class="clear"></div>
<div style="margin-top:15px"><span class="UrunText"><?php echo $row['productname'];?></span><span class="UrunFiyat"><?php echo $row['price'];?> TL.</span></div></div>					
<?php 
}							
?>
