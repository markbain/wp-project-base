<?php

function mbdmaster_google_tag_manager_head() {
	?>
		<!-- Google Tag Manager -->
		<!-- Added via WordPress theme function -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NX2MJMZ');</script>
		<!-- End Google Tag Manager -->

	<?php

}
add_action( 'wp_head', 'mbdmaster_google_tag_manager_head' );


function mbdmaster_google_tag_manager_body() {
	?>
		<!-- Google Tag Manager (noscript) -->
		<!-- Added via WordPress theme function -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX2MJMZ"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

	<?php

}
add_action( 'baindesign_after_opening_body_tag', 'mbdmaster_google_tag_manager_body' );