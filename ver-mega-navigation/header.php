<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header" class="header js-header">
    <div class="container">
        <div class="left">
			<?php $logo = get_field( 'header_logo', 'options' ); ?>
            <a href="<?= home_url() ?>" class="logo" title="VectorSolutions">
				<?= $logo ? wp_get_attachment_image( $logo, 'full', false,
					array( 'loading' => 'eager' ) ) : '<img src="' . TEMPLATE_DIRECTORY_URL . '/build/images/logo.svg" alt="VectorSolutions logo">' ?>
            </a>
			<?php get_template_part( 'views/partials/mega-menu' ); ?>
        </div>
        <div class="right js-right">
			<?php $login = get_field( 'login_link', 'options' );
			$support     = get_field( 'support_link', 'options' );
			$demo        = get_field( 'demo_link', 'options' );
			$radOverride = get_field( 'rad_link' );
			if ( $radOverride ) {
				$demo = $radOverride;
			}
			vec_button( $support, 'p link-simple support' );
			vec_button( $login, 'p link-simple login' );
			get_template_part( 'views/forms/search-header' );
			vec_button( $demo, 'btn btn-green' );
			get_template_part( 'views/partials/mobile-menu' ); ?>
        </div>
    </div>
</header><!-- #header -->