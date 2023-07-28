<?php

    add_theme_support('menus');
    add_theme_support('widgets');
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