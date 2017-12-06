<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
<!--<p> page-journal.php </p>-->
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <div id='blog' class='blog single-post'>
<?php
global $post;
$args = array( 'posts_per_page' => -1, 'category' => 1 );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
  <div class="the-journal">
    <article class='journal-page' style="background-image: url(<?php the_post_thumbnail_url('large') ?>)">
        <header class='entry-header'>
        <h2 class='journal-page-title'><a rel='bookmark'href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </header> <!-- .entry-header -->
        <div class='journal-comments'>
            <span class='posted-on'>
                <time class='entry-date published '><?php echo get_the_date() ?> </time>
            </span>
                <?php echo ' / ' . get_comments_number() . ' Comments /' ?>
            <span class='byline'>
                by <span class='author vcard'><?php echo CFS()->get('author'); ?></span>
            </span>
        </div><!-- .entry-meta-->


    </article> <!-- #post-## -->
    <div class='entry-content'>
        <?php the_excerpt() ?>
        <p><a class='journal-page-button' href="<?php the_permalink(); ?>">Read More -></a></p>
    </div><!-- .entry-content-->
  </div>
<?php endforeach;
wp_reset_postdata();?>
</div> <!-- #blog .blog -->
    </main><!-- #main -->
</div> <!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
