<?php
$server_nava="localhost";
$username_nava	="root";
$password_nava ="";
$db_nava = "db_diary";
mysql_connect($server_nava,$username_nava,$password_nava) or die ("KONEKSI GAGAL NAVA");
mysql_select_db($db_nava) or die ("DATABASE TIDA ADA NAVA");
?>