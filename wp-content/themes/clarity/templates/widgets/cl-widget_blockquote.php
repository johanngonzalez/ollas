
<?php 

$blockquote = get_sub_field('blockquote');

?>

<?php if ($blockquote): ?>

	<div class="blockquote">
		<?php echo $blockquote; ?>
	</div> <!-- .blockquote -->

<?php endif; ?>