<?php

/* The template for displaying category pages 
 *
 * @package WordPress
 * @subpackage Kickstart
 * @since Kickstart 0.1 
 * 
 */
	get_header();
?>

<section id="content" role="category">
	<header>
		<h1 class="entry-title"><?php _e( 'Kategorian arkistot: ', 'kickstart' ); ?><?php single_cat_title(); ?></h1>
		<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
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