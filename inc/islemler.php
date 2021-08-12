<?php
ob_start();
session_start();
include("db.php");
include("functions.php");
require_once("class.phpmailer.php");
require_once("SimpleImage.php");
$islem = $_GET['islem'];

if($islem=='uyeKayit'){
	
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = '6Ld3SS4UAAAAAIBj9iwgEy-88AP3rD3cQ22kNnLR';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.	'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success){
	
				$ad = $_POST["ad"];
				$soyad = $_POST["soyad"];
				$eposta = $_POST["eposta"];
				$telefon = $_POST["telefon"];
				$sehir = $_POST["sehir"];
				$sifre = $_POST["sifre"];
				$kimlik = $_POST["kimlik"];
				$tur = $_POST["tur"];
				$role = $_POST["role"];
				$tarih = date("Y-m-d");
				$_SESSION["eposta"] = $eposta;
				
				$sorgu=$db->query("SELECT eposta FROM members")->fetchAll();
						
						foreach($sorgu as $value){
							
							$members[] = $value['eposta'];
							
							}
			
						if(@in_array($eposta, $members)){
						?>
							<script>
							alert("Bu E-Posta Daha Önce Üyelik İçin Kullanılmış")
							window.location.href = '/yeniuyelik';
							</script>
						<?php 
						exit();
						}
							
						if(@!in_array($eposta, $members)){
							
							
							## Uzantı Kontrollerim
							$uzanti = array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
							$isim = resimIsim(8);
							$uznt = uzantibul($_FILES['resim']['name']);
							$resim_adi = $isim.".".$uznt;
							$dizin = "../images/user-id-images";
						
							if(in_array(strtolower(@$_FILES['resim']['type']),$uzanti)){
											 
								move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$resim_adi}");			 
								$load_path = $resim_adi;
								
							}
				
				$qry = $db->query("INSERT INTO members (ad, soyad, eposta, telefon, sifre, sehir, role, kayit_tarihi, kimlikturu, kimlik_image) VALUES ('$ad','$soyad','$eposta','$telefon','".md5($sifre)."','$sehir','$role','$tarih','$kimlik','$load_path')");
				
				if($qry){
					
					$mail = new PHPMailer();
					$mail->IsSMTP(); // send via SMTP
					$mail->CharSet="UTF-8";
					$mail->SMTPSecure = 'tls';
					$mail->Port = 587;
					$mail->Host     = "mail.aricimdan.com"; // SMTP servers
					$mail->SMTPAuth = true;     // turn on SMTP authentication
					$mail->Username = "iletisim@aricimdan.com";  // SMTP username
					$mail->Password = "Aricimdan55"; // SMTP password	
					$mail->From     = "iletisim@aricimdan.com"; // smtp kullanýcý adýnýz ile ayný olmalý
					$mail->Fromname = "Arıcımdan";
					$mail->AddAddress("$eposta","$ad");
					$mail->Subject  = "ÜYELİK";
					$mail->IsHTML(true);
					$mail->Body     =  "<html>
					<head>
					<meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
					</head>
					<body>
					
					<div style='position:relative; float:left; width:600px; height:auto; background-color: #CCCCCC'><!--main-->
					
					<div style='position:relative; padding-top:12px; width:100%; height:70px; background-color: #F60;'>
	
					<div style='position:absolute; margin-left:200px'>
					<img src='www.aricimdan.com/images/logo.png' width='200px' height='50px' />
					</div>
					
					</div>
					
					<div style='position:relative; float:left; width:600px; height:auto; padding:30px 0px 20px 0px'>
					<p style='text-align:center'>ARICIMDAN.COM ailesine hoşgeldiniz</p>
					<p style='text-align:center'>Üyelik isteğiniz bize ulaştı, verdiğiniz bilgiler incelenerek 3 iş günü içersinde üyeliğiniz sonuçlandırılacak ve tarafınıza E-posta ve Kısa mesaj (SMS) ile bildirilecektir.</p>
					<p style='text-align:center'>Ailmize katılmanızın bizi çok gururlandırdığını belirtiyor ve hayırlı olmasını temenni ediyoruz..</p>
					</div>
					
					<div style='position:relative; float:left; width:600px; height:100px; background-color: #F60'>
					<div style='position:absolute; margin-top:35px; margin-left:210px'>
					<a href='https://www.facebook.com/aricimdan' target='_blank'><img src='www.aricimdan.com/images/sosyalmedya/fbicon.png' width='40px' height='40px' /></a>
					<a href='https://www.twitter.com/aricimdan' target='_blank'><img src='www.aricimdan.com/images/sosyalmedya/twicon.png' width='40px' height='40px' /></a>
					<a href='https://www.youtube.com/' target='_blank'><img src='www.aricimdan.com/images/sosyalmedya/yticon.png' width='40px' height='40px' /></a>
					<a href='https://www.instagram.com/aricimdan' target='_blank'><img src='www.aricimdan.com/images/sosyalmedya/insicon.png' width='40px' height='40px' /></a>
					</div>
					</div>
					
					</div><!--main end-->
					
					</body>
					</html>";
					$mail->Send();
					
					if($tur == 'mobile'){
						
						header("location: http://mobile.aricimdan.com");
						
						}else{
							
						header("location: /tebrikler ");
						
					}
				}
								
					exit();
						}

			
		}else{
			
			if($tur == 'mobile'){?>
            	<script type="text/javascript" language="javascript">
                alert("Robot verification failed, please try again.");
                window.location="http://mobile.aricimdan.com/uyekayit";
                </script>
            <?php } ?>
				<script type="text/javascript" language="javascript">
                alert("Robot verification failed, please try again.");
                window.location="/yeniuyelik";
                </script>
			<?php
		}
	}else{
		
		if($tur == 'mobile'){
			?>
            	<script type="text/javascript" language="javascript">
				alert("Lütfen reCAPTCHA kutusunu tıklayınız");
				window.location="http://mobile.aricimdan.com/uyekayit";
				</script>
			<?php } ?>
                <script type="text/javascript" language="javascript">
                alert("Lütfen reCAPTCHA kutusunu tıklayınız");
                window.location="/yeniuyelik";
                </script>
            <?php
	}
}

