<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Veal
 */

get_header(); ?>
<div id="content" class="site-content">
		<div class="container">
	</div>
	<div class="header-title col-md-12">
		<h1 class="page-title container"><span><?php printf( __( 'Search Results for: %s', 'veal' ), get_search_query()  ); ?></span></h1>
	</div>
	<div class="container">
	<section id="primary" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php $count = 0; ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					if($count == 0)
						echo "<div class='row'>" ;
					elseif($count%3 == 0)
						echo "</div><!--.row--><div class='row'>";
					 
					get_template_part( 'grids/content', 'grid7' );
					
					$count++;
				?>

			<?php endwhile; ?>
			<?php echo "</div><!--.row-->"; ?>
			
			<?php veal_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
