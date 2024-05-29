<?php $data = $args['data'];
if ( $data ):
	if ( $data['type'] == 'default' ):
		get_template_part( 'views/components/mega-menu/cta', '',
			array( 'data' => $data['cta'] ) );
		if ( $data['list'] ):
			foreach ( $data['list'] as $button ):
				vec_button( $button['menu_link'] );
			endforeach;
		endif;
	endif;
endif;