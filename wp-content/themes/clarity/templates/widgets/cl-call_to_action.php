
<?php

$text = get_sub_field('text');

$button_style = get_sub_field('button_style');
$button_size = get_sub_field('button_size');

$link_type = get_sub_field('link_type');
$link_internal = get_sub_field('link_internal');
$link_external = get_sub_field('link_external');

?>

<?php if ($text): ?>

	<div class="call-to-action">
		
		<?php if( $link_type == 'external' ): ?>

			<a <?php if ($link_external): ?>href="<?php echo $link_external; ?>"<?php endif; ?> class="<?php echo $button_style; ?> <?php echo $button_size; ?>" target="_blank"><?php echo $text; ?></a>

		<?php elseif( $link_type == 'internal' ): ?>

			<a <?php if ($link_internal): ?>href="<?php echo $link_internal; ?>"<?php endif; ?> class="<?php echo $button_style; ?> <?php echo $button_size; ?>"><?php echo $text; ?></a>

		<?php endif; ?>

	</div> <!-- .call-to-action -->

<?php endif; ?>
