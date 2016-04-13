<?php
error_reporting(0);
if($_GET['page'] == 'beranda') {
	include "system/beranda.php";
}
if($_GET['page'] == 'beranda_hapus') {
	include "system/beranda_hapus.php";
}
if($_GET['page'] == 'beranda_sunting') {
	include "system/beranda_sunting.php";
}
elseif ($_GET['page'] == 'profil') {
	include "system/profil.php";
}
elseif ($_GET['page'] == 'profil_edit') {
	include "system/profil_edit.php";
}
elseif ($_GET['page'] == 'background') {
	include "system/background.php";
}


?>

<!--
<meta name="author" content="Nava Gia Ginasta">
<meta name="keywords" content="Web Developer - Graphic Design - Photography">-->