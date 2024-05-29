<?php
$data = $args['data'];

if ( $data ): ?>
<div class="cta-box small-margin">
	<p class="title"><?= $data['title'] ?></p>

    <?php if ( $data['url'] ): ?>
        <a href="<?= $data['url'] ?>" title="<?= $data['title'] ?>" target="<?= $data['target'] ?>" class="btn btn-green arrow">Learn More</a>
    <?php endif; ?>
</div>
<?php endif;
