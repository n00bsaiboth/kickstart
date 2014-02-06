<?php

/* The template for displaying single posts 
 *
 * @package WordPress
 * @subpackage Kickstart
 * @since Kickstart 0.1 
 * 
 */
	get_header();
?>

<section id="content" role="single-post">
	<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	
	<?php get_template_part( 'content' ); ?>	
	
	<?php
		endwhile; endif;
	?>
</section>

<?php 
	get_footer();
?>