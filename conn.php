<?php 
$username="root";
$userpass="root";
$dbhost="localhost";
$dbdatabase="wordpress";
$db_connect = mysql_connect($dbhost,$username,$userpass) or die("Unable to connect to the MySQL!");
mysql_query("set names 'utf8'");
mysql_select_db($dbdatabase, $db_connect);
?>