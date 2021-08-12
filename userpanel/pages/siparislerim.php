<?php
require_once('../../includes/db.php');
$qry=$db->query("SELECT * FROM orders WHERE memberid='$_SESSION[SESS_MEMBER_ID]' GROUP BY cartid");
?>
<div>
<div style="margin:15px 0px 0px 15px"><h2 class="anaBaslik">Siparişlerim</h2></div>

<div class="box col-md-12">
<div class="box-inner">
<div class="box-header well" data-original-title="">
<div class="box-content">              
<table class="table table-striped responsive">
<thead>
<tr>
<th>Sipariş No</th>
<th>Sipariş Tarihi</th>
<th>Durum</th>
<th>Ödeme Tipi</th>
<th>Banka</th>
<th>İşlem</th>
</tr>
</thead>
<tbody>
<?php

foreach($qry as $menu){ 
echo "<tr><td>$menu[cartid]</td>
<td class='center'>$menu[date_time]</td>
<td class='center'>$menu[payment_status]</td>
<td class='center'>$menu[payment_type]</td>
<td class='center'>$menu[bank]</td>
<td class='center'>
	<a class='btn btn-success fancybox' href='siparisdetay.php?memberid=$menu[memberid]&cartid=$menu[cartid]' data-fancybox-type='iframe'>
		<i class='glyphicon glyphicon-zoom-in icon-white'></i>
		Detay
	</a>";
	if($menu['payment_status']=='Ödeme Bekleniyor' or $menu['payment_status']=='Tamamlandı'){
	echo" <a class='btn btn-info' href='#' disabled>
		<i class='glyphicon glyphicon-edit icon-white'></i>
		Sipariş Takip
	</a>";
	}
	if($menu['payment_status']=='Kargoda'){
	echo" <a class='btn btn-info' href='#'>
		<i class='glyphicon glyphicon-edit icon-white'></i>
		Sipariş Takip
	</a>";
	}
	if($menu['payment_status']=='Ödeme Bekleniyor'){
	echo" <a class='btn btn-danger' href='main.php?page=iadetaleplerim' data-toggle='confirmation'>
		<i class='glyphicon glyphicon-trash icon-white'></i>
		İptal Et
	</a>
</td></tr>";
	}
	if($menu['payment_status']=='Kargoda' or $menu['payment_status']=='Tamamlandı'){
	echo" <a class='btn btn-danger' href='#' data-toggle='confirmation' disabled>
		<i class='glyphicon glyphicon-trash icon-white'></i>
		İptal Et
	</a>
</td></tr>";
	}
}?>                     
</tbody>
</table>
</div>
</div>
</div>
</div></div>
