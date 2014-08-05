<?php 
include('conn.php');
$username = $_GET['username'];
$sql = "select count(*) as num from userinfo where username = '$username' ";
$reqult = mysql_query($sql, $db_connect);
$row = mysql_fetch_array($reqult);
echo $sql;
/*
if(1 == $row['num']){
	echo 'registed';
}else{
	echo 'unregisted';
}*/
?>