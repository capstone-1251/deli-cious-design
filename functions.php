<?php
add_action('wp_enqueue_scripts', function () {
    // Keep the original style.css for theme info
    wp_enqueue_style('deli-theme-style', get_stylesheet_uri());

    // Enqueue the compiled Sass file
    wp_enqueue_style(
        'theme-compiled',
        get_template_directory_uri() . '/sass/compiled.css',
        array(),
        '1.0'
    );
});

/* ---------------------------
   Disable all Gutenberg blocks
   for specific post types
----------------------------- */

add_filter('allowed_block_types_all', function ($allowed_blocks, $editor_context) {

    if (empty($editor_context->post)) {
        return $allowed_blocks;
    }

    $post_type = $editor_context->post->post_type;

    // Post types you want to lock to: Title + ACF only
    $disabled_post_types = [
        'build-your-own',
        'dessert',
        'frozen-retail',
        'menu-item',
        'team-members',
        'testominoial',
        'beverages'
    ];

    // If the current post type is one of these → allow no blocks
    if (in_array($post_type, $disabled_post_types, true)) {
        return []; // disables all blocks
    }

    return $allowed_blocks;

}, 10, 2);

add_action('wp_enqueue_scripts', function () {
    // Load main theme JS file
    wp_enqueue_script(
        'deli-theme-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),       // dependencies (e.g., array('jquery'))
        '1.0',
        true           // load in footer
    );
});


/*
// Page-specific styles (now handled in Sass)
if ( is_front_page() ) {
    wp_enqueue_style(
        'front-page-style',
        get_template_directory_uri() . '/assets/css/front-page.css'
    );
}

if ( is_page( 'about' ) ) {
    wp_enqueue_style(
        'about-style',
        get_template_directory_uri() . '/assets/css/about.css'
    );
}

if ( is_page( 'menu' ) ) {
    wp_enqueue_style(
        'menu-style',
        get_template_directory_uri() . '/assets/css/menu.css'
    );
}

if ( is_page( 'catering' ) ) {
    wp_enqueue_style(
        'catering-style',
        get_template_directory_uri() . '/assets/css/catering.css'
    );
}

if ( is_page( 'contact' ) ) {
    wp_enqueue_style(
        'contact-style',
        get_template_directory_uri() . '/assets/css/contact.css'
    );
}
*/
