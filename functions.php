<?php

function theme_name_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');

//Миниатюра
add_theme_support( 'post-thumbnails' );

//Меню
register_nav_menu('menu','Меню в шапке');

function mason_script() {
    wp_enqueue_script( 'jquery-masonry' );
}
add_action( 'wp_enqueue_scripts', 'mason_script' );

?>
