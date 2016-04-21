<?php
/**
 * Welcome screen getting started template
 */
?>
<?php
// get theme customizer url
$url 	= admin_url() . 'customize.php?';
$url 	.= 'url=' . urlencode( site_url() . '?gateway-customizer=true' );
$url 	.= '&return=' . urlencode( admin_url() . 'themes.php?page=gateway-welcome' );
$url 	.= '&gateway-customizer=true';
?>
<div id="getting_started" class="col one-col panel">

	<div class="getting-started-intro">

		<h3><?php _e( 'Getting Started With Gateway', 'gateway' ); ?> </h3>
		<p><?php _e( 'We\'ve purposely kept Gateway lean & mean so setup is a breeze. Here are some common tasks to get you started:', 'gateway' ); ?></p>

	</div><!-- .getting-started-intro -->

	<div class="getting-started-content">

		<div class="content-section">

			<!-- Install Recommended Plugins -->
			<h3><?php _e( '1. Install Recommended Plugins' ,'gateway' ); ?></h3>
			<p><?php _e( 'Although Gateway works fine as a standalone WordPress theme, there are a few recommended plugins. Once the plugins are installed, be sure to activate them:', 'gateway' ); ?></p>

			<?php
			/**
			 * Jetpack plugin activation notice
			 */
			if ( ! class_exists( 'Jetpack' ) ) { ?>
			<p>
				<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=jetpack' ), 'install-plugin_jetpack' ) ); ?>" class="button button-primary">
					<?php _e( 'Install Jetpack', 'gateway' ); ?>
				</a>
			</p>
			<?php } else { ?>
			<p>
				<a href="<?php echo esc_url( self_admin_url( 'plugins.php' ) ); ?>" class="button">
					<?php _e( 'Jetpack Installed!', 'gateway' ); ?>
				</a>
				<span class="dashicons dashicons-yes"></span>
			</p>
			<?php }

			/**
			 * Rescue Shortcodes plugin activation notice
			 */
			if ( ! function_exists( 'rescue_shortcodes_media_button' ) ) { ?>
			<p>
				<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=rescue-shortcodes' ), 'install-plugin_rescue-shortcodes' ) ); ?>" class="button button-primary">
					<?php _e( 'Rescue Shortcodes', 'gateway' ); ?>
				</a>
			</p>
			<?php } else { ?>
			<p>
				<a href="<?php echo esc_url( self_admin_url( 'plugins.php' ) ); ?>" class="button">
					<?php _e( 'Rescue Shortcodes Installed!', 'gateway' ); ?>
				</a>
				<span class="dashicons dashicons-yes"></span>
			</p>
			<?php } ?>

		</div><!-- .content-section -->


		<hr>

		<div class="content-section">

			<h3><?php _e( '2. Configure Menu' ,'gateway' ); ?></h3>
			<p><?php _e( 'Gateway includes a primary menu located in the header area of the theme. The primary navigation is perfect for your key pages like the blog and contact page. Click below to navigate to the navigation menu system.', 'gateway' ); ?></p>
			<p><a href="<?php echo esc_url( self_admin_url( 'nav-menus.php' ) ); ?>" class="button"><?php _e( 'Configure Menu', 'gateway' ); ?></a></p>

		</div><!-- .content-section -->

		<hr>

		<div class="content-section">

			<h3><?php _e( '3. Create a Home and Blog Page', 'gateway' ); ?></h3>
			<p><?php _e( 'Gateway includes a home page template. To use the home page template, create a new page and assign the "Home" template to it.', 'gateway' ); ?></p>

			<p><a href="http://docs.rescuethemes.com/article/47-gateway-create-the-homepage" class="button button" target="_blank"><?php _e( 'Creating the Homepage &rarr;', 'gateway' ); ?></a></p>

			<p><?php _e( 'The blog page will display from the theme\'s index template. This means that there\'s no need to assign a custom template to display your blog page. Simply create a new page and assign it in your Reading settings.', 'gateway' ); ?></p>

			<p><a href="http://docs.rescuethemes.com/article/49-gateway-create-the-blog-page" class="button button" target="_blank"><?php _e( 'Creating the Blog Page &rarr;', 'gateway' ); ?></a></p>

			<p><?php _e( 'Assign both the "Blog" and "Home" pages in your Reading settings.', 'gateway' ); ?></p>

			<p><a href="<?php echo esc_url( self_admin_url( 'options-reading.php' ) ); ?>" class="button button"><?php _e( 'Reading Settings', 'gateway' ); ?></a></p>

		</div><!-- .content-section -->

		<hr>

		<div class="content-section">

			<h3><?php _e( '4. Customize Theme Settings' ,'gateway' ); ?></h3>
			<p><?php _e( 'Using the WordPress Customizer you can modify Gateway\'s appearance to match your own style.', 'gateway' ); ?></p>
			<p><a href="<?php echo esc_url( $url ); ?>" class="button"><?php _e( 'Open the Customizer', 'gateway' ); ?></a></p>

		</div><!-- .content-section -->

		<hr>

		<div class="content-section">

			<h3><?php _e( 'View documentation', 'gateway' ); ?></h3>
			<p><?php _e( 'You can read detailed information on Gateways features and review additional instructions in the documentation:', 'gateway' ); ?></p>
			<p><a href="http://docs.rescuethemes.com/collection/22-gateway" class="button" target="_blank"><?php _e( 'View documentation &rarr;', 'gateway' ); ?></a></p>

		</div><!-- .content-section -->

		<hr>

		<div class="content-section">

			<h3><?php _e( 'View Theme Page', 'gateway' ); ?></h3>
			<p><?php _e( 'The theme page will include a number of resources include demo content:', 'gateway' ); ?></p>
			<p><a href="https://rescuethemes.com/wordpress-themes/gateway" class="button" target="_blank"><?php _e( 'View Theme Page &rarr;', 'gateway' ); ?></a></p>

		</div><!-- .content-section -->

	</div><!-- .getting-started-content -->

</div><!-- #getting_started -->
