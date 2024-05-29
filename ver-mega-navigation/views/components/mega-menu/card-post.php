<?php
$id = $args['id'];

if ( $id ): ?>
    <a href="<?= get_the_permalink( $id ); ?>" class="post-card" title="<?= get_the_title( $id ); ?>">
		<?php $image = get_the_post_thumbnail( $id, 'full' );
		if ( $image ):
            echo $image;
        else:
            echo '<div class="image-box"></div>';
		endif; ?>

        <div class="info">
			<?php $tax = get_the_terms( $id, 'content_type' ); ?>
            <p class="label"><?= $tax[0]->name ?></p>
            <p><?= get_the_title( $id ); ?></p>
        </div>
    </a>
<?php endif;

