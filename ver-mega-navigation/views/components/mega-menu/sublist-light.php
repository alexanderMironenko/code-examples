<?php $data = $args['data'];
if ( $data ): ?>
	<?php
	foreach ( $data as $button ):?>
		<?php
		vec_button( $button['menu_link'], 'p list-link' );

		get_template_part( 'views/components/mega-menu/additionals-light', '',
			array( 'data' => $button['sublist'] ) );
		?>
	<?php endforeach;
endif; ?>

