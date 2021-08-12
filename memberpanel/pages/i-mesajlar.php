<?php
session_start();
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

$qry=$db->query("SELECT * FROM i_messages WHERE memberid='$_SESSION[SESS_MEMBER_ID]'");

 ?>

<!-- Add jQuery library -->
	<script type="text/javascript" src="/fancybox/lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {

			$('.fancybox').fancybox({
				
				'autoSize' : false,
				'height': 400,
				'padding': 20,
				'width': 600, 
				'type': 'iframe'
				
				});

		});
	</script>
	
<div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-envelope"></i> Mesajlar</h2>
                </div>
                <div class="box-content">
           
                    <table class="table table-striped responsive">
                        <thead>
                        <tr>
                            <th>Adı-Soyadı</th>
                            <th>E-Posta</th>
                            <th>GSM</th>
                            <th>Durum</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>

<?php

foreach($qry as $message){ ?>
<tr>
<td><?php echo $message['ad']." ". $message['soyad'];?></td>
<td class='center'><?php echo $message['eposta'];?></td>
<td class='center'><?php echo $message['telefon'];?></td>
<td class='center'>
<?php
if($message['durum']==1){echo"<span class='label label-success'>Okundu</span>";}
if($message['durum']==0){echo"<span class='label label-warning'>Okunmadı</span>";}?>
</td>
<td class='center'>
	<a class='btn btn-success fancybox fancybox.iframe' href='i-mesajoku.php?id=<?php echo $message['id'];?>'>
		<i class='glyphicon glyphicon-zoom-in icon-white'></i>
		Oku
	</a>
	<a class='btn btn-danger' href='../../inc/islemler.php?islem=i-mesajsil&id=<?php echo $message['id'];?>' onclick="return confirm('Eminmisiniz?')">
		<i class='glyphicon glyphicon-trash icon-white'></i>
		Sil
	</a>
</td>
</tr>
<?php }?>
                        
</tbody>
</table>
</div>
</div>
</div>