if($islem=='getMesajKayit'){
	
	$ad = $_POST["ad"];
	$soyad = $_POST["soyad"];
	$eposta = $_POST["eposta"];
	$telefon = $_POST["telefon"];
	$mesaj = $_POST["mesaj"];
	$storeno = $_POST["storeno"];
	
	$qry = $db->query("INSERT INTO messages (ad, soyad, eposta, telefon, mesaj, storeno) VALUES ('$ad','$soyad','$eposta','$telefon','$mesaj','$storeno')");
	
	if($qry){?>
				<script>
				alert("Mesajınız Gönderildi..")
				window.location.href = '/';
				</script>
				<?php }
				
				exit();
}

if($islem=='ilanMesajKayit'){
	
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = '6Ld3SS4UAAAAAIBj9iwgEy-88AP3rD3cQ22kNnLR';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.	'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success){
	
	$ad = $_POST["ad"];
	$soyad = $_POST["soyad"];
	$eposta = $_POST["eposta"];
	$telefon = $_POST["telefon"];
	$mesaj = $_POST["mesaj"];
	$memberid = $_POST["memberid"];
	$ilanid = $_POST["ilanid"];
	$tarih = date("Y-m-d");
	
	$qry = $db->query("INSERT INTO i_messages (ad, soyad, eposta, telefon, mesaj, memberid, kayit_tarihi) VALUES ('$ad','$soyad','$eposta','$telefon','$mesaj','$memberid','$tarih')");
	
	if($qry){?>
				<script>
				alert("Mesajınız Gönderildi..")
				
				if(<?php echo $ilanid;?>!=0){
					window.location.href = '/ilandetay/<?php echo $ilanid;?>';
				}
				if(<?php echo $ilanid;?>==0){
					window.location.href = '/uye/<?php echo $memberid;?>';	
					}
				</script>
				<?php }
				
				exit();
				
				}else{
					
			?>
				<script type="text/javascript" language="javascript">
                alert("Robot verification failed, please try again.");
                window.location="/ilanmesaj/<?php echo $memberid;?>/<?php echo $ilanid;?>";
                </script>
			<?php
		}
	}else{
		
		$memberid = $_SESSION["memberid"];
		$ilanid = $_SESSION["ilanid"];
	?>
		<script type="text/javascript" language="javascript">
        alert("Lütfen reCAPTCHA kutusunu tıklayınız");
        window.location="/ilanmesaj/<?php echo $memberid;?>/<?php echo $ilanid;?>";
        </script>
    <?php
	}
}

if($islem=='mesajKayit'){
	
	if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6Ld3SS4UAAAAAIBj9iwgEy-88AP3rD3cQ22kNnLR';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.	'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
	
			$ad = $_POST["ad"];
			$soyad = $_POST["soyad"];
			$eposta = $_POST["eposta"];
			$telefon = $_POST["telefon"];
			$mesaj = $_POST["mesaj"];
			
			$qry = $db->query("INSERT INTO messages (ad, soyad, eposta, telefon, mesaj) VALUES ('$ad','$soyad','$eposta','$telefon','$mesaj')");
			
			if($qry){?>
						<script>
						alert("Mesajınız Gönderildi..")
						window.location.href = '/';
						</script>
						<?php }
						
						exit();
						
			else:
			?>
				<script type="text/javascript" language="javascript">
                alert("Robot verification failed, please try again.");
                window.location="/iletisim";
                </script>
			<?php
        endif;
    else:
	?>
		<script type="text/javascript" language="javascript">
        alert("Lütfen reCAPTCHA kutusunu tıklayınız");
        window.location="/iletisim";
        </script>
    <?php
    endif;
}


