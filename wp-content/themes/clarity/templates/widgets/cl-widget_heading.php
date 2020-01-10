
<?php 

$heading = get_sub_field('heading');
$heading_size = get_sub_field('heading_size');
$heading_class = get_sub_field('heading_class');

?>

<?php if( $heading_size == 'heading_1' ): ?>
	<h1 <?php if ($heading_class): ?>class="<?php echo $heading_class; ?>"<?php endif; ?>><?php echo $heading; ?></h1>
<?php elseif( $heading_size == 'heading_2' ): ?>
	<h2 <?php if ($heading_class): ?>class="<?php echo $heading_class; ?>"<?php endif; ?>><?php echo $heading; ?></h2>
<?php elseif( $heading_size == 'heading_3' ): ?>
	<h3 <?php if ($heading_class): ?>class="<?php echo $heading_class; ?>"<?php endif; ?>><?php echo $heading; ?></h3>
<?php elseif( $heading_size == 'heading_4' ): ?>
	<h4 <?php if ($heading_class): ?>class="<?php echo $heading_class; ?>"<?php endif; ?>><?php echo $heading; ?></h4>
<?php endif; ?>