<?php

/* The template for displaying archive pages
 *
 * @package WordPress
 * @subpackage Kickstart
 * @since Kickstart 0.1 
 * 
 */
	get_header();
?>

<section id="content" role="archive">
		
			<header>
				<h2>
					<?php 
						if ( is_day() ) { printf( __( 'Päivittäiset arkistot: %s', 'kickstart' ), get_the_time( get_option( 'date_format' ) ) ); }
						elseif ( is_month() ) { printf( __( 'Kuukausittaiset arkistot: %s', 'kickstart' ), get_the_time( 'F Y' ) ); }
						elseif ( is_year() ) { printf( __( 'Vuosittaiset arkistot: %s', 'kickstart' ), get_the_time( 'Y' ) ); }
						else { _e( 'Arkistot', 'kickstart' ); }
					?>
				</h2>
			</header>
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

<?php 
	get_footer();
?>