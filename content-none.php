<?php
/**
 * The template used for displaying page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		
		the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
	?>

	<div class="entry-content">
		None
	</div><!-- .entry-content -->
</article><!-- #post-## -->
