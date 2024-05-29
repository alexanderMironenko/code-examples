<?php
add_action( 'rest_api_init', 'api_render_nav' );
function api_render_nav() {
	register_rest_route( 'my_theme/v1', '/render_mega_menu/', array(
		'methods'             => 'GET',
		'callback'            => 'render_mega_menu',
		'permission_callback' => '__return_true'
	) );
}

function render_mega_menu() {
	ob_start();
	$megaMenu = get_field( 'mega_menu', 'options' );

	if ( $megaMenu ): ?>
        <ul class="main-nav js-main-nav">
			<?php foreach ( $megaMenu as $item ):
				switch ( $item['acf_fc_layout'] ):
					case 'link':
						get_template_part( 'views/components/mega_menu/link', '', array( 'data' => $item ) );
						break;
					case 'with_submenu':
						get_template_part( 'views/components/mega_menu/submenu', '', array( 'data' => $item ) );
						break;
					default:
						break;
				endswitch;
			endforeach; ?>
        </ul>
	<?php endif;

	return ob_get_clean();
}