if($islem=='uyeGiris'){
	
	$sitetype = $_POST["siteType"];
	$chartLogin = $_POST["chartLogin"];
	
	if($sitetype=="mobile"){
					
$member2=$db->query("SELECT * FROM members WHERE eposta='".$_POST['login']."' AND sifre='".md5($_POST['password'])."' AND onay='1'")->fetch();
$qry2=$db->query("SELECT COUNT(*) as num FROM members WHERE eposta='".$_POST['login']."' AND sifre='".md5($_POST['password'])."' AND onay='1'");
$rows = $qry2->fetchColumn();

			if($rows==1) {
				
				session_regenerate_id();
				$_SESSION['MEMBER_ID'] = $member2['id'];
				$_SESSION['MEMBER_NAME'] = $member2['ad'];
				$_SESSION['MEMBER_LASTNAME'] = $member2['soyad'];
				$_SESSION['MEMBER_STORENO'] = $member2['storeno'];
				$_SESSION['MEMBER_UYELIK'] = $member2['uyelik'];
				session_write_close();
				
				header("location: http://mobile.aricimdan.com/members/pages/main.php");		
				exit();
				
			}else {
				header("location: http://mobile.aricimdan.com/uyegiris");
				exit();
			}
		
		
		}
	
	if($_POST){
	
		if($_POST['login']=="" or $_POST['password']==""){
			
			header("location:/uyegiris");
			
			}
					
$member=$db->query("SELECT * FROM members WHERE eposta='".$_POST['login']."' AND sifre='".md5($_POST['password'])."' AND onay='1'")->fetch();
$qry=$db->query("SELECT COUNT(*) as num FROM members WHERE eposta='".$_POST['login']."' AND sifre='".md5($_POST['password'])."' AND onay='1'");
$rows = $qry->fetchColumn();

			if($rows==1) {
				
				if($member['role']=='user'){
					
					session_regenerate_id();
					$_SESSION['SESS_USER_ID'] = $member['id'];
					$_SESSION['SESS_USER_NAME'] = $member['ad'];
					$_SESSION['SESS_USER_LASTNAME'] = $member['soyad'];
					$_SESSION['ROLE'] = "user";
					session_write_close();
					
					if($chartLogin==""){
						header("location: /userpanel/pages/main.php");
					}
					if($chartLogin=="sepetGiris"){
						header("location: /sepetim");
						}
					exit();

					}
				
				session_regenerate_id();
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				$_SESSION['SESS_MEMBER_NAME'] = $member['ad'];
				$_SESSION['SESS_MEMBER_LASTNAME'] = $member['soyad'];
				$_SESSION['SESS_MEMBER_STORENO'] = $member['storeno'];
				$_SESSION['SESS_MEMBER_UYELIK'] = $member['uyelik'];
				$_SESSION['ROLE'] = "member";
				session_write_close();
				
				header("location: /memberpanel/pages/main-page.php");		
				exit();
				
			}else {
				header("location: /uyegiris");
				exit();
			}
	}
	
	
}

if($islem=='menusil'){
	
	$id=$_GET['id'];
	$sql=$db->query("DELETE FROM store_menus WHERE id='$id'");
	if($sql){
	
	?>
		<script type="text/javascript" language="javascript">
		alert("Menü Silindi...");
		window.location="/memberpanel/pages/main-page.php?page=menuler";
		</script>
	<?php 
	}
}

if($islem=='urunsil'){
	
	$id=$_GET['id'];
	$sql=$db->query("DELETE FROM store_products WHERE id='$id'");
	if($sql){
	
	?>
		<script type="text/javascript" language="javascript">
		alert("Ürün Silindi...");
		window.location="/memberpanel/pages/main-page.php?page=urunler";
		</script>
	<?php 
	}
}

if($islem=='e-mesajsil'){
	
	$id=$_GET['id'];
	$site=$_GET["site"];
	$sql=$db->query("DELETE FROM e_messages WHERE id='$id'");
	if($sql){
	
		if($site=='mobile'){
	?>
		<script type="text/javascript" language="javascript">
		alert("Mesaj Silindi...");
		window.location="http://mobile.aricimdan.com/members/pages/mesaj.php?mesaj=e_messages";
		</script>
	<?php 
		}
	?>
    	<script type="text/javascript" language="javascript">
		alert("Mesaj Silindi...");
		window.location="/memberpanel/pages/main-page.php?page=e-mesajlar";
		</script>  
	<?php	
	}
}

if($islem=='i-mesajsil'){
	
	$id=$_GET['id'];
	$site=$_GET["site"];
	$sql=$db->query("DELETE FROM i_messages WHERE id='$id'");
	if($sql){
	
		if($site=='mobile'){
	?>
		<script type="text/javascript" language="javascript">
		alert("Mesaj Silindi...");
		window.location="http://mobile.aricimdan.com/members/pages/mesaj.php?mesaj=i_messages";
		</script>
	<?php
	}
	?>
    	<script type="text/javascript" language="javascript">
		alert("Mesaj Silindi...");
		window.location="/memberpanel/pages/main-page.php?page=e-mesajlar";
		</script>  
	<?php	 
	}
}

