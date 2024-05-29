<?php
$data = $args['data'];
$back = $args['back'];

if ( $data ): ?>
    <div class="mob-submenu type-a js-mob-submenu">
        <div class="inner-box">
            <div class="top">
                <button class="first-level js-go-first-level" title="<?= __( 'Home', 'vector' ) ?>"><i
                            class="icon-home"></i><?= __( 'Home', 'vector' ) ?></button>

                <button class="close icon-close js-close-mob-menu" title="<?= __( 'Menu close', 'vector' ) ?>" role="button"></button>
            </div>

            <div class="sticky-back">
                <button class="back-ntn js-back-btn"><i class="icon-arrow-short-left"></i><?= __( 'Back to&nbsp; ',
						'vector' ) . '<span>' . $back . '</span>' ?></button>
            </div>

			<?php if ( $data['Top'] ): ?>
                <div class="list">
					<?= $data['tag'] ? '<p class="tag">' . $data['tag'] . '</p>' : null ?>

					<?php foreach ( $data['Top'] as $button ): ?>
                        <div class="submenu-item js-submenu-item <?= $button['sublist'] ? 'js-has-mob-submenu' : null ?>">
							<?php get_template_part( 'views/components/mega-menu/link', 'submenu',
								array( 'data' => $button['menu_link'] ) );

							get_template_part( 'views/components/mobile-menu/sublist', '', array(
								'data' => $button['sublist'],
								'back' => $button['menu_link'],
							) );
							?>
                        </div>
					<?php endforeach; ?>
                </div>
			<?php endif; ?>
        </div>
        <?php if ( $data['bottom'] ): ?>
            <div class="bottom">
                <?php foreach ( $data['bottom'] as $item ):
                    get_template_part( 'views/components/mega-menu/link', 'submenu-big',
                        array( 'data' => $item, 'class' => 'menu-link-big' ) );
                endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif;