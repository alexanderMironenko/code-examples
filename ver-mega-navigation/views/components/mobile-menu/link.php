<?php
$data = $args['data'];

if($data): ?>
<li class="nav-item">
	<?= vec_button($data['link'], 'p list-link') ?>
</li>
<?php endif;
