
<?php 

$paragraph = get_sub_field('paragraph');
$paragraph_class = get_sub_field('paragraph_class');

?>

<?php if ($paragraph): ?>

	<div class="paragraph <?php if ($paragraph_class): ?><?php echo $paragraph_class; ?><?php endif; ?>">
		<?php echo $paragraph; ?>
	</div> <!-- .paragraph -->

<?php endif; ?>