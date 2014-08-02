
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<title></title>
<meta property="template" content="tempera" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="http://localhost/agriculture_fr/xmlrpc.php" />
<link href="wp-content/themes/tempera/styles/album.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript">
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
function checkReg(){
	if(document.form1.first.value==""){
    alert("姓不能为空");
	document.form1.first.focus();
    return false;
    }
	if(document.form1.second.value==""){
    alert("名不能为空");
    return false;
    }
	if(document.form1.user.value==""){
    alert("用户名不能为空");
    return false;
    }
	if(document.form1.pass.value==""){
    alert("密码不能为空");
    return false;
    }
	if(document.form1.pass2.value==""){
    alert("确认密码不能为空");
    return false;
    }else{
		if(document.form1.pass2.value !== document.form1.pass.value){
			alert("前后两次密码不一样！");
			this.select();
			return false;
		}
	}
	if(document.form1.statut.value==""){
    alert("statut不能为空");
    return false;
    }
	if(document.form1.language.value==""){
    alert("语言不能为空");
    return false;
    }
	if(document.form1.function.value==""){
    alert("函数不能为空");
    return false;
    }
	if(document.form1.mail.value==""){
    alert("电子邮件不能为空");
    return false;
    }else
	{
		reg=/^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/gi;
		if(!reg.test(document.form1.mail.value))
		{
			alert("非法的电子邮件");
			return false;
		}
	}
}