if($islem=='ilansil'){
	
	$id=$_GET['id'];
	$site = $_GET["site"];
	$srg = $db->query("SELECT * FROM ilanlar WHERE id=$id")->fetch();
	$srg2 = $db->query("SELECT * FROM ilan_images WHERE ilan_no=$id");
	unlink("../images/ilan-images/sertifikalar/".$srg["analiz_rapor_path"]);
	
	foreach($srg2 as $silimage){
		
		unlink("../images/ilan-images/".$silimage["image_name"]);
		$sql2=$db->query("DELETE FROM ilan_images WHERE ilan_no='$silimage[ilan_no]'");
		
		}
		
	$sql=$db->query("DELETE FROM ilanlar WHERE id='$id'");
	
	if($sql){
		
		if($site=='mobile'){?>
        
        <script type="text/javascript" language="javascript">
		alert("İlan Silindi...");
		window.location="http://mobile.aricimdan.com/members/pages/ilanlar.php";
		</script>
        
        <?php }else{?>
 
		<script type="text/javascript" language="javascript">
		alert("İlan Silindi...");
		window.location="/memberpanel/pages/main-page.php?page=ilanlar";
		</script>
        
	<?php 
		}
	}
}

if($islem=='uyesil'){
	
	$id=$_GET['id'];
	$sql=$db->query("DELETE FROM members WHERE id='$id'");
	if($sql){
	
	?>
		<script type="text/javascript" language="javascript">
		alert("Üye Silindi...");
		window.location="/adminpanel/pages/main.php?page=uyeler";
		</script>
	<?php 
	}
}

if($islem=='imagesil'){
	
	$id=$_GET['id'];
	$ilanno = $_GET['ilanno'];
	$site = $_GET['site'];
	$srg = $db->query("SELECT * FROM ilan_images WHERE id='$id'")->fetch();
	unlink("../images/ilan-images/".$srg["image_name"]);
	$sql=$db->query("DELETE FROM ilan_images WHERE id='$id'");
	if($sql){
		
		if($site=='mobile'){
		?>
		<script type="text/javascript" language="javascript">
		alert("Resim Silindi...");
		window.location="http://mobile.aricimdan.com/imageupload/<?php echo $ilanno;?>";
		</script>
		<?php
		}else{
		?>
		<script type="text/javascript" language="javascript">
		alert("Resim Silindi...");
		window.location="/memberpanel/pages/main-page.php?page=resimyukle&id=<?php echo $ilanno;?>";
		</script>
        <?php 
			}
	}
}

if($islem=='MagazaKurulum'){
	
	$magazaad = $_POST["magazaad"];
	$logo = $_POST["logo"];
	$yetkili = $_POST["yetkili"];
	$eposta = $_POST["eposta"];
	$telefon = $_POST["telefon"];
	$fax = $_POST["fax"];
	$adres = $_POST["adres"];
	$web = $_POST["web"];
	$facebook = $_POST["facebook"];
	$twitter = $_POST["twitter"];
	$youtube = $_POST["youtube"];
	$instagram = $_POST["instagram"];
	$gplus = $_POST["gplus"];
	
	$qry = $db->query("INSERT INTO stores (mgzadi, logo, yetkili, tel, fax, eposta, adres, web, facebook, twitter, youtube, instagram, gplus) VALUES ('$magazaad','$logo','$yetkili','$telefon','$fax','$eposta','$adres','$web','$facebook','$twitter','$youtube','$instagram','$gplus')");
	
	if($qry){
		
		header("location: /memberpanel/pages/main-page.php");
		
		}
}

if($islem=='menuekle'){
	
	$storeno = $_POST["storeno"];
	$menuadi = $_POST["title"];
	$menuseo = seo($menuadi);
	$icerik = $_POST["editor1"];
	$kayit_tarihi = date("Y-m-d");
	
	$qry = $db->query("INSERT INTO store_menus (storeno, menuadi, menuseo, icerik, kayit_tarihi) VALUES ('$storeno','$menuadi','$menuseo','$icerik','$kayit_tarihi')");
	
	if($qry){
		
		header("location: /memberpanel/pages/main-page.php?page=menuler");
		
		}
	
}

if($islem=='menuduzenle'){
	
	$id = $_POST['id'];
	$menuadi = $_POST["title"];
	$menuseo = seo($menuadi);
	$icerik = $_POST["editor1"];
	$kayit_tarihi = date("Y-m-d");
	
	$qry = $db->query("UPDATE store_menus SET menuadi='$menuadi', menuseo='$menuseo', icerik='$icerik', kayit_tarihi='$kayit_tarihi' WHERE id='$id'");
	
	if($qry){
		
		header("location: /memberpanel/pages/main-page.php?page=menuler");
		
		}
	
}

