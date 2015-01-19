<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template name: Business/Company Page
 * @package Veal
 */

get_header(); 
?>
<div id="content" class="site-content">
		<div class="container">
<?php
$title_hide = get_post_meta( get_the_ID(), 'enable-title', true);
if ($title_hide != "yes") :
?>
	<div class="business-page-header-title col-md-12">
		<?php the_title(); ?>
	</div>
	<?php endif; ?>
	<div id="primary-mono" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'business' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
      <?php get_template_part('showcase'); ?>
	<?php get_template_part('featured','gallery'); ?> 
	<?php get_template_part('testimonials'); ?> 
	<?php get_template_part('partners'); ?>
      <?php get_footer(); ?>

