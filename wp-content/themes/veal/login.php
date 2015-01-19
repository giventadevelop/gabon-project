<?php
if (  is_user_logged_in() ) { // Display WordPress login form:
	header( 'Location: /' ) ;
}
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template name: Login Page
 * @package Veal
 */

get_header(); 
?>
<div class="bannerImg">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<div id="content" class="site-content">
		<div class="container">
<?php do_action('veal_before_blog'); ?>
<main id="main" class="site-main" role="main">
	<?php
	if ( ! is_user_logged_in() ) { // Display WordPress login form:
		$args = array(
			'redirect' => '/', 
			'form_id' => 'loginform-custom',
			'label_username' => __( 'Username' ),
			'label_password' => __( 'Password' ),
			'label_remember' => __( 'Remember Me' ),
			'label_log_in' => __( 'Log In' ),
			'remember' => true
		);
		add_action( 'login_form_middle', 'add_lost_password_link' );
		function add_lost_password_link() {
			return '<a href="/wp-login.php?action=lostpassword">Lost Password?</a>';
		}
		wp_login_form( $args );
		
		
		
		
	} else { // If logged in:
		/*
		wp_loginout( home_url() ); // Display "Log Out" link.
		echo " | ";
		wp_register('', ''); // Display "Site Admin" link.
		*/
		exit;
	}
	?>
</main><!-- #main -->
</div><!-- #primary -->
<?php do_action('veal_after_blog'); ?>
<?php get_footer(); ?>