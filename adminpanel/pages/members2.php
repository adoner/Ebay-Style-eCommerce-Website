<?php 
session_start();
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$qry = $db->query("SELECT * FROM members");

$ch = curl_init(); // oturum başlat
curl_setopt($ch, CURLOPT_URL,"http://www.aricimdan.com/adminpanel/pages/sms_eposta.php"); //adrese git
curl_setopt($ch, CURLOPT_POST, 1);  //post işlemini başlat
curl_setopt($ch, CURLOPT_POSTFIELDS,"VilayetID=35"); //gönderilecek olan post değişkenleri
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // gönderilen veriye karşıt gelen sonucu değişkene ata - 0 yaparsanız direk ekrana basar
//$erdem = curl_exec ($ch);// değişkene ata ekran görüntüsünü
curl_close ($ch); //baglantıyı kes
?>
<!-- Add jQuery library -->
<script type="text/javascript" src="../fancybox/lib/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
function selectAll(formName){
	 var selectName=document.formName.sec;
	 var checkNumber= selectName.length;
		
	 if(document.formName.all.checked==false){
		  for(i=0; i < checkNumber; i++){
		   selectName[i].checked=false;
		  }
	 }else{
		  for(i=0; i < checkNumber; i++){
		   selectName[i].checked=true;
		  }
	 }	
}
</script>
<form name="formName" id="formName" action="../../inc/islemler.php?islem=uyeekle2" method="post">
<div style=" position:fixed;border:solid 1px #CCCCCC; width:270px; height:auto; background:#06F; padding:5px 0px 5px 0px; opacity:100%">
<div style="position:relative; float:left;"><input type="checkbox" name="all" onclick="selectAll('formName')" />Tümü</div>
<div style="position:relative; float:right;"><button type="submit" class="btn btn-success" >Aktar</button></div></div>
<div style="position:relative; top:30px">
<table align="center" width="100%">
<?php 
foreach($qry as $members){?>

<tr><td><input type="checkbox" id="sec" name="members[]" value="<?php echo $members["id"];?>"/></td><td><?php echo $members["ad"].' '.$members["soyad"];?></td></tr>
	
<?php }?>
</table>
</div>
</form>