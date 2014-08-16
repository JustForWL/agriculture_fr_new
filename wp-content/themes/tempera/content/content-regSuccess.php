<?php 
ob_start();
include('conn.php');
if(!empty($_POST['canSubmit'])){
	if(!is_user_logged_in()){
	    $sanitized_user_login = sanitize_user( $_POST['user'] );
        $user_email = apply_filters( 'user_registration_email', $_POST['email'] );
		$username = $_POST['user'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$club = $_POST['club'];
		$hangye = $_POST['hangye'];
		$hangye2 = $_POST['hangye2'];
		$companyChineseName = $_POST['companyChineseName'];
		$companyEnglishName = $_POST['companyEnglishName'];
		$scale  = $_POST['scale'];
		$companyHomepage = $_POST['companyHomepage'];
		$chineseName = $_POST['chineseName'];
		$firstName = $_POST['firstName'];
		$secondName = $_POST['secondName'];
		$job = $_POST['job'];
		$job2 = $_POST['job2'];
		$phone = $_POST['phone'];
		$tax = $_POST['tax'];
		$mobilephone = $_POST['mobilephone'];
		$addressChinese = $_POST['addressChinese'];
		$addressEnglish = $_POST['addressEnglish'];
		$code = $_POST['code'];
		$intereting = $_POST['interesting'];
		$interetingToString = ' ';
		switch($hangye){
			case 1 : $hangye = '独立代理';break;
			case 2 : $hangye = '进口商、分销商';break;
			case 3 : $hangye = '超市';break;
			case 4 : $hangye = '餐饮行业';break;
			case 5 : $hangye = '媒体';break;
			case 6:  $hangye = '爱好者';break;
			case 7 : $hangye = $hangye2;
		}
		switch($scale){
			case 1 : $scale = '1-20人';break;
			case 2 : $scale = '20-50人';break;
			case 3 : $scale = '50-100人';break;
			case 4 : $scale = '100-250人';break;
			case 5 : $scale = '250-400人';break;
			case 6 : $scale = '400人以上';
		}
		switch($job){
			case 1 : $job = '首席执行官/主席';break;
			case 2 : $job = '市场经理';break;
			case 3 : $job = '总经理';break;
			case 4 : $job = '销售';break;
			case 5 : $job = '品牌经理';break;
			case 6 : $job = '采购';break;
			case 7 : $job = '产品经理';break;
			case 8 : $job = '编辑';break;
			case 9 : $job = '销售经理';break;
			case 10 : $job = '记者';break;
			case 11 : $job = $job2;
		}
		while(list($key, $val)=each($intereting)){
			if(1 == $val) $interetingToString = $interetingToString . ' 葡萄酒及烈酒';
			if(2 == $val) $interetingToString = $interetingToString . ' 谷物制品';
			if(3 == $val) $interetingToString = $interetingToString . ' 乳制品';
			if(4 == $val) $interetingToString = $interetingToString . ' 糖果';
			if(5 == $val) $interetingToString = $interetingToString . ' 水产';
			if(6 == $val) $interetingToString = $interetingToString . ' 饮料';
			if(7 == $val) $interetingToString = $interetingToString . ' 蔬菜';
			if(8 == $val) $interetingToString = $interetingToString . ' 香料、油、调味品等';
			if(9 == $val) $interetingToString = $interetingToString . '  肉制品';
			if(10 == $val) $interetingToString = $interetingToString . ' 方便及半成品';
		}
		$sql = "insert into userinfo values ("."'".$username."','".$email."','".$club."','".$hangye."','".$companyChineseName."','".$companyEnglishName."','".$scale."','".$companyHomepage."','".$chineseName."','".$firstName."','".$secondName."','".$job."','".$phone."','".$tax."','".$mobilephone."','".$addressChinese."','".$addressEnglish."','".$code."','".$interetingToString."');";
	    $user_id = wp_create_user( $sanitized_user_login, $_POST['pass'], $user_email);
		mysql_query($sql, $db_connect); 
		?>
         <div id="main" >
         <div id="frontpage" >
         <div id="pp-afterslider">
         <div class="b2">
            <div style="height:200px;"></div>
            <div style="margin-left:10%;"><img src="images/picture136.png" /></div>
           
            <div style="margin-top:-30%;float:left;margin-left:48%;"></span><img src="images/picture135.png" /></div>
            <div style="margin-top:-20%;float:left;margin-left:48%;"><img src="images/picture134.png" /></div>
            <div style="margin-top:-10%;float:left;;margin-left:48%;">
	        <ul style="list-style:none;height:85px;">
                    
                    <li style="display:inline;float:none"><a href="javascript:window.opener=null;window.open('','_self');window.close();"><img src="images/picture133.png"/></a></li>&nbsp;
                    <li style="display:inline;margin-top:-25px;float:none"><a href="http://wordpress.local" target=""><img src="images/picture132.png" /></a></li>
                    
                </ul>
          
            </div>
	</div>
         <div style="height:200px;"></div>
         </div> <!-- #pp-afterslider -->
         </div> <!-- #frontpage -->

	<?php }else{
		echo "<script type='text/javascript'>alert('你已注册！')</script>";
		header("Location:http://wordpress.local");
	}
}else{
	header("Location:http://wordpress.local");
}
?>
