<?php
function personal_website_theme_setup() {
    // Add support for featured images
    add_theme_support('post-thumbnails');
    
    // Register menus
    register_nav_menus(array(
        'primary_menu' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'personal_website_theme_setup');

function personal_website_enqueue_styles() {
    // Enqueue the main stylesheet (style.css)
    wp_enqueue_style('personal-website-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'personal_website_enqueue_styles');
