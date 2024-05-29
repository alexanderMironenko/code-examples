<?php
$data = $args['data'];

if ( $data['type'] == 'simple' ):
	if ( $data['link']['url'] !== '#' ): ?>
        <a href="<?= $data['link']['url'] ?>"
           class="menu-link <?= $data['is_new'] ? 'new' : null ?>"
           title="<?= $data['link']['title']; ?>">
            <div class="info">
                <p><?= $data['link']['title']; ?> <?= $data['is_new'] ? '<span class="tag-new">NEW</span>' : null ?></p>

				<?php if ( $data['description'] ): ?>
                    <p><?= $data['description'] ?></p>
				<?php endif; ?>
            </div>
        </a>
	<?php else: ?>
        <button class="menu-link <?= $data['is_new'] ? 'new' : null ?>"
                title="<?= $data['link']['title']; ?>">
            <div class="info">
                <p><?= $data['link']['title']; ?> <?= $data['is_new'] ? '<span class="tag-new">NEW</span>' : null ?></p>

				<?php if ( $data['description'] ): ?>
                    <p><?= $data['description'] ?></p>
				<?php endif; ?>
            </div>
        </button>
	<?php endif;
elseif ( $data['type'] == 'with-icon' ):
	if ( $data['link']['url'] !== '#' ): ?>
        <a href="<?= $data['link']['url'] ?>"
           class="menu-link <?= $data['is_new'] ? 'new' : null ?>"
           title="<?= $data['link']['title']; ?>">
			<?= wp_get_attachment_image( $data['icon'], 'full' ); ?>

            <div class="info">
                <p><?= $data['link']['title']; ?> <?= $data['is_new'] ? '<span class="tag-new">NEW</span>' : null ?></p>

				<?php if ( $data['description'] ): ?>
                    <p><?= $data['description'] ?></p>
				<?php endif; ?>
            </div>
        </a>
	<?php else: ?>
        <button class="menu-link <?= $data['is_new'] ? 'new' : null ?>"
                title="<?= $data['link']['title']; ?>">
			<?= wp_get_attachment_image( $data['icon'], 'full' ); ?>

            <div class="info">
                <p><?= $data['link']['title']; ?> <?= $data['is_new'] ? '<span class="tag-new">NEW</span>' : null ?></p>

				<?php if ( $data['description'] ): ?>
                    <p><?= $data['description'] ?></p>
				<?php endif; ?>
            </div>
        </button>
	<?php endif;

elseif ( $data['type'] == 'with-arrow' ):
	if ( $data['link']['url'] !== '#' ): ?>
        <a href="<?= $data['link']['url'] ?>"
           class="menu-link with-arrow <?= $data['is_new'] ? 'new' : null ?>"
           title="<?= $data['link']['title']; ?>">
            <div class="info">
                <p><?= $data['link']['title']; ?> <?= $data['is_new'] ? '<span class="tag-new">NEW</span>' : null ?></p>

				<?php if ( $data['description'] ): ?>
                    <p><?= $data['description'] ?></p>
				<?php endif; ?>
            </div>
        </a>
	<?php else: ?>
        <button class="menu-link with-arrow <?= $data['is_new'] ? 'new' : null ?>"
                title="<?= $data['link']['title']; ?>">
            <div class="info">
                <p><?= $data['link']['title']; ?> <?= $data['is_new'] ? '<span class="tag-new">NEW</span>' : null ?></p>

				<?php if ( $data['description'] ): ?>
                    <p><?= $data['description'] ?></p>
				<?php endif; ?>
            </div>
        </button>
	<?php endif;
elseif ( $data['type'] == 'see-all' ):
	vec_button( $data['link'], 'btn-secondary arrow' );
endif;