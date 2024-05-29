<?php
$data = $args['data'];
$back = $args['back'];

if ( $data ): ?>
    <div class="mob-submenu additionals js-mob-submenu">
        <div>
            <div class="top">
                <button class="first-level js-go-first-level" title="<?= __( 'Home', 'vector' ) ?>"><i
                            class="icon-home"></i><?= __( 'Home', 'vector' ) ?></button>

                <button class="close icon-close js-close-mob-menu" title="<?= __( 'Menu close', 'vector' ) ?>" role="button"></button>
            </div>

            <div class="sticky-back">
                <button class="back-ntn js-back-btn"><i class="icon-arrow-short-left"></i><?= __( 'Back to&nbsp; ',
						'vector' ) ?> <?= $back['link'] ? '<span>' . $back['link']['title'] . '</span>' : null ?>
                </button>
            </div>

			<?php get_template_part( 'views/components/mega-menu/cta', '',
				array( 'data' => $data['cta'] ) );
			if ( $data['list'] ): ?>
                <div class="list">
					<?php foreach ( $data['list'] as $button ): ?>
                        <div class="submenu-item js-submenu-item">
							<?php get_template_part( 'views/components/mega-menu/link', 'submenu',
								array( 'data' => $button['menu_link'] ) );
							?>
                        </div>
					<?php endforeach; ?>
                </div>
			<?php endif; ?>
        </div>

    </div>
<?php endif;