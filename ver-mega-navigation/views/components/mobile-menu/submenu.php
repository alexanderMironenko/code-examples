<?php
$data = $args['data'];

if ( $data ): ?>
    <li class="nav-item has-mob-submenu js-has-mob-submenu">
        <p class="list-link js-list-link"><?= $data['title']; ?> <i class="icon icon-arrow-short-right"></i></p>

		<?php if ( $data['submenu'] ) :
			switch ( $data['submenu'][0]['acf_fc_layout'] ):
				case 'type_a':
					get_template_part( 'views/components/mobile-menu/submenu-a', '', array(
						'data' => $data['submenu'][0],
						'back' => __( 'Main menu', 'vector' ),
					) );
					break;
				case 'type_b':
					get_template_part( 'views/components/mobile-menu/submenu-b', '', array(
						'data' => $data['submenu'][0],
						'back' => __( 'Main menu', 'vector' ),
					) );
					break;
				case 'type_c':
					get_template_part( 'views/components/mobile-menu/submenu-c', '', array(
						'data' => $data['submenu'][0],
						'back' => __( 'Main menu', 'vector' ),
					) );
					break;
				case 'type_d':
					get_template_part( 'views/components/mobile-menu/submenu-d', '', array(
						'data' => $data['submenu'][0],
						'back' => __( 'Main menu', 'vector' ),
					) );
					break;
				default:
					break;
			endswitch;
		endif; ?>
    </li>
<?php endif;