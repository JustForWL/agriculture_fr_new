<?php include("conn.php"); ?>
<?php if(!is_user_logged_in()) header("Location:/");?>
<?php 
    global $current_user;
	$result = mysql_query("select * from userinfo where username='".$current_user->user_login."';");
	$row = mysql_fetch_array($result);
?>
<div class="main" style="height:2050px;">            
<div id="frontpage">
<div id="pp-afterslider" style="height:2050px;">
<div style="padding-left:10%;padding-top:5%;">
<div class="lianxi1">
	<img src="images/picture59.png">
        <form id="updateform" method="post" action="updateSuccess" name="updateform">
             
          <div class="b7">
                <div class="b5" align="left"><img src="images/picture131.png"><input type="text" size="30" name="user"  style="margin-left:60px;" value="<?php echo $row['username']?>" readonly="readonly"/><span id="tishi1" style="font-size:12px;"></span></div>
                <div class="b5" align="left"><img src="images/picture115.png"><input type="text" size="30" name="email"  style="margin-left:38px;" value="<?php echo $row['email']; ?>" readonly="readonly"/><span id="tishi2" style="font-size:12px;"></span></div>
                <div class="b5" align="left"><img src="images/picture113.png"><input type="password" size="30" name="pass"  style="margin-left:47px;" /><span id="tishi3" style="font-size:12px;"></span></div>
                <div class="b5" align="left"><img src="images/picture110.png"><input type="password" size="30" name="pass2"  style="margin-left:47px;" /><span id="tishi4" style="font-size:12px;"></span></div>
                <div style="height:20px;"></div>
 
           </div>
           <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
           <div style="height:10px;"></div>
          <div class="b7">
            <div class="b5" align="left"><img src="images/picture127.png"><select name="club" style="margin-left:45px;"><option value="shanghai" <?php if("shanghai"==$row['club']) echo "selected";?>>上海</option><option value="beijing" <?php if("beijing"==$row['club']) echo "selected";?>>北京</option></select></div>
          </div>
          <div style="height:10px;"></div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
          <img src="images/picture126.png"><br />
          <input type="radio" value="1" name="hangye" <?php if("独立代理"==$row['hangye']) echo "checked";?>><font color="#666666">独立代理</font><br />
          <input type="radio" value="2" name="hangye" <?php if("进口商、分销商"==$row['hangye']) echo "checked";?>><font color="#666666">进口商、分销商</font><br />
          <input type="radio" value="3" name="hangye" <?php if("超市"==$row['hangye']) echo "checked";?>><font color="#666666">超市</font><br />
          <input type="radio" value="4" name="hangye" <?php if("餐饮行业"==$row['hangye']) echo "checked";?>><font color="#666666">餐饮行业</font><br />
          <input type="radio" value="5" name="hangye" <?php if("媒体"==$row['hangye']) echo "checked";?>><font color="#666666">媒体</font><br />
          <input type="radio" value="6" name="hangye" <?php if("爱好者"==$row['hangye']) echo "checked";?>><font color="#666666">爱好者</font><br />
          <input type="hidden" name="hangye2" />
          <input type="radio"  name="hangye" value="7" <?php if(!in_array($row['hangye'],array("独立代理","进口商、分销商","超市","餐饮行业","媒体","爱好者"))) echo "checked";?>><font color="#666666">其它&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><input type="text" id="other1" size="40" readonly="readonly" name="other1" onchange="sendContent('other1')" value="<?php if(!in_array($row[hangye],array("独立代理","进口商、分销商","超市","餐饮行业","媒体","爱好者"))) echo $row['hangye'];?>"><br />
          </div>
          <div style="height:10px;"></div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
          <img src="images/picture130.png" /><input type="text" name="companyChineseName" size="32" value="<?php echo $row['companyChineseName'];?>"/><span id="tishi5" style="font-size:12px;"></span><br />
          <div style="height:5px;"></div>
          <img src="images/picture117.png" /><input type="text" name="companyEnglishName" size="32" value="<?php echo $row['companyEnglishName']; ?>"/><span id="tishi6" style="font-size:12px;"></span><br />
          <div style="height:10px;"></div>
          <img src="images/picture111.png"><br />
          <input type="radio" value="1" name="scale" <?php if("1-20人"==$row['scale']) echo "checked";?> /><font color="#666666">1-20人</font><div style="width:120px;display:inline-block;">&nbsp;</div><input type="radio" value="4" name="scale" <?php if("100-250人"==$row['scale']) echo "checked";?>/><font color="#666666">100-250人</font><br />
          <input type="radio" value="2" name="scale" <?php if("20-50人"==$row['scale']) echo "checked";?>/><font color="#666666">20-50人</font><div style="width:113px;display:inline-block;">&nbsp;</div><input type="radio" value="5" name="scale" <?php if("250-400人"==$row['scale']) echo "checked";?>/><font color="#666666">250-400人</font><br />
          <input type="radio" value="3" name="scale" <?php if("50-100人"==$row['scale']) echo "checked";?>/><font color="#666666">50-100人</font><div style="width:105px;display:inline-block;">&nbsp;</div><input type="radio" value="6" name="scale" <?php if("400人以上"==$row['scale']) echo "checked";?>/><font color="#666666">400人以上</font><br />
          <div style="height:15px;"></div>
          <img src="images/picture125.png" /><div style="width:45px;display:inline-block;">&nbsp;</div><input type="text" name="companyHomepage" size="32" value="<?php echo $row['companyHomepage']; ?>"/><br />
          </div>
          <div style="height:15px;"></div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
          <img src="images/picture129.png"><br />
          <input type="text" size="52" name="chineseName" value="<?php echo $row['chineseName']; ?>"><span id="tishi7" style="font-size:12px;"></span>
          <div style="height:15px;"></div>
          <img src="images/picture116.png"><br />
          <img src="images/picture114.png"><div style="width:5px;display:inline-block;">&nbsp;</div><input type="text" size="18" name="firstName" value="<?php echo $row['firstName']; ?>"><div style="width:30px;display:inline-block;">&nbsp;</div> <img src="images/picture112.png"><div style="width:5px;display:inline-block;">&nbsp;</div><input type="text" size="18" name="secondName" value="<?php echo $row['secondName']; ?>"><span id="tishi8" style="font-size:12px;"></span><br/>
          <div style="height:15px;"></div>
          <img src="images/picture128.png"><br />
          <input type="radio" value="1" name="job" <?php if("首席执行官/主席"==$row['job']) echo "checked";?>><font color="#666666">首席执行官/主席</font><div style="width:118px;display:inline-block;"></div><input type="radio" value="2" name="job" <?php if("市场经理"==$row['job']) echo "checked";?>><font color="#666666">市场经理</font><br />
          <input type="radio" value="3" name="job" <?php if("总经理"==$row['job']) echo "checked"; ?>><font color="#666666">总经理</font><div style="width:180px;display:inline-block;"></div><input type="radio" value="4" name="job" <?php if("销售"==$row['job']) echo "checked";?>><font color="#666666">销售</font><br />
          <input type="radio" value="5" name="job" <?php if("品牌经理"==$row['job']) echo "checked";?>><font color="#666666">品牌经理</font><div style="width:165px;display:inline-block;"></div><input type="radio" value="6" name="job" <?php if("采购"==$row['job']) echo "checked";?>><font color="#666666">采购</font><br />
          <input type="radio" value="7" name="job" <?php if("产品经理"==$row['job']) echo "checked";?>><font color="#666666">产品经理</font><div style="width:165px;display:inline-block;"></div><input type="radio" value="8" name="job" <?php if("编辑"==$row['job']) echo "checked";?>><font color="#666666">编辑</font><br />
          <input type="radio" value="9" name="job" <?php if("销售经理"==$row['job']) echo "checked";?>><font color="#666666">销售经理</font><div style="width:165px;display:inline-block;"></div><input type="radio" value="10" name="job" <?php if("记者"==$row['job']) echo "checked";?>><font color="#666666">记者</font><br />
          <input type="hidden" name="job2">
          <input type="radio"  name="job" value="11" <?php if(!in_array($row['job'],array("首席执行官/主席","总经理","品牌经理","产品经理","销售经理","市场经理","销售","采购","编辑","记者"))) echo "checked";?>><font color="#666666">其它&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><input type="text" id="other2" size="36" readonly="readonly" onchange="sendContent('other2')" value="<?php if(!in_array($row['job'],array("首席执行官/主席","总经理","品牌经理","产品经理","销售经理","市场经理","销售","采购","编辑","记者"))) echo $row['job']; ?>"><br />
          <div style="height:15px;"></div>
          <img src="images/picture124.png" /><div style="width:45px;display:inline-block;">&nbsp;</div><input type="text" name="phone" size="35" value="<?php echo $row['phone']; ?>" /><span id="tishi9" style="font-size:12px;"></span><br />
          <div style="height:15px;"></div>
          <img src="images/picture123.png" /><div style="width:62px;display:inline-block;">&nbsp;</div><input type="text" name="tax" size="35" value="<?php echo $row['tax']; ?>"/><br />
          <div style="height:15px;"></div>
          <img src="images/picture122.png" /><div style="width:15px;display:inline-block;">&nbsp;</div><input type="text" name="mobilephone" size="35" value="<?php echo $row['mobilephone']; ?>"/><span id="tishi10" style="font-size:12px;"></span><br />
          </div>
          <div style="height:15px;"></div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
          <img src="images/picture121.png"><br />
         <textarea name="addressChinese" cols="50" ><?php echo $row['addressChinese']; ?></textarea><span id="tishi11" style="font-size:12px;"></span>
         <div style="height:15px;"></div>
         <img src="images/picture120.png"><br />
         <textarea name="addressEnglish" cols="50" ><?php echo $row['addressEnglish']; ?></textarea><span id="tishi12" style="font-size:12px;"></span>
          <div style="height:15px;"></div>
          <img src="images/picture119.png"><br />
          <input type="text" size="50" name="code" value="<?php echo $row['code']; ?>"><span id="tishi13" style="font-size:12px;"></span>
          </div>
          <div style="height:15px;"></div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
          <img src="images/picture118.png"><br />
          <input type="checkbox" value="1" name="interesting[]" <?php if(in_array("葡萄酒及烈酒",explode(' ',$row['interesting']))) echo "checked";?>>
            <font color="#666666">葡萄酒及烈酒</font>
          <div style="width:120px;display:inline-block;">&nbsp;</div><input type="checkbox" value="2" name="interesting[]" <?php if(in_array("谷物制品",explode(' ',$row['interesting']))) echo "checked";?>>
          <font color="#666666">谷物制品</font><br />
          <input type="checkbox" value="3" name="interesting[]" <?php if(in_array("乳制品",explode(' ',$row['interesting']))) echo "checked";?>>
          <font color="#666666">乳制品</font>
          <div style="width:162px;display:inline-block;">&nbsp;</div><input type="checkbox" value="4" name="interesting[]" <?php if(in_array("糖果",explode(' ',$row['interesting']))) echo "checked";?>>
          <font color="#666666">糖果</font><br />
          <input type="checkbox" value="5" name="interesting[]" <?php if(in_array("水产",explode(' ',$row['interesting']))) echo "checked";?>>
          <font color="#666666">水产</font>
          <div style="width:176px;display:inline-block;">&nbsp;</div><input type="checkbox" value="6" name="interesting[]" <?php if(in_array("饮料",explode(' ',$row['interesting']))) echo "checked";?>>
          <font color="#666666">饮料</font><br />
          <input type="checkbox" value="7" name="interesting[]" <?php if(in_array("蔬菜",explode(' ',$row['interesting']))) echo "checked";?>>
          <font color="#666666">蔬菜</font>
          <div style="width:177px;display:inline-block;">&nbsp;</div><input type="checkbox" value="8" name="interesting[]" <?php if(in_array("香料、油、调味品等",explode(' ',$row['interesting']))) echo "checked";?>>
          <font color="#666666">香料、油、调味品等</font><br />
          <input type="checkbox" value="9" name="interesting[]" <?php if(in_array("肉制品",explode(' ',$row['interesting']))) echo "checked";?>>
          <font color="#666666">肉制品</font>
          <div style="width:163px;display:inline-block;">&nbsp;</div><input type="checkbox" value="10" name="interesting[]" <?php if(in_array("方便及半成品",explode(' ',$row['interesting']))) echo "checked";?>>
          <font color="#666666">方便及半成品</font><br />
          <div style="height:15px;"></div>
          </div>
          <div style="width:450px;height:0px;border-top:1px #ccc dashed;" />
          <div style="height:15px;"></div>
          <div class="b7">
           <div style="height:15px;"></div>
           <input type="hidden" name="canSubmit" value="success" />
          <img src="images/picture66.png" onclick="checkupdate()" id="done2" />
          </div>
        </form>
    </div>

 <div class="buchong1"><img src="images/picture34.png"></div>
</div>
 
</div>


</div> <!-- #pp-afterslider -->

</div> <!-- #frontpage -->
