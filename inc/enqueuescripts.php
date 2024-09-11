<?php
    function enqueue_assets_with_filestamp() {
        // css
        wp_enqueue_style('common-min-css', get_template_directory_uri() . '/assets/css/common-min.css', array(), filemtime(get_template_directory() . '/assets/css/common-min.css'), 'all' );
        wp_enqueue_style('common-toshi-css', get_template_directory_uri() . '/assets/css/common-toshi.css', array(), filemtime(get_template_directory() . '/assets/css/common-toshi.css'), 'all'
        );
        wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css', array(), filemtime(get_template_directory() . '/assets/css/app.css'), 'all');
        wp_enqueue_style('support-css', get_template_directory_uri() . '/assets/wp/support.css', array(), filemtime(get_template_directory() . '/assets/wp/support.css'), 'all');
        wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');

        // javascripts
        wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js', array(), filemtime(get_template_directory() . '/assets/js/app.js'), true);
        wp_enqueue_script('support-js', get_template_directory_uri() . '/assets/wp/support.js', array(), filemtime(get_template_directory() . '/assets/wp/support.js'), true);

        wp_enqueue_script('loadmore-ajax-js', get_template_directory_uri() . '/assets/wp/loadmore-ajax.js', array('jquery'), '1.0', true);
        wp_localize_script('loadmore-ajax-js', 'ajax_loadmore_params', array('ajax_url' => admin_url('admin-ajax.php'),));
    }
    add_action('wp_enqueue_scripts', 'enqueue_assets_with_filestamp');