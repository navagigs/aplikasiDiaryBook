<div id='title'>Sunting Diary</div>
<?php
if(isset($_POST['sunting'])) {
	$diary_judul = $_POST['diary_judul'];
	$diary_isi = $_POST['diary_isi'];
	$post	  = date("Y-m-d");
	 $filename=$_FILES['file']['name'];
$move=move_uploaded_file($_FILES['file']['tmp_name'],'assets/foto/'.$filename);
if(empty($filename))   //jika gambar kosong atau tidak di ganti
{
		$sql = mysql_query("UPDATE diary SET diary_judul = '$diary_judul',
											 diary_isi	= '$diary_isi',
											 diary_post = '$post'
									WHERE diary_id = '$_POST[id]'");
					echo "<div id='green'>telah disunting!,</div>";
	} elseif (!empty($filename)) {
		$sql = mysql_query("UPDATE diary SET diary_judul = '$diary_judul',
											 diary_isi	= '$diary_isi',
											 diary_foto	= '$filename',
											 diary_post = '$post'
									WHERE diary_id = '$_POST[id]'");
					echo "<div id='green'>telah disunting!,</div>";
	}
}


?>
<?php
include "system/connect.php";
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM diary WHERE diary_id = '$id'");
$data = mysql_fetch_array($sql);
?>
 <table width="99%">   	
		  <form action="" method="POST" enctype="multipart/form-data">
			<input type='hidden' name='id' value="<?php echo"$id"; ?>" />
            <tr>
            	<td colspan="2"><center><img src="assets/foto/<?php echo"$data[diary_foto]"; ?>" width="200" /></center></td>
            </tr>
        	<tr>
            	<td colspan="2"><input type="text" placeholder="Judul Diary" name="diary_judul"  class="input" value="<?php echo"$data[diary_judul]"; ?>"/></td>
            </tr>
        	<tr>
    			<td colspan="2"><textarea name="diary_isi" placeholder="Isi Diary"  class="textarea"><?php echo"$data[diary_isi]"; ?></textarea></td>            
              </tr>
            <tr>
            	<td><input type="file" name="file" /></td>
                <td align="right"><input type="submit" class="button" name="sunting" value="Sunting" /></td>
            </tr>
            <tr>
            	<td></td>
            </tr>
          </form>
        </table>
<!--
<meta name="author" content="Nava Gia Ginasta">
<meta name="keywords" content="Web Developer - Graphic Design - Photography">-->