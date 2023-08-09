<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charshet'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_nav_menu([
        'theme_loaction' => 'top_menu',
        'container'      => 'nav'
    ]); ?>
    <?php wp_footer(); ?>
</body>
</html>