<?php
/**
 * The default template for displaying content
 *
 * @package Cryout Creations
 * @subpackage Tempera
 * @since Tempera 1.0
 */

$options= tempera_get_theme_options();
foreach ($options as $key => $value) {
     ${"$key"} = $value ;
} 

?><?php //cryout_before_article_hook(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			
		<header class="entry-header">			
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tempera' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<?php cryout_post_title_hook(); ?>
			<div class="entry-meta">
				<?php	cryout_post_meta_hook();  ?>
			</div><!-- .entry-meta -->	
		</header><!-- .entry-header -->
		
			<?php cryout_post_before_content_hook();  
			?><?php if ( is_archive() || is_search() ) : // Display excerpts for archives and search. ?>
			
						<?php if ($tempera_excerptarchive != "Full Post" ){ ?>
					
					   <div class="entry-summary">
					   <div class="featuredimg"><?php tempera_set_featured_thumb(); ?></div>
					   <div class="excerpt">
					   <div class="excerpttitle"> <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
					   <div class="excerptauthor"> <?php the_author(); ?>
					   <?php echo esc_html( get_the_date() ); ?></div>
						 <p>
						  <?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 150,"<br/>……"); ?></p>
						  <div class="excerpt2" style="margin-top:-5px;"><a href="<?php echo get_permalink(); ?>">点击阅读</a></div>
						  </div>
						</div><!-- .entry-summary -->
					   <div style="height:5px;"></div>
					
						<?php }   ?>
			
		<?php else : 
				if (is_sticky() && $tempera_excerptsticky == "Full Post")  $sticky_test=1; else $sticky_test=0;
				if ($tempera_excerpthome != "Full Post" && $sticky_test==0){ ?>
					
					
						<div class="entry-summary">
						<?php tempera_set_featured_thumb(); ?>
						<?php the_excerpt(); ?>
						</div><!-- .entry-summary --> 
						<?php } else { ?>
						<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'tempera' ) . '</span>', 'after' => '</div>' ) ); ?>
						</div><!-- .entry-content --> 
						<?php }  

			endif; ?>

		<!--<footer class="entry-meta">
			<?php cryout_post_after_content_hook();  ?>
		</footer>-->
	</article><!-- #post-<?php the_ID(); ?> -->
	
	<script type="text/javascript">
$(function(){
var imgpath = $(".featuredimg > a").find("img").attr("src");
   if(imgpath.indexOf("http://localhost/agriculture_fr") != -1) {
		imgpath = imgpath.substring(31);
		$(".featuredimg > a").find("img").attr("src", imgpath);
   }});
</script>
<?php cryout_after_article_hook(); ?>