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
/** 每页显示多少篇文章 */
$posts_per_page = 4;
/**
 * 只显示或不显示某些目录下的文章,目录ID用逗号分隔，排除目录前面加-
 * 例如排除目录29和30下的文章, $cat = '-29,-30';
 * 只显示目录29和30下的文章, $cat = '29, 30';
 */
$cat = '5';
/** 获取该页面的标题和内容 */
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

?>
<div id="main">
<div id="frontpage" >
<div id="pp-afterslider">
<div style="padding-left: 10%; padding-top: 5%;">
<div class="b1"><img style="display: inline;" src="/images/picture60.png" alt="" /><div class="headersearch2"><?php get_search_form(); ?></div><div class="news2"><a href="/shownews"><img src="/images/picture61_1.png"></a>&nbsp;&nbsp;&nbsp;|</div><div class="talk"><a href="/talk"><img src="/images/picture62_2.png"></a>&nbsp;&nbsp;&nbsp;|</div><div class="shijian"><a href="/event"><img src="/images/picture63_2.png"></a></div></div>

<div class="news">
<?php if ( $post_list->have_posts() ) : ?>

        <?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
           <div class="entry-summary">
		    <div class="featuredimg"><?php tempera_set_featured_thumb(); ?></div>
			<div class="excerpt">
		    <div class="excerpttitle"> <?php the_title(); ?></div>
			<div class="excerptauthor"> <?php the_author(); ?>
			  <?php echo esc_html( get_the_date() ); ?></div>
			 <p>
			  <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 350,"<br/>……"); ?></p>
			  <div class="excerpt2"><a href="<?php echo get_permalink(); ?>">点击阅读</a></div>
			  </div>
			</div><!-- .entry-summary -->
		<div style="height:5px;"></div>
		</article>
        <?php endwhile; ?>

        <!-- 用wp_pagenavi插件分页 -->
		<div class="page_navigation" align="center">
        <?php if ( function_exists('wp_pagenavi') ) wp_pagenavi( array('query' => $post_list) );  ?>
        </div>
<?php endif; ?>

</div>
</div>
</div>
</div>