<?php
ob_start();
session_start();
require_once('../inc/db.php');
require_once('../inc/functions.php');

$ilanno = $_SESSION["ilanno"];
$memberid = $_SESSION["SESS_MEMBER_ID"];

// We're putting all our files in a directory called images.
$uploaddir = '../images/ilan-images/';

// The posted data, for reference
$file = $_POST['value'];
$name = $_POST['name'];

// Get the mime
$getMime = explode('.', $name);
$mime = end($getMime);

// Separate out the data
$data = explode(',', $file);

// Encode it correctly
$encodedData = str_replace(' ','+',$data[1]);
$decodedData = base64_decode($encodedData);

// You can use the name given, or create a random name.
// We will create a random name!

$randomName = substr_replace(sha1(microtime(true)), '', 12).'.'.$mime;


if(file_put_contents($uploaddir.$randomName, $decodedData)) {
	
	$qry = $db->query("INSERT INTO ilan_images (image_id, ilan_no, image_name) VALUES ('$memberid','$ilanno','$randomName')");
	if($qry){
	echo $randomName.":uploaded successfully";
	}
}
else {
	// Show an error message should something go wrong.
	echo "Something went wrong. Check that the file isn't corrupted";
}


?>