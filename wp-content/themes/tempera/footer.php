<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package Cryout Creations
 * @subpackage tempera
 * @since tempera 0.5
 */
?>
	</div><!-- #main -->
</div><!-- #wrapper -->
	<div style="clear:both;"></div>
	</div> <!-- #forbottom -->


	<footer id="footer" role="contentinfo">
		<div id="colophon">
		
			<?php get_sidebar( 'footer' );?>
        <div id="copyright">
        
         <p>
         &copy;2014年法国食品协会 联系/私隐政策
         </p>
        </div>   
			
		</div><!-- #colophon -->

<!--		<div id="footer2">
		
			<?php cryout_footer_hook(); ?>
			
		</div><!-- #footer2 -->

	</footer><!-- #footer -->




<?php	wp_footer(); ?>

</body>
</html>
