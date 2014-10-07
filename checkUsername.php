<?php 
include('conn.php');
$username = $_GET['username'];
$email = $_GET['email'];
if($username != ''){
		$sql = "select count(*) as num from userinfo where username = '$username' ";
		$reqult = mysql_query($sql, $db_connect);
		$row = mysql_fetch_array($reqult);
		if(1 == $row['num']){
			echo 'registed1';
		}else{
			echo 'unregisted1';
		}
}
if($email != ''){
	    $sql = "select count(*) as num from userinfo where email = '$email' ";
		$reqult = mysql_query($sql, $db_connect);
		$row = mysql_fetch_array($reqult);
		if(1 == $row['num']){
			echo 'registed2';
		}else{
			echo 'unregisted2';
		}
}
?>