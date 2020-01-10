



<?php

$columns_number = get_sub_field('columns_number');

?>

<?php if( have_rows('member') ): ?>

	<div class="cl-grid staff">

	<?php $count = 0; ?>

	<?php while ( have_rows('member') ) : the_row(); ?>

		<?php if( $columns_number == 'two' ): ?>

			<?php if ($count % 2 == 0) { ?>
				<div class="row">
			<?php } ?>

		<?php elseif( $columns_number == 'three' ): ?>

			<?php if ($count % 3 == 0) { ?>
				<div class="row">
			<?php } ?>

		<?php endif; ?>

			<div class="

			<?php if( $columns_number == 'two' ): ?>
			col col-md-4 col-lg-4
			<?php elseif( $columns_number == 'three' ): ?>
			col col-md-4 col-lg-4
			<?php endif; ?>
			">

				<?php

				$profile_picture = get_sub_field('profile_picture');
				$size = 'staff';
				$profile_picture_url = $profile_picture['sizes'][ $size ];

				$full_name = get_sub_field('full_name');
				$position = get_sub_field('position');

				?>

				<div class="member">

					<?php if ($profile_picture): ?>

						<div class="profile-picture">
							<img class="img-responsive" src="<?php echo $profile_picture_url; ?>" />
						</div> <!-- .profile-picture -->

					<?php else : ?>
					<?php endif; ?>

				<div class="member-info">

				<?php if ($full_name): ?>

					<h4><?php echo $full_name; ?></h4>

				<?php endif; ?>

				<?php if ($position): ?>

					<div class="position">
						<?php echo $position; ?>
					</div>  <!-- .position -->

				<?php endif; ?>

			</div> <!-- .member-info -->

			</div> <!-- .member -->


			</div> <!-- .col -->

			<?php if( $columns_number == 'two' ): ?>

				<?php if ($count % 2 == 1) { ?>
				</div> <!-- .row -->
				<?php } ?>

			<?php elseif( $columns_number == 'three' ): ?>

				<?php if ($count % 3 == 2) { ?>
				</div> <!-- .row -->
				<?php } ?>

			<?php endif; ?>

<?php $count++; endwhile; ?>

	</div> <!-- .grid .staff -->

<?php else : ?>

<?php endif; ?>
