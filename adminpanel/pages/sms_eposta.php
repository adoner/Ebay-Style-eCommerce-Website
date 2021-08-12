<?php
ob_start();
session_start(); 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');
$checked_members = @$_SESSION["checked_members"];
$checked_members2 = @$_SESSION["checked_members2"];
?>
<script>
$('#mesajForm')[0].reset();
</script>
<!-- Add jQuery library -->
<script type="text/javascript" src="../fancybox/lib/jquery-1.10.1.min.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

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

	$('.fancybox').fancybox({
		
	'autoSize' : false,
	'height': 600,
	'padding': 20,
	'width': 300, 
	'type': 'iframe'
	
	});

});
</script>

<div class="box col-md-12">
<div class="box-inner">
<div class="box-header well" data-original-title="">
    <h2><i class="glyphicon glyphicon-globe"></i> SMS & E-Posta</h2>
</div>

<div class="box-content">

    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sms">SMS (Kısa Mesaj) Gönderme</a></li>
    <li><a data-toggle="tab" href="#eposta">E-Posta Gönderme</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="sms" class="tab-pane fade in active">
      <h3>SMS (Kısa Mesaj) Gönderme</h3>
      <div style="min-height:500px">
      
      <form name="mesajForm" id="mesajForm" action="../../inc/islemler.php?islem=smsgonder" method="post">
       <label>Telefon No:</label> 
      <div class="input-group col-md-8">   
        <input type="text" name="telno" id="telno" class="form-control"
        value="
		<?php
		if($checked_members){
		  foreach($checked_members as $members){
			  
			  $qry = $db->query("SELECT * FROM members WHERE id='$members'")->fetch();
			  echo $qry["telefon"].";";
			  
			  }
		}
	   ?>
       " placeholder="Telefon No" required="required">
        <span class="input-group-addon"><a class="fancybox fancybox.iframe" href="members.php"><i class="glyphicon glyphicon-book"></i></a></span>
      </div>
      <label>Mesaj:</label> 
      <div class="input-group col-md-8">   
        <textarea type="text" name="mesaj" id="mesaj" class="form-control" placeholder="Mesaj" rows="15" cols="50" required="required"></textarea>
      </div>
      <br/>
      <div style="position:relative; margin-left:28%">   
        <button type="submit" class="btn btn-warning">GÖNDER</button>
      </div>
      </form>
      
      </div>
    </div>
    <div id="eposta" class="tab-pane fade">
      <h3>E-Posta Gönderme</h3>
      <div style="min-height:500px">
      
      <form name="mesajForm" id="mesajForm" action="../../inc/islemler.php?islem=epostagonder" method="post">
       <label>E-Posta Adresi:</label> 
      <div class="input-group col-md-8">   
        <input type="text" name="eposta" id="eposta" class="form-control"
        value="
		<?php
		if($checked_members2){
		  foreach($checked_members2 as $members2){
			  
			  $qry2 = $db->query("SELECT * FROM members WHERE id='$members2'")->fetch();
			  echo $qry2["eposta"].";";
			  
			  }
		}
	   ?>
       " placeholder="Eposta Adresi" required="required">
        <span class="input-group-addon"><a class="fancybox fancybox.iframe" href="members2.php"><i class="glyphicon glyphicon-book"></i></a></span>
      </div>
      <label>Mesaj:</label> 
      <div class="input-group col-md-8">   
        <textarea type="text" name="icerik" id="icerik" class="form-control" placeholder="Mesaj" rows="15" cols="50" required="required"></textarea>
      </div>
      <br/>
      <div style="position:relative; margin-left:28%">   
        <button type="submit" class="btn btn-warning">GÖNDER</button>
      </div>
      </form>
      
      </div>
    </div>
  </div>
</div>          
              
</div>
</div>
</div>

<link href="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
