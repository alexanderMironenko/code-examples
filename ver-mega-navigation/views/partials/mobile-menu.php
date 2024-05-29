<?php $megaMenu = get_field( 'mega_menu', 'options' ); ?>
    <button class="mob-menu-btn <?= $megaMenu ? 'js-mob-menu-btn' : null ?>" title="Mobile menu"></button>

<?php if ( $megaMenu ): ?>
    <div class="mob-menu main-level js-mob-menu">
        <div class="top">
			<?php $logo = get_field( 'header_logo', 'options' ); ?>
            <a href="<?= home_url() ?>" class="logo" title="VectorSolutions main link">
				<?= $logo ? wp_get_attachment_image( $logo, 'full', false,
					array( 'loading' => 'eager' ) ) : '<img src="' . TEMPLATE_DIRECTORY_URL . '/build/images/logo.svg" alt="VectorSolutions main logo">' ?>
            </a>

            <button class="close icon-close js-close-mob-menu" title="<?= __( 'Menu close', 'vector' ) ?>" role="button"></button>
        </div>

        <?php get_template_part( 'views/forms/search-header-mobile' ); ?>

        <ul class="mobile-menu-box">
			<?php foreach ( $megaMenu as $item ):
				switch ( $item['acf_fc_layout'] ):
					case 'link':
						get_template_part( 'views/components/mobile-menu/link', '', array( 'data' => $item ) );
						break;
					case 'with_submenu':
						get_template_part( 'views/components/mobile-menu/submenu', '', array( 'data' => $item ) );
						break;
					default:
						break;
				endswitch;
			endforeach; ?>
        </ul>

        <div class="bottom">
            <div class="br"></div>
			<?php
			$login   = get_field( 'login_link', 'options' );
			$support = get_field( 'support_link', 'options' );
			$demo    = get_field( 'demo_link', 'options' );

			vec_button( $support, 'p link-simple support' );

			vec_button( $login, 'p link-simple login' );

			echo '<div class="br" style="margin-top: 24px"></div>';

			vec_button( $demo, 'btn btn-green' ); ?>
        </div>
    </div>

    <div class="mob-menu-shadow js-mob-menu-shadow"></div>
<?php endif;
