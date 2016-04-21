<?php
/**
 * Welcome screen intro template
 */
?>
<?php
$gateway = wp_get_theme( 'gateway' );

?>
<div class="theme-intro">

	<div class="intro-text">
		<h1 style="margin-right: 0;"><?php echo '<strong>Gateway</strong> <sup>' . esc_attr( $gateway['Version'] ) . '</sup>'; ?></h1>

		<p style="font-size: 1.2em;"><?php _e( 'Thanks for using the Gateway theme! This info page should help you get started and serve as a handy reference area.', 'gateway' ); ?></p>
		<p><?php _e( 'Gateway incorporates elegant style with user friendly customizer options making it perfectly suited for a variety of WordPress users.', 'gateway' ); ?></p>
	</div>

	<div class="theme-screenshot">
		<img src="<?php echo esc_url( get_template_directory_uri() ) . '/screenshot.png'; ?>" alt="gateway" class="image-50" width="440" />
	</div>

</div><!-- .theme-intro -->
