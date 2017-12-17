<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="single-texonomy-image">
			<?php the_post_thumbnail( 'large' ); ?>
		</div>
		<?php endif; ?>
    <div class="taxonomy-title">
		<?php  echo '<a href=' . get_the_permalink() . '>' . get_the_title() . '</a>' . ' ' ; echo CFS()->get('price'); ?>
	</div>


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
