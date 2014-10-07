<script type="text/javascript">
$(document).ready(function(){
   // alert($("div .excerpt2").find("p").find());
		$.ajax({
			type:'POST',
			url:'/companyQuery.php',
			data:{productsType:$("input[name='productsType']").val(), country:$("input[name='country']").val(), company:$("input[name='company']").val(), order:'name'},
			dataType:'text',
			success:function(data){
				document.getElementById('show_ajax').innerHTML = data;
			}
			});
		
		});
</script>
<div id="main" >
<div id="frontpage" >
<div id="pp-afterslider" class="b2">

<div >

	<img src="/images/picture67.png" style="display:inline;margin-top:50px;margin-left:40px; height:80px;" align="left">
   
    <div style="display:inline; margin-left:5%;margin-top:-20px;" align="left">
      <div style="background-color:#D10024; border:#D10024 solid 1px;display:inline-block;margin-top:50px;"><span style="height:40px;">&nbsp;&nbsp;<font color="#FFFFFF">产品类型：</font></span>
        <input type="text" name="productsType" value="<?php $hidden = $_POST['hid']; if($hidden) echo $_POST['productsType']; else echo "请选择";?>" id="productsType" class="am"   onclick="hide('HMF-1')" readonly style="color:#FFF;border-radius:0px;-webkit-border-radius:0px; background-color:#D10024;margin-top:2px;border:0px;"/>
        <div id="HMF-1" style="display: none " class="bm" tabindex="1">
        </div>
        <img src="/images/picture72.png" style="margin-right:2px;" onclick="hide('HMF-1')" id="showHMF1"/>
      </div>
     <div style="background-color:#D10024; border:#D10024 solid 1px;display:inline-block;"><label for="country" title="国家" >&nbsp;&nbsp;<font color="#FFFFFF">国家：</font></label>
        <!--<select name="select2" style="color:#fff;border-radius:0px;-webkit-border-radius:0px;background-color:rgba(209,0,36, 0);border-color:#D10024;outline: medium none;"><option value="大不列颠及北爱尔兰联合王国" style=" background-color:#D10024">大不列颠及北爱尔兰联合王国</option></select>-->
         <input type="text" name="country" value="<?php $hidden = $_POST['hid']; if($hidden) echo $_POST['country']; else echo "请选择";?>" id="country" onclick="hide('HMF-2')" class="am" size="300" readonly style="color:#FFF;border-radius:0px;-webkit-border-radius:0px; background-color:#D10024;margin-top:2px;border:0px;"/>
        <div id="HMF-2" style="display: none " class="bm2">
         <span id="b1" onclick="pick('中国', 'country', 'HMF-2' )" onMouseOver="bgcolor('b1')" onMouseOut="nocolor('b1')" class="cur">&nbsp;中国</span>
         <span id="a2" onclick="pick('其它国家', 'country', 'HMF-2' )" onMouseOver="bgcolor('a2')" onMouseOut="nocolor('a2')" class="cur">&nbsp;其它国家</span>
		 <span id="a2" onclick="pick('请选择', 'country', 'HMF-2' )" onMouseOver="bgcolor('a2')" onMouseOut="nocolor('a2')" class="cur">&nbsp;请选择</span>
        </div>
        <img src="/images/picture72.png" style="margin-right:2px;" onclick="hide('HMF-2')" id="showHMF2" />
        </div>
        <div style="margin-left:45%;">
        <div style="border:#999 solid 1px; width:340px;;margin-top:10px;"><span>&nbsp;&nbsp;&nbsp;<font color="#999999">企业名称:&nbsp;</font></span>
        <input type="text" name="company" id="company" size=30 onblur="checkcontent(this.value)" style="margin-top:4px;border-radius:0px;-webkit-border-radius:0px;background-color:#fff;border-color:#fff;" hidefocus value="<?php $hidden = $_POST['hid']; if($hidden) echo $_POST['company']; else echo "";?>"/> </div>
        <input type="image" name="search" src="/images/picture68.png" align="left" style="display:inline;margin-left:350px; margin-top:-35px;">
        </div>
    </div>

</div>
	<div style="height:80px;" >
	</div>
    <div class="req_form" id="company">    

        <img onclick="changeByName('col1')" id="col1" src="/images/picture69_2.png" />
        <img onclick="changeByName('col2')" id="col2" src="/images/picture70_1.png"  />
        <img onclick="changeByName('col3')" id="col3" src="/images/picture71_1.png"  />
		<div id="show_ajax">
    	</div>
		
    
    </div>

</div>




    <div style="height:80px;" >

    </div>



</div> <!-- #pp-afterslider -->
</div> <!-- #frontpage -->
