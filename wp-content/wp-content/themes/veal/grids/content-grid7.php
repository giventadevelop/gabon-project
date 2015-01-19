<?php
/**
 * @package Veal
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 col-sm-offset-2 col-md-offset-0 col-sm-8 grid7'); ?>>

		<div class="featured-thumb col-md-4 col-lg-3 col-sm-12">
			<?php if (has_post_thumbnail()) : ?>	
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('grid7'); ?></a>
			<?php else: ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder1.jpg"; ?>"></a>
			<?php endif; ?>
		</div><!--.featured-thumb-->
			
		<div class="out-thumb col-lg-9 col-md-8 col-sm-12">
			<header class="entry-header">
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<div class="entry-meta"><?php veal_posted_on(); ?>
					<span class="categories">
					<?php
					/* translators: used between list items, there is a space after the comma */
					$category_list = get_the_category_list( __( ', ', 'veal' ) );
					if ( veal_categorized_blog() ) {
							$meta_text = '<i class="fa fa-folder-open"></i> %1$s';
					} // end check for categories on this blog
		
					printf(
						$meta_text,
						$category_list
					);
				?>
					</span>
				</div>
			</header><!-- .entry-header -->
			<span class="entry-excerpt"><?php the_excerpt() ?></span>
		</div><!--.out-thumb-->
			
</article><!-- #post-## -->