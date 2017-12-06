<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

     <div class="footer">
			<footer id="colophon" class="site-footer" role="contentinfo">
				<?php get_sidebar(); ?>
				<h3>COPYRIGHT © 2016 INHABITENT</h3>
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		<?php wp_footer(); ?>
 </div>
	</body>
</html>
