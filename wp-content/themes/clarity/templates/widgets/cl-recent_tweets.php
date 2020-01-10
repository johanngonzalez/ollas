
<?php

$twitter_username = get_sub_field('twitter_username');

?>


<?php if ($twitter_username): ?>

	<a class="twitter-timeline" data-height="600" href="https://twitter.com/<?php echo $twitter_username; ?>?ref_src=twsrc%5Etfw">Tweets by 
	<?php echo $twitter_username; ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<?php endif; ?>
