<!DOCTYPE html>
<html <?php language_attributes(); ?>><head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <?php wp_head(); ?>
</head>
<body>

<div class="site">
<header class="header">
    <div class="header_top" style="background-color: <?php the_field('background-color-header', 27); ?>">
        <div class="container"> 
            <div class="header_top_item">
                <ul>
                    <li><a href="/"><strong><?php bloginfo('name'); ?></strong></a></li>
                    <li><?php the_field('adress', 27); ?></li>
                    <li><a class="phone" href="tel:<?php the_field('phone-contact', 27); ?>"><?php the_field('phone', 27); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header_bottom" style="background-color: <?php the_field('background-color-nav', 27); ?>">
        <div class="container">
            <div class="header_bottom_item">
                <div class="logo"><?php the_custom_logo(); ?></div>
                <div class="header_search_form"><?php get_search_form(); ?></div>
                <div class="nav">
                        
                <button class="nav_toggle"><label for="nav_toggle"></label></button>

                <input type="checkbox" id="nav_toggle">
                <?php  
                $args = array(
                    'theme_location'  => 'Header',
                    'menu'            => 'Main',
                    'container'       => '',
                    'container_class' => '',
                    'items_wrap'      => '<ul>%3$s</ul>',
                );
                    
                wp_nav_menu($args); 
                ?>
            </div>
        </div>    
    </div>
</header>

        