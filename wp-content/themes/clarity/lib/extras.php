<?php


/* Clean up the_excerpt() */

function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Read more', 'roots') . '</a>';
}

add_filter('excerpt_more', 'roots_excerpt_more');

/* Manage output of wp_title() */

function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);


/* Regenerate thumbnails automatically after editing an image */

add_action('image_save_pre', 'add_image_options');
function add_image_options($data){
	global $_wp_additional_image_sizes;
	foreach($_wp_additional_image_sizes as $size => $properties){
		update_option($size."_size_w", $properties['width']);
		update_option($size."_size_h", $properties['height']);
		update_option($size."_crop", $properties['crop']);
	}
	return $data;
}

/* Gravity Forms by default will write an inline JavaScript call to jQuery on every form you add to a page.
This will throw an error if you’re loading jQuery in the footer of your site (which you should be doing). This filter overrides this behavior */

add_filter("gform_init_scripts_footer", "init_scripts");
function init_scripts() {
return true;
}

/* Assigns an ID for every content block (if the ID is specified by the user) */

function block_id() {

$block_id = get_sub_field('cl-block_id');

if ($block_id):

  echo 'id="' . $block_id . '"';

endif;

}


/* If checked, this will add a container around the block's content. */

function container_start() {

$container = get_sub_field('cl-block_container');

if ($container):

  echo '<div class="container">';

endif;

}

function container_end() {

$container = get_sub_field('cl-block_container');

if ($container):

  echo '</div>';

endif;

}

/* Removing emojis */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



