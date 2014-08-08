var canSubmit = true;
$(function(){
	$("input[name='hangye']").each(function(){
		if($(this).val() == '7'){
			$(this).bind('click',function(){
				document.getElementById("other1").removeAttribute("readonly");
			});
		}else{
			$(this).bind('click',function(){
				document.getElementById("other1").setAttribute("readonly", "readonly");
			});
		}
	});
	$("input[name='job']").each(function(){
		if($(this).val() == '11'){
			$(this).bind('click',function(){
				document.getElementById("other2").removeAttribute("readonly");
			});
		}else{
			$(this).bind('click',function(){
				document.getElementById("other2").setAttribute("readonly", "readonly");
			});
		}
	});
});
$(document).ready(function(){
	$("input[name='user']").focus(function(){
		document.getElementById("tishi1").innerHTML='';
	}
	);
	$("input[name = 'search']").click(function(){
		$.ajax({
			type:'POST',
			url:'companyQuery.php',
			data:{productsType:$("input[name='productsType']").val(), country:$("input[name='country']").val(), company:$("input[name='company']").val(), order:'name'},
			dataType:'text',
			success:function(data){
				document.getElementById('show_ajax').innerHTML = data;
			}
			});
		
		});

		//this is for the order by name
	$("#col1").click(function(){
		var pageID = $("#pageID").val();
		document.getElementById('show_ajax').innerHTML = '';
		$.ajax({
			type:'POST',
			url:'companyQuery.php',
			data:{productsType:$("input[name='productsType']").val(), country:$("input[name='country']").val(), company:$("input[name='company']").val(), order:'name', page:pageID},
			dataType:'text',
			success:function(data){
				document.getElementById('show_ajax').innerHTML = data;
			}
			});
		
		});
		//this is for the order by products	
	$("#col2").click(function(){
		var pageID = $("#pageID").val();
		document.getElementById('show_ajax').innerHTML = '';
		$.ajax({
			type:'POST',
			url:'companyQuery.php',
			data:{productsType:$("input[name='productsType']").val(), 'country':$("input[name='country']").val(), 'company':$("input[name='company']").val(), order:'products',page:pageID},
			dataType:'text',
			success:function(data){
				document.getElementById('show_ajax').innerHTML = data;
			}
			});
		
		});
				//this is for the order by exportation_countries
	$("#col3").click(function(){
		var pageID = $("#pageID").val();
	    document.getElementById('show_ajax').innerHTML = '';
		$.ajax({
			type:'POST',
			url:'companyQuery.php',
			data:{productsType:$("input[name='productsType']").val(), 'country':$("input[name='country']").val(), 'company':$("input[name='company']").val(), order:'exportation_countries',page:pageID},
			dataType:'text',
			success:function(data){
				document.getElementById('show_ajax').innerHTML = data;
			}
			});
		
		});
	
	$("input[name='user']").blur(function(){
		if($("input[name='user']").val() != ''){
		$.ajax({
			type:'GET',
			url:'checkUsername.php',
			data:{username:$("input[name='user']").val()},
			dataType:'text',
			success:function(data){
				
				if(data == "registed"){
					document.getElementById('tishi1').innerHTML="<font color='#f00'>&nbsp;用户名已被占用</font>";
					canSubmit = false;
				}else{
					alert(data);
					/*document.getElementById('tishi1').innerHTML="<font color='#0f0'>&nbsp;用户名可用</font>";
					canSummit = true;*/
				}
			}
			});
		}
	}
	);
	$("input[name='email']").focus(function(){
		document.getElementById("tishi2").innerHTML='';
	}
	);
	$("input[name='pass']").focus(function(){
		document.getElementById("tishi3").innerHTML='';
	}
	);
	$("input[name='pass2']").focus(function(){
		document.getElementById("tishi4").innerHTML='';
	}
	);
	$("input[name='companyChineseName']").focus(function(){
		document.getElementById("tishi5").innerHTML='';
	}
	);
	$("input[name='companyEnglishName']").focus(function(){
		document.getElementById("tishi6").innerHTML='';
	}
	);
	$("input[name='chineseName']").focus(function(){
		document.getElementById("tishi7").innerHTML='';
	}
	);
	$("input[name='firstName']").focus(function(){
		document.getElementById("tishi8").innerHTML='';
	}
	);
	$("input[name='secondName']").focus(function(){
		document.getElementById("tishi8").innerHTML='';
	}
	);
	$("textarea[name='addressChinese']").focus(function(){
		document.getElementById("tishi11").innerHTML='';
	}
	);
	$("textarea[name='addressEnglish']").focus(function(){
		document.getElementById("tishi12").innerHTML='';
	}
	);
	$("input[name='code']").focus(function(){
		document.getElementById("tishi13").innerHTML='';
	}
	);
}
);
$(function() {
	var sWidth = $("#focus").width(); //获取焦点图的宽度（显示面积）
	var len = $("#focus ul li").length; //获取焦点图个数
	var index = 0;
	var picTimer;
	
	//以下代码添加数字按钮和按钮后的半透明条，还有上一页、下一页两个按钮
	var btn = "<div class='btnBg'></div><div class='btn'>";
	for(var i=0; i < len; i++) {
		btn += "<span></span>";
	}
	btn += "</div><div class='preNext pre'></div><div class='preNext next'></div>";
	$("#focus").append(btn);
	$("#focus .btnBg").css("opacity",0);

	//为小按钮添加鼠标滑入事件，以显示相应的内容
	$("#focus .btn span").css("opacity",0.4).mouseover(function() {
		index = $("#focus .btn span").index(this);
		showPics(index);
	}).eq(0).trigger("mouseover");

	//上一页、下一页按钮透明度处理
	$("#focus .preNext").css("opacity",0.2).hover(function() {
		$(this).stop(true,false).animate({"opacity":"0.5"},300);
	},function() {
		$(this).stop(true,false).animate({"opacity":"0.2"},300);
	});

	//上一页按钮
	$("#focus .pre").click(function() {
		index -= 1;
		if(index == -1) {index = len - 1;}
		showPics(index);
	});

	//下一页按钮
	$("#focus .next").click(function() {
		index += 1;
		if(index == len) {index = 0;}
		showPics(index);
	});

	//本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
	$("#focus ul").css("width",sWidth * (len));
	
	//鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
	$("#focus").hover(function() {
		clearInterval(picTimer);
	},function() {
		picTimer = setInterval(function() {
			showPics(index);
			index++;
			if(index == len) {index = 0;}
		},4000); //此4000代表自动播放的间隔，单位：毫秒
	}).trigger("mouseleave");
	
	//显示图片函数，根据接收的index值显示相应的内容
	function showPics(index) { //普通切换
		var nowLeft = -index*sWidth; //根据index值计算ul元素的left值
		$("#focus ul").stop(true,false).animate({"left":nowLeft},300); //通过animate()调整ul元素滚动到计算出的position
		//$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
		$("#focus .btn span").stop(true,false).animate({"opacity":"0.4"},300).eq(index).stop(true,false).animate({"opacity":"1"},300); //为当前的按钮切换到选中的效果
	}
});
//图片滚动列表
var Speed = 0.01;//速度(毫秒)
var Space = 5;//每次移动(px)
var PageWidth = 182;//翻页宽度
var fill = 0;//整体移位
var MoveLock = false;
var MoveTimeObj;
var Comp = 0;
var AutoPlayObj = null;
GetObj("List2").innerHTML = GetObj("List1").innerHTML;
GetObj('ISL_Cont').scrollLeft = fill;
GetObj("ISL_Cont").onmouseover = function(){
	clearInterval(AutoPlayObj);
}
GetObj("ISL_Cont").onmouseout = function(){
	AutoPlay();
}

