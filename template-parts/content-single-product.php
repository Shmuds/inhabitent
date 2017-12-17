<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
 <div class="single-product-div">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>

			<div class="single-product-content">
				<?php
			 the_title( '<h1 class="single-product-title">', '</h1>' );
			 echo '<br>';
			 echo "<div class=single-product-price>";
       echo CFS()->get('price');
			 echo "</div>";
			 echo "<br>";
	$my_excerpt = get_the_excerpt();
	if ( '' != $my_excerpt ) {
		// Some string manipulation performed
	}
	echo $my_excerpt; // Outputs the processed value to the page
	?>
	<br>
	<div class="single-product-social">
	<button type="button" name="button"class="social-button"><i class="fa fa-facebook"></i>LIKE</button>
	<button type="button" name="button"class="social-button"><i class="fa fa-twitter"></i>TWEET</button>
	<button type="button" name="button"class="social-button"><i class="fa fa-pinterest"></i>PIN</button>
</div>
</div>
</div>
		<?php endif; ?>


	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
