<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<section class="products">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="shop-images">
			<?php the_post_thumbnail( 'large' ); ?>
		</div>
		<?php endif; ?>
    <div class="shop-title">
		<?php  echo '<a href=' . get_the_permalink() . '>' . get_the_title() . '</a>' . ' ' . " " ; echo CFS()->get('price'); ?>
	</div>

	</header><!-- .entry-header -->
</article><!-- #post-## -->
</section>