AutoPlay();

function GetObj(objName){
	if(document.getElementById){
		return eval('document.getElementById("'+objName+'")')
	}else{
		return eval('document.all.'+objName)
	}
}

function AutoPlay(){ //自动滚动
	clearInterval(AutoPlayObj);
	AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',2000);//间隔时间
}

function ISL_GoUp(){ //上翻开始
	if(MoveLock) return;
	clearInterval(AutoPlayObj);
	MoveLock = true;
	MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
}

function ISL_StopUp(){ //上翻停止
	clearInterval(MoveTimeObj);
	if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
		Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
		CompScr();
	}else{
		MoveLock = false;
	}
	AutoPlay();
}

function ISL_ScrUp(){ //上翻动作
	if(GetObj('ISL_Cont').scrollLeft <= 0){
		GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft + GetObj('List1').offsetWidth
	}
		GetObj('ISL_Cont').scrollLeft -= Space ;
}

function ISL_GoDown(){ //下翻
	clearInterval(MoveTimeObj);
	if(MoveLock) return;
	clearInterval(AutoPlayObj);
	MoveLock = true;
	ISL_ScrDown();
	MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
}
function ISL_StopDown(){ //下翻停止
	clearInterval(MoveTimeObj);
	if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
		Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
		CompScr();
	}else{
		MoveLock = false;
	}
	AutoPlay();
}