</script>
<style type="text/css">
.rollBox {display:block;height:220px;margin-top:10px;}
.rollBox .scrollcon{width:1060px;height:200px;position:absolute;}
.rollBox .LeftBotton{height:30px;width:22px;background:url(images/picture16_1.png); no-repeat 0px 0;overflow:hidden;float:left;display:inline;margin-top:80px;cursor:pointer;margin-left:40px;}
.rollBox .LeftBotton2{height:30px;width:22px;background:url(images/picture16_2.png); no-repeat 0px 0;overflow:hidden;float:left;display:inline;margin-top:80px;cursor:pointer;margin-left:40px;}
.rollBox .RightBotton{height:30px;width:22px;background:url(images/picture15_1.png); no-repeat 0px 0;overflow:hidden;float:left;display:inline;margin-left:1060px;cursor:pointer;margin-top:-130px;}
.rollBox .RightBotton2{height:30px;width:22px;background:url(images/picture15_2.png); no-repeat 0px 0;overflow:hidden;float:left;display:inline;margin-left:1060px;cursor:pointer;margin-top:-130px;}
.rollBox .Cont{width:auto;overflow:hidden;height:200px;margin-left:22px;margin-top:0;}
.rollBox .ScrCont{width:10000000px;}
.rollBox .Cont .pic{width:250px;height:200px;overflow:hidden;float:left;}
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
	margin-left:170px;
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
a {cursor:pointer;}
</style>
<link rel="alternate" type="application/rss+xml" title=" &raquo; Feed" href="http://localhost/agriculture_fr/feed" />
<link rel="alternate" type="application/rss+xml" title=" &raquo; 评论Feed" href="http://localhost/agriculture_fr/comments/feed" />
<link rel='stylesheet' id='temperas-css'  href='http://localhost/agriculture_fr/wp-content/themes/tempera/style.css?ver=3.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='tempera-frontpage-css'  href='http://localhost/agriculture_fr/wp-content/themes/tempera/styles/style-frontpage.css?ver=3.9.1' type='text/css' media='all' />
<script type='text/javascript' src='http://localhost/agriculture_fr/wp-includes/js/jquery/jquery.js?ver=1.11.0'></script>
<script type='text/javascript' src='http://localhost/agriculture_fr/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://localhost/agriculture_fr/wp-content/themes/tempera/js/frontend.js?ver=3.9.1'></script>
<script type='text/javascript' src='http://localhost/agriculture_fr/wp-content/themes/tempera/js/nivo-slider.js?ver=3.9.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/agriculture_fr/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/agriculture_fr/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 3.9.1" />
<style type="text/css"> #header, #main, #topbar-inner { max-width:auto; } /*#header-full, #footer { min-width: 1150px; } */ #container.one-column { } #container.two-columns-right #secondary { width:250px; float:right; } #container.two-columns-right #content { width:810px; float:left; } /*fallback*/ #container.two-columns-right #content { width:calc(100% - 280px); float:left; } #container.two-columns-left #primary { width:250px; float:left; } #container.two-columns-left #content { width:810px; float:right; } /*fallback*/ #container.two-columns-left #content { width:-moz-calc(100% - 280px); float:right; width:-webkit-calc(100% - 280px); width:calc(100% - 280px); } #container.three-columns-right .sidey { width:125px; float:left; } #container.three-columns-right #primary { margin-left:30px; margin-right:30px; } #container.three-columns-right #content { width:780px; float:left; } /*fallback*/ #container.three-columns-right #content { width:-moz-calc(100% - 310px); float:left; width:-webkit-calc(100% - 310px); width:calc(100% - 310px);} #container.three-columns-left .sidey { width:125px; float:left; } #container.three-columns-left #secondary {margin-left:30px; margin-right:30px; } #container.three-columns-left #content { width:780px; float:right;} /*fallback*/ #container.three-columns-left #content { width:-moz-calc(100% - 310px); float:right; width:-webkit-calc(100% - 310px); width:calc(100% - 310px); } #container.three-columns-sided .sidey { width:125px; float:left; } #container.three-columns-sided #secondary { float:right; } #container.three-columns-sided #content { width:780px; float:right; /*fallback*/ width:-moz-calc(100% - 310px); float:right; width:-webkit-calc(100% - 310px); float:right; width:calc(100% - 310px); float:right; margin: 0 155px 0 -1090px; } #footer-widget-area {width:1090px;} body { font-family: Ubuntu; } #content h1.entry-title a, #content h2.entry-title a, #content h1.entry-title , #content h2.entry-title { font-family: Yanone Kaffeesatz Regular; } .widget-title, .widget-title a { line-height: normal; font-family: Open Sans Light; } .entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4, .entry-content h5, .entry-content h6, #comments #reply-title, .nivo-caption h2, #front-text1 h1, #front-text2 h1, .column-header-image { font-family: Open Sans Light; } #site-title span a { font-family: Yanone Kaffeesatz Regular; } #access ul li a, #access ul li a span { font-family: Droid Sans; } body { color: #444444; background-color: #171717 } a { color: #1693A5; } a:hover,.entry-meta span a:hover, .comments-link a:hover { color: #D6341D; } #header { background-color: ; } #site-title span a { color:#1693A5; } #site-description { color:#999999; } .socials a { background-color: #1693A5; } .socials-hover { background-color: #D6341D; } /* Main menu top level */ #access a, #nav-toggle span { color: #333333; } #access, #nav-toggle {background-color: #EAEAEA; } #access > .menu > ul > li > a > span { border-color: #cccccc; -moz-box-shadow: 1px 0 0 #ffffff; -webkit-box-shadow: 1px 0 0 #ffffff; box-shadow: 1px 0 0 #ffffff; } #access a:hover {background-color: #f7f7f7; } #access ul li.current_page_item > a, #access ul li.current-menu-item > a, #access ul li.current_page_ancestor > a, #access ul li.current-menu-ancestor > a { background-color: #f7f7f7; } /* Main menu Submenus */ #access > .menu > ul > li > ul:before {border-bottom-color:#2D2D2D;} #access ul ul ul:before { border-right-color:#2D2D2D;} #access ul ul li { background-color:#2D2D2D; border-top-color:#3b3b3b; border-bottom-color:#222222} #access ul ul li a{color:#BBBBBB} #access ul ul li a:hover{background:#3b3b3b} #access ul ul li.current_page_item > a, #access ul ul li.current-menu-item > a { background-color:#3b3b3b; } #topbar { background-color: #000000;border-bottom-color:#282828; box-shadow:3px 0 3px #000000; } .topmenu ul li a { color: #CCCCCC; } .topmenu ul li a:hover { color: #EEEEEE; border-bottom-color: #1693A5; } /*#main { background-color: #FFFFFF; } */ #author-info, #entry-author-info, .page-title { border-color: #1693A5; background: #F7F7F7; } #entry-author-info #author-avatar, #author-info #author-avatar { border-color: #EEEEEE; } .sidey .widget-container { color: #333333; background-color: ; } .sidey .widget-title { color: #666666; background-color: #F7F7F7;border-color:#cfcfcf;} .sidey .widget-container a {color:;} .sidey .widget-container a:hover {color:;} .entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4, .entry-content h5, .entry-content h6 { color: #444444; } .sticky .entry-header {border-color:#1693A5 } .entry-title, .entry-title a { color: #444444; } .entry-title a:hover { color: #000000; } #content h3.entry-format { color: #333333; background-color: #EAEAEA; } #footer { color: #AAAAAA; background-color: ; } #footer2 { color: #AAAAAA; background-color: #F7F7F7; } #footer a { color: ; } #footer a:hover { color: ; } #footer2 a, .footermenu ul li:after { color: ; } #footer2 a:hover { color: ; } #footer .widget-container { color: #333333; background-color: ; } #footer .widget-title { color: #666666; background-color: #F7F7F7;border-color:#cfcfcf } a.continue-reading-link, #cryout_ajax_more_trigger { color:#333333 !important; background:#EAEAEA; border-bottom-color:#1693A5; } a.continue-reading-link:after { background-color:#D6341D; } a.continue-reading-link i.icon-right-dir {color:#1693A5} a.continue-reading-link:hover i.icon-right-dir {color:#D6341D} .page-link a, .page-link > span > em {border-color:#CCCCCC} .columnmore a {background:#D6341D;color:#F7F7F7} .columnmore a:hover {background:#1693A5;} .file, .button, #respond .form-submit input#submit, input[type=submit], input[type=reset] { background-color: #FFFFFF; border-color: #CCCCCC; box-shadow: 0 -10px 10px 0 #F7F7F7 inset; } .file:hover, .button:hover, #respond .form-submit input#submit:hover { background-color: #F7F7F7; } .entry-content tr th, .entry-content thead th { color: #444444; } .entry-content fieldset, #content tr td,#content tr th,#content thead th { border-color: #CCCCCC; } #content tr.even td { background-color: #F7F7F7 !important; } hr { background-color: #CCCCCC; } input[type="text"], input[type="password"], input[type="email"], input[type="file"], textarea, select, input[type="color"],input[type="date"],input[type="datetime"],input[type="datetime-local"],input[type="month"],input[type="number"],input[type="range"], input[type="search"],input[type="tel"],input[type="time"],input[type="url"],input[type="week"] { background-color: #F7F7F7; border-color: #CCCCCC #EEEEEE #EEEEEE #CCCCCC; color: #444444; } input[type="submit"], input[type="reset"] { color: #444444; background-color: #FFFFFF; border-color: #CCCCCC; box-shadow: 0 -10px 10px 0 #F7F7F7 inset; } input[type="text"]:hover, input[type="password"]:hover, input[type="email"]:hover, textarea:hover, input[type="color"]:hover, input[type="date"]:hover, input[type="datetime"]:hover, input[type="datetime-local"]:hover, input[type="month"]:hover, input[type="number"]:hover, input[type="range"]:hover, input[type="search"]:hover, input[type="tel"]:hover, input[type="time"]:hover, input[type="url"]:hover, input[type="week"]:hover { background-color: rgba(247,247,247,0.4); } .entry-content code { border-color: #CCCCCC; border-bottom-color:#1693A5;} .entry-content pre { border-color: #CCCCCC; background-color:#F7F7F7;} .entry-content blockquote { border-color: #EEEEEE; } abbr, acronym { border-color: #444444; } .comment-meta a { color: #444444; } #respond .form-allowed-tags { color: #999999; } .reply a{ background-color: #F7F7F7; border-color: #EEEEEE; } .reply a:hover { background-color: #EAEAEA;color: #1693A5; } .entry-meta .icon-metas:before {color:#CCCCCC;} .entry-meta span a, .comments-link a {color:#666666;} .entry-meta span a:hover, .comments-link a:hover {color:;} .nav-next a:hover {} .nav-previous a:hover { } .pagination { border-color:#ededed;} .pagination span, .pagination a { background:#F7F7F7; border-left-color:#dddddd; border-right-color:#ffffff; } .pagination a:hover { background: #ffffff; } #searchform input[type="text"] {color:#999999;} .caption-accented .wp-caption { background-color:rgba(22,147,165,0.8); color:#FFFFFF} .tempera-image-one .entry-content img[class*='align'],.tempera-image-one .entry-summary img[class*='align'], .tempera-image-two .entry-content img[class*='align'],.tempera-image-two .entry-summary img[class*='align'] { border-color:#1693A5;} #content p, #content ul, #content ol, #content, #frontpage blockquote { text-align:Default ; } #content p, #content ul, #content ol, .sidey, .sidey a, table, table td { font-size:15px; word-spacing:Default; letter-spacing:Default; } #content p, #content ul, #content ol, .sidey, .sidey a { line-height:1.7em; } #content h1.entry-title, #content h2.entry-title { font-size:34px ;} .widget-title, .widget-title a { font-size:18px ;} #content .entry-content h1 { font-size: 38px;} #content .entry-content h2 { font-size: 34px;} #content .entry-content h3 { font-size: 29px;} #content .entry-content h4 { font-size: 24px;} #content .entry-content h5 { font-size: 19px;} #content .entry-content h6 { font-size: 14px;} #site-title span a { font-size:38px ;} #access ul li a { font-size:14px ;} #access ul ul ul a {font-size:12px;} .nocomments, .nocomments2 {display:none;} #header-container > div { margin:40px 0 0 0px;} #content p, #content ul, #content ol, #content dd, #content pre, #content hr { margin-bottom: 1.0em; } #nav-toggle { text-align: left; } #toTop {background:#FFFFFF;margin-left:1300px;} #toTop:hover .icon-back2top:before {color:#D6341D;} #main {margin-top:20px; } #forbottom {margin-left: 30px; margin-right: 30px;} #header-widget-area { width: 33%; } #branding { height:120px; } </style> 
<style type="text/css"> .slider-wrapper { max-width: auto; max-height: auto ; } .slider-shadow { /* width: 1150px ; */ } #slider{ max-width: auto ; max-height: auto ; } .theme-default .nivo-controlNav {top:-33px;} #front-text1 h1, #front-text2 h1{ color: #444444; } #front-columns > div { width: 30%; } #front-columns > div.column3 { margin-right: 0; } .column-image { max-width:318px;margin:0 auto;} .column-image img { max-width:318px; max-height:201px;} .nivo-caption { background-color: rgba(0,0,0,0.7); } .nivo-caption, .nivo-caption a { color: #ffffff; } .theme-default .nivo-controlNav, .theme-default .nivo-directionNav a { background-color:#ffffff; } .slider-bullets .nivo-controlNav a { background-color: #F7F7F7; } .slider-bullets .nivo-controlNav a:hover { background-color: #EAEAEA; } .slider-bullets .nivo-controlNav a.active {background-color: #1693A5; } .slider-numbers .nivo-controlNav a { color:#ffffff;background-color:#000000;} .slider-numbers .nivo-controlNav a:hover { color: #1693A5; } .slider-numbers .nivo-controlNav a.active { color:#1693A5;} .column-image h3{ color: #444444; background-color: rgba(255,255,255,0.6); } .columnmore { background-color: #171717; } #front-columns h3.column-header-noimage { background: #FFFFFF; } </style>
<style type="text/css">/* Tempera Custom CSS */  </style>
<link rel='stylesheet' id='tempera_style_mobile'  href='http://localhost/agriculture_fr/wp-content/themes/tempera/styles/style-mobile.css' type='text/css' media='all' /><script type="text/javascript">var cryout_global_content_width = 900;var cryout_toTop_offset = 1150;</script><!--[if lt IE 9]>
<script>
document.createElement('header');
document.createElement('nav');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('footer');
</script>
<![endif]-->
<script type="text/javascript">
function makeDoubleDelegate(function1, function2) {
	// concatenate functions
    return function() { if (function1) function1(); if (function2) function2(); }
}

