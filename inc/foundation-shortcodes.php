<?php
/**
 * Shortcodes to display Foundation UI elements
 *
 * @package WP Talon
 */

// Buttons
function wp_talon_buttons( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'type' => 'radius', /* radius, round */
	'size' => 'medium', /* small, medium, large */
	'color' => 'blue',
	'nice' => 'false',
	'url'  => '',
	'text' => '', 
	), $atts ) );
	
	$output = '<a href="' . $url . '" class="button '. $type . ' ' . $size . ' ' . $color;
	if( $nice == 'true' ){ $output .= ' nice';}
	$output .= '">';
	$output .= $text;
	$output .= '</a>';
	
	return $output;
}

add_shortcode('button', 'wp_talon_buttons'); 

// Alerts
function wp_talon_alerts( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'type' => '	', /* warning, success, error */
	'close' => 'false', /* display close link */
	'text' => '', 
	), $atts ) );
	
	$output = '<div class="fade in alert-box '. $type . '">';
	
	$output .= $text;
	if($close == 'true') {
		$output .= '<a class="close" href="#">×</a></div>';
	}
	
	return $output;
}

add_shortcode('alert', 'wp_talon_alerts');

// Panels
function wp_talon_panels( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'type' => '	', /* warning, success, error */
	'close' => 'false', /* display close link */
	'text' => '', 
	), $atts ) );
	
	$output = '<div class="panel">';
	$output .= $text;
	$output .= '</div>';
	
	return $output;
}

add_shortcode('panel', 'wp_talon_panels');