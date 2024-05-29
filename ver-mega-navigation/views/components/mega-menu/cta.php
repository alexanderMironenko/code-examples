<?php
$data = $args['data'];

if ( $data ): ?>
<div class="cta-box">
	<p class="title"><?= $data['title'] ?></p>
	<p><?= $data['description'] ?></p>

	<?php vec_button($data['button']['link'], $data['button']['type']); ?>
</div>
<?php endif;
