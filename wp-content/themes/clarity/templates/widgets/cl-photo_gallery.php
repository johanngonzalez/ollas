




<style>




/* ---- isotope ---- */



/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- .grid-item ---- */

.grid-sizer {
  width: 33.333%;
}

.grid-item {
  float: left;
   margin-bottom: 1px;

}

.grid-item img {
  display: block;
  max-width: 100%;

}


.no-padding {

  padding-left: 0 !important;
  padding-right: 0 !important;
}


</style>

<?php

$images = get_sub_field('photo_gallery');
$items = Array('thumb-large-horizontal','thumb-large-vertical','thumb-large-vertical-alt');

?>

<?php if( $images ): ?>

    <div class="row">
    	<div class="grid-sizer"></div>

        <?php foreach( $images as $image ): ?>

            <div class="grid-item col-lg-4 no-padding">
            	<img src="<?php echo $image['sizes']['large']; ?>" />
            </div> <!-- .grid-item -->

        <?php endforeach; ?>

    </div> <!-- .row -->

<?php endif; ?>
