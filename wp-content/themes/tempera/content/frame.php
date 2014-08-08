
<?php 
include('conn.php');
$proType = $_GET['productsType']; 
echo $proType;

$country = $_POST['country']; 
$company = $_POST['company']; 
$order1 = $_POST['order'];
$company = "%". $company."%";       


$rs = mysql_query("SELECT count(*) FROM companies WHERE (name like '$company' AND country= '$country' AND products = '$proType')", $dbh);
$myrow = mysql_fetch_array($rs);
$pagesize = 15;
$numrows = $myrow[0];
$pages = intval($numrows/$pagesize);
if($numrows%$pagesize)
	$pages++;
		
if(isset($_POST['page'])){
		$page = intval($_POST['page']);
		if ($page < 1){
			$page = 1;
		}
	}
	else{
		$page = 1;
	}
	
	$offset = $pagesize * ($page - 1);	

/*		$query = sprintf("SELECT * FROM companies1 WHERE country= 'FRANCE' order by name desc limit;", mysql_real_escape_string($country));*/

	if ($order1 == '')
	$order1 = "name";
	
	$sql = "SELECT * FROM companies WHERE (name like '$company' AND country= '$country' AND products = '$proType') order by $order1 desc limit $offset, $pagesize;";
/*	echo $sql;*/
	$rs = mysql_query($sql);
	
/*
}
else if($urlArr[query] == 'sort=name'){	
	$rs = mysql_query("SELECT * FROM companies1 WHERE (name like '$company' AND country= '$country' AND products = '$proType') order by name desc limit $offset, $pagesize;");
}
else if($urlArr[query] == 'sort=country'){
	$rs = mysql_query("SELECT * FROM companies1 WHERE (name like '$company' AND country= '$country' AND products = '$proType') order by country desc limit $offset, $pagesize;");
}*/

	/*		if($myrow = mysql_fetch_array($rs))
		{*/
		$data = '';
		if($myrow = mysql_fetch_array($rs))
		{
			
			$i = 0;
			$data = $data."<div>";
			$data = $data."<ul>";
			do{
				$i++;
          	$data = $data."<ul onClick="."'style.color = 'red''>"; 
            $data = $data."<li class='li_col1'>".$myrow['name']." </li>";
            $data = $data."<li class='li_col2'>".$myrow['products']."</li>";
			 $data = $data."<li class='li_col3'>".$myrow['country"']."</li></ul>";
				}
			while($myrow = mysql_fetch_array($rs));
			$data = $data."</ul>";
			//echo $data;
		}
		?>
        <?php 

		/*echo "<div align='center'> 共有".$pages."页(".$page."/".$pages.")";
		for ($i = 1; $i <$page ; $i++)
			echo "<a href='company?page=".$i."'>[".$i."]</a>";
			echo "[". $page. "]";
/*			for($i = $page + 1 ; $i<=$pages ; $i++)
			echo "<a href='company?page=".$i.">[".$i."]</a>";*/
				
		?>
