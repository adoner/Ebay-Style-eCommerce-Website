<?php 

switch($menu){
	
	case "anasayfa":
	if($qry['uyelik']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1){
		
		include("anasayfa.php");
		
		}
	break;
	case "menuler":
	if($qry['uyelik']==0 or $qry['store']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1 & $qry['store']==1){
		
		include("menus.php");
		
		}
	break;
	case "ilanlar":
	if($qry['uyelik']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1){
		
		include("ilanlar.php");
		
		}
	break;
	case "urunler":
	if($qry['uyelik']==0 or $qry['store']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1  & $qry['store']==1){
		
		include("urunler.php");
		
		}
	break;
	case "e-mesajlar":
	if($qry['uyelik']==0 or $qry['store']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1 & $qry['store']==1){
		
		include("e-mesajlar.php");
		
		}
	break;
	case "i-mesajlar":
	if($qry['uyelik']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1){
		
		include("i-mesajlar.php");
		
		}
	break;
	case "menuekle":
	include("menuekle.php");
	break;
	case "ilanekle":
	include("ilanekle.php");
	break;
	case "menuduzenle":
	include("menuduzenle.php");
	break;
	case "ilanduzenle":
	include("ilanduzenle.php");
	break;
	case "resimyukle":
	include("resim-upload.php");
	break;
	
	default: if($qry['uyelik']==0){
		
		include("../../inc/uyelik.php");
		
		}
	if($qry['uyelik']==1){
		
		include("anasayfa.php");
		
		}
	}

?>