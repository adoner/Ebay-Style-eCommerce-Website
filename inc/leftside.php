<?php
ob_start();
require_once("db.php");

$qry = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori1='bal' and yayin='1'");
$bal = $qry->fetchColumn();
$qry2 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori1='polen' and yayin='1'");
$polen = $qry2->fetchColumn();
$qry3 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori1='arisutu' and yayin='1'");
$arisutu = $qry3->fetchColumn();
$qry4 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori1='propolis' and yayin='1'");
$propolis = $qry4->fetchColumn();
$qry5 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='cicek' and yayin='1'");
$cicek = $qry5->fetchColumn();
$qry6 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='salgi' and yayin='1'");
$salgi = $qry6->fetchColumn();
$qry7 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='yas' and yayin='1'");
$yas = $qry7->fetchColumn();
$qry8 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='kurutulmus' and yayin='1'");
$kurutulmus = $qry8->fetchColumn();
$qry9 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='yas2' and yayin='1'");
$yas2 = $qry9->fetchColumn();
$qry10 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='kurutulmus2' and yayin='1'");
$kurutulmus2 = $qry10->fetchColumn();
$qry11 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='kapsul' and yayin='1'");
$kapsul = $qry11->fetchColumn();
$qry12 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='suda' and yayin='1'");
$suda = $qry12->fetchColumn();
$qry122 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='ham' and yayin='1'");
$ham = $qry122->fetchColumn();
$qry13 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='alkolde' and yayin='1'");
$alkolde = $qry13->fetchColumn();
$qry14 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='zeytinyaginda' and yayin='1'");
$zeytinyaginda = $qry14->fetchColumn();
$qry15 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='geven' and yayin='1'");
$geven = $qry15->fetchColumn();
$qry16 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='kekik' and yayin='1'");
$kekik = $qry16->fetchColumn();
$qry17 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='kestane' and yayin='1'");
$kestane = $qry17->fetchColumn();
$qry18 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='sedir' and yayin='1'");
$sedir = $qry18->fetchColumn();
$qry19 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='okaliptus' and yayin='1'");
$okaliptus = $qry19->fetchColumn();
$qry20 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='hayit' and yayin='1'");
$hayit = $qry20->fetchColumn();
$qry21 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='maydanoz' and yayin='1'");
$maydanoz = $qry21->fetchColumn();
$qry22 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='puren' and yayin='1'");
$puren = $qry22->fetchColumn();
$qry23 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='pamuk' and yayin='1'");
$pamuk = $qry23->fetchColumn();
$qry24 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='aycicegi' and yayin='1'");
$aycicegi = $qry24->fetchColumn();
$qry25 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='narenciye' and yayin='1'");
$narenciye = $qry25->fetchColumn();
$qry26 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='orman' and yayin='1'");
$orman = $qry26->fetchColumn();
$qry27 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='ucgul' and yayin='1'");
$ucgul = $qry27->fetchColumn();
$qry28 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='akasya' and yayin='1'");
$akasya = $qry28->fetchColumn();
$qry29 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='ihlamur' and yayin='1'");
$ihlamur = $qry29->fetchColumn();
$qry30 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='kir' and yayin='1'");
$kir = $qry30->fetchColumn();
$qry31 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='yayla' and yayin='1'");
$yayla = $qry31->fetchColumn();
$qry32 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='karacali' and yayin='1'");
$karacali = $qry32->fetchColumn();
$qry33 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='kanola' and yayin='1'");
$kanola = $qry33->fetchColumn();
$qry34 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='keciboynuzu' and yayin='1'");
$keciboynuzu = $qry34->fetchColumn();
$qry35 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='anason' and yayin='1'");
$anason = $qry35->fetchColumn();
$qry36 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='lavanta' and yayin='1'");
$lavanta = $qry36->fetchColumn();
$qry37 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='cam' and yayin='1'");
$cam = $qry37->fetchColumn();
$qry38 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='mese' and yayin='1'");
$mese = $qry38->fetchColumn();
$qry39 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori3='gevenkekik' and yayin='1'");
$geven_kekik = $qry39->fetchColumn();
$qry40 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori1='ari' and yayin='1'");
$ari = $qry40->fetchColumn();
$qry41 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='arikolonisi' and yayin='1'");
$arikolonisi = $qry41->fetchColumn();
$qry42 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='anaari' and yayin='1'");
$anaari = $qry42->fetchColumn();
$qry43 = $db->query("SELECT COUNT(*) as num FROM ilanlar WHERE kategori2='damizlik' and yayin='1'");
$damizlik = $qry43->fetchColumn();
?>

