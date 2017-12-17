<?php
/**
* The template for displaying all pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'page-findus' ); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<iframe width="600" height="450" frameborder="0" style="border:0"
			src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJV8QansdzhlQRatww-ihk6jo&key=AIzaSyChwHm78OoAIQt5TZ6MbX7v6g31_ZMB4Tc" allowfullscreen>
		</iframe>
	<?php endwhile; // End of the loop. ?>

</main><!-- #main -->
</div><!-- #primary -->
<h2 class="seriously-camping">WE TAKE CAMPING VERY SERIOUSLY.</h2>
<p class="para">Inhabitent Camping Supply Co. knows what it takes to outfit a camping
	trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>


<?php get_footer(); ?>
