<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */
?>

	</div><!-- #content -->

<div class="footer-wrap">

	<div class="row">

		<div class="large-12 columns">

			<footer id="colophon" class="site-footer" role="contentinfo">

					<div class="row">
						
						<div class="large-4 columns">

					        <?php if ( is_active_sidebar( 'footer-left' ) ) { ?>

					          <?php dynamic_sidebar( 'footer-left' ); ?>

					        <?php } ?>

						</div><!-- .large-4 -->

						<div class="large-4 columns">
							
					        <?php if ( is_active_sidebar( 'footer-middle' ) ) { ?>

					          <?php dynamic_sidebar( 'footer-middle' ); ?>

					        <?php } ?>

						</div><!-- .large-4 -->
						
						<div class="large-4 columns">
							
					        <?php if ( is_active_sidebar( 'footer-right' ) ) { ?>

					          <?php dynamic_sidebar( 'footer-right' ); ?>

					        <?php } ?>

						</div><!-- .large-4 -->

					</div><!-- .row -->

				<div class="site-info">

					<?php $footer_copyright = get_theme_mod( 'footer_copyright' ) ?>
					<p>
					<?php // Data validation: Allow anchor and strong tags
						echo wp_kses( $footer_copyright, 
							array(
								'strong' => array(),
								'a' => array('href') 
								) 
							); 
					?>
					</p>

				</div><!-- .site-info -->

			</footer><!-- #colophon -->

		</div><!--.large-12 -->

	</div><!-- .row -->

</div><!-- .footer-wrap -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
