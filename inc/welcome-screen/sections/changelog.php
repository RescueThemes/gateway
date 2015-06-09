<?php
/**
 * Welcome screen changelog template
 */
?>

<div id="changelog" class="gateway-changelog panel">

	<div class="changelog-intro">

		<h3><?php _e( 'Version Update Details', 'gateway' ); ?> </h3>
		<p><?php _e( 'Review Gateway\'s version details and release dates.', 'gateway' ); ?></p>

	</div><!-- .changelog-intro -->

	<div class="content-section">

		<?php 
		/**
		 * Display the changelog file from the theme
		 */
			echo wp_kses_post ( $this->gateway_changlog() );
		?>

	</div><!-- .content-section -->


</div><!-- #changelog -->