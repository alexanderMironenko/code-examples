<?php
$data = $args['data'];

if($data): ?>
<li class="nav-item" tabindex="0">
	<?= vec_button($data['link'], 'p list-link') ?>
</li>
<?php endif;