if($islem=='ilanekle'){
	
	$memberid = $_POST["memberid"];
	$storeno = $_POST["storeno"];
	$kategori1 = $_POST["kategori1"];
	$kategori2a = $_POST["kategori2a"];
	$kategori2b = $_POST["kategori2b"];
	$kategori2c = $_POST["kategori2c"];
	$kategori2d = $_POST["kategori2d"];
	$kategori2e = $_POST["kategori2e"];
	$kategori2aa = $_POST["kategori2aa"];
	$kategori2ab = $_POST["kategori2ab"];
	if($kategori1=='bal'){$kategori2=$kategori2a;}
	if($kategori1=='polen'){$kategori2=$kategori2b;}
	if($kategori1=='arisutu'){$kategori2=$kategori2c;}
	if($kategori1=='propolis'){$kategori2=$kategori2d;}
	if($kategori1=='ari'){$kategori2=$kategori2e;}
	if($kategori2=='cicek'){$kategori3=$kategori2aa;}
	if($kategori2=='salgi'){$kategori3=$kategori2ab;}
	$baslik = addslashes($_POST["baslik"]);
	$satis = $_POST["satis"];
	$sunum = $_POST["sunum"];
	$rakim = $_POST["rakim"];
	$yoresi = $_POST["yoresi"];
	$kimden = $_POST["kimden"];
	$teslim = $_POST["teslim"];
	$kargoucret = $_POST["kargoucret"];
	$kargoanlasma = $_POST["kargoanlasma"];
	$kargo = $_POST["kargo"];
	$marka = $_POST["marka"];
	$markaadi = $_POST["markaadi"];
	$uretim = $_POST["uretim"];
	$fiyat = $_POST["fiyat"];
	$odemesekli = $_POST["odemesekli"];
	$banka = $_POST["banka"];
	$hesapsahibi = $_POST["hesapsahibi"];
	$iban = $_POST["iban"];
	$analiz = $_POST["analiz"];
	$aciklama = addslashes($_POST["editor1"]);
	$kayit_tarihi = date("Y-m-d");
	$site = $_POST["site"];
	
		if($analiz=='Var'){
			## Uzantı Kontrollerim
				$uzanti = array('application/pdf');
				$isim = resimIsim(8);
				$uznt = uzantibul($_FILES['analizrapor']['name']);
				$dosya_adi = $isim.".".$uznt;
				$dizin = "../images/ilan-images/sertifikalar";
			
				if(in_array(strtolower(@$_FILES['analizrapor']['type']),$uzanti)){
								 
					move_uploaded_file($_FILES['analizrapor']['tmp_name'],"./$dizin/{$dosya_adi}");			 
					$load_path = $dosya_adi;
					
				}
		}
	
	$qry = $db->query("INSERT INTO ilanlar (kategori1, kategori2, kategori3, baslik, image_id, memberid, storeno, satis_sekli, sunum_sekli, rakim, yoresi, kimden, teslim, kargo_ucret, kargo_anlasma, kargosirketi, marka, marka_adi, uretim_yili, fiyat, odeme_sekli, banka, hesapsahibi, ibanno, analiz, aciklama, kayit_tarihi, analiz_rapor_path) VALUES ('$kategori1','$kategori2','$kategori3','$baslik','$memberid','$memberid','$storeno','$satis','$sunum','$rakim','$yoresi','$kimden','$teslim','$kargoucret','$kargoanlasma','$kargo','$marka','$markaadi','$uretim','$fiyat','$odemesekli','$banka','$hesapsahibi','$iban','$analiz','$aciklama','$kayit_tarihi','$load_path')");
	
	if($qry){
		
		if($site=='mobile'){?>
			
			<script type="text/javascript" language="javascript">
			window.location.href = 'http://mobile.aricimdan.com/members/pages/main.php';
			</script>
            
		<?php }else{ ?>
        
		<script type="text/javascript" language="javascript">
		window.location.href = '/memberpanel/pages/main-page.php?page=ilanlar';
		</script>
        
		<?php 
		}
	}
		
}
if($islem=='ilanduzenle'){
	
	$id = $_POST["id"];
	$baslik = addslashes($_POST["baslik"]);
	$satis = $_POST["satis"];
	$sunum = $_POST["sunum"];
	$rakim = $_POST["rakim"];
	$yoresi = $_POST["yoresi"];
	$kimden = $_POST["kimden"];
	$teslim = $_POST["teslim"];
	$kargoucret = $_POST["kargoucret"];
	$kargoanlasma = $_POST["kargoanlasma"];
	$kargo = $_POST["kargo"];
	$marka = $_POST["marka"];
	$markaadi = $_POST["markaadi"];
	$uretim = $_POST["uretim"];
	$fiyat = $_POST["fiyat"];
	$odemesekli = $_POST["odemesekli"];
	$banka = $_POST["banka"];
	$hesapsahibi = $_POST["hesapsahibi"];
	$iban = $_POST["iban"];
	$analiz = $_POST["analiz"];
	$aciklama = addslashes($_POST["editor1"]);
	$kayit_tarihi = date("Y-m-d");
	$site = $_POST["site"];
		
	if($analiz=='Var'){
		## Uzantı Kontrollerim
		$uzanti = array('application/pdf');
		$isim = resimIsim(8);
		$uznt = uzantibul($_FILES['analizrapor']['name']);
		$dosya_adi = $isim.".".$uznt;
		$dizin = "../images/ilan-images/sertifikalar";
	
		if(in_array(strtolower(@$_FILES['analizrapor']['type']),$uzanti)){
						 
			move_uploaded_file($_FILES['analizrapor']['tmp_name'],"./$dizin/{$dosya_adi}");			 
			$load_path = $dosya_adi;
			$srg = $db->query("SELECT * FROM ilanlar WHERE id=$id")->fetch();
			unlink("../images/ilan-images/sertifikalar/".$srg["analiz_rapor_path"]);
		}
	}
	
	if($analiz=='Yok'){
		
		$srg1 = $db->query("SELECT * FROM ilanlar WHERE id=$id")->fetch();
	
		if($srg1["analiz_rapor_path"]!=''){

			unlink("../images/ilan-images/sertifikalar/".$srg1["analiz_rapor_path"]);
			$qry1 = $db->query("UPDATE ilanlar SET analiz_rapor='0', analiz_rapor_path='' WHERE id='$id'");
			
		}
	}
	
	if($_FILES['analizrapor']['name'] == ''){
		
		$srg2 = $db->query("SELECT * FROM ilanlar WHERE id=$id")->fetch();
		$load_path = $srg["analiz_rapor_path"];
		
		}
	
	if($odemesekli=='Kapıda Ödeme'){
		
		$banka='';
		$iban='';
		$hesapsahibi='';
		
		}
		
	if($kargoanlasma=='Yok'){

		$kargo ='';
		
		}
		
	if($marka=='Yok'){

		$markaadi ='';
		
		}
		
$qry = $db->query("UPDATE ilanlar SET baslik='$baslik', satis_sekli='$satis', sunum_sekli='$sunum', rakim='$rakim', yoresi='$yoresi', kimden='$kimden', teslim='$teslim', kargo_ucret='$kargoucret', kargo_anlasma='$kargoanlasma', kargosirketi='$kargo', marka='$marka', marka_adi='$markaadi', uretim_yili='$uretim', fiyat='$fiyat', odeme_sekli='$odemesekli', banka='$banka', hesapsahibi='$hesapsahibi', ibanno='$iban', analiz='$analiz', aciklama='$aciklama', kayit_tarihi='$kayit_tarihi', analiz_rapor_path='$load_path' WHERE id='$id'");
	
	if($qry){
		
		if($site=='mobile'){?>
			
			<script type="text/javascript" language="javascript">
			alert("Değişiklikler Kaydedildi");
			window.location.href = 'http://mobile.aricimdan.com/members/pages/main.php';
			</script>
            
		<?php }else{ ?>
        
			<script type="text/javascript" language="javascript">
			alert("Değişiklikler Kaydedildi");
            window.location.href = '/memberpanel/pages/main-page.php';
            </script>
        
		<?php 
		}
		
	}
		
}

