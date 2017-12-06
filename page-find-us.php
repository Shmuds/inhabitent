<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
        <iframe width="600" height="450" frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJV8QansdzhlQRatww-ihk6jo&key=AIzaSyChwHm78OoAIQt5TZ6MbX7v6g31_ZMB4Tc" allowfullscreen>
        </iframe>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
