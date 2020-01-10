<?php

$hero_display = get_sub_field('display');

?>

<div id="heroCarousel" class="carousel carousel-fade slide" data-ride="carousel">

  <!-- Indicators -->

  <ol class="carousel-indicators">

    <?php if( $hero_display == 'custom_slides' ): ?>

      <?php $i = 0; while( have_rows('slide') ): the_row(); ?>
      <?php $i++; endwhile; $tCount = $i; ?>

      <?php if( have_rows('slide') ): ?>

      <?php $indicatorCount = 0;  while ( have_rows('slide') ) : the_row(); ?>

        <?php if( $tCount>1 ): ?>

        <li data-target="#heroCarousel" data-slide-to="<?=$indicatorCount?>" class="<?php echo ($indicatorCount==0) ? "active" : "" ?>"></li>

        <?php endif; ?>

      <?php ++$indicatorCount;  endwhile; ?>

      <?php else : ?>

      <?php endif; ?>


    <?php elseif( $hero_display == 'latest_posts' ): ?>

      <?php

      $args = array (
        'post_type' => 'post',
        'posts_per_page' =>'3',
      );

      $loop = new WP_Query( $args );

      ?>

      <?php $indicatorCount = 0;  while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <li data-target="#heroCarousel" data-slide-to="<?=$indicatorCount?>" class="<?php echo ($indicatorCount==0) ? "active" : "" ?>"></li>

      <?php ++$indicatorCount;  endwhile;
      wp_reset_query();
      ?>

    <?php endif; ?>

  </ol>


  <!-- Wrapper for slides -->

  <div class="carousel-inner">

    <?php if( $hero_display == 'custom_slides' ): ?>

      <?php include( locate_template( 'templates/widgets/hero/cl-custom_slides.php', false, false ) );  ?>

    <?php elseif( $hero_display == 'latest_posts' ): ?>

      <?php include( locate_template( 'templates/widgets/hero/cl-latest_posts.php', false, false ) );  ?>

    <?php endif; ?>

  </div> <!-- .carousel-inner -->

</div> <!-- .carousel -->
