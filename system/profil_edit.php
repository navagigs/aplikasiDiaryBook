<?php

if(isset($_POST['sunting'])) {
	$pembuat_nama  = $_POST['pembuat_nama'];
	$post	  = date("Y-m-d");
	 $filename=$_FILES['file']['name'];
$move=move_uploaded_file($_FILES['file']['tmp_name'],'assets/foto/'.$filename);
if(empty($filename))   //jika gambar kosong atau tidak di ganti
{

		$sql = mysql_query("UPDATE pembuat SET pembuat_nama = '$pembuat_nama',
											 pembuat_post = '$post'
									WHERE pembuat_id = '$_SESSION[pembuat_id]'");
					echo "<div id='green'>telah disunting!,</div>";
					header('location:media.php?page=profil');
	} elseif (!empty($filename)) {
		$sql = mysql_query("UPDATE pembuat SET pembuat_nama = '$pembuat_nama',
											 pembuat_foto	= '$filename',
											 pembuat_post = '$post'
									WHERE pembuat_id = '$_SESSION[pembuat_id]'");
					echo "<div id='green'>telah disunting!,</div>";
					header('location:media.php?page=profil');
	}
}
?>
<!--
<meta name="author" content="Nava Gia Ginasta">
<meta name="keywords" content="Web Developer - Graphic Design - Photography">-->