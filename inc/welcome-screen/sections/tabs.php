<h2 class="nav-tab-wrapper">
	<a href="#getting_started" class="nav-tab nav-tab-active "><span class="dashicons dashicons-admin-tools"></span><?php _e( 'Getting Started', 'gateway' ); ?></a>
	<a href="#enhance" class="nav-tab"><span class="dashicons dashicons-star-filled"></span><?php _e( 'Enhance Gateway', 'gateway' ); ?></a>
	<a href="#changelog" class="nav-tab"><span class="dashicons dashicons-media-default"></span><?php _e( 'Changelog', 'gateway' ); ?></a>
</h2>

<script>
jQuery( document ).ready( function() {
	jQuery( 'div.panel' ).hide();
	jQuery( 'div#getting_started' ).show();

	jQuery( '.nav-tab-wrapper a' ).click( function() {

		var tab = jQuery( this );
		var	tabs_wrapper = tab.closest( '.about-wrap' );

		jQuery( '.nav-tab-wrapper a', tabs_wrapper ).removeClass( 'nav-tab-active' );
		jQuery( 'div.panel', tabs_wrapper ).hide();
		jQuery( 'div' + tab.attr( 'href' ), tabs_wrapper ).show();
		tab.addClass( 'nav-tab-active' );

		return false;
	});
});
</script>