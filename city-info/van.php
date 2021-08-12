<?php
ob_start();
require_once("../inc/db.php");

$qry = $db->query("SELECT * FROM members WHERE sehir='van' AND onay='1'");
$qry2 = $db->query("SELECT COUNT(*) as num FROM members WHERE sehir='van' AND onay='1'");
$rows = $qry2->fetchColumn();
 ?>
<div class="city-container"> 
  <div class="city-image">
	<div class="city-title">Van</div>
    <div class="city-info">
<?php foreach($qry as $members){?>
<?php if($rows > 0){?>
<a href="/uye/<?php echo $members["id"];?>">	  
<div style="position:relative; float:left;background-color: #FFF;border: 1px solid #999;border-radius: 1px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; width:120px; height:120px; padding: 4px; margin-right:3px"><div style="background-color: #efefef;border: 1px solid #999;border-radius: 3px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box; width:110px; height:110px; padding:3px">
	
    <div style="position:relative; float:left; width:103px; margin-top:20px"><p style="text-align:center; font-size:11px; font-weight:600; line-height:10px"><?php echo $members["kimlikturu"];?></p></div>
	<div style="position:relative; float:left; width:103px; margin-top:0px"><p style="position:relative; float:left; width:103px"><p style="text-align:center; font-size:14px; line-height:5px"><?php echo $members["ad"];?></p></div>
    <div style="position:relative; float:left; width:103px; margin-top:0px"><p style="position:relative; float:left; width:103px"><p style="text-align:center; font-size:14px; line-height:5px"><?php echo $members["soyad"];?></p></div>
    
</div></div>
</a>	  
<?php }
}
		
if($rows == 0){
?>
<p style="font-size:16px; text-align:center; margin-top:150px; color:#F00">Bu şehirde kayıt bulunamadı</p>
<?php }?>
    </div>
    <div class="c"></div>
  </div>
</div> 
<a href='#' class='close'></a>

