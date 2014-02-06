<?php

/* The content meta page
 *
 * @package WordPress
 * @subpackage Kickstart
 * @since Kickstart 0.1 
 * 
 */
?>

<section class="entry-meta">
	<p><span class="author vcard"><?php the_author_posts_link(); ?></span>
	<span class="meta-sep"> | </span>
	<span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span></p>
</section>