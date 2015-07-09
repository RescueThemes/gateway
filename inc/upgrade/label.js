/**
 * Upgrade notice
 */
( function( $ ) {
 
	// Add Upgrade Message to Customizer Header
	if ('undefined' !== typeof gatewayUpgrade) {
		upsell = $('<a class="gateway-upgrade-link"></a>')
			.attr('href', gatewayUpgrade.gatewayUpgradeURL)
			.attr('target', '_blank')
			.text(gatewayUpgrade.gatewayUpgradeLabel)
			.css({
				'display' : 'inline-block',
				'background-color' : '#93b800',
				'color' : '#fff',
				'text-transform' : 'uppercase',
				'margin-top' : '6px',
				'padding' : '3px 6px',
				'font-size': '9px',
				'letter-spacing': '1px',
				'line-height': '1.5',
				'clear' : 'both'
			})
		;
 
		setTimeout(function () {
			$('.preview-notice').append(upsell);
		}, 200);
 
		// Remove accordion click event
		$('.preview-notice').on('click', function(e) {
			e.stopPropagation();
		});
	}
 
} )( jQuery );
