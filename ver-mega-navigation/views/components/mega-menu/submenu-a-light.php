<?php
$data = $args['data'];

if ( $data ): ?>
    <div class="submenu type-a js-submenu" role="list">

	<?php if ( $data['Top'] ): ?>
		<?php foreach ( $data['Top'] as $button ):
            vec_button( $button['menu_link'], 'p list-link' );
            get_template_part( 'views/components/mega-menu/sublist-light', '', array( 'data' => $button['sublist'] ) );
            endforeach;
	endif;
	if ( $data['bottom'] ):
		foreach ( $data['bottom'] as $item ):
			vec_button( $item, 'p list-link' );
		endforeach;
	endif; ?>
    </div>
<?php endif;