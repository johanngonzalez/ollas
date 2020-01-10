
	<?php

	$page_header_hide = get_field('cl-pageheader_hide');

	$page_header_background_image_source = get_field('cl-pageheader_background_image_source');

	$page_header_disable_background_image = get_field('cl-pageheader_disable_background_image');

	$page_header_title_source = get_field('cl-pageheader_title_source');
	$page_header_custom_title = get_field('cl-pageheader_custom_title');

	?>

	<?php if (!$page_header_hide): ?>

		<div class="page-header"

			<?php if (!$page_header_disable_background_image): ?>

				<?php if( $page_header_background_image_source == 'featured_image' ): ?>

	                <?php include( locate_template( 'templates/page-header/cl-featured_image.php', false, false ) );  ?>

				<?php elseif( $page_header_background_image_source == 'custom_image' ): ?>

	                <?php include( locate_template( 'templates/page-header/cl-custom_image.php', false, false ) );  ?>

				<?php elseif( $page_header_background_image_source == 'global_image' ): ?>

	                <?php include( locate_template( 'templates/page-header/cl-global_image.php', false, false ) );  ?>

	            <?php else: ?>

	                <?php include( locate_template( 'templates/page-header/cl-global_image.php', false, false ) );  ?>

				<?php endif; ?>

			<?php endif; ?>

		>

			<div class="container">

				<div class="content-wrapper vertical-align-middle">

				<div class="aligned-content">

					<?php if( $page_header_title_source == 'default' ): ?>

						<h1><?php echo roots_title(); ?></h1>

					<?php elseif( $page_header_title_source == 'custom' ): ?>

						<?php if ($page_header_custom_title): ?>

								<h1><?php echo $page_header_custom_title; ?></h1>

						<?php endif; ?>

					<?php elseif( $page_header_title_source == 'page_parent' ): ?>

							<?php

							if($post->post_parent) {

							$children = get_pages("child_of=".$post->post_parent);
							$parent_title = get_the_title($post->post_parent);
							$link = get_permalink($post->post_parent);

							}

							else {

							$children = get_pages("child_of=".$post->ID);
							$parent_title = get_the_title($post->ID);
							$link = get_permalink($post->ID);
							$parent_page = $post->ID;

							}

							if ($children) {

							?>

					      	<h1><?php echo $parent_title;?></h1>

					    <?php } ?>


					<?php else: ?>

						<h1><?php echo roots_title(); ?></h1>

					<?php endif; ?>

			  </div> <!-- .aligned-content -->

			</div> <!-- .content-wrapper -->

			</div> <!-- .container -->

		</div> <!-- .page-header -->

	<?php endif; ?>