function tempera_onload() {
    // Add responsive videos
     jQuery(".entry-content").fitVids();
	}; // tempera_onload

jQuery(document).ready(function(){
	// enable mobile menu handle
	tempera_mobilemenu_init();
});

// make sure not to lose previous onload events
window.onload = makeDoubleDelegate(window.onload, tempera_onload );
</script>
</head>
<body class="home blog tempera-image-one caption-dark magazine-layout presentation-page" style="background-image:url('images/bg.jpg'); background-repeat:no-repeat;">

<form id="loginForm" action="" method="post">
	
    	
            <table style="background:#FFF"  id="loginTable">
			<tbody style="vertical-align:top;">
            <tr style="vertical-align:top;">
            	<td align="center" style="width:180px;;height:300px;"><img src="images/picture27.png" /></td>
				<td align="center" style="width:350px;;height:300px;">
				  <table width="350px" height="300px">
						<tr>
							<td colspan="2" align="right" style="height:"><img src="images/picture25.png" onclick="closeLogin();"/></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><img src="images/picture31.png" ></td>
						</tr>
						<tr>
							<td align="right"><img src="images/picture29.png" /></td>
							<td align="left"><input id="user" type="text" maxlength="70" size="30" /></td>
						</tr>
						<tr>
							<td align="right"><img src="images/picture28.png" /></td>
							<td align="left"> <input id="pass" type="password" maxlength="70" size="30" /></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="image" src="images/picture30.png"  onclick="checkLogin();"/></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><img src="images/picture26.png"  usemap="#map3"/>
							<map name="map3">
							<area shape="rect" coords="0,0,52,13" href="#"/>
							<area shape="rect" coords="63,2,110,17" href="#" />
							</map>
						  </td>
						</tr>
					</table>
				</td>
			</tr>
			</tbody>
            </table>
    	 
