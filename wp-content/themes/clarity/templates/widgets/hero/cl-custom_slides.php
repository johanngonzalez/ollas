
<?php if( have_rows('slide') ): ?>

<?php $slideCount = 0;  while ( have_rows('slide') ) : the_row(); ?>

	<div class="item slide <?php echo ($slideCount==0) ? "active" : "" ?>"

		<?php

			$slide_image = get_sub_field('slide_image');
			$size = 'hero';
			$slide_image_url = $slide_image['sizes'][ $size ];

			$slide_link_type = get_sub_field('slide_link_type');
			$slide_link_internal = get_sub_field('slide_link_internal');
			$slide_link_external = get_sub_field('slide_link_external');

			$slide_text_align = get_sub_field('slide_text_align');

		?>

		<?php if ($slide_image ): ?>

		style="
		background-image:url(<?php echo $slide_image_url; ?>);
		"

		<?php else : ?>

		<?php endif; ?>

	>

			<div class="container">

				<div class="content-wrapper vertical-align-middle">

					<div class="aligned-content">


						<div class="overlay <?php if ($slide_text_align): ?><?php echo $slide_text_align; ?><?php endif; ?>">


							<?php if( have_rows('slide_content') ): ?>

							  <?php $rowCount = 1; while ( have_rows('slide_content') ) : the_row(); ?>

																					


									<?php if( get_row_layout() == 'slide_title'): ?>

										<?php
										$title = get_sub_field('title');
										$title_link = get_sub_field('title_link');

										?>

										<?php if ($title): ?>

											<?php if( $slide_link_type == 'external' ): ?>

												<div class="title">
													<h2>
														<?php if ($title_link): ?><?php if ($slide_link_external): ?><a href="<?php echo $slide_link_external; ?>"><?php endif; ?><?php endif; ?>
															<?php echo $title; ?>
														<?php if ($title_link): ?><?php if ($slide_link_external): ?></a><?php endif; ?><?php endif; ?>
													</h2>
												</div>  <!-- .title -->

											<?php elseif( $slide_link_type == 'internal' ): ?>

													<div class="title">
														<h2>
															<?php if ($title_link): ?><?php if ($slide_link_internal): ?><a href="<?php echo $slide_link_internal; ?>"><?php endif; ?><?php endif; ?>
																<?php echo $title; ?>
															<?php if ($title_link): ?><?php if ($slide_link_internal): ?></a><?php endif; ?><?php endif; ?>
														</h2>
													</div>  <!-- .title -->

											<?php endif; ?>

										<?php endif; ?>

									<?php endif; ?>

									<?php if( get_row_layout() == 'slide_description'): ?>

										<?php
										$description = get_sub_field('description');
										?>

										<?php if ($description): ?>

											<div class="description">
												<?php echo $description; ?>
											</div>  <!-- .description -->

										<?php endif; ?>

									<?php endif; ?>

									<?php if( get_row_layout() == 'slide_call_to_action'): ?>

										<?php

										$button_text = get_sub_field('button_text');
										$button_style = get_sub_field('button_style');
										$button_size = get_sub_field('button_size');

										?>

										<?php if ($button_text): ?>

											<div class="read-more">

												<?php if( $slide_link_type == 'external' ): ?>

													<a <?php if ($slide_link_external): ?>href="<?php echo $slide_link_external; ?>"<?php endif; ?> class="<?php echo $button_style; ?> <?php echo $button_size; ?>" target="_blank"><?php echo $button_text; ?></a>

												<?php elseif( $slide_link_type == 'internal' ): ?>

													<a <?php if ($slide_link_internal): ?>href="<?php echo $slide_link_internal; ?>"<?php endif; ?> class="<?php echo $button_style; ?> <?php echo $button_size; ?>"><?php echo $button_text; ?></a>

												<?php endif; ?>

											</div> <!-- .read-more -->

										<?php endif; ?>

									<?php endif; ?>



							  <?php ++$rowCount; endwhile; ?>

							<?php else: ?>

							<?php endif; ?>


						</div> <!-- .overlay -->

					</div> <!-- .aligned-content -->

				</div> <!-- .content-wrapper -->

			</div> <!-- .container -->


</div> <!-- .item -->

<?php ++$slideCount;  endwhile; ?>

<?php else : ?>

<?php endif; ?>
