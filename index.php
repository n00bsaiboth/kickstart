<?php

/* The main template file 
 *
 * @package WordPress
 * @subpackage Kickstart
 * @since Kickstart 0.1 
 * 
 */
	get_header();
?>

<section id="content" role="main">
	<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	
	<?php get_template_part( 'content-summary' ); ?>
	
	<?php
		endwhile; endif;
	?>
</section>

<?php 
	get_footer();
?>