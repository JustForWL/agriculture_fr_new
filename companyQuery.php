
<?php 
error_reporting(E_ERROR);
ini_set("display_errors","Off");
include('conn.php');
$proType = trim($_POST['productsType']); 

$country = trim($_POST['country']); 
$company = trim($_POST['company']); 
$order = $_POST['order'];
function addHttp($website){
	if($website=='')
		return '';
	else{
		if(strstr($website, "http://")){
			return $website;
		}else{
			return "http://".$website;
		}
	}
}


if('请选择'==$proType  && '请选择'==$country && $company == '')
		$sql = "SELECT count(*) FROM companies;";
if('请选择'==$proType  && '中国'==$country && $company == '')
		$sql = "SELECT count(*) FROM companies where exportation_countries like '%中国%';";
if('请选择'==$proType  && '其它国家'==$country && $company == '')
		$sql = "SELECT count(*) FROM companies where exportation_countries not like '%中国%';";
if('请选择'==$proType  && '请选择'==$country && $company != '')
		$sql = "SELECT count(*) FROM companies where name like '$company%';";
if('请选择'==$proType  && '中国'==$country && $company != '')
		$sql = "SELECT count(*) FROM companies where(exportation_countries like '%中国%' and name like '$company%');";
if('请选择'==$proType  && '其它国家'==$country && $company != '')
		$sql = "SELECT count(*) FROM companies where(exportation_countries not like '%中国%' and name like '$company%');";
if('请选择' !=$proType  && '请选择'==$country && $company == '')
		$sql = "SELECT count(*) FROM companies where products like '%$proType%';";
if('请选择'!=$proType  && '中国'==$country && $company == '')
		$sql = "SELECT count(*) FROM companies where (products like '%$proType%' and exportation_countries like '%中国%');";
if('请选择'!=$proType  && '其它国家'==$country && $company == '')
		$sql = "SELECT count(*) FROM companies where (products like '%$proType%' and exportation_countries not like '%中国%');";
if('请选择'!=$proType  && '请选择'==$country && $company != '')
		$sql = "SELECT count(*) FROM companies where (products like '%$proType%' and name like '$company%');";
if('请选择'!=$proType  && '中国'==$country && $company != '')
		$sql = "SELECT * FROM companies where (products like '%$proType%' and exportation_countries like '%中国%' and name like '$company%');";
if('请选择'!=$proType  && '其它国家'==$country && $company != '')
		$sql = "SELECT * FROM companies where (products like '%$proType%' and exportation_countries not like '%中国%' and name like '$company%');";
$rs = mysql_query($sql);
$myrow = mysql_fetch_array($rs);
$pagesize = 50;
$pageseg = 10;
$numrows = $myrow[0];
$pages = intval($numrows/$pagesize);
if($numrows%$pagesize)
	$pages++;
