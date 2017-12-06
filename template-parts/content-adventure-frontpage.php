<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)), url(<?php the_post_thumbnail_url('large') ?>)">
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>

		<?php endif; ?>
      <div class="journal-frontpage">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		      </div>
		<div class="adventure-button">
			 <?php echo '<a href=' . get_permalink() . '> Read More </a>' ?>
		</div>

	</header><!-- .entry-header -->

</article><!-- #post-## -->
