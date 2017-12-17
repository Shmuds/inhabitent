<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>


			<?php /* Start the Loop */ ?>

				<h2 class="frontpage-adventure-title">Latest Adventures</h2>

			  <section class="adventure-frontpage">

			    <?php
			       $args = array( 'post_type' => 'adventure', 'order' => 'ASC' );
			       $adventure_posts = get_posts( $args ); // returns an array of posts
			    ?>



			    <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
			     <div class="journal-frontpage-content">
			      <?php get_template_part( 'template-parts/content', 'adventure-frontpage'); ?>


					 </div>
			    <?php endforeach; wp_reset_postdata(); ?>
					</section>



			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
