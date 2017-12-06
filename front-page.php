<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
	<h2 class="shop-stuff">Shop Stuff</h2>
<section class="front-page-stuff">

      <?php
      $args = array(
        'taxonomy' => 'product type',
        'hide_empty' => 0,
      );
      $terms = get_terms($args);
      //if ( ! empty( $terms ) && ! is_wp_error($terms ) ) :
      foreach ($terms as $term) {
	      ?>
			<div class="product">
				<div class="product-icon">
					<?php
				echo '<img src=' . get_template_directory_uri() .'/project-04/images/product-type-icons/'. $term->name .'.svg >';
				?>
			</div>
			<div class="term-description">
			<?php
        echo  $term->description ;
				?>
			</div>
				<div class="button-stuff">
					<?php
        echo "<a href=" . get_term_link($term) . ">" . $term->name . " stuff</a>";
				  ?>
						</div>
					</div>
						<?php
           }
           ?>
</section>

			<?php /* Start the Loop */ ?>

			<h2 class="journal-h2">Inhabitent Journal</h2>
			 <div class="frontpage-journal">
			<?php $i = 0; ?>
    	<?php while ( have_posts() && $i < 3 ) : the_post(); ?>
         <?php $i++;  ?>
      <div class="latest-post">
				<?php get_template_part( 'template-parts/content', 'frontpage'  ); ?>
        <div class="journal-button">
        <?php echo '<a href=' . get_permalink() . '> Read Entry </a>' ?>
			</div>
      </div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>
  </div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

  <br>
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
       <button href="#" class="more-adventures" type="button" name="button">More Adventures</button>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
