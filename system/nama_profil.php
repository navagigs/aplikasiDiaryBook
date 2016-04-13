<?php
$sql=mysql_query("SELECT * FROM pembuat WHERE pembuat_id ='$_SESSION[pembuat_id]'");
while($nava=mysql_fetch_array($sql)){
	echo "$nava[pembuat_nama]";
}
?>