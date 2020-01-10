
	<?php 	

		$page_header_background_image = get_field('cl-pageheader_global_image','option');
		$size = 'large';
		$page_header_background_image_url = $page_header_background_image['sizes'][ $size ]; 

	?>

	<?php if ($page_header_background_image ): ?>

	style="
	background-image:url(<?php echo $page_header_background_image_url; ?>);
	"

	<?php else : ?>

	<?php endif; ?>
