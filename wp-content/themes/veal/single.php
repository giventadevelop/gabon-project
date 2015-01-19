<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Veal
 */

get_header(); ?>
<div id="content" class="site-content">
		<div class="container">
	</div><!--.container-->
	<div class="header-title col-md-12">
		<div class="container"><span><?php the_title(); ?></span></div>
	</div>
	<div class="container">
	<div id="primary-mono" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php // veal_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>