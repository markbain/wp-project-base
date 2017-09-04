<?php
	function baindesign324_post_to_posts_types() {
	    
	    p2p_register_connection_type( array(
	        'name' => 'person_to_products',
	        'from' => 'cpt1',
	        'to' => 'product'
	    ) );

	}

	add_action( 'p2p_init', 'baindesign324_post_to_posts_types' );
