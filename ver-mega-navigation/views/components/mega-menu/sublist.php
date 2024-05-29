<?php $data = $args['data'];
if ( $data ): ?>
    <div class="sublist js-sublist-2 js-sublist-h">
		<?php $i = 0;
		foreach ( $data as $button ):
			$class = $i == 0 ? 'active' : null; ?>
        <div class="submenu-item js-submenu-item-2 <?= $class ?>">
			<?php get_template_part( 'views/components/mega-menu/link', 'submenu',
				array( 'data' => $button['menu_link'] ) );
			get_template_part( 'views/components/mega-menu/additionals', '',
				array( 'data' => $button['sublist'] ) );
			$i ++; ?>
        </div>
		<?php endforeach; ?>
    </div>
<?php endif; ?>

