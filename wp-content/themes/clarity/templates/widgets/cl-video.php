

<?php

$video_id = get_sub_field('video_id');
$video_title = get_sub_field('video_title');
$video_description = get_sub_field('video_description');

?>



<?php if ($video_id): ?>

  <div class="video">

      <div class="video-container">

        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>

      </div> <!-- .video-container -->

      <?php if ($video_title): ?>

        <div class="video-details">

          <h4><?php echo $video_title; ?></h4>

          <?php if ($video_description): ?>
            <div class="description">
              <?php echo $video_description; ?>
            </div> <!-- .description -->
          <?php endif; ?>

        </div> <!-- .video-details -->

      <?php endif; ?>

    </div> <!-- .video -->



<?php endif; ?>