<div class="category">
<div class="title">
<span style="font-size:18px; font-weight:bold; color:#000;position:absolute;left: 18%; top: 3%">KATEGORİLER</span>
</div>

<ul>
<li><a href="/kategori/bal/1">BAL (<?php echo $bal;?>)</a></li>
    <ul>
    <li><a href="/altkategori/cicek/1">Çiçek Balı (<?php echo $cicek;?>)</a></li>
    	<ul>
   		<?php if($geven!=0){?><li><a href="/altaltkategori/geven/1">Geven Balı (<?php echo $geven;?>)</a></li><?php }?>
        <?php if($kekik!=0){?><li><a href="/altaltkategori/kekik/1">Kekik Balı (<?php echo $kekik;?>)</a></li><?php }?>
        <?php if($geven_kekik!=0){?><li><a href="/altaltkategori/gevenkekik/1">Geven-Kekik Balı (<?php echo $geven_kekik;?>)</a></li><?php }?>
        <?php if($kestane!=0){?><li><a href="/altaltkategori/kestane/1">Kestane Balı (<?php echo $kestane;?>)</a></li><?php }?>
        <?php if($sedir!=0){?><li><a href="/altaltkategori/sedir/1">Sedir Balı (<?php echo $sedir;?>)</a></li><?php }?>
        <?php if($okaliptus!=0){?><li><a href="/altaltkategori/okaliptus/1">Okaliptus Balı (<?php echo $okaliptus;?>)</a></li><?php }?>
        <?php if($hayit!=0){?><li><a href="/altaltkategori/hayit/1">Hayıt Balı (<?php echo $hayit;?>)</a></li><?php }?>
        <?php if($maydanoz!=0){?><li><a href="/altaltkategori/maydanoz/1">Maydanoz Balı (<?php echo $maydanoz;?>)</a></li><?php }?>
        <?php if($puren!=0){?><li><a href="/altaltkategori/puren/1">Püren Balı (<?php echo $puren;?>)</a></li><?php }?>
        <?php if($pamuk!=0){?><li><a href="/altaltkategori/pamuk/1">Pamuk Balı (<?php echo $pamuk;?>)</a></li><?php }?>
        <?php if($aycicegi!=0){?><li><a href="/altaltkategori/aycicegi/1">Ayçiçeği Balı (<?php echo $aycicegi;?>)</a></li><?php }?>
        <?php if($narenciye!=0){?><li><a href="/altaltkategori/narenciye/1">Narenciye Balı (<?php echo $narenciye;?>)</a></li><?php }?>
        <?php if($orman!=0){?><li><a href="/altaltkategori/orman/1">Orman Gülü Balı (<?php echo $orman;?>)</a></li><?php }?>
        <?php if($ucgul!=0){?><li><a href="/altaltkategori/ucgul/1">Üçgül Balı (<?php echo $ucgul;?>)</a></li><?php }?>
        <?php if($akasya!=0){?><li><a href="/altaltkategori/akasya/1">Akasya Balı (<?php echo $akasya;?>)</a></li><?php }?>
        <?php if($ihlamur!=0){?><li><a href="/altaltkategori/ihlamur/1">Ihlamur Balı (<?php echo $ihlamur;?>)</a></li><?php }?>
        <?php if($kir!=0){?><li><a href="/altaltkategori/kir/1">Kır Çiçeği Balı (<?php echo $kir;?>)</a></li><?php }?>
        <?php if($yayla!=0){?><li><a href="/altaltkategori/yayla/1">Yayla Balı (<?php echo $yayla;?>)</a></li><?php }?>
        <?php if($karacali!=0){?><li><a href="/altaltkategori/karacali/1">Karaçalı Balı (<?php echo $karacali;?>)</a></li><?php }?>
        <?php if($kanola!=0){?><li><a href="/altaltkategori/kanola/1">Kanola Balı (<?php echo $kanola;?>)</a></li><?php }?>
        <?php if($keciboynuzu!=0){?><li><a href="/altaltkategori/keciboynuzu/1">Keçiboynuzu Balı (<?php echo $keciboynuzu;?>)</a></li><?php }?>
        <?php if($anason!=0){?><li><a href="/altaltkategori/anason/1">Anason Balı (<?php echo $anason;?>)</a></li><?php }?>
        <?php if($lavanta!=0){?><li><a href="/altaltkategori/lavanta/1">Lavanta Balı (<?php echo $lavanta;?>)</a></li><?php }?>
        </ul>
    <li><a href="/altkategori/salgi/1">Salgı Balı (<?php echo $salgi;?>)</a></li>
    	<ul>
    	<?php if($cam!=0){?><li><a href="/altaltkategori/cam/1">Çam Balı (<?php echo $cam;?>)</a></li><?php }?>
        <?php if($mese!=0){?><li><a href="/altaltkategori/mese/1">Meşe Balı (<?php echo $mese;?>)</a></li><?php }?>
        </ul>
    </ul>
    <br />
