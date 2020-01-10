<?php

$args = array (
	'post_type' => 'post',
	'posts_per_page' =>'3',
);

$loop = new WP_Query( $args );

?>

<?php $postCount = 0;  while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="item <?php echo ($postCount==0) ? "active" : "" ?>"
	<?php if(has_post_thumbnail()) { ?>
	<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero' ); ?>
	style="
	background-image:url(<?php echo $image_url[0]; ?>);
	"
<?php } else { ?>
<?php } ?>
>

	<div class="container">

		<div class="content-wrapper vertical-align-middle">

			<div class="aligned-content">

				<div class="overlay">

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<div class="read-more">
						<a href="<?php the_permalink(); ?>">Conoce más</a>
					</div> <!-- .read-more -->

				</div> <!-- .overlay -->

			</div> <!-- .aligned-content -->

		</div> <!-- .content-wrapper -->

	</div> <!-- .container -->

</div> <!-- .item -->

<?php ++$postCount;  endwhile;
wp_reset_query();
?>
