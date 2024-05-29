<?php
$data = $args['data'];

if ( $data ): ?>
    <div class="submenu type-c js-submenu" role="list">
        <div class="container">
            <div class="left">
				<?php if ( $data['top_link'] ): ?>
                    <div class="top">
						<?php get_template_part( 'views/components/mega-menu/link', 'submenu-big',
							array( 'data' => $data['top_link'], 'class' => 'menu-link-big' ) ); ?>
                    </div>
				<?php endif; ?>

                <div class="content">
                    <div class="column js-column">
						<?= $data['tag'] ? '<p class="tag">' . $data['tag'] . '</p>' : null ?>

						<?php if ( $data['bottom'] ): ?>
                            <div class="list">
								<?php $i = 0;
								foreach ( $data['bottom'] as $button ):
									$class = $i == 0 ? 'active' : null; ?>
                                    <div class="submenu-item js-submenu-item <?= $class ?>">
										<?php get_template_part( 'views/components/mega-menu/link', 'submenu',
											array( 'data' => $button['menu_link'] ) );

										if ( $button['sublist'] ): ?>
                                            <div class="sublist js-sublist-2">
	                                            <?= $button['tag'] ? '<p class="tag">' . $button['tag'] . '</p>' : null ?>

	                                            <?php foreach ( $button['sublist'] as $button ): ?>
													<?php get_template_part( 'views/components/mega-menu/link',
														'submenu', array( 'data' => $button['menu_link'] ) ); ?>
												<?php endforeach; ?>
                                            </div>
										<?php endif; ?>
                                    </div>
									<?php $i ++;
								endforeach; ?>
                            </div>
						<?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="right">
                <div class="column blue">
                    <p class="tag"><?= $data['tag_2']; ?></p>
					<?php if ( $data['posts'] ): ?>
                        <div class="list more-gap">
							<?php foreach ( $data['posts'] as $id ):
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