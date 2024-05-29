<?php
$data = $args['data'];

if ( $data ): ?>
	<div class="submenu type-d js-submenu" role="list">
		<div class="container">
			<div class="left">
				<div class="top">
					<p class="tag"><?= $data['tag_1']; ?></p>
					<?php if ( $data['top'] ): ?>
						<div class="list">
							<?php foreach ( $data['top'] as $button ):
								get_template_part( 'views/components/mega-menu/link', 'submenu',
									array( 'data' => $button['menu_link'] ) );
							endforeach; ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="bottom">
					<p class="tag"><?= $data['tag_2']; ?></p>

					<?php if ( $data['bottom'] ): ?>
						<div class="list">
							<?php foreach ( $data['bottom'] as $button ):
								get_template_part( 'views/components/mega-menu/link', 'submenu',
									array( 'data' => $button['menu_link'] ) );
							endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="right">
				<div class="column blue">
					<?php get_template_part( 'views/components/mega-menu/cta', '',
						array( 'data' => $data['menu_cta'] ) ); ?>

					<?php if ( $data['column'] ): ?>
						<div class="list more-gap">
							<?php foreach ( $data['column'] as $id ):
								get_template_part( 'views/components/mega-menu/card', 'post',
									array( 'id' => $id ) );
							endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

            <div class="submenu-close" tabindex="0" aria-label="close menu"></div>
        </div>
	</div>
<?php endif;