function ISL_ScrDown(){ //下翻动作
	if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){
		GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;
	}
	GetObj('ISL_Cont').scrollLeft += Space ;
}

function CompScr(){
	var num;
	if(Comp == 0){
		MoveLock = false;return;
	}
	if(Comp < 0){ //上翻
		if(Comp < -Space){
			Comp += Space;
			num = Space;
		}else{
			num = -Comp;
			Comp = 0;
		}
		GetObj('ISL_Cont').scrollLeft -= num;
		setTimeout('CompScr()',Speed);
	}else{ //下翻
		if(Comp > Space){
			Comp -= Space;
			num = Space;
		}else{
			num = Comp;
			Comp = 0;
		}
		GetObj('ISL_Cont').scrollLeft += num;
		setTimeout('CompScr()',Speed);
	}
}
$(document).ready(function(){
		picTuru();
	});
	function picTuru(){
	$('.rollBox .LeftBotton2').hide();
	$('.rollBox .RightBotton2').hide();
	$('.rollBox .LeftBotton').mouseover(
		function(){
			$('.rollBox .LeftBotton').hide();
			$('.rollBox .LeftBotton2').show();
		}
		);
	$('.rollBox .LeftBotton2').mouseout(
		function(){
		    $('.rollBox .LeftBotton2').hide();
			$('.rollBox .LeftBotton').show();
		}
		);
	 $('.rollBox .RightBotton').mouseover(
		function(){
			$('.rollBox .RightBotton').hide();
			$('.rollBox .RightBotton2').show();
		}
		);
	$('.rollBox .RightBotton2').mouseout(
		function(){
		    $('.rollBox .RightBotton2').hide();
			$('.rollBox .RightBotton').show();
		}
		);
	}
	function changeState(){
	var done = document.getElementById("done");
	if("images/picture55.png" == done.getAttribute("src")){
		done.setAttribute("src", "images/picture54.png");
		
	}else{
		done.setAttribute("src", "images/picture55.png");
	}
}
	function updatePostContent(){
	if(document.getElementById("updateContent").getAttribute("src") == "images/picture58.png"){
		document.getElementById("updateContent").setAttribute("src", "images/picture66.png" );
		var inputs = document.getElementsByTagName("input");
		for(var i = 0; i < inputs.length; i++){
			inputs.item(i).removeAttribute("readonly");
		}
		document.form1.user.setAttribute("readonly", "readonly");
	}
	else{
		alert("do post");
	}
}
function askContent(content){
	switch(content){
		case "news":
		    document.getElementById("news").setAttribute("src", "images/picture61_1.png");
			document.getElementById("talk").setAttribute("src", "images/picture62_2.png");
			document.getElementById("shijian").setAttribute("src", "images/picture63_2.png");
			break;
		case "talk":
			document.getElementById("news").setAttribute("src", "images/picture61_2.png");
			document.getElementById("talk").setAttribute("src", "images/picture62_1.png");
			document.getElementById("shijian").setAttribute("src", "images/picture63_2.png");
			break;
		case "shijian":
			document.getElementById("news").setAttribute("src", "images/picture61_2.png");
			document.getElementById("talk").setAttribute("src", "images/picture62_2.png");
			document.getElementById("shijian").setAttribute("src", "images/picture63_1.png");
			break;
	}
}
function $$$$$(_sId){
 return document.getElementById(_sId);
 }
function hide(_sId)
 {$$$$$(_sId).style.display = $$$$$(_sId).style.display == "none" ? "" : "none";}
function pick(v,s,d) {
 document.getElementById(s).value=v;
hide(d)
}
function bgcolor(id){
 document.getElementById(id).style.background="#F7FFFA";
 document.getElementById(id).style.color="#000";
}
function nocolor(id){
 document.getElementById(id).style.background="";
 document.getElementById(id).style.color="#788F72";
}

