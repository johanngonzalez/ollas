<?php
/*
Plugin Name: Clarity - Google WebFonts
Plugin URI: http://www.rewind9.com
Description: Google WebFonts for Clarity Wordpress theme
Author: Johann González
Version: 0.1

*/

function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,700|PT+Sans:400,400italic,700,700italic|PT+Sans+Narrow:400,700');
            wp_enqueue_style( 'googleFonts');
}
    
add_action('wp_print_styles', 'load_fonts');