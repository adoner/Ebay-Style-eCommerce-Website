<?php 
require_once('../../inc/db.php');
require_once('../../inc/functions.php');

?>
<!-- Add jQuery library -->
<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>

<div class="box col-md-12">
<div class="box-inner">
<div class="box-header well" data-original-title="">
    <h2><i class="glyphicon glyphicon-cog"></i> Ayarlar</h2>
</div>
<div class="box-content">

    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">GENEL</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>GENEL</h3>
      <div style="min-height:500px"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <div style="min-height:500px"></div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <div style="min-height:500px"></div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <div style="min-height:500px"></div>
    </div>
  </div>
</div>            
              
</div>
</div>
</div>
<link href="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>