<?php

/* The template for displaying 404 pages, pages that are not found.
 *
 * @package WordPress
 * @subpackage Kickstart
 * @since Kickstart 0.1 
 * 
 */
	get_header();
?>

<section id="content" role="error">
		<article id="post-0" class="post not-found">
			<header>
				<h2>404</h2>
			</header>
			<section class="entry-content">
				<p>Hakemaasi sivua ei löytynyt.</p>
			</section>
		</article>	
</section>

<?php 
	get_footer();
?>