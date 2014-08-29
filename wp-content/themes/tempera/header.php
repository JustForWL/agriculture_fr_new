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


<script type="text/javascript" src="/js/jquery-1.3.2.min.js"></script>

<script type="text/javascript" src="/js/menu.js"></script>
<script type="text/javascript" src="/js/customs.js"></script>
<?php
 	cryout_header_hook();
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php cryout_body_hook(); ?>

<div id="wrapper" class="hfeed">
<div id="topbar" ><div class="selectLanguage1" align="center" valign="middle" ><font color="#7F7F7F">语言:</font></div>
<div align="center" valign="middle" class="selectLanguage2"  onmouseover="showmenu(event, other)" onmouseout="delayhidemenu()"><img src="/images/picture22.png" /><font color="#7F7F7F">中文</font></div>
<div class="menuskin" id="popmenu" onmouseover="clearhidemenu();highlightmenu(enent, 'on')" onmouseout="highlightmenu(event, 'off');dynamichide(event)">
</div>
<div style="display:inline; margin-left:20%;"><?php if(!is_user_logged_in()) { ?><a href="/register" style="color:#7F7F7F;">免费注册</a><font color="#7F7F7F">/</font><a style="color:#7F7F7F;" href="/login">登录</a><?php }else{ global $current_user; echo "欢迎您：".$current_user->user_login."&nbsp;&nbsp;<a href=\"/showmembers\">修改资料</a>"."&nbsp;&nbsp;<a href=\"/login\">注销</a>" ;} ?></div>
<div class="headersearch" ><?php get_search_form(); ?></div><?php cryout_topbar_hook(); ?> <!--<span style="margin-left:88%;float:left;margin-top:-30px;color:#CCC;"><?php if(function_exists('the_views')){the_views('次浏览',true);}?></span>-->
</div>
<?php cryout_wrapper_hook(); ?>

<div id="header-full">
	<header id="header">
<?php cryout_masthead_hook(); ?>
		<div id="masthead">
<!--			<div id="branding" role="banner" >
				<?php/* cryout_branding_hook();*/?>
				<?php/* cryout_header_widgets_hook(); */?>
				<div style="clear:both;"></div>
			</div><!-- #branding -->
			<a id="nav-toggle"><span>&nbsp;</span></a>
			<nav style="text-align:right" id="access" role="navigation">
				<?php cryout_access_hook();?>
			</nav><!-- #access -->		
		</div><!-- #masthead -->
	</header><!-- #header -->
</div><!-- #header-full -->

<div style="clear:both;height:0;"> </div>
<div id="focus">
		<ul>
			<li><a href="#" target="_blank"><img src="/wp-content/themes/tempera/images/slider/tempera-slide1.jpg" alt="" /></a></li>
			<li><a href="#" target="_blank"><img src="/wp-content/themes/tempera/images/slider/tempera-slide2.jpg" alt="" /></a></li>
			<li><a href="#" target="_blank"><img src="/wp-content/themes/tempera/images/slider/tempera-slide3.jpg" alt="" /></a></li>
			<li><a href="#" target="_blank"><img src="/wp-content/themes/tempera/images/slider/tempera-slide4.jpg" alt="" /></a></li>
		</ul>
</div>

		<?php cryout_main_hook(); ?>
	
