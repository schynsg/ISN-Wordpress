<?php
function test_files() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
function setup_features() {
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'test_files');
add_action('after_setup_theme', 'setup_features');
