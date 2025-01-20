<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Chill cecky<?php wp_title('|', true, 'left'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>
<body>
<header class="bg-pink-500 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">

        <a href="<?php echo home_url(); ?>" class="text-2xl font-bold hover:text-gray-600">
            <?php bloginfo('name'); ?>
        </a>

        <nav>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'flex space-x-6',
                    'container'      => false,
                )
            );
            ?>
        </nav>
    </div>
</header>