</form>
<div id="wrapper" class="hfeed" style="z-index:1;filter:Alpha(opacity=30)">
<div id="topbar" style="height:42px;"><div align="center" valign="middle" style="display:inline;height:39px;line-height:39px;margin-left:150px;"><font color="#7F7F7F">语言:</font></div>
<div align="center" valign="middle" style="display:inline;height:39px;line-height:39px;" onmouseover="showmenu(event, other)" onmouseout="delayhidemenu()"><img src="images/picture22.png" /><font color="#7F7F7F">中文</font></div>
<div class="menuskin" id="popmenu" onmouseover="clearhidemenu();highlightmenu(enent, 'on')" onmouseout="highlightmenu(event, 'off');dynamichide(event)">
</div>
<div style="display:inline; margin-left:430px;"><a href="#" style="color:#7F7F7F;">免费注册</a><font color="#7F7F7F">/</font><a onclick="showLogin();" style="color:#7F7F7F;">登录</a></div>
<div class="headersearch" style="width:450;display:inline-block;clear:none;padding:5px 0px 8px 0;float:right; margin-right:200px; margin-top:0px;position:relative;"> 
<form method="get" id="searchform"
action="http://localhost/agriculture_fr//">
<input type="text" value="Search"
name="s" id="s"
onblur="if (this.value == '')
{this.value = 'Search';}"
onfocus="if (this.value == 'Search')
{this.value = '';}" />
<input type="submit" id="searchsubmit" value="&#xe816;" />
</form>&nbsp;&nbsp;&nbsp;&nbsp;<div class="socials" id="sheader"><a  target="_blank" rel="nofollow" href="#" class="socialicons social-YouTube" title="新浪微博"><img alt="新浪微博" src="wp-content/themes/tempera/images/socials/xinlangweibo.png"/></a><a  target="_blank" rel="nofollow" href="#" class="socialicons social-YouTube" title="腾讯微博"><img alt="腾讯微博" src="wp-content/themes/tempera/images/socials/tengxunweibo.png"/></a></div></div>

