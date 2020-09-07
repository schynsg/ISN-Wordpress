<?php
function test_files() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
function setup_features() {
    add_theme_support('title-tag');
}

function post_types() {
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Expos',
            'add_new_item' => 'Ajouter une nouvelle expo',
            'edit_item' => 'Modifier une expo',
        ),
        'menu_icon' => 'dashicons-calendar-alt',
    ));
    register_post_type('books', array(
        'public' => true,
        'labels' => array(
            'name' => 'Livres',
            'add_new_item' => 'Ajouter un nouveau livre',
            'edit_item' => 'Modifier un livre',
        ),
        'menu_icon' => 'dashicons-book',
    ));
}

add_action('wp_enqueue_scripts', 'test_files');
add_action('after_setup_theme', 'setup_features');

add_action('init', 'post_types');