<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Veal
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>

	<div class="entry-content">
		<div class="featured-business-thumb">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'veal' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
