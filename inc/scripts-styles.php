<?php
/**
 * Enqueue scripts and styles
 */
function wp_talon_scripts() {
	global $post;
	
	wp_enqueue_style( 'wp-talon-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );

	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '20130203', 'all' );
	wp_enqueue_style( 'normalize' );

	wp_register_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css', array(), '20131013', 'all' );
	wp_enqueue_style( 'foundation' );

	wp_enqueue_script( 'wp-talon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '20131014', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), '20130202' );
}
add_action( 'wp_enqueue_scripts', 'wp_talon_scripts' );