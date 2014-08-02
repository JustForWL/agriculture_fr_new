<?php
/**
 * The Header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Cryout Creations
 * @subpackage tempera
 * @since tempera 0.5
 */
 ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php  cryout_meta_hook(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="wp-content/themes/tempera/styles/album.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

<script type="text/javascript" src="js/menu.js"></script>

<script type="text/javascript">
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
	function closeLogin(){
	document.getElementById("loginTable").style.display="none";
	document.getElementById("wrapper").style.opacity = 1;
}
function checkLogin(){
	var user = document.getElementById("user");
	var pass = document.getElementById("pass");
	if(user.value == ""){
		alert("请输入用户名!");
		user.focus();
		return false;
	}
	if(pass.value == ""){
		alert("请输入密码！");
		pass.focus();
		return false;
	}
}
function showLogin(){
	document.getElementById("loginTable").style.display = "block";
	document.getElementById("wrapper").style.opacity = 0.3;
}
function changeState(){
	var done = document.getElementById("done");
	if(done.disabled){
		done.setAttribute("src", "images/picture54.png");
		done.removeAttribute("disabled");
	}else{
		done.setAttribute("disabled", "disabled");
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
</script>
<script type="text/javascript">
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
</script>

<style type="text/css">
#loginTable tr td {vertical-align:middle;}
table tr td img{cursor:pointer;}
.rollBox {display:block;height:220px;margin-top:10px;}
.rollBox .scrollcon{width:1140px;height:200px;position:absolute;}
.rollBox .LeftBotton{height:30px;width:22px;background:url(images/picture16_1.png); no-repeat 0px 0;overflow:hidden;float:left;display:inline;margin-top:80px;cursor:pointer;margin-left:40px;}
.rollBox .LeftBotton2{height:30px;width:22px;background:url(images/picture16_2.png); no-repeat 0px 0;overflow:hidden;float:left;display:inline;margin-top:80px;cursor:pointer;margin-left:40px;}
.rollBox .RightBotton{height:30px;width:22px;background:url(images/picture15_1.png); no-repeat 0px 0;overflow:hidden;float:left;display:inline;margin-left:1140px;cursor:pointer;margin-top:-130px;}
.rollBox .RightBotton2{height:30px;width:22px;background:url(images/picture15_2.png); no-repeat 0px 0;overflow:hidden;float:left;display:inline;margin-left:1140px;cursor:pointer;margin-top:-130px;}
.rollBox .Cont{width:auto;overflow:hidden;height:200px;margin-left:22px;margin-top:0;}
.rollBox .ScrCont{width:10000000px;}
.rollBox .Cont .pic{width:270px;height:200px;overflow:hidden;float:left;}
.rollBox .Cont .pic img{background:#fff;display:block;}
.rollBox #List1, .rollBox #List2{float:left;}
.divcss5{
	position:relative;
	margin:0 auto;
}
.divcss5 a,.divcss5 a img{display:none; text-decoration:none}
.divcss5:hover{cursor:pointer}
.divcss5:hover a.now{cursor:pointer; position:absolute; top:0; width:100%; height:100%; z-index:100; left:0; display:block;}
.divcss5:hover a img{ display:block;position:absolute; bottom:0; left:0;color:#FFF;width:554px; z-index:10;height:36px; line-height:36px; background:#efefee;filter:alpha(opacity=90);-moz-opacity:0.9;opacity: 0.9;}
#popmenu {
	Z-index:100;
	position:absolute;
	border:#000000 1px solid;
	visibility:hidden;
	margin-left:160px;
}
#loginTable{
	display:none;
	position:absolute;
	z-index:100;
	align:center;
	margin-left:30%;
	margin-top:30%;
	padding:0;
	vertical-align:middle;
	
}
#loginTable tr td {vertical-align:middle;}
#topbar div span {
	cursor: pointer;
}
#focus ul li {list-style:none;}
#focus{height:330px;width:1360px;overflow:hidden;position:relative; margin-top:-5px;}
#focus ul{height:330px;width:1360px;position:absolute;}
#focus ul li{float:left;height:330px;width:1360px;;overflow:hidden;position:relative;background:#000;}
#focus ul li div{position:absolute;overflow:hidden;}
#focus .btnBg{position:absolute;height:20px;width:1360px;left:0;bottom:0;background:#000;}
#focus .btn{position:absolute;height:10px;padding:5px 10px;right:0;bottom:0;text-align:right;}
#focus .btn span{display:inline-block;_display:inline;_zoom:1;width:25px;height:10px;_font-size:0;margin-left:5px;cursor:pointer;background:#fff;}
#focus .btn span.on{background:#fff;}
#focus .preNext{width:45px;height:100px;position:absolute;top:90px;background:url(wp-content/themes/tempera/images/slider/sprite.png) no-repeat 0 0;cursor:pointer;}
#focus .pre{left:0;}
#focus .next{right:0;background-position:right top;}
</style>
<?php
 	cryout_header_hook();
	wp_deregister_script('jquery');
	wp_head(); ?>
</head>
<body <?php body_class(); ?> style="background-image:url('images/bg.jpg'); background-repeat:no-repeat;">

<?php cryout_body_hook(); ?>

<div id="wrapper" class="hfeed" style="z-index:1;filter:Alpha(opacity=30)">
<div id="topbar" ><div align="center" valign="middle" style="display:inline;height:39px;line-height:39px;margin-left:150px;"><font color="#7F7F7F">语言:</font></div>
<div align="center" valign="middle" style="display:inline;height:39px;line-height:39px;" onmouseover="showmenu(event, other)" onmouseout="delayhidemenu()"><img src="images/picture22.png" /><font color="#7F7F7F">中文</font></div>
<div class="menuskin" id="popmenu" onmouseover="clearhidemenu();highlightmenu(enent, 'on')" onmouseout="highlightmenu(event, 'off');dynamichide(event)">
</div>
<div style="display:inline; margin-left:430px;"><a href="/agriculture_fr/register" style="color:#7F7F7F;">免费注册</a><font color="#7F7F7F">/</font><a style="color:#7F7F7F;">登录</a></div>
<div class="headersearch" ><?php get_search_form(); ?></div><?php cryout_topbar_hook(); ?>

</div>


<div id="main" style="margin-top:0;padding:0px;">




		<?php cryout_main_hook(); ?>