//echo $sql;		
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

	if ($order == '')
	$order = "name";
	if('请选择'==$proType  && '请选择'==$country && $company == '')
		$sql = "SELECT * FROM companies order by $order desc limit $offset, $pagesize;";
	if('请选择'==$proType  && '中国'==$country && $company == '')
		$sql = "SELECT * FROM companies where exportation_countries like '%中国%' order by $order desc limit $offset, $pagesize;";
	if('请选择'==$proType  && '其它国家'==$country && $company == '')
		$sql = "SELECT * FROM companies where exportation_countries not like '%中国%' order by $order desc limit $offset, $pagesize;";
	if('请选择'==$proType  && '请选择'==$country && $company != '')
		$sql = "SELECT * FROM companies where name like '$company%' order by $order desc limit $offset, $pagesize;";
	if('请选择'==$proType  && '中国'==$country && $company != '')
		$sql = "SELECT * FROM companies where(exportation_countries like '%中国%' and name like '$company%') order by $order desc limit $offset, $pagesize;";
	if('请选择'==$proType  && '其它国家'==$country && $company != '')
		$sql = "SELECT * FROM companies where(exportation_countries not like '%中国%' and name like '$company%') order by $order desc limit $offset, $pagesize;";
	if('请选择' !=$proType  && '请选择'==$country && $company == '')
		$sql = "SELECT * FROM companies where products like '%$proType%' order by $order desc limit $offset, $pagesize;";
	if('请选择'!=$proType  && '中国'==$country && $company == '')
		$sql = "SELECT * FROM companies where (products like '%$proType%' and exportation_countries like '%中国%') order by $order desc limit $offset, $pagesize;";
	if('请选择'!=$proType  && '其它国家'==$country && $company == '')
		$sql = "SELECT * FROM companies where (products like '%$proType%' and exportation_countries not like '%中国%') order by $order desc limit $offset, $pagesize;";
	if('请选择'!=$proType  && '请选择'==$country && $company != '')
		$sql = "SELECT * FROM companies where (products like '%$proType%' and name like '$company%')order by $order desc limit $offset, $pagesize;";
	if('请选择'!=$proType  && '中国'==$country && $company != '')
		$sql = "SELECT * FROM companies where (products like '%$proType%' and exportation_countries like '%中国%' and name like '$company%') order by $order desc limit $offset, $pagesize;";
	if('请选择'!=$proType  && '其它国家'==$country && $company != '')
		$sql = "SELECT * FROM companies where (products like '%$proType%' and exportation_countries not like '%中国%' and name like '$company%') order by $order desc limit $offset, $pagesize;";
	$rs = mysql_query($sql);
	$data = '';
	$dataDiv = '';
	//echo $sql;
	if($myrow = mysql_fetch_array($rs)){
			$i = 0;
			do{
				$i++;
          	    $data = $data."<a onclick=\"showCompanyDetail('".$myrow['name']."')\"><ul class='row_type' id=\"row_".$i. "\">"; 
                $data = $data."<li class='li_col1'>".$myrow['name']." </li>";
                $data = $data."<li class='li_col2'>".$myrow['products']."</li>";
			    $data = $data."<li class='li_col3'>".$myrow['exportation_countries']."</li></ul></a>";
			}while($myrow = mysql_fetch_array($rs));
			$height = $i*25;
			$dataDiv = $dataDiv."<div name = \"ajax\" id=\"ajax\" style=\"height:".$height."px;\">";
			$data = $dataDiv.$data."</div>";
		}

		$fenye = "<div align='center' style=\" vertical-align:center;\"> ";
		if($page > 1)
		   $fenye = $fenye. "<div style=\"background:url('/images/picture137.png') no-repeat; width:38px;height:34px;padding-top:6px;padding-right:0px;display:inline-block;\" onmouseover=\"changebg(this);\" onmouseout=\"changebgback(this);\" onclick=\"page_jump(".($page - 1).")\"><span style=\"color:#ccc;font-size:18px;margin-left:-5px;\">&lt;</span></div>";
		if($pages <= $pageseg){
			for ($i = 1; $i <= $pages ; $i++){
				if($i == $page){
					$fenye  = $fenye."<div class='selectedone' ><span style=\"color:#fff;font-size:18px;margin-left:-5px;\">".$i."</span></div>";
				}else{
					$fenye = $fenye."<div class='unselectedone' onmouseover=\"changebg(this);\" onmouseout=\"changebgback(this);\" onclick=\"page_jump(".$i.")\"><span style=\"color:#ccc;font-size:18px;margin-left:-5px;\">".$i."</span></div>";
				}
			}
		}else{
			if(($pages - $page) <= 4){
				for ($i = ($pages - $pageseg); $i <= $pages ; $i++){
					if($i == $page){
						$fenye  = $fenye."<div class='selectedone' ><span style=\"color:#fff;font-size:18px;margin-left:-5px;\">".$i."</span></div>";
					}else{
						$fenye = $fenye."<div class='unselectedone' onmouseover=\"changebg(this);\" onmouseout=\"changebgback(this);\" onclick=\"page_jump(".$i.")\"><span style=\"color:#ccc;font-size:18px;margin-left:-5px;\">".$i."</span></div>";
				   }
			    }
			}else{
				if($page <= $pageseg / 2 ){
					for ($i = 1; $i <= $pageseg ; $i++){
						if($i == $page){
							$fenye  = $fenye."<div class='selectedone' ><span style=\"color:#fff;font-size:18px;margin-left:-5px;\">".$i."</span></div>";
						}else{
							$fenye = $fenye."<div class='unselectedone' onmouseover=\"changebg(this);\" onmouseout=\"changebgback(this);\" onclick=\"page_jump(".$i.")\"><span style=\"color:#ccc;font-size:18px;margin-left:-5px;\">".$i."</span></div>";
					   }
			         }
				}else{
					for ($i = ($page - 5); $i <= ($page + 4) ; $i++){
						if($i == $page){
							$fenye  = $fenye."<div class='selectedone' ><span style=\"color:#fff;font-size:18px;margin-left:-5px;\">".$i."</span></div>";
						}else{
							$fenye = $fenye."<div class='unselectedone' onmouseover=\"changebg(this);\" onmouseout=\"changebgback(this);\" onclick=\"page_jump(".$i.")\"><span style=\"color:#ccc;font-size:18px;margin-left:-5px;\">".$i."</span></div>";
					   }
			         }
					
				}
			}
		}
		if($page < $pages)
		   $fenye = $fenye. "<div style=\"background:url('/images/picture137.png') no-repeat; width:38px;height:34px;padding-top:6px;padding-right:0px;display:inline-block;\" onmouseover=\"changebg(this);\" onmouseout=\"changebgback(this);\" onclick=\"page_jump(".($page + 1).")\"><span style=\"color:#ccc;font-size:18px;margin-left:-5px;\">&gt;</span></div>";
		$fenye = $fenye. "<div style=\"display:inline-block;color:#ccc;\">共".$pages." 页</div>";
		$fenye = $fenye. "<div style=\"display:inline-block;color:#ccc;\">&nbsp;&nbsp;转到</div>";
		$fenye = $fenye. "<input name=\"page_jump\" type=\"text\" size=5 style=\"line-height:14px;\" onblur=\"activeGo(".$pages.")\" onfocus=\"unactiveGo();\"> </input>";
		$fenye = $fenye. "<img src=\"/images/picture140.png\" style=\"margin-bottom:-6px;\" id=\"go\" onclick=\"gotoPage(document.getElementsByName('page_jump').item(0).value)\"/></div>";		
		$data = $data.$fenye."<input type=\"hidden\" id=\"pageID\" value=\"".$page."\">";
		echo $data;
		//echo $page;
		?>
