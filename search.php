<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-search">
		<main id="main" class="site-main" role="main">
<div class="search-container">
		<?php if ( have_posts() ) : ?>


			<header class="page-header">
				<h1 class="search-page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					<hr>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>
     <div class="pagination">
			<?php red_starter_numbered_pagination(); ?>
   </div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
