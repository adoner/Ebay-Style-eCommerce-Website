<?php 
require_once("../../inc/db.php");
require_once("../../inc/functions.php");

$limit=10;
$page=$_GET['p'];
if($page==''){
	  $page=1;
	  $start=0;
}else{
  	$start=$limit*($page-1);
 }

$tot= $db->query("SELECT COUNT(*) as num FROM ilanlar");
$total=$tot->fetchColumn();
$num_page=ceil($total/$limit);
$qry=$db->query("SELECT * FROM ilanlar ORDER BY id DESC LIMIT $start, $limit");
?>
<!-- Add jQuery library -->
<script type="text/javascript" src="../fancybox/lib/jquery-1.10.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="../fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
	
		$(document).ready(function() {

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});


		});
	</script>

<form class="navbar-search pull-left" name="searchForm" action="../../inc/islemler.php?islem=ilanarama" method="post">
<div style="position:relative; float:left; vertical-align:middle; margin: -15px 0px 0px 150px; width:650px">
<div style="position:relative; float:left; margin-top:10px">İlan Arama :</div>
<div style="position:relative; float:left; margin:0px 0px 0px 5px">
<input placeholder="" class="search-query form-control" name="query" type="text" required="required">
</div>
<div style="position:relative; float:left; margin: 0px 0px 0px 15px"><button type="submit" name="uyeara" class="btn btn-info">ARA</button></div>
</div>
</form>
<div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-list-alt"></i> İlanlar (<font color="#FF0033"><?php echo $total;?></font>)</h2>
                </div>
                <div class="box-content">
                    <table class="table table-striped responsive">
                        <thead>
                        <tr>
                        <th>İlan No</th>
                        <th>İlan Başlık</th>
                        <th>Kayıt Tarihi</th>
                        <th>Yayın</th>
                        <th>Onay</th>
                        <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>

<?php
$i=1;
foreach($qry as $ilan){ ?>
<tr>
<td><?php echo $ilan["id"];?></td>
<td width="400px"><?php echo $ilan["baslik"];?></td>
<td class="center"><?php echo $ilan["kayit_tarihi"];?></td>
<td class='center'>
<?php if($ilan['yayin']==1){echo"<span class='label label-success'>Yayında</span>";}
if($ilan['yayin']==0){echo"<span class='label label-warning'>Yayında Değil</span>";}?>
</td>
<td class='center'>
<?php if($ilan['onay']==1){echo"<span class='label label-success'>Onaylı</span>";}
if($ilan['onay']==0){echo"<span class='label label-warning'>Onaysız</span>";}?>
</td>
<td class="center">
	<a class="btn btn-success fancybox fancybox.iframe" href="ilandetay.php?id=<?php echo $ilan["id"];?>">
		<i class="glyphicon glyphicon-zoom-in icon-white"></i>
		Gözat
	</a>
	<a class="btn btn-info" href="main.php?page=ilanedit&id=<?php echo $ilan["id"];?>">
		<i class="glyphicon glyphicon-edit icon-white"></i>
		Düzenle
	</a>
	<a class="btn btn-danger" href="../../inc/islemler.php?islem=ilansil&id=<?php echo $ilan["id"];?>" onclick="javascript: return confirm('Emin misiniz?')">
		<i class="glyphicon glyphicon-trash icon-white"></i>
		Sil
	</a>
</td>
</tr>
<?php
$i++;
}?>
                        
</tbody>
</table>
</div>
</div>
</div>
<ul class="pagination pagination-centered">
<li><a <?php if($page!=1){?>href="main.php?page=ilanlar&p=<?php echo $page-1;?>"<?php }?>>Prev</a></li>
<?php 
for($i=1; $i <= $num_page; $i++){?>
    
    <li <?php if($page==$i){echo "class='active'";}?>>
        <a href="main.php?page=ilanlar&p=<?php echo $i;?>"><?php echo $i;?></a>
    </li>
    
	<?php }?>
    <li><a <?php if($page!=$num_page){?>href="main.php?page=ilanlar&p=<?php echo $page+1;?>"<?php }?>>Next</a></li>
</ul>