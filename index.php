<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Nava Gia Ginasta">
<meta name="email" content="navagiaginasta@gmail.com" />
<meta name="keywords" content="Web Developer - Graphic Design - Photography">

<title>Selamat Datang di DiaryBook</title>
<style>@import "assets/css/style_login.css";</style>
<script type="text/javascript">
	function validasi(form){
		if (form.username.value == ""){
		alert("Anda belum mengisikan Username");
		form.username.focus();
		return (false);
		}
			 
	if (form.password.value == ""){
		alert("Anda belum mengisikan Password");
		form.password.focus();
		return (false);
		}
		
	return (true);
}
</script> 
</head>

<body>
	<div id="container">
    	<div id="leftcontent">
       		 <b><font size="7">Selamat Datang di <br />DiaryBook.</font></b><br />
       				 <font size="5">Jalinan Curhatan dan Isi Hati yang bisa dibuat disini dan dicurahkan disini dengan rasa curhatan itu aman untuk di simpan secara Online.</font>
	</div>
        <div id="centercontent"></div>
        <div id="rightcontent"><center>
        <table>
			<form action="login_proses.php" method="POST" onSubmit="return validasi(this)">
        	<tr>
            	<td colspan="2"><input type="text" placeholder="Username" name="username" class="inputuser" /></td>
            </tr>
            <tr>
            	<td><input type="password" placeholder="Password" name="password" class="inputpass" />
                <input type="submit" title="Masuk" class="button" name="Masuk" value="Masuk" /></td>
            </tr>
            <tr>
            	<td></td>
            </tr>
            </form>
        </table>
        </center>
        </div>
	<div id="rightcontent">
        <div id="title_right">Baru Kenal DiaryBook ? <font color="#666666">Daftar</font></div>
        <center>
		<?php
			error_reporting(0);
			include "system/connect.php";
			if(isset($_POST['daftar'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password2 = $_POST['password2'];
			$password3 = md5($_POST['password2']);
			$pembuat_nama = $_POST['pembuat_nama'];
			$foto = "profil.jpg";
			$bg = "bg.jpg";
			$post	  = date("Y-m-d");

			if($username == '') {
				$cek[] = "Username, ";
			} 
			if($password == '') { 
				$cek[] = "Password, ";
			}
			if($password != $password2) { 
				$cek[] = "Password Tidak Sama, ";
			}
			if($pembuat_nama == '') {
				$cek[] = "Nama Lengkap";
			}

			$sql = "INSERT INTO pembuat(username,password,pembuat_nama,pembuat_foto,pembuat_background,pembuat_post) VALUES('$username','$password3','$pembuat_nama','$foto','$bg','$post')";
			if(isset($cek)) {
				echo "<div id='red'>".implode($cek)."</div>";
			} else {
				if(mysql_query($sql)) {
					echo "<div id='green'>Silahkan Login!,</div>";
				} else {
					echo "gagal";
				}
			}
			
		}

		?>
        <table>   	
		  <form action="" method="POST">
        	<tr>
            	<td colspan="2"><input type="text" placeholder="Username" name="username" class="input" /></td>
            </tr>
        	<tr>
            	<td colspan="2"><input type="password" placeholder="Password" name="password" class="input" /></td>
            </tr>
        	<tr>
            	<td colspan="2"><input type="password" placeholder="Ulangi Password" name="password2" class="input" /></td>
            </tr>
        	<tr>
            	<td colspan="2"><input type="text" placeholder="Nama Lengkap" name="pembuat_nama" class="input" /></td>
            </tr>
            <tr>
                <td><input type="submit" class="button_yellow" name="daftar" value="Daftar ke DiaryBook" /></td>
            </tr>
            <tr>
            	<td></td>
            </tr>
          </form>
        </table>
        </center>
        </div>
        <ul class="copy">
			Copyright 2014 &copy; DiaryBook <br />
			Crate by : <a href="https://www.facebook.com/Nava10webmaster" target="_blank">Nava Gia Ginasta</a>
	</ul>
</body>
</html>
<!--
<meta name="author" content="Nava Gia Ginasta">
<meta name="keywords" content="Web Developer - Graphic Design - Photography">-->