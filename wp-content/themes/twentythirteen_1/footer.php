<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer style="background-color:#000000" id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'main' ); ?>

			<div style="background-color:#000000" class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<p style="text-align:left" href="bottom" title="bottom">
				&copy;2014法国食品协会 联系/私隐政策
                </p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>