<?php 
	session_start();
	include "system/connect.php"; 
	if(empty($_SESSION['username']) AND empty($_SESSION['password'])) { include "index.php"; } else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Nava Gia Ginasta">
<meta name="email" content="navagiaginasta@gmail.com" />
<meta name="keywords" content="Web Developer - Graphic Design - Photography">
<title>DiaryBook</title>
<style>
@import "assets/css/style_front.css";
<?php
include "system/connect.php"; 
$sql=mysql_query("SELECT * FROM pembuat WHERE pembuat_id ='$_SESSION[pembuat_id]'");
while($nava=mysql_fetch_array($sql)){

echo "body {
	padding:0px;
	margin:0px;
	background:url(assets/foto/$nava[pembuat_background]);
	background-attachment:fixed;
	background-size:cover;	
	font-family:Arial, Helvetica, sans-serif;
}";
}
?>
</style>

</head>

<body>
<div id="wrap_header">
    <div id="header">
    	<ul class="menu">
        	<li><span><a href="media.php?page=beranda">Beranda</a></span></li>
        	<li><span><a href="media.php?page=profil&id=<?php echo "$_SESSION[pembuat_id]"; ?>">Profil</a></span></li>
             <?php error_reporting(0); if($_SESSION[pembuat_akses]=='admin'){ ?>
        	<li><span><a href="media.php?page=user">User Pendaftar</a></span></li>
            <?php } ?>
        	<li><span><a href="media.php?page=background&id=<?php echo "$_SESSION[pembuat_id]"; ?>">Background</a></span></li>
        </ul>
        <ul class="menu" style="float:right;">
        	<li><span><a href="logout.php" onclick="return confirm('Apakah Anda akan Keluar?');">Keluar</a></span></li>
        </ul>
    </div>
</div>
<div id="container">
    <div id="left_content">
        <div id="content_left">
        	<center>
        	<table>
            	<tr>
                    <td><?php include "system/foto_profil.php"; ?></td>
                </tr>
                <tr>
                    <td><b><?php include "system/nama_profil.php"; ?></b></td>
                </tr>
            </table>
            </center>
        </div>
    </div>
<div id="right_content">
	<?php include "content.php"; ?>
</div>
<div style="clear:both"></div>
</div>
<div id="footer">
	<center>Copyright 2014 &copy; DiaryBook <br />
    	Create by : <a href="https://www.facebook.com/Nava10webmaster" target="_blank">Nava Gia Ginasta</a></center>
</div>
</body>
</html>
<?php } ?>
<!--
<meta name="author" content="Nava Gia Ginasta">
<meta name="keywords" content="Web Developer - Graphic Design - Photography">-->