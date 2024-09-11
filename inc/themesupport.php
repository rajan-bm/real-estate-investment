<?php
    // <!-- add theme support -->
    function theme_setup() {
        // Add theme support features
        add_theme_support('post-thumbnails'); // Enable featured images
        // add_theme_support('title-tag'); // Let WordPress manage the document title
        // add_theme_support('automatic-feed-links'); // Adds RSS feed links to <head>
        // add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption')); // HTML5 support
        // add_theme_support('custom-logo'); // Enable custom logos
        // add_theme_support('customize-selective-refresh-widgets'); // Support for selective refresh for widgets in the customizer
    
        // // Register nav menus if needed
        // register_nav_menus(array(
        //     'primary' => __('Primary Menu', 'textdomain'),
        //     'footer' => __('Footer Menu', 'textdomain'),
        // ));
    }
    add_action('after_setup_theme', 'theme_setup');
    