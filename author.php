<?php

/* The template for displaying author page 
 *
 * @package WordPress
 * @subpackage Kickstart
 * @since Kickstart 0.1 
 * 
 */
	get_header();
?>

<section id="content" role="author">
	<header>
		<?php the_post(); ?>
		<h2 class="entry-title author"><?php _e( 'Julkaisijan arkistot', 'kickstart' ); ?>: <?php the_author_link(); ?></h2>
		<?php if ( '' != get_the_author_meta( 'user_description' ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . get_the_author_meta( 'user_description' ) . '</div>' ); ?>
		<?php rewind_posts(); ?>
	</header>
	<section>
		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
	
		<?php
			get_template_part( 'content-summary' );
		?>
	
		<?php
			endwhile; endif;
		?>
	</section>
</section>


<?php
	get_footer();
?>