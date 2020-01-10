
<?php while (have_posts()) : the_post(); ?>

	<div class="content">

		<?php get_template_part('templates/content', 'page'); ?>

		<?php include( locate_template( 'templates/builder.php', false, false ) );  ?>

	</div> <!-- .content -->

<?php endwhile; ?>
