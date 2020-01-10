<?php
/*
Plugin Name: Clarity - Social Widget
Plugin URI: http://www.rewind9.com
Description: Social widget for Clarity Wordpress theme
Author: Johann González
Version: 0.1

*/


// Register and load the widget
function wpb_load_widget() {
  register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

// Creating the widget
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(

// Base ID of your widget
'wpb_widget',

// Widget name will appear in UI
__('Clarity - Social Links', 'wpb_widget_domain'),

// Widget description
array( 'description' => __( 'Clarity - Social Links Widget', 'wpb_widget_domain' ), )
);
}

// Creating widget front-end


public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );

// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output

// check if the repeater field has rows of data

if( have_rows('social_links','option') ):

  // loop through the rows of data

    echo '<ul class="social-links">';


    while ( have_rows('social_links','option') ) : the_row();

        // display a sub field value

        $text = get_sub_field('text','option');
        $icon = get_sub_field('icon','option');
        $link = get_sub_field('link','option');

        echo '<li><a href="' . $link . '" target="_blank"><i class="fa ' . $icon . '"></i><span>' . $text . '</span></a></li>';


    endwhile;

    echo '</ul>';

else :

    // no rows found

endif;



echo $args['after_widget'];

}

// Widget Backend

public function form( $instance ) {

if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}

else {
$title = __( 'Title', 'wpb_widget_domain' );
}

// Widget admin form
?>
<p>Click <a href="/wp-admin/admin.php?page=options">here</a> to configure this widget.</p>
<?php
}

// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here
