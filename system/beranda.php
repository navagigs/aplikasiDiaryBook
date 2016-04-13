<div id="content_right_input">
		<?php
			error_reporting(0);
			include "system/connect.php";
			if(isset($_POST['diary'])) {
			$diary_judul = $_POST['diary_judul'];
			$diary_isi = $_POST['diary_isi'];
			$post	  = date("Y-m-d");
			$asal = $_FILES['file']['tmp_name'];
			$nama_file = $_FILES['file']['name'];
			$direktori = "assets/foto/$nama_file";

			if($diary_judul == '') {
				$cek[] = "Judul Diary, ";
			} 
			if($diary_isi == '') { 
				$cek[] = "Isi Diary ";
			}
			
			if(move_uploaded_file($asal,"$direktori")){
			$sql = "INSERT INTO diary(diary_judul,diary_isi,pembuat_nama,diary_foto,diary_post) VALUES('$diary_judul','$diary_isi','$_SESSION[pembuat_nama]','$nama_file','$post')";
			if(isset($cek)) {
				echo "<div id='red'>".implode($cek)."</div>";
			} else {
				if(mysql_query($sql)) {
					echo "<div id='green'>ditambahkan!,</div>";
				} else {
					echo "gagal";
				}
			}
		} else {
			
			$sql = "INSERT INTO diary(diary_judul,diary_isi,pembuat_nama,diary_post) VALUES('$diary_judul','$diary_isi','$_SESSION[pembuat_nama]','$post')";
			if(isset($cek)) {
				echo "<div id='red'>".implode($cek)."</div>";
			} else {
				if(mysql_query($sql)) {
					echo "<div id='green'>ditambahkan!,</div>";
				} else {
					echo "gagal";
				}
			}
		}
			
		}
		?>
        <table width="99%">   	
		  <form action="" method="POST" enctype="multipart/form-data">
        	<tr>
            	<td colspan="2"><input type="text" placeholder="Judul Diary" name="diary_judul" class="input" /></td>
            </tr>
        	<tr>
    			<td colspan="2"><textarea name="diary_isi" placeholder="Isi Diary" class="textarea" ></textarea></td>            
              </tr>
            <tr>
            	<td><input type="file" name="file" /></td>
                <td align="right"><input type="submit" class="button" name="diary" value="Diary" /></td>
            </tr>
            <tr>
            	<td></td>
            </tr>
          </form>
        </table>
   </div>
   
<?php
include "system/fungsi_indotgl.php";
$hasil=mysql_query("SELECT  * FROM diary WHERE pembuat_nama='$_SESSION[pembuat_nama]' ORDER BY diary_id DESC");
while($r=mysql_fetch_array($hasil)){
      $tgl_posting=tgl_indo($r[diary_post]);
	echo"<div id='content_right'>
	<table width='100%'>
    	<tr>
        	<td><b><i>$r[pembuat_nama]</i></b> | $tgl_posting </td>
			<td align='right'><a href='media.php?page=beranda_sunting&id=$r[diary_id]'><img src='assets/images/edit.png' title='Sunting'></a> <a href='media.php?page=beranda_hapus&id=$r[diary_id]'><img src='assets/images/trash.png' title='Hapus'></a></td>
        </tr>";
	if(empty($r[diary_foto])) {
		echo "<tr>
			<td></td>
		</tr>";
	} else {
		echo "<tr>
			<td><center><img src='assets/foto/$r[diary_foto]' width='200'></center></td>
		</tr>";
	}
	echo"
        <tr>
        	<td><b>$r[diary_judul]</b> : $r[diary_isi]</td>
        </tr>
    </table>
  </div><hr />";
}
?>