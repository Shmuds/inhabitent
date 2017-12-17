<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

     <div class="footer">
			<footer id="colophon" class="site-footer" role="contentinfo">
        <div id="secondary" class="widget-area" role="complementary">
        	<?php dynamic_sidebar( 'sidebar-footer' ); ?>
          <?php dynamic_sidebar( 'sidebar-1' ); ?>

          <button type="button" name="button"><i class="fa fa-facebook"></i>LIKE</button>
          <button type="button" name="button"><i class="fa fa-twitter"></i>TWEET</button>
          <button type="button" name="button"><i class="fa fa-pinterest"></i>PIN</button>
        </div><!-- #secondary -->
				<h3>COPYRIGHT © 2016 INHABITENT</h3>
        <img src="../../project-04/images/inhabitent-logo-text.svg" alt="Inhabitent logo">

				<div class="site-info">
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		<?php wp_footer(); ?>
 </div>
	</body>
</html>
