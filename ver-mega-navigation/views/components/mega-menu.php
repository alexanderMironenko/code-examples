<?php
$megaMenu = get_field( 'mega_menu', 'options' );

if ( $megaMenu ): ?>
    <nav id="nav" class="nav-header js-nav-header" role="navigation" aria-label="main">
        <ul class="main-nav js-main-nav">
			<?php foreach ( $megaMenu as $item ):
				switch ( $item['acf_fc_layout'] ):
					case 'link':
						get_template_part( 'views/components/mega-menu/link', '', array('data' => $item) );
						break;
					case 'with_submenu':
						get_template_part( 'views/components/mega-menu/submenu', '', array('data' => $item) );
						break;
                    default:
                        break;
				endswitch;
			endforeach; ?>
        </ul>
    </nav>
<?php endif;

