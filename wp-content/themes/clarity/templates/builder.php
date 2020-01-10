	<?php if( have_rows('cl-block') ): ?>

	<?php $blockCount = 1; while ( have_rows('cl-block') ) : the_row(); ?>

		<?php

		$block_hide = get_sub_field('cl-block_hide');
    	$remove_row = get_sub_field('cl-remove_row');

		$block_background_color = get_sub_field('cl-block_background_color');

		$block_text_color = get_sub_field('cl-block_text_color');

		$block_background_image = get_sub_field('cl-block_background_image');
		$size = 'large';
		$block_background_image_url = $block_background_image['sizes'][ $size ];

		$block_background_image_size = get_sub_field('cl-block_background_image_size');

		$block_background_image_repeat = get_sub_field('cl-block_background_image_repeat');

		?>

		<?php if (!$block_hide): ?>

			<section <?php block_id(); ?> class="block-<?php echo $blockCount; ?> content-section"

				style="
				<?php if ($block_background_color): ?>
				background-color:<?php echo $block_background_color; ?>;
				<?php endif; ?>
				<?php if ($block_text_color): ?>
				color:<?php echo $block_text_color; ?>;
				<?php endif; ?>
				<?php if ($block_background_image): ?>
				background-image:url(<?php echo $block_background_image_url; ?>);
				<?php endif; ?>
				<?php if ($block_background_image_size): ?>
				background-size: <?php echo $block_background_image_size; ?>;
				<?php endif; ?>
				<?php if ($block_background_image_repeat): ?>
				background-repeat: <?php echo $block_background_image_repeat; ?>;
				<?php endif; ?>
				">

				<?php container_start(); ?>

				<?php if( have_rows('cl-column') ): ?>

          <?php if (!$remove_row): ?>
					<div class="row">
          <?php endif; ?>

						<?php while ( have_rows('cl-column') ) : the_row(); ?>

							<?php

							$column_background_image = get_sub_field('cl-column_background_image');
							$size = 'large';
							$column_background_image_url = $column_background_image['sizes'][ $size ];

							$column_background_image_size = get_sub_field('cl-column_background_image_size');

							$column_background_image_repeat = get_sub_field('cl-column_background_image_repeat');

							?>

							<div class="col <?php the_sub_field('cl-column_class'); ?>"

							style="
							<?php if ($column_background_image): ?>
							background-image:url(<?php echo $column_background_image_url; ?>);
							<?php endif; ?>
							<?php if ($column_background_image_size): ?>
							background-size:<?php echo $column_background_image_size; ?>;
							<?php endif; ?>
							<?php if ($column_background_image_repeat): ?>
							background-repeat: <?php echo $column_background_image_repeat; ?>;
							<?php endif;?>
							">


              				<?php include( locate_template( 'templates/widgets.php', false, false ) );  ?>


							</div> <!-- .col -->

						<?php endwhile; ?>

          <?php if (!$remove_row): ?>
					</div> <!-- .row -->
          <?php endif; ?>

				<?php else : ?>

				<?php endif; ?>

				<?php container_end(); ?>

			</section> <!-- .section -->

		<?php endif; ?>

	<?php ++$blockCount; endwhile; ?>


	<?php else : ?>

	<?php endif; ?>
