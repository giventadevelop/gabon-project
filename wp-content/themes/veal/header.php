<?php
/**
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Veal
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php global $option_setting; ?>
<div id="page" class="hfeed site">
<!--<div id="top-bar">
	<div class="container">	
		<?php get_template_part('searchform', 'top'); ?>
		<?php if (isset($option_setting['enable-social-icons'])) : 
					if($option_setting['enable-social-icons']) : ?>
						<div id="social-icons">
							<?php get_template_part('social', 'tc'); ?>
						</div>
					<?php endif;
				else :
					get_template_part('defaults/social', 'default');
				endif; ?>
		<div id="top-right" class="col-md-5">
			<?php get_template_part('top', 'right'); ?>			
		</div>  
	</div>--><!--.container-->
</div><!--#top-bar--> 

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="site-branding">
				<?php if (isset($option_setting['logo']['url'])) : ?>
					<?php if( $option_setting['logo']['url'] != "" ) : ?>
						<div id="site-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($option_setting['logo']['url']) ?>"></a>
						</div>
					<?php else : ?>	
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<div class="loggedSec">
								<?php
								if ( is_user_logged_in() ) {
									$current_user = wp_get_current_user();
									echo "Logged in as ".$current_user->display_name;
								}
								?>
							</div>
						</h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php endif; ?>	
				<?php else : ?>	
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php endif; ?>	
		</div>
		
	<div id="top-nav">
		<nav id="site-navigation" class="main-navigation container" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'veal' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'veal' ); ?></a>
			<?php 
			wp_nav_menu( array( 'theme_location' => 'primary' ) ); 
			
			
			/*
			$menu = wp_get_nav_menu_object ('Menu 1');
			$menu_items = wp_get_nav_menu_items($menu->term_id);
			print_r($menu_items);
			*/
			//39
	
	/*
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    
    foreach ($menu_items as $menu_item) {
        $menupost=get_post($menu_item->object_id);
        echo $menupost->post_title;
    }
	*/		
			
			?>
		</nav><!-- #site-navigation -->
	</div>		
</header><!-- #masthead -->
	
	<?php
	 if (isset($option_setting['slider-enable-on-home']))
				get_template_part('slider');
			else
				get_template_part('defaults/slider','d');
		?>
	
	