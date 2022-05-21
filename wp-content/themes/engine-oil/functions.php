<?php

function my_after_setup_theme()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('custom-logo');
    add_theme_support( 'html5', array( 'search-form' ) );

    
    
    register_nav_menu('Header', 'Header location');
    register_nav_menu('Footer', 'Footer location');

}

add_action('after_setup_theme', 'my_after_setup_theme');

function eno_wp_enqueue_scripts()
{
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/styles.css', array(), '', 'all' );
    wp_enqueue_style( 'med', get_template_directory_uri() . '/assets/css/media.css', array(), '', 'all' );
}

add_action('wp_enqueue_scripts', 'eno_wp_enqueue_scripts');

// удаляет H2 из шаблона пагинации
function my_navigation_template() {
	return '
	<nav class="navigation" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}
add_filter('navigation_markup_template', 'my_navigation_template' );

// в поиске ищет только по записям
function my_exclude_posts_from_search( $query ){
    if( $query->is_main_query() && is_search() ){
         $query->set('post_type', 'post');
    }
}
add_action('pre_get_posts','my_exclude_posts_from_search');

