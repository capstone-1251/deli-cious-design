<?php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'deli-theme-style', get_stylesheet_uri() );


    // Page-specific styles

    if ( is_front_page(  ) ) {
        wp_enqueue_style(
            'front-page-style',
            get_template_directory_uri() . '/assets/css/front-page.css'
        );
    }

    // About Page
     if ( is_page( 'about' ) ) {
        wp_enqueue_style(
            'about-style',
            get_template_directory_uri() . '/assets/css/about.css'
        );
    }

    // menu page
    if ( is_page( 'menu' ) ) {
        wp_enqueue_style(
            'menu-style',
            get_template_directory_uri() . '/assets/css/menu.css'
        );
    }

    // Catering page
      if ( is_page( 'catering' ) ) {
        wp_enqueue_style(
            'catering-style',
            get_template_directory_uri() . '/assets/css/catering.css'
        );
    }

    // contact page
      if ( is_page( 'contact' ) ) {
        wp_enqueue_style(
            'contact-style',
            get_template_directory_uri() . '/assets/css/contact.css'
        );
    }
});