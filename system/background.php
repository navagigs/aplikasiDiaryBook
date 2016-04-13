<div id='title'>Sunting Background </div>
<?php

if(isset($_POST['sunting'])) {
	 $filename=$_FILES['file']['name'];
$move=move_uploaded_file($_FILES['file']['tmp_name'],'assets/foto/'.$filename);
		$sql = mysql_query("UPDATE pembuat SET pembuat_background	= '$filename'
									WHERE pembuat_id = '$_SESSION[pembuat_id]'");
					echo "<div id='green'>telah disunting!,</div>";
	}

?>
<?php
include "system/connect.php";
$tampil = mysql_query("SELECT * FROM pembuat WHERE pembuat_id = '$_SESSION[pembuat_id]'");
$edit = mysql_fetch_array($tampil);
echo"
 <table width='99%'>   	
		  <form action='media.php?page=background' method='POST' enctype='multipart/form-data'>
			<input type='hidden' name='pembuat_id' value='$_SESSION[pembuat_id]' />
            <tr>
            	<td colspan='2'><center><img src='assets/foto/$edit[pembuat_background]' width='200' /></center></td>
            </tr>    
            <tr>
            	<td><input type='file' name='file' /></td>
                <td align='right'><input type='submit' class='button' name='sunting' value='Sunting' /></td>
            </tr>
            <tr>
            	<td></td>
            </tr>
          </form>
        </table>";
        ?>
<!--
<meta name="author" content="Nava Gia Ginasta">
<meta name="keywords" content="Web Developer - Graphic Design - Photography">-->