<?php
/**
 * Verum functions and definitions
 *
 * @link https: //developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Verum
 */

if ( ! defined( 'VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'VERSION', time() );
}

if ( ! function_exists( 'verum_setup' ) ): 
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function verum_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Verum, use a find and replace
		 * to change 'verum' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'verum', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https: //developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'verum-featured', '', 350, false );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'verum' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		/**
		 * Post Format support for Verum
		 */ 

		add_theme_support( 'post-formats', array('audio', 'video', 'quote','gallery') );
		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'verum_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https: //codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'verum_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function verum_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'verum_content_width', 640 );
}
add_action( 'after_setup_theme', 'verum_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https: //developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function verum_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'verum' ),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Blog Sidebar Widget.', 'verum' ),
			'before_widget' => '<div id="%1$s" class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'verum_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function verum_scripts() {
	//verum css files
	wp_enqueue_style( 'google-fonts', "//fonts.googleapis.com/css?family=Lora:400,400i,700|Playfair+Display:700");
	wp_enqueue_style( 'bootstrap', get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css'), array(), VERSION );
	wp_enqueue_style( 'font-awesome', get_theme_file_uri('assets/vendor/font-awesome/css/font-awesome.min.css'), array(), VERSION );
	wp_enqueue_style( 'slicknav', get_theme_file_uri('assets/vendor/slicknav/slicknav.css'), array(), VERSION );
	wp_enqueue_style( 'owl-carousel', get_theme_file_uri('assets/vendor/owl/assets/owl.carousel.min.css'), array(), VERSION );
	wp_enqueue_style( 'owl-theme', get_theme_file_uri('assets/vendor/owl/assets/owl.theme.default.min.css'), array(), VERSION );
	wp_enqueue_style( 'magnific-popup', get_theme_file_uri('assets/vendor/magnific-popup/magnific-popup.css'), array(), VERSION );
	wp_enqueue_style( 'manimate', get_theme_file_uri('assets/vendor/manimate.css'), array(), VERSION );
	wp_enqueue_style( 'justifiedGallery', get_theme_file_uri('assets/vendor/justifiedGallery/css/justifiedGallery.min.css'), array(), VERSION );
	wp_enqueue_style( 'verum-main', get_theme_file_uri('assets/css/main.css'), array(), VERSION );
	//wp_enqueue_style( 'verum-style', get_stylesheet_uri(), array(), VERSION );
	//wp_style_add_data( 'verum-style', 'rtl', 'replace' );

	//verum js scripts
	wp_enqueue_script( 'verum-navigation', get_theme_file_uri('/js/navigation.js'), array('jquery'), VERSION, true );
	wp_enqueue_script( 'popper', get_theme_file_uri('assets/vendor/popper.min.js'), array('jquery'), VERSION, true );
	wp_enqueue_script( 'imagesloaded', get_theme_file_uri('assets/vendor/imagesloaded.js'), array('jquery'), VERSION, true );
	wp_enqueue_script( 'slicknav', get_theme_file_uri('assets/vendor/slicknav/jquery.slicknav.min.js'), array('jquery'), VERSION, true );
	wp_enqueue_script( 'owl-carousel', get_theme_file_uri('assets/vendor/owl/owl.carousel.min.js'), array('jquery'), VERSION, true );
	wp_enqueue_script( 'carousel2-thumbs', get_theme_file_uri('assets/vendor/owl/owl.carousel2.thumbs.min.js'), array('jquery'), VERSION, true );
	wp_enqueue_script( 'magnific-popup', get_theme_file_uri('assets/vendor/magnific-popup/jquery.magnific-popup.min.js'), array('jquery'), VERSION, true );
	wp_enqueue_script( 'justifiedGallery', get_theme_file_uri('assets/vendor/justifiedGallery/js/jquery.justifiedGallery.min.js'), array('jquery'), VERSION, true );
	wp_enqueue_script( 'verum-scripts', get_theme_file_uri('assets/js/scripts.js'), array('jquery'), VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'verum_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// Verum Blog sidebar
function check_blog_sidebar(){
	if( is_active_sidebar('blog-sidebar')){
		echo "col-lg-9 col-md-8 side-border";
	}else{
		echo "col-lg-12 col-md-12";
	}
}

// Piklist
function verum_piklist_part_process($part){
	global $post;
	if( $post && 'post' == $post->post_type && 'audio-video.php'==$part['part']){
		if( in_array( get_post_format(), array('audio', 'video') )){
			return $part;
		}
	}

	if( $post && 'post' == $post->post_type && 'gallery.php'==$part['part']){
		if( in_array( get_post_format(), array( 'gallery') )){
			return $part;
		}
	}
	return $part;
}
add_filter( 'piklist_part_process', 'verum_piklist_part_process' );

// remove src attributes from images
add_filter( 'wp_calculate_image_srcset_meta', '__return_empty_array' );
// remove width & height attributes from images
function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}
add_filter( 'post_thumbnail_html', 'remove_img_attr' );


// User Profile
function verum_user_contactmethods($cm){
	$cm['facebook']  = __('Facebook', 'verum');
	$cm['twitter']   = __('Twitter', 'verum');
	$cm['pinterest'] = __('Pinterest', 'verum');

	return $cm;

}
add_filter( 'user_contactmethods', 'verum_user_contactmethods' );

// Customizer framwork kirki
require get_theme_file_path( '/inc/customizer/class-kirki-installer-section.php' );
require get_theme_file_path( '/inc/customizer/kirki-config.php' );
require get_theme_file_path( '/inc/customizer/banner.php' );


function verum_widget_categories($output){

	$output = str_replace("(", " ", $output );
	$output = str_replace(")", " ", $output );
	return $output;
}
add_filter('wp_list_categories', 'verum_widget_categories');