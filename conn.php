<?php 

include("wp-config.php");

$db_connect = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Unable to connect to the MySQL!");
mysql_query("set names '".DB_CHARSET."'");
mysql_select_db(DB_NAME, $db_connect);
<<<<<<< HEAD
=======
?>
>>>>>>> 6e554e148bc064645527bdb0844cef4c18b87e83
