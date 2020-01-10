<?php
/*
Plugin Name: Clarity - FontAwesome
Plugin URI: http://www.rewind9.com
Description: FontAwesome integration for Clarity Wordpress theme
Author: Johann González
Version: 0.1

*/

add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );

function prefix_enqueue_awesome() {

wp_enqueue_style( 'prefix-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '4.0.3' );

}