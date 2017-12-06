<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<h4 class="store-title">Shop Stuff</h4>
<?php
$args = array(
  'taxonomy' => 'product type',
  'hide_empty' => 0,
);
$terms = get_terms($args);
//if ( ! empty( $terms ) && ! is_wp_error($terms ) ) :
  echo "<div class=taxonomy>";
foreach ($terms as $term) {

  echo "<a class=taxonomy-term href=" . get_term_link($term) . ">" . $term->name . " </a>";

}
  echo "</div>";
?>
<section class="shop-stuff-page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

   <?php $args = array(
     'order' => 'ASC',
     'post_per_page' => 16,
     'post_type' => 'products',
   ) ?>
   <?php $products = new WP_Query($args);?>
		<?php if ( $products->have_posts() ) : ?>


			<header class="page-header">

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( $products->have_posts() ) : $products->the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-theshop' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>
      <?php wp_reset_postdata(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
