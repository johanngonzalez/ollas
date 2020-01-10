<?php if( have_rows('cl-widgets') ): ?>

	<?php $rowCount = 1; while ( have_rows('cl-widgets') ) : the_row(); ?>

		<div class="col-content">

			<?php if( get_row_layout() == 'cl-widget_heading'): ?>

				<?php include( locate_template( 'templates/widgets/cl-widget_heading.php', false, false ) );  ?>

			<?php endif; ?>

			<?php if( get_row_layout() == 'cl-widget_paragraph' ): ?>

				<?php include( locate_template( 'templates/widgets/cl-widget_paragraph.php', false, false ) );  ?>

			<?php endif; ?>

			<?php if( get_row_layout() == 'cl-widget_blockquote' ): ?>

				<?php include( locate_template( 'templates/widgets/cl-widget_blockquote.php', false, false ) );  ?>

			<?php endif; ?>

			<?php if( get_row_layout() == 'cl-recent_tweets' ): ?>

				<?php include( locate_template( 'templates/widgets/cl-recent_tweets.php', false, false ) );  ?>

			<?php endif; ?>

			<?php if( get_row_layout() == 'cl-call_to_action' ): ?>

				<?php include( locate_template( 'templates/widgets/cl-call_to_action.php', false, false ) );  ?>

			<?php endif; ?>


			<?php if( get_row_layout() == 'cl-hero' ): ?>

				<?php include( locate_template( 'templates/widgets/cl-hero.php', false, false ) );  ?>

			<?php endif; ?>

			<?php if( get_row_layout() == 'cl-grid_staff' ): ?>

				<?php include( locate_template( 'templates/widgets/cl-grid_staff.php', false, false ) );  ?>

			<?php endif; ?>

			<?php if( get_row_layout() == 'cl-photo_gallery' ): ?>

				<?php include( locate_template( 'templates/widgets/cl-photo_gallery.php', false, false ) );  ?>

			<?php endif; ?>

			<?php if( get_row_layout() == 'cl-documents' ): ?>

				<?php include( locate_template( 'templates/widgets/cl-documents.php', false, false ) );  ?>

			<?php endif; ?>


			<?php if( get_row_layout() == 'cl-video' ): ?>

				<?php include( locate_template( 'templates/widgets/cl-video.php', false, false ) );  ?>

			<?php endif; ?>


		</div> <!-- .col-content -->

	<?php ++$rowCount; endwhile; ?>

<?php else: ?>

<?php endif; ?>
