<?php
/**
 * Display upgrade notice on customizer page
 */
function gateway_upgrade_notice() {
 
	// Enqueue the script
	wp_enqueue_script(
		'gateway-customizer-upgrade',
		get_template_directory_uri() . '/inc/upgrade/label.js',
		array(), '1.0',
		true
	);
 
	// Localize the script for main label
	wp_localize_script(
		'gateway-customizer-upgrade',
		'gatewayUpgrade',
		array(
			'gatewayUpgradeURL'		=> esc_url( 'https://rescuethemes.com/wordpress-themes/gateway-plus/' ),
			'gatewayUpgradeLabel'	=> __( 'Upgrade to Gateway Plus', 'gateway' ),
		)
	);

	// Enqueue the script
	wp_enqueue_script(
		'gateway-customizer-mini-label-upgrade',
		get_template_directory_uri() . '/inc/upgrade/minilabel.js',
		array(), '1.0',
		true
	);

	// Localize the script for mini label
	wp_localize_script(
		'gateway-customizer-mini-label-upgrade',
		'gatewayMiniUpgrade',
		array(
			'gatewayMiniUpgradeLabel'	=> __( 'Plus', 'gateway' ),
		)
	);
 
}
add_action( 'customize_controls_enqueue_scripts', 'gateway_upgrade_notice' );