add_action( 'template_redirect', function() {
	if ( is_feed() && headers_sent() === false ) {
		header( 'X-Robots-Tag: noindex, follow', true );
	}
} );