<li><a href="/kategori/polen/1">POLEN (<?php echo $polen;?>)</a></li>
    <ul>
   <?php if($yas!=0){?> <li><a href="/altkategori/yas/1">Yaş (<?php echo $yas;?>)</a></li><?php }?>
    <?php if($kurutulmus!=0){?><li><a href="/altkategori/kurutulmus/1">Kurutulmuş (<?php echo $kurutulmus;?>)</a></li><?php }?>
    </ul>
    <br />
<li><a href="/kategori/arisutu/1">ARISÜTÜ (<?php echo $arisutu;?>)</a></li>
    <ul>
    <?php if($yas2!=0){?><li><a href="/altkategori/yas2/1">Yaş (<?php echo $yas2;?>)</a></li><?php }?>
    <?php if($kurutulmus2!=0){?><li><a href="/altkategori/kurutulmus2/1">Kurutulmuş (<?php echo $kurutulmus2;?>)</a></li><?php }?>
    <?php if($kapsul!=0){?><li><a href="/altkategori/kapsul/1">Kapsül (<?php echo $kapsul;?>)</a></li><?php }?>
    </ul>
    <br /><br />
<li><a href="/kategori/propolis/1">PROPOLİS (<?php echo $propolis;?>)</a></li>
    <ul>
    <?php if($suda!=0){?><li><a href="/altkategori/suda/1">Suda (<?php echo $suda;?>)</a></li><?php }?>
    <?php if($ham!=0){?><li><a href="/altkategori/ham/1">Ham (<?php echo $ham;?>)</a></li><?php }?>
    <?php if($alkolde!=0){?><li><a href="/altkategori/alkolde/1">Alkolde (<?php echo $alkolde;?>)</a></li><?php }?>
    <?php if($zeytinyaginda!=0){?><li><a href="/altkategori/zeytinyaginda/1">Zeytin Yağında (<?php echo $zeytinyaginda;?>)</a></li><?php }?>
    </ul>
    <br />
<li><a href="/kategori/ari/1">ARI (<?php echo $ari;?>)</a></li>
    <ul>
   <?php if($arikolonisi!=0){?> <li><a href="/altkategori/arikolonisi/1">Arı Kolonisi (<?php echo $arikolonisi;?>)</a></li><?php }?>
   <?php if($anaari!=0){?><li><a href="/altkategori/anaari/1">Ana Arı (<?php echo $anaari;?>)</a></li><?php }?>
   <?php if($damizlik!=0){?><li><a href="/altkategori/damizlik/1">Damızlık (<?php echo $damizlik;?>)</a></li><?php }?>
    </ul>
</ul>

</div>
<div class="clear"></div>
<!--<div class="leftMenu">
<div class="title">
<span style="font-size:18px; font-weight:bold; color:#000;position:absolute;left: 20%; top: 3%">KURUMSAL</span>
</div>

<ul>
<li><a href="/hakkimizda">Hakkımızda</a></li>
<li><a href="/hizmetlerimiz">Hizmetlerimiz</a></li>
<li><a href="/yardim">Yardım</a></li>
<li><a href="/iletisim">İletişim</a></li>
</ul>

</div>-->