function changeByName(name){
	var col1 = document.getElementById("col1");
	var col2 = document.getElementById('col2');
	var col3 = document.getElementById('col3');
	
	if("col1" == name){
		col1.setAttribute("src", "images/picture69_2.png");
		col2.setAttribute("src", "images/picture70_1.png");
		col3.setAttribute("src", "images/picture71_1.png");
	}
	if("col2" == name){			
		col1.setAttribute("src", "images/picture69_1.png");
		col2.setAttribute("src", "images/picture70_2.png");
		col3.setAttribute("src", "images/picture71_1.png");
		
	}
	if("col3" == name){
		col1.setAttribute("src", "images/picture69_1.png");
		col2.setAttribute("src", "images/picture70_1.png");
		col3.setAttribute("src", "images/picture71_2.png");
	}
}
/*
function getFromOther(other){
	if('other1' == other){
		document.getElementById("other1").removeAttribute("readonly");
	}
	if('other2' == other){
		document.getElementById("other2").removeAttribute("readonly");
	}
}*/
function sendContent(other){
	if('other1' == other){
		document.getElementsByName("hangye2").item(0).value = document.getElementById("other1").value;
		//alert(document.getElementsByName("hangye").item(0).value);
	}
	if('other2' == other){
		document.getElementsByName("job2").item(0).value = document.getElementById("other2").value;
		//alert(document.getElementsByName("job").item(0).value);
	}
}

