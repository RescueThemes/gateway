<?php
/**
 * Functions used to implement options
 *
 * @package Customizer_Library
 */

/**
 * Custom Customizer Style
 */
function custom_customizer_style() {

	wp_enqueue_style( 'rescue-customizer-style', get_template_directory_uri() . '/customizer/style.css', array(), '', 'all' );
}
add_action( 'customize_controls_enqueue_scripts', 'custom_customizer_style' );