</div>

<div id="header-full" style="height:70px;">
	<img src="images/picture57.png" usemap="#map" border="0" style="margin-top:-4px;;" hidefocus="true" />
	<map name="map">
	<area shape="rect" coords="830, 25, 870, 53" href="#" target="_black" alt="首页" title="首页"/>
	<area shape="rect" coords="900, 25, 980, 53" href="#" target="_black" alt="发现法国产品" title="发现法国产品"/>
	<area shape="rect" coords="1020, 25, 1100, 53" href="#" target="_black" alt="寻找法国公司" title="寻找法国公司"/>
	<area shape="rect" coords="1130, 25, 1165, 53" href="#" target="_black" alt="新闻" title="新闻"/>
	</map>
</div><!-- #header-full -->



<div id="main" style="margin-top:0;padding:0px;">

		<div id="toTop"><i class="icon-back2top"></i> </div>
		
		
<script type="text/javascript">
     jQuery(document).ready(function() {
	// Slider creation
     jQuery('#slider').nivoSlider({
		effect: 'random',
       	animSpeed: 750,
				//controlNavThumbs: true, 
		pauseTime: 5000     });
	});
</script> 


<div id="sliderContainter" style="margin-left:0px;height:325px;">
<div class="slider-wrapper theme-default slider-navhover slider-bullets" style="margin-left:0px;">
     
     <div id="slider" class="nivoSlider">
	            <a href='#'>
                 <img src='http://localhost/agriculture_fr/wp-content/themes/tempera/images/slider/tempera-slide1.jpg' data-thumb='http://localhost/agriculture_fr/wp-content/themes/tempera/images/slider/tempera-slide1.jpg' alt="" title="#caption0"  />
            </a>                 <a href='#'>
                 <img src='http://localhost/agriculture_fr/wp-content/themes/tempera/images/slider/tempera-slide2.jpg' data-thumb='http://localhost/agriculture_fr/wp-content/themes/tempera/images/slider/tempera-slide2.jpg' alt="" title="#caption1"  />
            </a>                 <a href='#'>
                 <img src='http://localhost/agriculture_fr/wp-content/themes/tempera/images/slider/tempera-slide3.jpg' data-thumb='http://localhost/agriculture_fr/wp-content/themes/tempera/images/slider/tempera-slide3.jpg' alt="" title="#caption2"  />
            </a>                 <a href='#'>
                 <img src='http://localhost/agriculture_fr/wp-content/themes/tempera/images/slider/tempera-slide4.jpg' data-thumb='http://localhost/agriculture_fr/wp-content/themes/tempera/images/slider/tempera-slide4.jpg' alt="" title="#caption3"  />
            </a>          </div>
	 
     </div>
 
