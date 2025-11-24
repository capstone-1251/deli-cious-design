<?php
add_action( 'wp_enqueue_scripts', function() {
    // Keep the original style.css for theme info
    wp_enqueue_style( 'deli-theme-style', get_stylesheet_uri() );

    // Enqueue the compiled Sass file
    wp_enqueue_style(
        'theme-compiled',
        get_template_directory_uri() . '/sass/compiled.css',
        array(),
        '1.0'
    );

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
});
