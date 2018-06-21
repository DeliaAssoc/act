<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Advanced_Counselor_Training
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script async='async' src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'act' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-header">
			<div class="constrain flexxed">
				<div class="site-branding">
					<?php the_custom_logo(); ?>
				</div><!-- .site-branding -->
				<div class="header-contact flexxed">
					<?php if ( get_theme_mod( 'theme_company_street' ) || get_theme_mod( 'theme_company_cityt' ) || get_theme_mod( 'theme_company_state' ) ) : ?>
						<div class="hc-item address">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<?php echo get_theme_mod( 'theme_company_street' ); ?>, <?php echo get_theme_mod( 'theme_company_city' ); ?> <?php echo get_theme_mod( 'theme_company_state' ); ?>
						</div>
					<?php endif; ?>
						<div class="hc-item phone">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<a href="tel:<?php echo get_theme_mod( 'theme_company_phone' ); ?>"><?php echo get_theme_mod( 'theme_company_phone' ); ?></a>
						</div>
						<div class="hc-item email">
							<i class="fa fa-envelope" aria-hidden="true"></i>		
							<a href="mailto:<?php echo get_theme_mod( 'theme_company_email' ); ?>"><?php echo get_theme_mod( 'theme_company_email' ); ?></a>
						</div>
				</div>
			</div><!-- .constrain.flexxed -->
		</div>

		<div class="bottom-header">
			<div class="constrain flexxed">
				<nav id="site-navigation" class="main-navigation">
					
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
				<div class="header-search">
					<?php get_search_form(); ?>
				</div>
			</div><!-- .constrain.flexxed -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
