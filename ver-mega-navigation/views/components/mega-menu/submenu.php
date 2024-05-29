<?php
$data = $args['data'];

if ( $data ): ?>
    <li class="nav-item has-submenu js-has-submenu" tabindex="0">
        <p class="list-link"><?= $data['title']; ?> <i class="icon icon-arrow-short-down"></i></p>
		<?php if ( $data['submenu'] ) :
			switch ( $data['submenu'][0]['acf_fc_layout'] ):
				case 'type_a':
					get_template_part( 'views/components/mega-menu/submenu-a', '', array( 'data' => $data['submenu'][0] ) );
					break;
				case 'type_b':
					get_template_part( 'views/components/mega-menu/submenu-b', '', array( 'data' => $data['submenu'][0] ) );
					break;
				case 'type_c':
					get_template_part( 'views/components/mega-menu/submenu-c', '', array( 'data' => $data['submenu'][0] ) );
					break;
				case 'type_d':
					get_template_part( 'views/components/mega-menu/submenu-d', '', array( 'data' => $data['submenu'][0] ) );
					break;
                default:
                    break;
			endswitch;
		endif; ?>
    </li>
<?php endif;