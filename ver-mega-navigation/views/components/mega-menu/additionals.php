<?php $data = $args['data'];
if ( $data ): ?>
    <div class="featured js-featured js-sublist-h <?= $data['type'] == 'featured' ? 's-padding' : null ?>">
		<?php if ( $data['type'] == 'default' ):
			get_template_part( 'views/components/mega-menu/cta', '',
				array( 'data' => $data['cta'] ) );
			if ( $data['list'] ): ?>
                <div class="list">
					<?php foreach ( $data['list'] as $button ):
						get_template_part( 'views/components/mega-menu/link', 'submenu',
							array( 'data' => $button['menu_link'] ) );
					endforeach; ?>
                </div>
			<?php endif;
        elseif ( $data['type'] == 'featured' ):
			echo $data['tag'] ? '<p class="tag">' . $data['tag'] . '</p>' : null;
			if ( $data['posts'] ): ?>
                <div class="list more-gap">
					<?php foreach ( $data['posts'] as $id ):
						get_template_part( 'views/components/mega-menu/card', 'post',
							array( 'id' => $id ) );
					endforeach; ?>
                </div>
			<?php endif;
		endif; ?>
    </div>
<?php endif; ?>
