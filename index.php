<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charshet'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <h1><?php bloginfo('title'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <?php wp_footer(); ?>
</body>
</html>