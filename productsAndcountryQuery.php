<?php 
include('conn.php');
$target = $_POST['target'];
//echo $target;
//$target = $_GET["target"];

if("'products'" == $target){
    $proTypes = array();
	$sql = 'select distinct products from companies';
	$result = mysql_query($sql);
	do{
		$rows = mysql_fetch_array($result);
	    if(strpos($rows['products'], '-')) {
			$proTypes=array_merge(explode("-",$rows['products']), $proTypes);
		}else{
			array_push($proTypes, $rows['products']);
		}
	}while($rows = mysql_fetch_array($result));
	$proTypes = array_unique($proTypes);
	$proTypes = array_filter($proTypes);
	array_push($proTypes, "请选择");
	$a = 1;
	foreach($proTypes as $k => $val) {
		if($val == ' ') unset($proTypes[$k]);
		else{
			$proTypes[$k] = "<span id=\"a".$a."\" onclick=\"pick('$val', 'productsType', 'HMF-1')\" onmouseover=\"bgcolor('a".$a."')\" onmouseout=\"nocolor('a".$a."')\" class='cur'>".$val."</span>";
		}
		$a = $a + 1;
	}
	echo implode($proTypes);
}
if("'country'" == $target){
	$country = array();
	$sql = 'select distinct country from companies';
	$result = mysql_query($sql);
	do{
		$rows = mysql_fetch_array($result);
	    if(strpos($rows['country'], '-')) {
			$country=array_merge(explode("-",$rows['country']), $country);
		}else{
			array_push($country, $rows['country']);
		}
	}while($rows = mysql_fetch_array($result));
	$country = array_unique($country);
	$country = array_filter($country);
	array_push($country, "请选择");
	$b = 1;
	foreach($country as $k => $val) {
		if($val == ' ') unset($country[$k]);
		else{
			$country[$k] = "<span id=\"b".$b."\" onclick=\"pick('$val', 'country', 'HMF-2')\" onmouseover=\"bgcolor('b".$b."')\" onmouseout=\"nocolor('b".$b."')\" class='cur'>".$val."</span>";
		}
		$b = $b + 1;
	}
	
	echo implode($country);
}
?>