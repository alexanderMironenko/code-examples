<?php
$data = $args['data'];
$class = $args['class'];

if ( $data && $data['link']): ?>
	<a href="<?= $data['link']['url'] ?>" class="menu-link <?= $class ?>" title="Link to <?= $data['link']['title']; ?>">
		<?=  wp_get_attachment_image( $data['icon'], 'full' ); ?>

        <div class="info">
			<p class="title"><?= $data['link']['title']; ?></p>

			<?php if ( $data['description'] ): ?>
				<p><?= $data['description'] ?></p>
			<?php endif; ?>
		</div>
	</a>
<?php endif;