<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package gateway
 */

/**
 * Add theme support for Infinite Scroll.
 * @link http://jetpack.me/support/infinite-scroll/
 *
 */
function gateway_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
		'render'    => 'gateway_infinite_scroll_render',
		'wrapper'	=> false,
	) );
}
add_action( 'after_setup_theme', 'gateway_jetpack_setup' );

function gateway_infinite_scroll_render() {
	while( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
}
