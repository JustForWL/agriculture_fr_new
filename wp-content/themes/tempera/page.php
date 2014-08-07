<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Cryout Creations
 * @subpackage tempera
 * @since tempera 0.5
 */
get_header();
if ($tempera_frontpage=="Enable" && is_front_page()): get_template_part( 'frontpage' );
else :
?>
		<section id="container" class="<?php echo tempera_get_layout_class(); ?>">

			<div id="content" role="main">
			<?php //cryout_before_content_hook(); ?>
            <?php if( is_page() ) { ?> 
			<?php        
			$content = $content . get_option('display_copyright_text');    
			$post_data = get_post($post->ID, ARRAY_A);    
			$slug = $post_data['post_name'];  
			if($slug != "shownews"){
				 get_template_part( 'content/content', $slug);
			}else{
				if(!is_user_logged_in()){
					wp_safe_redirect("http://wordpress.local/wp-login.php");
				}else{
					wp_safe_redirect("http://wordpress.local/showNews.html");
				}
			}
			}
          
			?>
				
            
			<?php cryout_after_content_hook(); ?>
			</div><!-- #content -->
			<?php tempera_get_sidebar(); ?>
		</section><!-- #container -->


<?php
endif;
get_footer();
?>
