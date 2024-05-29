<?php
$data = $args['data'];
if ( $data['type'] == 'simple' ): ?>
    <a href="<?= $data['link']['url'] ?>" class="menu-link <?= $data['is_new'] ? 'new' : null ?>">
        <div class="info">
            <p><?= $data['link']['title']; ?> <?= $data['is_new'] ? '<span class="tag-new">NEW</span>' : null ?></p>

			<?php if ( $data['description'] ): ?>
                <p><?= $data['description'] ?></p>
			<?php endif; ?>
        </div>
    </a>
<?php elseif ( $data['type'] == 'with-icon' ): ?>
    <a href="<?= $data['link']['url'] ?>" class="menu-link <?= $data['is_new'] ? 'new' : null ?>">
		<?= wp_get_attachment_image( $data['icon'], 'full' ); ?>

        <div class="info">
            <p><?= $data['link']['title']; ?> <?= $data['is_new'] ? '<span class="tag-new">NEW</span>' : null ?></p>

			<?php if ( $data['description'] ): ?>
                <p><?= $data['description'] ?></p>
			<?php endif; ?>
        </div>
    </a>
<?php elseif ( $data['type'] == 'with-arrow' ): ?>
    <a href="<?= $data['link']['url'] ?>" class="menu-link with-arrow <?= $data['is_new'] ? 'new' : null ?>">
        <div class="info">
            <p><?= $data['link']['title']; ?> <?= $data['is_new'] ? '<span class="tag-new">NEW</span>' : null ?></p>

			<?php if ( $data['description'] ): ?>
                <p><?= $data['description'] ?></p>
			<?php endif; ?>
        </div>
    </a>
<?php elseif ( $data['type'] == 'see-all' ):
	vec_button($data['link'], 'btn-secondary arrow');
elseif ( $data['type'] == 'with-arrow' ): ?>
    <a href="<?= $data['link']['url'] ?>" class="menu-link with-arrow <?= $data['is_new'] ? 'new' : null ?>">
        <div class="info">
            <p><?= $data['link']['title']; ?> <?= $data['is_new'] ? '<span class="tag-new">NEW</span>' : null ?></p>

			<?php if ( $data['description'] ): ?>
                <p><?= $data['description'] ?></p>
			<?php endif; ?>
        </div>
    </a>
<?php endif;