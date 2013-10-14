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
 * Enqueueing and adding scripts and styles.
 */
require( get_template_directory() . '/inc/scripts-styles.php' );

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

/**
 * Include Theme Hook Alliance
 */
include( get_template_directory() . '/inc/tha-theme-hooks.php' );

/**
 * Include Theme Hook Alliance
 */
include( get_template_directory() . '/inc/foundation-shortcodes.php' );
