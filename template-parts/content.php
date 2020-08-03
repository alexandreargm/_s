<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blank
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php ancora_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
		if ('post' === get_post_type()) :
		?>
			<div class="entry-meta">
				<?php
				ancora_entry_footer();
				?>
			</div><!-- .entry-meta -->
		<?php
		endif;

		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;
		?>


	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-<?php the_ID(); ?> -->