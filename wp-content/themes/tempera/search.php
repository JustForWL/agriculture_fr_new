<?php
/**
 * The template for displaying Search results pages.
 *
 * @package Cryout Creations
 * @subpackage Tempera
 * @since Tempera 1.0
 */

get_header(); ?>

		<section id="container" class="<?php echo tempera_get_layout_class(); ?>">
			<div id="content" role="main">
			<div id="main">
			<div id="frontpage">
			<div id="pp-afterslider">
	<?php cryout_before_content_hook(); ?>
	
			<?php if ( have_posts() ) : ?>

				<!--<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'tempera' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	<div class="contentsearch"><?php get_search_form(); ?></div>-->
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

									<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 //get_template_part( 'content/content', get_post_format() );
				?>
										<?php //endwhile; ?>

				<?php //if($tempera_pagination=="Enable") tempera_pagination(); else tempera_content_nav( 'nav-below' ); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php cryout_post_title_hook(); ?>
					<div class="entry-meta">
						<?php tempera_posted_on(); cryout_post_meta_hook(); ?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php 
						if(in_category(array('news','talk','event'))){
							if(is_user_logged_in()){
								the_content();
							}else{
							echo "请登录后阅读全文";
							}
						}else{
						the_content(); 
						}
						?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'tempera' ), 'after' => '</span></div>' ) ); ?>
					</div><!-- .entry-content -->

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'tempera_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php echo esc_attr( get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'View all posts by ','tempera').'%s <span class="meta-nav">&rarr;</span>', get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>

					<footer class="entry-meta">
						<?php //tempera_posted_in(); ?>
						<?php edit_post_link( __( 'Edit', 'tempera' ), '<span class="edit-link"><i class="icon-edit icon-metas"></i> ', '</span>' ); cryout_post_footer_hook(); ?>
					</footer><!-- .entry-meta -->
				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<i class="meta-nav-prev"></i> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <i class="meta-nav-next"></i>' ); ?></div>
				</div><!-- #nav-below -->

				<?php //comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'tempera' ); ?></h1>
					</header><!-- .entry-header -->
					<h4><?php printf( __( 'No search results for: %s.', 'tempera' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
					<br><div class="contentsearch"><?php get_search_form(); ?></div>
				</article><!-- #post-0 -->
	
				<?php endif; ?>


			<?php cryout_after_content_hook(); ?>
			</div>
			</div>
			</div>
			</div><!-- #content -->
		<?php tempera_get_sidebar(); ?>
		</section><!-- #primary -->

<?php get_footer(); ?>
