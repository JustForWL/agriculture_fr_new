<?php
/**
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package Cryout Creations
 * @subpackage Tempera
 */

if ( have_posts()  ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<div class="entry-content">
						<?php the_content(); ?>
						<div style="clear:both;"></div>
						<?php //wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'tempera' ), 'after' => '</div>' ) ); ?>
						<?php //edit_post_link( __( 'Edit', 'tempera' ), '<span class="edit-link"><i class="icon-edit"></i> ', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php  //comments_template( '', true );
				endwhile; ?>