if($islem=='yayinkaldir'){
	
	$id = $_GET["id"];
	$site = $_GET["site"];
	
	$qry = $db->query("UPDATE ilanlar SET yayin='0' WHERE id='$id'");
	
		if($qry){
			
			if($site=='mobile'){
				?>
				<script type="text/javascript" language="javascript">
				alert("Yayın Durduruldu");
				window.location.href = 'http://mobile.aricimdan.com/members/pages/main.php';
				</script>
				<?php 
				}else{
				?>
				<script type="text/javascript" language="javascript">
				alert("Yayın Durduruldu");
				window.location.href = '/memberpanel/pages/main-page.php';
				</script>
			<?php }

		}
}
	
if($islem=='yayinla'){
	
	$id = $_GET["id"];
	$site = $_GET["site"];
	
	$qry = $db->query("UPDATE ilanlar SET yayin='1' WHERE id='$id'");
	
	if($qry){
		
		if($site=='mobile'){
			?>
			<script type="text/javascript" language="javascript">
			alert("Yayın Başlatıldı");
			window.location.href = 'http://mobile.aricimdan.com/members/pages/main.php';
			</script>
			<?php 
			}else{
			?>
			<script type="text/javascript" language="javascript">
			alert("Yayın Başlatıldı");
			window.location.href = '/memberpanel/pages/main-page.php';
			</script>
		<?php }

	}
	
}

if($islem=='uyeonay'){
	
	$id = $_GET["id"];
	
	$sql = $db->query("UPDATE members SET onay = '1', uyelik = '1' WHERE id='$id'");
	$qry = $db->query("SELECT * FROM members WHERE id = '$id'")->fetch();
	
		if($sql){
			
			if($qry){
			
		$numaralar = array($qry['telefon']);
		$mesaj = 'Sayin, '.$qry['ad'].' '.$qry['soyad'].' ARICIMDAN.COM uyeliginiz onaylanmistir, hemen ilan vermeye baslayabilirsiniz.'; 
		$baslik = 'ARICIMDAN';
		$veriler = array(
		'apiNo' =>'1',
		'user' =>'5548000522',
		'pass' =>'yj26f',
		'mesaj'=>$mesaj,
		'numaralar' =>$numaralar,
		'baslik' =>$baslik,
		);
		
		sms_gonder("http://masgsm.com.tr/MasApiV2/",$veriler);
			}
		?>
		<script type="text/javascript" language="javascript">
			parent.$.fancybox.close();
			window.parent.location.href = '/adminpanel/pages/main.php?page=uyeler';
		</script>

		<?php 
		}
	
}

