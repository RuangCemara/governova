<?php

/**
 * Governova theme setup.
 */
function governova_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'governova'),
        )
    );
}
add_action('after_setup_theme', 'governova_theme_setup');

/**
 * Enqueue styles.
 */
function governova_enqueue_styles() {
    wp_enqueue_style('governova-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'governova_enqueue_styles');
