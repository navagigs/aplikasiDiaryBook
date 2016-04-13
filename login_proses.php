<?php
session_start();
include "system/connect.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$login_nava = mysql_query("SELECT * FROM pembuat WHERE username='$username' AND password='$password'");
$hasil = mysql_num_rows($login_nava);
$r	   = mysql_fetch_array($login_nava);

if($hasil > 0) {
	session_start();
	$_SESSION[pembuat_id] = $r[pembuat_id];
	$_SESSION[username]	  = $r[username];
	$_SESSION[password]	  = $r[password];
	$_SESSION[pembuat_nama] = $r[pembuat_nama];
	$_SESSION[pembuat_foto] = $r[pembuat_foto];
	$_SESSION[pembuat_akese] = $r[pembuat_akses];
	header('location:media.php?page=beranda');
} else {
	header('location:index.php');
}
?>
<!--
<meta name="author" content="Nava Gia Ginasta">
<meta name="keywords" content="Web Developer - Graphic Design - Photography">-->