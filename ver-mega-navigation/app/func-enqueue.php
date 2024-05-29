<?php

function enqueue_scripts_styles() {
	wp_enqueue_script( 'vec-common', TEMPLATE_DIRECTORY_URL . '/build/scripts/common.min.js', array(), _S_VERSION,
		true );
	wp_localize_script( 'vec-common', 'vec_ajax', array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
	) );
}



add_action( 'wp_enqueue_scripts', 'enqueue_scripts_styles', 20 );
