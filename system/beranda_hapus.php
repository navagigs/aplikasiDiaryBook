<?php
include "system/connect.php";
$id = $_GET['id'];
$sql = mysql_query("DELETE FROM diary WHERE diary_id = '$id'");

if($sql) {
	header('location:media.php?page=beranda');
} else {
	header('location:media.php?page=beranda');
}
?>