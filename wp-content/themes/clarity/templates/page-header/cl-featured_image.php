
	<?php if(has_post_thumbnail()) { ?>
	<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>

	style="
	background-image:url(<?php echo $image_url[0]; ?>);
	"

	<?php } else { ?>
	<?php } ?>