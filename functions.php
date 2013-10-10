<?php
/**
 * WP Talon functions and definitions
 *
 * @package WP Talon
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'wp_talon_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function wp_talon_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on WP Talon, use a find and replace
	 * to change 'wp_talon' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wp_talon', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wp_talon' ),
		'footer' => __( 'Footer Menu', 'wp_talon' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // wp_talon_setup
add_action( 'after_setup_theme', 'wp_talon_setup' );

/**
 * Enqueue scripts and styles
 */
function wp_talon_scripts() {
	wp_enqueue_style( 'wp-talon-style', get_stylesheet_uri() );

	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '20130203', 'all' );
	wp_enqueue_style( 'normalize' );

	wp_register_style( 'unsemantic', get_template_directory_uri() . '/css/unsemantic-grid-responsive.css', array(), '20130204', 'all' );
	wp_enqueue_style( 'unsemantic' );

	wp_enqueue_script( 'wp-talon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), '20130202' );
}
add_action( 'wp_enqueue_scripts', 'wp_talon_scripts' );

/**
 * Implement the Custom Header feature
 */
//include( get_template_directory() . '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require( get_template_directory() . '/inc/template-tags.php' );

/**
 * Custom functions that act independently of the theme templates
 */
require( get_template_directory() . '/inc/extras.php' );

/**
 * Customizer additions
 */
require( get_template_directory() . '/inc/customizer.php' );

/**
 * Include Widget Areas
 */
include( get_template_directory() . '/inc/widget-areas.php' );

/**
 * Include Image Sizes
 */
include( get_template_directory() . '/inc/image-sizes.php' );

/**
 * Include Custom Fields
 */
include( get_template_directory() . '/inc/custom-fields.php' );