if($islem=='uyeonaykaldir'){
	
	$id = $_GET["id"];
	
	$sql = $db->query("UPDATE members SET onay = '0', uyelik = '0' WHERE id='$id'");
	$qry = $db->query("SELECT * FROM members WHERE id = '$id'")->fetch();
	
		if($sql){
			
			if($qry){
			
		$numaralar = array($qry['telefon']);
		$mesaj = 'Sayin, '.$qry['ad'].' '.$qry['soyad'].' ARICIMDAN.COM uyeliginiz pasif hale getirilmistir, konuyla ilgili iletisim@aricimdan.com adresinden bize ulasabilirsiniz.'; 
		$baslik = 'ARICIMDAN';
		$veriler = array(
		'apiNo' =>'1',
		'user' =>'5548000522',
		'pass' =>'yj26f',
		'mesaj'=>$mesaj,
		'numaralar' =>$numaralar,
		'baslik' =>$baslik,
		);
		
		sms_gonder("http://masgsm.com.tr/MasApiV2/",$veriler);
			}?>
            <script type="text/javascript" language="javascript">
				parent.$.fancybox.close();
				window.parent.location.href = '/adminpanel/pages/main.php?page=uyeler';
			</script>

		<?php }
	
}

if($islem=='uyearama'){
	
	$query = $_POST["query"];
	$_SESSION["query"] = $query;
	
	header("location: /adminpanel/pages/main.php?page=uyearama");
	
}

if($islem=='arama'){
	
	$query_text = $_POST["query_text"];
	$_SESSION["query_text"] = $query_text;
	
	header("location: /arama");
}
if($islem=='smsgonder'){
	
		$telno = $_POST["telno"];
		$numaralar = array($telno);
		$mesaj = $_POST["mesaj"]; 
		$baslik = 'ARICIMDAN';
		$veriler = array(
		'apiNo' =>'1',
		'user' =>'5548000522',
		'pass' =>'yj26f',
		'mesaj'=>$mesaj,
		'numaralar' =>$numaralar,
		'baslik' =>$baslik,
		);
		
		sms_gonder("http://masgsm.com.tr/MasApiV2/",$veriler);
		unset($_SESSION["checked_members"]);
		?>
            <script type="text/javascript" language="javascript">
				alert("SMS Gönderilmiştir.");
				window.parent.location.href = '/adminpanel/pages/main.php?page=sms-eposta';
			</script>

		<?php
	
}
if($islem=='epostagonder'){
	
		$eposta = $_POST["eposta"];
		
		unset($_SESSION["checked_members2"]);
		?>
            <script type="text/javascript" language="javascript">
				alert("Eposta Gönderilmiştir.");
				window.parent.location.href = '/adminpanel/pages/main.php?page=sms-eposta';
			</script>

		<?php
	
}
if($islem=='uyeekle'){
	
	$checked_members = $_POST["members"];
	$_SESSION["checked_members"] = $checked_members;
	?>
	<script type="text/javascript" language="javascript">
        parent.$.fancybox.close();
        window.parent.location.href = '/adminpanel/pages/main.php?page=sms-eposta';
    </script>
	<?php	
}
if($islem=='uyeekle2'){
	
	$checked_members2 = $_POST["members"];
	$_SESSION["checked_members2"] = $checked_members2;
	?>
	<script type="text/javascript" language="javascript">
        parent.$.fancybox.close();
        window.parent.location.href = '/adminpanel/pages/main.php?page=sms-eposta';
    </script>
	<?php	
}

if($islem=='sifre_unut'){
	
	$email = $_POST["eposta"];
	$sql = $db->query("SELECT * FROM members WHERE eposta = '$email'")->fetch();
	$tot= $db->query("SELECT COUNT(*) as num FROM members WHERE eposta = '$email'");
	$total=$tot->fetchColumn();
	$activation = activeCode(10);
	$today = date('Y-m-d H-i-s');
	$sql2 = $db->query("UPDATE members SET confirmation_code = '$activation', confirmation_date = '$today' WHERE id='$sql[id]'");
	$id = $sql["id"];
	
	if($total > 0){
	
	$mail = new PHPMailer();
	$mail->IsSMTP(); // send via SMTP
	$mail->CharSet="UTF-8";
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;
	$mail->Host     = "mail.aricimdan.com"; // SMTP servers
	$mail->SMTPAuth = true;     // turn on SMTP authentication
	$mail->Username = "iletisim@aricimdan.com";  // SMTP username
	$mail->Password = "Aricimdan55"; // SMTP password	
	$mail->From     = "iletisim@aricimdan.com"; // smtp kullanýcý adýnýz ile ayný olmalý
	$mail->Fromname = "ARICIMDAN";
	$mail->AddAddress("$email");
	$mail->Subject  = "ŞİFRE YENİLEME";
	$mail->IsHTML(true);
	$mail->Body     =  "<html>
	<head>
	<meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
	</head>
	<body style='margin:0 auto'
	
	<div style='position:relative; float:left; width:600px; height:auto; background-color: #CCCCCC'><!--main-->
	<div style='position:relative; padding-top:12px; width:100%; height:70px; background-color: #F60;'>
	
	<div style='position:relative; margin-left:40%'>
	<img src='www.aricimdan.com/images/logo.png' width='200px' height='50px' />
	</div>
	
	</div>
	
	<div style='position:relative; float:left; width:100%; height:auto; padding:30px 20px 20px 20px'>
		
		<p>Sayın $sql[ad] $sql[soyad],</p>
		<p>Bu mail şifre yenileme isteğiniz üzerine gönderilmiştir yanlış olduğunu düşünüyorsanız iletisim@aricimdan.com 
		e-posta adresimiz aracılığıyla iletişime geçiniz.</p>
		
		<p>şifrenizi yenilemek için lütfen aşağıdaki linki tıklayın, <b>bu link 24 saat geçerlidir</b>.
		<br /><br />
		<a href='http://www.aricimdan.com/sifreyenile/$id/$activation' target='_self' >Şifremi yenile</a>
		</p>

	</div>
	
	</div>
	</div><!--main end-->
			
	</body>
	</html>";
	$mail->Send();
					
		if($mail){
			
		?>
    
		<script type="text/javascript" language="javascript">
        alert("Şifre yenileme linki e-posta adresinize gönderildi");
        window.location.href = '/uyegiris';
        </script>
            
        <?php
			
			}
			
	}
	
	if($total == 0){
		
		?>
    
		<script type="text/javascript" language="javascript">
        alert("Sistemde kayıtlı böyle bir eposta adresi yoktur");
        window.location.href = '/sifremiunuttum';
        </script>
            
        <?php 
		
		}
	
}

