<div id="main">
<div id="frontpage" >
<div id="pp-afterslider">
<div style="padding-left: 10%; padding-top: 5%;">
<div class="b1"><img style="display: inline;" src="images/picture60.png" alt="" />
<div class="headersearch headersearch2" ><?php get_search_form(); ?></div>
<div class="news">
<?php
$options = tempera_get_theme_options();
foreach ($options as $key => $value) { ${"$key"} = $value; } 
?>

		<section id="container" class="<?php echo tempera_get_layout_class(); ?>">

			<div id="content" role="main">

			<?php //cryout_before_content_hook();
            query_posts("showposts=1&cat=2,5");
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'content/content', get_post_format() );

				endwhile;?>
                <div class="page_navi"><?php par_pagenavi(9); ?></div><?php 
				//if($tempera_pagination=="Enable") tempera_pagination(); else tempera_content_nav( 'nav-below' );

			else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'tempera' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'tempera' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php
			endif;
			//cryout_after_content_hook();
			?>

			</div><!-- #content -->
		<?php //tempera_get_sidebar(); ?>
		</section><!-- #container -->

</div>

</div><!-- #pp-afterslider -->
</div><!-- #frontpage -->