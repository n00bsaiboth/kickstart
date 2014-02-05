<?php

/* The main functions of our theme
 *
 * @package WordPress
 * @subpackage Kickstart
 * @since Kickstart 0.1
 *
 */

/* Theme setup
 *
 */   
 
function kickstart_setup() {

	/* Register main navigation
	 *
	 */

	register_nav_menu('main-menu', __('Main Menu', 'kickstart'));

}

add_action('after_setup_theme', 'kickstart_setup'); 

/* Add the main stylesheet and jQuery
 * 
 */

function kickstart_scripts_and_styles() {
	
	/* Load main style
	 *
	 */

	wp_enqueue_style('kickstart-style', get_stylesheet_uri());  

	/* Load jQuery
	 *
	 */

	wp_enqueue_script('jquery', get_template_directory_uri() . '/__/js/jquery-1.10.2.min.js');
	wp_enqueue_script('kickstart', get_template_directory_uri() . '/__/js/kickstart.js');
}

add_action('wp_enqueue_scripts', 'kickstart_scripts_and_styles'); 
  
?>