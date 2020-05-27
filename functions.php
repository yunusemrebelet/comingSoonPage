<?php

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
    wp_register_style('line',  'https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css', array(), false, 'all');
    wp_enqueue_style('line');
}
add_action('wp_enqueue_scripts','load_stylesheets');

add_filter('use_block_editor_for_post_type', '_return_false', 100);