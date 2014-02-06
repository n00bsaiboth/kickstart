<?php

/* The template for displaying comments
 *
 * @package WordPress
 * @subpackage Kickstart
 * @since Kickstart 0.1 
 * 
 */

 
	if ( post_password_required() ):
		return;	
	endif;	 
?>

<section id="comments" role="comments">
	<?php
		if ( have_comments() ) :
	?>
		<section>
			<header>
				<h2><?php comments_number(); ?></h2>
			</header>
			
			<ol class="commentlist">
				<?php wp_list_comments( 'type=comment' ); ?>
			</ol>
			
		</section>
	<?php
		endif;
	?>
	<?php comment_form(); ?>
</section>