function checkReg(){
	if("images/picture55.png" == document.getElementById("done").getAttribute("src")){
		return false;
	}
	if(document.form1.user.value == ''){
		document.getElementById('tishi1').innerHTML="<font color='#f00'>&nbsp;用户名不能为空</font>";
		//document.form1.user.focus();
		return false;
	}
	if(document.form1.email.value ==  ''){
		document.getElementById('tishi2').innerHTML="<font color='#f00'>&nbsp;电子邮件不能为空</font>";
		//document.form1.email.focus();
		return false;
	}else{
		var emailStr=document.form1.email.value;
		var emailPat=/^[a-zA-Z0-9_\-]{1,}@[a-zA-Z0-9_\-]{1,}\.[a-zA-Z0-9_\-.]{1,}$/;
		var matchArray=emailStr.match(emailPat);
		if (matchArray==null) {
			document.getElementById('tishi2').innerHTML="<font color='#f00'>&nbsp;电子邮件格式不正确</font>";
			return false;
		}
	}
	if(document.form1.pass.value == ''){
		document.getElementById('tishi3').innerHTML="<font color='#f00'>&nbsp;密码不能为空</font>";
		//document.form1.pass.focus();
		return false;
	}
	if(document.form1.pass2.value == ''){
		document.getElementById('tishi4').innerHTML="<font color='#f00'>&nbsp;确认密码不能为空</font>";
		//document.form1.passagain.focus();
		return false;
	}else{
		if((document.form1.pass2.value != document.form1.pass.value)){
			document.getElementById('tishi4').innerHTML="<font color='#f00'>&nbsp;前后密码不一致</font>";
			document.form1.passagain.focus();
			return false;
		}
	}
	
	if(document.form1.companyChineseName.value == ''){
		document.getElementById('tishi5').innerHTML="<font color='#FF0000' >&nbsp;公司名称不能为空</font>";
		//document.form1.pass.focus();
		return false;
	}
	if(document.form1.companyEnglishName.value == ''){
		document.getElementById('tishi6').innerHTML="<font color='#FF0000' >&nbsp;公司名称不能为空</font>";
		//document.form1.pass.focus();
		return false;
	
	}
	if(document.form1.chineseName.value == ''){
		document.getElementById('tishi7').innerHTML="<font color='#FF0000' >&nbsp;姓名不能为空</font>";
		//document.form1.pass.focus();
		return false;
	
	}
	if(document.form1.firstName.value == ''){
		document.getElementById('tishi8').innerHTML="<font color='#FF0000' >&nbsp;姓/名不能为空</font>";
		//document.form1.pass.focus();
		return false;
	
	}
	if(document.form1.secondName.value == ''){
		document.getElementById('tishi8').innerHTML="<font color='#FF0000' >&nbsp;姓/名不能为空</font>";
		//document.form1.pass.focus();
		return false;
	
	}
	if(document.form1.phone.value == ''){
		document.getElementById('tishi9').innerHTML="<font color='#FF0000' >&nbsp;电话不能为空</font>";
		//document.form1.pass.focus();
		return false;
	
	}else{
		var phone =/^(([0\+]\d{2,3}-)?(0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$/;
		if(!phone.test(document.form1.phone.value)){
		  document.getElementById('tishi10').innerHTML="<font color='#FF0000' >&nbsp;请输入有效的电话号码</font>";
		 //  document.form1.phone.focus();
		   return false;
		}
	}
	if(document.form1.mobilephone.value == ''){
		document.getElementById('tishi10').innerHTML="<font color='#FF0000' >&nbsp;手机号码不能为空</font>";
		//document.form1.pass.focus();
		return false;
	
	}else{
		var cellphone= /(^1[3|5|8][0-9]{9}$)/;
		if(!cellphone.test(document.form1.mobilephone.value)){
		  document.getElementById('tishi10').innerHTML="<font color='#FF0000' >&nbsp;请输入有效的手机号码</font>";
		 // document.form1.mobilephone.focus();
		   return false;
		}
	}
	if(document.form1.addressChinese.value == ''){
		document.getElementById('tishi11').innerHTML="<font color='#FF0000' >&nbsp;地址不能为空</font>";
		//document.form1.pass.focus();
		return false;
	
	}
	if(document.form1.addressEnglish.value == ''){
		document.getElementById('tishi12').innerHTML="<font color='#FF0000' >&nbsp;地址不能为空</font>";
		//document.form1.pass.focus();
		return false;
	
	}
	if(document.form1.code.value == ''){
		document.getElementById('tishi13').innerHTML="<font color='#FF0000' >&nbsp;邮政编码不能为空</font>";
		//document.form1.pass.focus();
		return false;
	
	}else{
		var  code =/^[0-9]{6}$/;  
		if(!code.test(document.form1.code.value)){
		  document.getElementById('tishi13').innerHTML="<font color='#FF0000' >&nbsp;请输入有效的手机号码</font>";
		  //document.form1.mobilephone.focus();
		   return false;
		}
	}
	if(canSubmit){
		document.getElementById("reg").submit();
	}
}
function checkRegAndPost(){
	if(!checkReg()){
		document.form1.checkDone.checked = false;
		document.getElementById('done').setAttribute("src", "images/picture55.png");
	}
}

function checkcontent(content){

	var sharp = 0, star = 0, comma = 0, key_name = 0;
	if(content.indexOf('#')>=0) sharp ++ ;
	if(content.indexOf('*')>=0) star ++;
	if(content.indexOf(';')>=0) comma ++;

	if(content.indexOf('drop')>=0) key_name ++;
	if(sharp +　star + comma + key_name > 0 )
	{
		alert('请重新输入企业名称！')
		document.getElementById("company").value = '';
		document.getElementById("company").focus();
		return false;
	}
	return true;
}

function changebg(o){
	o.style.backgroundImage="url('images/picture138.png')";
	o.childNodes[0].style.color = "#fff";
}
function changebgback(o){
	o.style.backgroundImage="url('images/picture137.png')";
	o.childNodes[0].style.color = "#ccc";
}
function activeGo(num){
	var gonum = document.getElementsByName("page_jump").item(0).value;
	if(isNaN(gonum) || (gonum > num) || gonum == '')
		return false;
	else{
		var goimg = document.getElementById("go");
		goimg.setAttribute("src", "images/picture139.png");
		goimg.style.cursor = "pointer";
	}
}
function unactiveGo(){
	var goimg = document.getElementById("go");
		goimg.setAttribute("src", "images/picture140.png");
		goimg.style.cursor = "auto";
}
function GetXmlHttpObject()
{
var xmlHttp=null;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
return xmlHttp;
}

function page_jump(toPage){
	var url = "companyQuery.php";
	xmlHttp = GetXmlHttpObject();
	xmlHttp.open('POST',url,true); 
    xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=UTF-8");
	var str = 'productsType='+$("input[name='productsType']").val()+"&country="+$("input[name='country']").val()+"&company="+$("input[name='company']").val()+"&order=name"+"&page="+toPage;
    //alert(str);
    xmlHttp.send(str); 
	xmlHttp.onreadystatechange=xmlHttpChange; 
}
 function xmlHttpChange() {         
     if(xmlHttp.readyState==4){             
          if(xmlHttp.status==200) {                                                      
           document.getElementById('show_ajax').innerHTML=xmlHttp.responseText; 
          } 
     } 
 } 
function gotoPage(toPage){
	var url = "companyQuery.php";
	xmlHttp = GetXmlHttpObject();
	xmlHttp.open('POST',url,true); 
    xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=UTF-8");
	var str = 'productsType='+$("input[name='productsType']").val()+"&country="+$("input[name='country']").val()+"&company="+$("input[name='company']").val()+"&order=name"+"&page="+toPage;
    xmlHttp.send(str); 
	xmlHttp.onreadystatechange=xmlHttpChange; 
}