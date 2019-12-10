<?php
error_reporting(0);
$image = $_POST['image'];
$bin = base64_decode($image);

if (file_put_contents($_GET['name'], $bin)){
	$result = array(
		"status" =>200,
		"description" => "Upload Sukses"
	);
}else{
	$result = array(
		"status" =>422,
		"description" => "Upload Gagal"
	);
}
echo json_encode($result);
?>
