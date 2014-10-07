<script type="text/javascript" src="/js/jquery.lightbox-0.5.js"></script>

    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    
    <!-- Ativando o jQuery lightBox plugin -->

<div id="main">
 <div  id="forbottom" >
		<?php cryout_forbottom_hook(); ?>

		<div style="clear:both;"> </div>

		<?php cryout_breadcrumbs_hook();?> 
<div id="frontpage" >
<div id="pp-afterslider" >
<div style="height:15px;"></div>
<div class="b1">
  <div  class="b11" ><a href="/shownews"><img src="/images/picture1.png" /></a></div>
  <div  class="b12" ><a href="/products"><img src="/images/picture2.png" /></a></div>
  <?php
/**
 * The index template for displaying content
 *
 * @package Cryout Creations
 * @subpackage Tempera
 * @since Tempera 1.1
 */
$order_by = 'comment_count';
/** 升序还是降序，DESC表示降序，ASC表示升序 */
$order = 'DESC';
/** 每页显示多少篇文�?*/
$posts_per_page = 4;
/**
 * 只显示或不显示某些目录下的文�?目录ID用逗号分隔，排除目录前面加-
 * 例如排除目录29�?0下的文章, $cat = '-29,-30';
 * 只显示目�?9�?0下的文章, $cat = '29, 30';
 */
$cat = '5';
/** 获取该页面的标题和内�?*/
global $post;
$post_title = $post->post_title;
$post_content = apply_filters('the_content', $post->post_content);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
/** 用WP_Query获取posts */
$post_list = new WP_Query(
    "posts_per_page=" . $posts_per_page .
    "&orderby=" . $order_by .
    "&order=" . $order .
    "&cat=" . $cat .
    "&paged=" . $paged
);
$total_posts = $post_list->found_posts;
$i = 3;
?>
    <table style="display:inline;margin-left:60%;float:left;margin-top:-340px;" cellspacing="2">
	<?php if ( $post_list->have_posts() ) : ?>
    	<tr>
		<?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
		<?php if($i < 5) { ?>
            <td><div class="divcss5" style="background:url(<?php echo "/images/picture".$i.".png"; ?>) no-repeat ;width:200px;height:200px;"><a href="<?php echo get_permalink(); ?>" class="now"><p><br/><span style="font-size:18px;"><?php the_title(); ?></span><br/><br/><span style="font-size:15px;"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 100,"<br/>"); ?></span></p></a></div></td>
			<td>&nbsp;</td>
			<?php $i = $i + 1; ?>
		<?php } ?>
		<?php endwhile; ?>
        </tr>
	    <tr>
		<?php $i = 3;?>
		<?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
		<?php if(4 < $i && $i < 7) { ?>
            <td><div class="divcss5" style="background:url(<?php echo "/images/picture".$i.".png"; ?>) no-repeat ;width:200px;height:200px;"><a href="<?php echo get_permalink(); ?>" class="now"><p><br/><span style="font-size:18px;"><?php the_title(); ?></span><br/><br/><span style="font-size:15px;"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 100,"<br/>"); ?></span></p></a></div></td>
			<td>&nbsp;</td>
			
		<?php } ?>
		<?php $i = $i + 1; ?>
		<?php endwhile; ?>
		</tr>
		<?php endif; ?>
 	</table>
</div>
</hr size=2>
<div style="height:100px;"></div>
<div class="b1">
<div align="left" style="padding-left:15px;"><img src="/images/picture12.png" /></div>
<div class="rollBox">
	<div class="scrollcon">
		<div class="LeftBotton2" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()"></div>
		<div class="Cont" id="ISL_Cont">
			<div class="ScrCont">
				<div id="List1">
					<!-- 图片列表 begin -->
					<div class="pic"><a title="" href="/products"><img width="200" height="200" alt="" src="/images/Homepage_20140524_r2_c2.jpg"  /></a></div> 
					<div class="pic"><a title="" href="/products"><img width="200" height="200" alt="" src="/images/Homepage_20140524_r2_c4.jpg" /></a></div>
					<div class="pic"><a title="" href="/products"><img width="200" height="200" alt="" src="/images/Homepage_20140524_r2_c6.jpg"></a></div>
					<div class="pic"><a title="" href="/products"><img width="200" height="200" alt="" src="/images/Homepage_20140524_r2_c8.jpg"  /></a></div> 
					<div class="pic"><a title="" href="/products"><img width="200" height="200" alt="" src="/images/Homepage_20140524_r4_c2.jpg" /></a></div>
					<div class="pic"><a title="" href="/products"><img width="200" height="200" alt="" src="/images/Homepage_20140524_r4_c4.jpg"></a></div> 
					<div class="pic"><a title="" href="/products"><img width="200" height="200" alt="" src="/images/Homepage_20140524_r4_c6.jpg"></a></div>
					<div class="pic"><a title="" href="/products"><img width="200" height="200" alt="" src="/images/Homepage_20140524_r4_c8.jpg"  /></a></div> 
					<div class="pic"><a title="" href="/products"><img width="200" height="200" alt="" src="/images/Homepage_20140524_r6_c2.jpg" /></a></div>
					<div class="pic"><a title="" href="/products"><img width="200" height="200" alt="" src="/images/Homepage_20140524_r6_c4.jpg"></a></div> 
					<!-- 图片列表 end -->
				</div>
			</div>
		</div>
	
		<div class="RightBotton2" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()"></div>
	</div>
</div><!--rollBox end-->
<div align="center"><a href="/products"><img src="/images/picture11.png"/></a></div>
</div>
<div class="b1"><img src="/images/picture17.png" usemap="#findCompany" style="margin-left:50px;"><map name="findCompany"><area shape="rect" coords="18,268,123,293" href="/company" /></map></div>
<div class="b1">
<iframe width="40%" height="300" class="share_self"  frameborder="0" scrolling="yes" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=2&ptype=1&speed=0&skin=1&isTitle=0&noborder=1&isWeibo=1&isFans=0&uid=2076989812&verifier=d9191102&dpc=1"></iframe>
	<div style="float:left;height:300px;margin-left:45%;margin-top:-30%;"><div style="padding-left:10px;margin-top:30px;"><img src="/images/picture19.png" /></div>
		<?php include("huaban.html"); ?>
		<div style="margin-left:10px;margin-top:20px;"><a href="http://huaban.com/v75bknywig4"><img src="/images/picture21.png" /></a></div>
	</div>
</div>
</div> <!-- #pp-afterslider -->
</div> <!-- #frontpage -->
<?php // End of tempera_frontpage_generator
?>
