
<?php

function mijn_site_setup() {
    // Theme translations and basic settings.
    load_theme_textdomain(
        'invinasound',
        get_template_directory() . '/languages'
    );

    // Theme support.
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Navigation menus.
    register_nav_menus(array(
        'primary' => __('Hoofdmenu', 'invinasound'),
        'footer'  => __('Footermenu', 'invinasound'),
    ));
}
add_action('after_setup_theme', 'mijn_site_setup');


function invina_sound_enqueue_assets() {
    // Root-level stylesheet, next to index.php.
    $css_path = get_stylesheet_directory() . '/style.css';

    wp_enqueue_style(
        'invina-sound-style',
        get_stylesheet_uri(),
        array(),
        file_exists($css_path) ? filemtime($css_path) : '1.0.0'
    );

    // JavaScript file.
    $js_path = get_theme_file_path('/assets/js/main.js');

    if (file_exists($js_path)) {
        wp_enqueue_script(
            'invina-sound-script',
            get_theme_file_uri('/assets/js/main.js'),
            array(),
            filemtime($js_path),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'invina_sound_enqueue_assets');
