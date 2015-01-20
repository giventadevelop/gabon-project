<?php
/**
 * Veal functions and definitions
 *
 * @package Veal
 */

/**
 * Redux Framework
 */
require get_template_directory() . '/assets/frameworks/redux/admin/admin-init.php';
require get_template_directory() . '/options.php';


if ( ! function_exists( 'veal_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function veal_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'veal', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	 global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 640; /* pixels */
		}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 * 
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'veal' ),
		'footer' => __( 'Footer Menu', 'veal' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'veal_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
	
	//Register custom thumbnail sizes
	add_image_size('grid3',400,305,true); //For the Grid3 layout
	add_image_size('grid7',400,340,true); //For the Grid7 layout
	
	add_theme_support('woocommerce');
	
}
endif; // veal_setup
add_action( 'after_setup_theme', 'veal_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function veal_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'veal' ), /* Primary Sidebar for Everywhere else */
		'id'            => 'sidebar-primary',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'veal' ), /* Primary Sidebar for Everywhere else */
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'veal' ), /* Primary Sidebar for Everywhere else */
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'veal' ), /* Primary Sidebar for Everywhere else */
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'veal' ), /* Primary Sidebar for Everywhere else */
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	
}
add_action( 'widgets_init', 'veal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function veal_scripts() {

	//Load Default Stylesheet
	wp_enqueue_style( 'veal-style', get_stylesheet_uri() );
	
	//Load Font Awesome CSS
	wp_enqueue_style('font-awesome', get_template_directory_uri()."/assets/frameworks/font-awesome/css/font-awesome.min.css");
	
	//Load Bootstrap CSS
	wp_enqueue_style('bootstrap-style',get_template_directory_uri()."/assets/frameworks/bootstrap/css/bootstrap.min.css");
	
	//Load BxSlider CSS
	wp_enqueue_style('bxslider-style',get_template_directory_uri()."/assets/css/bxslider.css");
	
	//Load Theme Structure File. Contains Orientation of the Theme.
	wp_enqueue_style('veal-theme-structure', get_template_directory_uri()."/assets/css/main.css");

	//Load the File Containing Color/Font Information
	wp_enqueue_style('veal-theme-style', get_template_directory_uri()."/assets/css/theme.css");
	
	//Load Bootstrap JS
	wp_enqueue_script('bootstrap-js', get_template_directory_uri()."/assets/frameworks/bootstrap/js/bootstrap.min.js", array('jquery'));

	//Load Bx Slider Js 
	wp_enqueue_script('bxslider-js', get_template_directory_uri()."/assets/js/bxslider.min.js", array('jquery'));
	
	//Retina JS
	wp_enqueue_script('retina-js', get_template_directory_uri()."/assets/js/retina.min.js", array('jquery'));

	//Load Theme Specific JS
	wp_enqueue_script('custom-js', get_template_directory_uri()."/assets/js/custom.js", array('jquery','hoverIntent'));


	//Load Navigation js. This is Responsible for Converting the Main Menu into Responsive, when the browser width is switched.
	wp_enqueue_script( 'veal-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );

	//Comes with _s Framework.
	wp_enqueue_script( 'veal-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	//For the Default WordPress Comment's Reply System
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	//Declare support for Woo Commerce
	add_theme_support('woocommerce');
}
add_action( 'wp_enqueue_scripts', 'veal_scripts' );

/*
 *	This function Contains All The scripts that Will be Loaded in the Theme Header including Slider, Custom CSS, etc.
 */
function veal_initialize_header() {
	
	global $option_setting; //Global theme options variable
	
	//CSS Begins
	echo "<style>";
	
	// Echo the Custom CSS Entered via Theme Options
	echo $option_setting['custom-css'];	
	
	if (is_front_page()) :
		echo ".header-title { border: none; }";
	endif;
	
	echo "</style>";
	//CSS Ends
	
	
}
add_action('wp_head', 'veal_initialize_header');

/*
 * Pagination Function. Implements core paginate_links function.
 */
function veal_pagination() {
	global $wp_query;
	$big = 12345678;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
	            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
	            echo '<div class="pagination"><div><ul>';
	            echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
	            foreach ( $page_format as $page ) {
	                    echo "<li>$page</li>";
	            }
	           echo '</ul></div></div>';
	 }
}
if (class_exists('woocommerce')) {
	/**
	 * Set Default Thumbnail Sizes for Woo Commerce Product Pages, on Theme Activation
	 */
	global $pagenow;
	if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) 			add_action( 'init', 'veal_woocommerce_image_dimensions', 1 );
	/**
	 * Define image sizes
	 */
	function veal_woocommerce_image_dimensions() {
	  	$catalog = array(
			'width' 	=> '600',	// px
			'height'	=> '600',	// px
			'crop'		=> 1 		// true
		);
		$single = array(
			'width' 	=> '600',	// px
			'height'	=> '600',	// px
			'crop'		=> 1 		// true
		);	 
		$thumbnail = array(
			'width' 	=> '250',	// px
			'height'	=> '250',	// px
			'crop'		=> 0 		// false
		);	 
		// Image sizes
		update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
		update_option( 'shop_single_image_size', $single ); 		// Single product image
		update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
	}
}
function veal_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'veal_excerpt_length', 999 );
function veal_excerpt_more( $more ) {
	return "<a class='readmore' href='". get_permalink( get_the_ID() )."'>" . __('Continue Reading...','veal')."</a>";
}
add_filter('excerpt_more', 'veal_excerpt_more');

function veal_add_primary_tag() {
	echo '<div id="primary" class="content-area col-md-12">';
}
add_action('veal_before_blog', 'veal_add_primary_tag');

add_filter('show_admin_bar', '__return_false');

function change_menu($items) {
	
	foreach($items as $item){
		if($item->ID == 39 && !is_user_logged_in()){
			$item->url = get_bloginfo("url") . "/?page_id=67";
		}
	}
	return $items;
}

add_filter('wp_nav_menu_objects', 'change_menu');
/*
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/metaboxes.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';