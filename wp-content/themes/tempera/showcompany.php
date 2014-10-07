<?php
/**
 * Template Name: 鍏徃鏄庣粏
 * 作者：露兜
 * 博客：http://www.ludou.org/
 *  
 *  2013年02月02日 ：
 *  首个版本
 */
?>
<?php include('conn.php');
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
} ?>
<?php get_header(); ?>
         <div id="main" >
         <div id="frontpage" >
         <div id="pp-afterslider">
         <?php  
			$sql = "select * from companies where name = '".$_POST['companyName']."'"; 
			$result = mysql_query($sql, $db_connect);
			$row = mysql_fetch_array($result);
		 ?>
		 <form action="/company" method="post">
		 <img src="/images/picture67.png" style="display:inline;margin-top:50px;margin-left:40px; height:80px;" align="left">
   
    <div style="display:inline; margin-left:5%;margin-top:-20px;" align="left">
      <div style="background-color:#D10024; border:#D10024 solid 1px;display:inline-block;margin-top:50px;"><span style="height:40px;">&nbsp;&nbsp;<font color="#FFFFFF">产品类型：</font></span>
        <input type="text" name="productsType" value="请选择" id="productsType" class="am"   onclick="hide('HMF-1')" readonly style="color:#FFF;border-radius:0px;-webkit-border-radius:0px; background-color:#D10024;margin-top:2px;border:0px;"/>
        <div id="HMF-1" style="display: none " class="bm" tabindex="1">
        </div>
        <img src="/images/picture72.png" style="margin-right:2px;" onclick="hide('HMF-1')" id="showHMF1"/>
      </div>
     <div style="background-color:#D10024; border:#D10024 solid 1px;display:inline-block;"><label for="country" title="国家" >&nbsp;&nbsp;<font color="#FFFFFF">国家：</font></label>
        <!--<select name="select2" style="color:#fff;border-radius:0px;-webkit-border-radius:0px;background-color:rgba(209,0,36, 0);border-color:#D10024;outline: medium none;"><option value="大不列颠及北爱尔兰联合王国" style=" background-color:#D10024">大不列颠及北爱尔兰联合王国</option></select>-->
         <input type="text" name="country" value="请选择" id="country" onclick="hide('HMF-2')" class="am" size="300" readonly style="color:#FFF;border-radius:0px;-webkit-border-radius:0px; background-color:#D10024;margin-top:2px;border:0px;"/>
        <div id="HMF-2" style="display: none " class="bm2">
         <span id="b1" onclick="pick('中国', 'country', 'HMF-2' )" onMouseOver="bgcolor('b1')" onMouseOut="nocolor('b1')" class="cur">&nbsp;中国</span>
         <span id="a2" onclick="pick('其它国家', 'country', 'HMF-2' )" onMouseOver="bgcolor('a2')" onMouseOut="nocolor('a2')" class="cur">&nbsp;其它国家</span>
		 <span id="a2" onclick="pick('请选择', 'country', 'HMF-2' )" onMouseOver="bgcolor('a2')" onMouseOut="nocolor('a2')" class="cur">&nbsp;请选择</span>
        </div>
        <img src="/images/picture72.png" style="margin-right:2px;" onclick="hide('HMF-2')" id="showHMF2" />
        </div>
        <div style="margin-left:46%;">
        <div style="border:#999 solid 1px; width:340px;;margin-top:10px;"><span>&nbsp;&nbsp;&nbsp;<font color="#999999">企业名称:&nbsp;</font></span>
        <input type="text" name="company" id="company" size=30 onblur="checkcontent(this.value)" style="margin-top:4px;border-radius:0px;-webkit-border-radius:0px;background-color:#fff;border-color:#fff;" hidefocus/> </div>
       <input type="hidden" name="hid" value="hid">
	   <input type="image" name="search2" src="/images/picture68.png" align="left" style="display:inline;margin-left:350px; margin-top:-35px;" onclick="this.form.submit();">
        </div>
    </div>
	</form>
		 <div style="height:100px"></div>
		 <span class="companyName"><?php echo $row['name'];?></span><br/>
		 地址：<br/>
		  <span class="companyAddress"><?php echo $row['address'];?></span><br/>
		   <span class="zipcode"><?php echo $row['zipcode'];?></span>&nbsp;&nbsp;&nbsp;<span class="town"><?php echo $row['town']; ?></span><br/>
		   <span class="phone"><?php echo $row['company_phone']; ?></span><br/>
		   <span class="website">网址：<a href="<?php echo addHttp($row['website']);?>"><?php echo $row['website'];?></a></span>
		   <br/>
		   <br/>
		   <br/>
		   <span class="products">产品：</span>
		   <span style="color:rgb(209,0,36);"><?php echo $row['products']; ?></span><br/>
		   <span class="exportCountry">出口国家：</span><br/>
		   <?php echo $row['exportation_countries'];?>
		   <div style="height:100px"></div>
         </div> <!-- #pp-afterslider -->
         </div> <!-- #frontpage -->

<?php get_footer(); ?>