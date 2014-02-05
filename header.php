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
		<title></title>
		
		<script src="<?php echo get_template_directory_uri(); ?>/__/js/modernizr.js"></script>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>