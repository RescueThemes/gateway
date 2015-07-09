/**
 * Upgrade notice
 */
( function( $ ) {

	// Add Upgrade Message to section
	if ('undefined' !== typeof gatewayMiniUpgrade) {
		upsellMini = $('<span class="gateway-upgrade-link"></span>')
			.text(gatewayMiniUpgrade.gatewayMiniUpgradeLabel)
			.css({
				'display' : 'inline-block',
				'background-color' : '#93b800',
				'color' : '#fff',
				'text-transform' : 'uppercase',
				'margin-top' : '1px',
				'padding' : '3px 6px',
				'font-size': '9px',
				'letter-spacing': '1px',
				'line-height': '1.5',
				'clear' : 'both',
				'float' : 'right',
				'margin-right' : '30px'
			})
		;
 
		setTimeout(function () {
			$('#accordion-section-plus-typography h3, #accordion-section-plus-colors h3, #accordion-section-plus-home-slider h3, #accordion-section-plus-woocommerce h3, #accordion-section-plus-sidebar h3').append(upsellMini);
		}, 200);

	}
 
} )( jQuery );