if($islem=='sifre_degistir'){
	
	$sifre = $_POST["sifre"];
	$sifre2 = $_POST["sifre2"];
	$confirmation = $_POST["confirmation"];
	$member_id = $_POST["member_id"];
	$activationcode = $_POST["activationcode"];
	
	if($confirmation == 1){
		
		if($sifre == $sifre2){
		
		$sql = $db->query("UPDATE members SET sifre='".md5($sifre)."' WHERE id='$member_id'");
		$sql2 = $db->query("UPDATE members SET confirmation_code='' WHERE id='$member_id'");
		
		?>
    
		<script type="text/javascript" language="javascript">
        alert("Şifreniz Değiştirildi");
        window.location.href = '/uyegiris';
        </script>
            
        <?php 
		}
		
		if($sifre != $sifre2){
			
		?>
    
		<script type="text/javascript" language="javascript">
        alert("Girdiğiniz şifre uyuşmuyor");
        window.location.href = '/sifreyenile/<?php echo $member_id;?>/<?php echo $activationcode;?>';
        </script>
            
        <?php 
			
			}
		
	}
	if($confirmation == 0){?>
    
	<script type="text/javascript" language="javascript">
    alert("Yetkisiz şifre değiştirme girişimi");
    window.location.href = '/';
    </script>
		
	<?php }
	
}

if($islem=='sifreDegistir'){
	
	$id = $_GET["id"];
	$site = $_POST["site"];
	$yenisifre = $_POST["yenisifre"];
	$yenisifreconf = $_POST["yenisifreconf"];
	
	$qry=$db->query("SELECT COUNT(*) as num FROM members WHERE id='$id' AND sifre='".md5($_POST['mvctsifre'])."'");
	$row = $qry->fetchColumn();
	
	if($row==1){
		
		if($yenisifre==$yenisifreconf){
			
			$qry2 = $db->query("UPDATE members SET sifre = '".md5($yenisifre)."' WHERE id = '$id'");
			?>
            <script type="text/javascript" language="javascript">
			alert("Şifreniz Değiştirilmiştir.");
			window.location.href = 'http://mobile.aricimdan.com/members/pages/main.php';
			</script>
            <?php
			
			}
			
		if($yenisifre!=$yenisifreconf){
			
			?>
            <script type="text/javascript" language="javascript">
			alert("Girdiğiniz şifreler esleşmiyor.");
			window.location.href = 'http://mobile.aricimdan.com/members/pages/sifre.php';
			</script>
            <?php
			
			}
		
		}
		
	if($row==0){
		
			?>
            <script type="text/javascript" language="javascript">
			alert("Mevcut Şifreniz Hatalı.");
			window.location.href = 'http://mobile.aricimdan.com/members/pages/sifre.php';
			</script>
            <?php
		
		}
	
}

if($islem=='resimUpload'){
	
	$memberid = $_POST["memberid"];
	$ilanid = $_POST["ilanid"];
	
	## Uzantı Kontrollerim
	$uzanti = array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
	$isim = resimIsim(8);
	$uznt = uzantibul($_FILES['images']['name']);
	$resim_adi = $isim.".".$uznt;
	$dizin = "../images/ilan-images";

	if(in_array(strtolower(@$_FILES['images']['type']),$uzanti)){
					 
		move_uploaded_file($_FILES['images']['tmp_name'],"./$dizin/{$resim_adi}");			 
		$qry = $db->query("INSERT INTO ilan_images (image_id, ilan_no, image_name) VALUES ('$memberid','$ilanid','$resim_adi')");
		
	?>
    <script type="text/javascript" language="javascript">
	alert("Resim Yüklendi.");
	window.location.href = 'http://mobile.aricimdan.com/imageupload/<?php echo $ilanid;?>';
	</script>
	<?php	
	}
	
	
}
if($islem=='userLoginCheck'){
	
	if($_SESSION["SESS_USER_ID"]){
		
	?>
	<script type="text/javascript" language="javascript">
	window.location.href = '/sepetim';
	</script>
	<?php

	}else{
		
		?>
		<script type="text/javascript" language="javascript">
		window.location.href = '/chartLogin';
		</script>
		<?php
		
		}
	
	}
?>