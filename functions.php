<?php

function load_scripts(){
    wp_enqueue_style('style-header',get_template_directory_uri().'/css/style.css');
}
add_action('wp_enqueue_scripts','load_scripts');
