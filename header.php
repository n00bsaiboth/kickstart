<?php

/* The header template for our theme
 *
 * @package WordPress
 * @subpackage Kickstart
 * @since Kickstart 0.1
 *
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo( 'name' ); ?></title>
		
		<script src="<?php echo get_template_directory_uri(); ?>/__/js/modernizr.js"></script>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
	<div class="grid">
	<header role="header">
		<div id="site-title">
			<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' )); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></h2>
		</div>
		<div id="site-description">
			<h4><?php bloginfo( 'description' ); ?></h4>
		</div>
		<nav role="navigation">
			<?php
				wp_nav_menu( array(
								'menu' => 'main-menu',
								'theme_location' => 'main-menu'
							)
						);
			?>
		</nav>
	</header>