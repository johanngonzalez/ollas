<?php if( have_rows('document') ): ?>

	<ul class="documents">

	<?php while( have_rows('document') ): the_row();

		$title = get_sub_field('document_title');
		$file = get_sub_field('document_file');

		?>

    <li class="file"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
    <a href="<?php echo $file; ?>"><span><?php echo $title; ?></span></a>
    </li>


	<?php endwhile; ?>

	</ul>

<?php endif; ?>