</div>
<div id="frontpage" style="margin-top:0px; margin-left:90px;margin-right:30px; background-color:#FFFFFF;">
<div id="pp-afterslider">
<table>
    <tbody>
    	<tr><td valign="top" style="vertical-align:top" width="500px">
        	<form id="reg" method="post" action="" name="form1">
            <table style="margin-top:40px;margin-left:40px;" cellspacing="20px;" width="500px">
             	<tr><td colspan="2" height="80px;"><img src="images/picture32.png"></td></tr>
                <tr><td colspan="2"  height="50px;"><img src="images/picture33.png" style="padding-left:100px;"></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture35.png"></td><td style="padding-left:5px;"><input type="text" size="40" name="first"/></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture36.png"></td><td style="padding-left:5px;"><input type="text" size="40" name="second"/></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture37.png"></td><td style="padding-left:5px;"><input type="text" size="40" name="user" /></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture38.png"></td><td style="padding-left:5px;"><input type="password" size="40" name="pass" /></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture39.png"></td><td style="padding-left:5px;"><input type="password" size="40" name="pass2" /></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture40.png"></td><td style="padding-left:5px;"><input type="text" size="40" name="mail"/></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture41.png"></td><td style="padding-left:5px;"><input type="text" size="40" name="statut"/></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture42.png"></td><td style="padding-left:5px;"><input type="text" size="40" name="language"/></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture43.png"></td><td style="padding-left:5px;"><input type="text" size="40" name="function"/></td></tr>
                <tr><td colspan="2" height="80px;">&nbsp;</td></tr>
                <tr><td colspan="2"  height="50px"><img src="images/picture44.png" style="padding-left:100px;"></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture45.png"></td><td style="padding-left:5px;"><input type="text" size="40" /></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture46.png"></td><td style="padding-left:5px;"><input type="text" size="40" /></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture47.png"></td><td style="padding-left:5px;"><input type="text" size="40" /></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture48.png"></td><td style="padding-left:5px;"><input type="text" size="40" /></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture49.png"></td><td style="padding-left:5px;"><input type="text" size="40" /></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture50.png"></td><td style="padding-left:5px;"><input type="text" size="40" /></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture51.png"></td><td style="padding-left:5px;"><input type="text" size="40" /></td></tr>
                <tr><td align="right" height="40px"><img src="images/picture52.png"></td><td style="padding-left:5px;"><input type="text" size="40" /></td></tr>
                <tr><td align="right" height="40px"><input type="checkbox" onclick="changeState();" /></td><td><img src="images/picture53.png"></td></tr>
                <tr><td colspan="2" align="center"><input type="image" src="images/picture55.png" onclick="checkReg();" disabled="disabled" id="done" /></td></tr>
            </table>
            </form>
        </td>
        <td style="vertical-align:top"><img src="images/picture34.png" style="padding-top:80px;"></td>
        </tr>
    </tbody>
