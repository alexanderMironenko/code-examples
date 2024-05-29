<?php
$data = $args['data'];

if ( $data ): ?>
    <div class="submenu type-b js-submenu" role="list">
        <div class="container">
            <div class="content">
                <div class="column js-column">
					<?= $data['tag'] ? '<p class="tag">' . $data['tag'] . '</p>' : null ?>

					<?php if ( $data['Top'] ): ?>
                        <div class="list">
							<?php $i = 0;
							foreach ( $data['Top'] as $button ):
								$class = $i == 0 ? 'active' : null; ?>
                                <div class="submenu-item js-submenu-item <?= $class ?>">
									<?php get_template_part( 'views/components/mega-menu/link', 'submenu',
										array( 'data' => $button['menu_link'] ) );

									get_template_part( 'views/components/mega-menu/sublist', '',
										array( 'data' => $button['sublist'], 'back' => $button['menu_link'] ) ); ?>
                                </div>
								<?php $i ++;
							endforeach; ?>
                        </div>
					<?php endif; ?>
                </div>
            </div>

			<?php if ( $data['bottom'] ): ?>
                <div class="bottom">
					<?php foreach ( $data['bottom'] as $item ):
						get_template_part( 'views/components/mega-menu/link', 'submenu-big',
							array( 'data' => $item, 'class' => '' ) );
					endforeach; ?>
                </div>
			<?php endif; ?>

            <div class="submenu-close" tabindex="0" aria-label="close menu"></div>
        </div>
    </div>
<?php endif;