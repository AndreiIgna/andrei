<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<nav class="navbar navbar-expand-md fixed-top py-2">

		<div class="container">

			<!-- Your site title as branding in the menu -->
			<?php if ( ! has_custom_logo() ) { ?>

				<?php if ( is_front_page() && is_home() ) : ?>

					<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

				<?php else : ?>

					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

				<?php endif; ?>

			<?php } else {
				the_custom_logo();
			} ?><!-- end custom logo -->

			<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu([
				'menu_class'      => 'navbar-nav',
				'menu_id'         => 'main-menu',
				'container_class' => 'collapse navbar-collapse ml-left',
				'container_id'    => 'navbarNavDropdown',
				'fallback_cb'     => false,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				'theme_location'  => 'primary',
			]); ?>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'layered' ); ?>">&#9776;</button>

		</div><!-- .container[-fluid] -->

	</nav><!-- .site-navigation -->
