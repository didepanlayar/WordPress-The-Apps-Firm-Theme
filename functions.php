<?php

    include 'opt/redux-core/framework.php';
    include 'opt/sample/r-config.php';

    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', ['audio', 'video']);

    register_sidebar([
        'id'          => 1,
        'name'        => 'Top Sidebar',
        'description' => 'Add some to Top Sidebar.'
    ]);

    register_post_type('member', [
        'public'   => true,
        'labels'   => [
            'name'               => 'Teams',
            'all_items'          => 'All Member',
            'add_new'            => 'Add Member',
            'add_new_item'       => 'Add New Member',
            'featured_image'     => 'Member Image',
            'set_featured_image' => 'Set Member Image'
        ],
        'supports'  => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 2
    ]);

    register_nav_menus([
        'top_menu'    => 'Top Menu',
        'footer_menu' => 'Footer Menu'
    ]);