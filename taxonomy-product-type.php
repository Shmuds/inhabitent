<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="shop-term-title">
<?php single_term_title(); ?>
</div>
<div class="shop-term-description">
 <?php echo term_description(); ?>
</div>
<hr>
<div class="product-type-taxonomy">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

   <div class="taxonomy-content">
			<?php get_template_part( 'template-parts/content', 'single-taxonomy' ); ?>
  </div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
