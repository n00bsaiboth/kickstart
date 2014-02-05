<?php

/* The template for displaying pages
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

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>	
			<?php the_content(); ?>
		</article>		
	
	<?php
		endwhile; endif;
	?>
</section>

<?php 
	get_footer();
?>