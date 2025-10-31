<?php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'deli-theme-style', get_stylesheet_uri() );
});