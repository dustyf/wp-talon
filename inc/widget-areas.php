<?php
/**
 * Register widgetized area and update sidebar with default widgets
 */
function wp_talon_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'wp_talon' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'wp_talon_widgets_init' );