</table>
</div>
</div> <!-- #pp-afterslider -->
</div> <!-- #frontpage -->

<div id="footer">

<img src="images/footer.jpg" alt="" width="1366px" height="312px" usemap="#Map2" hidefocus="true" />

<map name="Map2">
  <area shape="rect" coords="10,10,20,20" href="www.baidu.com" />
  <area shape="rect" coords="400,65,474,87" href="#"/>
  <area shape="rect" coords="402,88,470,104" href="#">
  <area shape="rect" coords="405,106,469,125" href="#">
  <area shape="rect" coords="404,126,501,147" href="#">
  <area shape="rect" coords="401,148,473,163" href="#">
  <area shape="rect" coords="401,167,438,181" href="#">
  <area shape="rect" coords="402,184,487,201" href="#">
  <area shape="rect" coords="402,202,472,220" href="#">
  <area shape="rect" coords="402,222,472,240" href="#">
  <area shape="rect" coords="517,67,559,85" href="#">
  <area shape="rect" coords="517,87,561,105" href="#">
  <area shape="rect" coords="961,58,1055,82" href="#">
  <area shape="rect" coords="965,81,1055,99" href="#">
  <area shape="rect" coords="963,98,1053,116" href="#">
  <area shape="rect" coords="964,118,1053,137" href="#">
  <area shape="rect" coords="963,136,1054,157" href="#">
  <area shape="rect" coords="963,156,1057,176" href="#">
  <area shape="rect" coords="962,178,1064,195" href="#">
  <area shape="rect" coords="961,194,1066,215" href="#">
  <area shape="rect" coords="960,215,1062,235" href="#">
  <area shape="rect" coords="1098,60,1189,81" href="#">
  <area shape="rect" coords="1099,82,1185,99" href="#">
  <area shape="rect" coords="1100,98,1187,120" href="#">
  <area shape="rect" coords="1100,117,1185,138" href="#">
  <area shape="rect" coords="1100,135,1187,158" href="#">
  <area shape="rect" coords="1100,157,1186,177" href="#">
  <area shape="rect" coords="631,69,684,91" href="#">
  <area shape="rect" coords="685,68,746,91" href="#">
  <area shape="rect" coords="745,68,802,91" href="#">
  <area shape="rect" coords="803,66,854,90" href="#">
  <area shape="rect" coords="855,67,901,90" href="#">
  <area shape="rect" coords="632,91,685,111" href="#">
  <area shape="rect" coords="687,92,736,114" href="#">
  <area shape="rect" coords="736,92,774,114" href="#">
  <area shape="rect" coords="775,92,845,112" href="#">
  <area shape="rect" coords="846,91,909,112" href="#">
  <area shape="rect" coords="845,114,908,136" href="#">
  <area shape="rect" coords="789,113,846,137" href="#">
  <area shape="rect" coords="737,113,789,139" href="#">
  <area shape="rect" coords="685,113,737,138" href="#">
  <area shape="rect" coords="629,111,687,137" href="#">
  <area shape="rect" coords="631,138,739,157" href="#">
  <area shape="rect" coords="739,137,790,159" href="#">
  <area shape="rect" coords="791,135,853,160" href="#">
  <area shape="rect" coords="853,135,906,159" href="#">
  <area shape="rect" coords="853,159,905,182" href="#">
  <area shape="rect" coords="833,180,892,204" href="#">
  <area shape="rect" coords="748,160,852,183" href="#">
  <area shape="rect" coords="681,158,747,183" href="#">
  <area shape="rect" coords="628,156,682,184" href="#">
  <area shape="rect" coords="633,183,738,205" href="#">
  <area shape="rect" coords="634,205,683,228" href="#">
  <area shape="rect" coords="683,205,739,229" href="#">
  <area shape="rect" coords="741,207,793,230" href="#">
  <area shape="rect" coords="738,181,799,205" href="#">
  <area shape="rect" coords="798,182,832,205" href="#">
  <area shape="rect" coords="178,195,233,247" href="#">
  <area shape="rect" coords="236,196,294,245" href="#">
</map>
</div>

