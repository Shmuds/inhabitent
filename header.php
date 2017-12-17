<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				
				</div><!-- .site-branding -->

				<?php if ( is_home()  ) : ?>
					<section class="home-hero">
						<div class="middle-logo">
							<img src="<?php echo get_template_directory_uri() . '/project-04/images/logos/inhabitent-logo-full.svg' ?>" alt="Full logo">
						</div>
						<div class="container">
							<div class="logo">
								<a href="http://localhost/wordpress/" rel="home">
									<img src="<?php echo get_template_directory_uri() . '/project-04/images/logos/inhabitent-logo-tent-white.svg' ?>" alt="Full logo">
								</a>
							</div>
							  <nav id="site-navigation" class="main-navigation" role="navigation">
								 <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
								 <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							  </nav>

						 </div>
					</section>

				<?php elseif ( is_singular('adventure')  ) : ?>
						<section class="adventure-hero" style="background-image: url(<?php echo the_post_thumbnail_url('large'); ?>)">

							<div class="container">
								<div class="logo">
									<a href="http://localhost/wordpress/" rel="home">
										<img src="<?php echo get_template_directory_uri() . '/project-04/images/logos/inhabitent-logo-tent-white.svg' ?>" alt="Full logo">
									</a>
								</div>
								  <nav id="site-navigation" class="main-navigation" role="navigation">
									 <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
									 <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
								  </nav>

							 </div>
						</section>

					<?php elseif (  is_page('about') ) : ?>
							<section class="about-hero">
								<div class="about-logo">
									<h2>About</h2>
								</div>
								<div class="container">
									<div class="logo">
										<a href="http://localhost/wordpress/" rel="home">
											<img src="<?php echo get_template_directory_uri() . '/project-04/images/logos/inhabitent-logo-tent-white.svg' ?>" alt="Full logo">
										</a>
									</div>
									  <nav id="site-navigation" class="main-navigation" role="navigation">
										 <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
										 <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
									  </nav>

								 </div>
							</section>



				<?php else: ?>
         <section class="other-nav-bar">
					<div class="logo">
						<a href="http://localhost/wordpress/" rel="home">
							<img src="<?php echo get_template_directory_uri() . '/project-04/images/logos/inhabitent-logo-tent.svg' ?>" alt="Full logo">
						</a>
					</div>
					<div class="other-nav">
					<nav id="site-navigation" class="main-navigation" role="navigation">

						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
								</div>
					</nav><!-- #site-navigation -->
        </section>
				<hr>
				<?php endif; ?>


			</header><!-- #masthead -->

			<div id="content" class="site-content">
