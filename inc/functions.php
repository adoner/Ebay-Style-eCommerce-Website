<?php
session_start();
$uyelogin = $_SESSION["SESS_USER_ID"];

function seo($s) {
 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
 $s = str_replace($tr,$eng,$s);
 $s = strtolower($s);
 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
 $s = preg_replace('/\s+/', '-', $s);
 $s = preg_replace('|-+|', '-', $s);
 $s = preg_replace('/#/', '', $s);
 $s = str_replace('.', '', $s);
 $s = trim($s, '-');
 $s = trim($s, '?');
 return $s;
}

function uzantibul($dosya) {
$uz = pathinfo($dosya);
$uz = $uz["extension"];
return $uz;
}

function resimIsim($kackarakter) { 
	$char="abcdefghijklmnoprstuwvyzqxABCDEFGHIJKLMNOPRSTUVWYZQX1234567890"; /// İzin verilen karakterler ? 
	for ($k=1;$k<=$kackarakter;$k++){ 
		$h=substr($char,mt_rand(0,strlen($char)-1),1); 
		$q.=$h; 
	} 
		return $q; 
}

function sms_gonder ($Url,$strRequest) { 
	$ch=curl_init();
	$veri = http_build_query($strRequest);
	curl_setopt($ch, CURLOPT_URL, $Url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1) ;
	curl_setopt($ch, CURLOPT_POSTFIELDS,$veri);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}
function activeCode($kackarakter) { 
	$char="abcdefghijklmnoprstuwvyzqxABCDEFGHIJKLMNOPRSTUVWYZQX1234567890"; /// İzin verilen karakterler ? 
	for ($k=1;$k<=$kackarakter;$k++){ 
		$h=substr($char,mt_rand(0,strlen($char)-1),1); 
		$q.=$h; 
	} 
		return $q; 
}
?>