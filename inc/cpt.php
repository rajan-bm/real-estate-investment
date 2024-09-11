<?php
    //  <!-- cpt name: Article -->
    function register_article_cpt() {
        $labels = array(
            'name'                  => _x('Articles', 'Post Type General Name', 'textdomain'),
            'singular_name'         => _x('Article', 'Post Type Singular Name', 'textdomain'),
            'menu_name'             => __('Articles', 'textdomain'),
            'name_admin_bar'        => __('Article', 'textdomain'),
            'add_new'               => __('Add New', 'textdomain'),
            'add_new_item'          => __('Add New Article', 'textdomain'),
            'new_item'              => __('New Article', 'textdomain'),
            'edit_item'             => __('Edit Article', 'textdomain'),
            'view_item'             => __('View Article', 'textdomain'),
            'all_items'             => __('All Articles', 'textdomain'),
            'search_items'          => __('Search Articles', 'textdomain'),
            'not_found'             => __('No articles found.', 'textdomain'),
            'not_found_in_trash'    => __('No articles found in Trash.', 'textdomain'),
            'featured_image'        => __('Featured Image', 'textdomain'),
            'set_featured_image'    => __('Set featured image', 'textdomain'),
            'remove_featured_image' => __('Remove featured image', 'textdomain'),
            'use_featured_image'    => __('Use as featured image', 'textdomain'),
            'archives'              => __('Article Archives', 'textdomain'),
            'insert_into_item'      => __('Insert into article', 'textdomain'),
            'uploaded_to_this_item' => __('Uploaded to this article', 'textdomain'),
            'filter_items_list'     => __('Filter articles list', 'textdomain'),
            'items_list_navigation' => __('Articles list navigation', 'textdomain'),
            'items_list'            => __('Articles list', 'textdomain'),
        );
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'article'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 5,
            'supports'           => array('title', 'editor','thumbnail',),
            'show_in_rest'       => true, // Enable Gutenberg editor
            'menu_icon'           => 'dashicons-media-text',
        );
        register_post_type('article', $args);
    }
    add_action('init', 'register_article_cpt');

    // <!-- Article Category -->
    function register_article_category() {
        $labels = array(
            'name'              => _x('Article Categories', 'taxonomy general name', 'textdomain'),
            'singular_name'     => _x('Article Category', 'taxonomy singular name', 'textdomain'),
            'search_items'      => __('Search Article Categories', 'textdomain'),
            'all_items'         => __('All Article Categories', 'textdomain'),
            'parent_item'       => __('Parent Article Category', 'textdomain'),
            'parent_item_colon' => __('Parent Article Category:', 'textdomain'),
            'edit_item'         => __('Edit Article Category', 'textdomain'),
            'update_item'       => __('Update Article Category', 'textdomain'),
            'add_new_item'      => __('Add New Article Category', 'textdomain'),
            'new_item_name'     => __('New Article Category Name', 'textdomain'),
            'menu_name'         => __('Article Categories', 'textdomain'),
        );
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'show_in_rest'      => true,
            'rewrite'           => array('slug' => 'article/category'),
        );
        register_taxonomy('article_category', array('article'), $args);
    }
    add_action('init', 'register_article_category');
