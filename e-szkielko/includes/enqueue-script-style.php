<?php
if( ! defined('ABSPATH')){
    exit;
}

add_action( 'wp_enqueue_scripts', 'e_szkielko_style' );

function e_szkielko_style() {
    // style version
    $style_ver = '1.1.0';
    wp_enqueue_style( 'e-szkielko-swiper-style', get_swiper_stylesheet_uri(), array(), $style_ver);
    wp_enqueue_style( 'e-szkielko-custom-style', get_custom_stylesheet_uri(), array(), $style_ver);
}

function get_custom_stylesheet_uri() {
    $stylesheet_dir_uri = get_stylesheet_directory_uri();
    $stylesheet_uri     = $stylesheet_dir_uri . '/assets/css/style.css';
    return apply_filters( 'stylesheet_uri', $stylesheet_uri, $stylesheet_dir_uri );
}

function get_swiper_stylesheet_uri() {
    $stylesheet_dir_uri = get_stylesheet_directory_uri();
    $stylesheet_uri     = $stylesheet_dir_uri . '/assets/css/swiper.min.css';
    return apply_filters( 'stylesheet_uri', $stylesheet_uri, $stylesheet_dir_uri );
}

add_action( 'wp_enqueue_scripts', 'e_szkielko_scripts' );

function e_szkielko_scripts() {
    // scripts version
    $script_ver = '1.1.0';
    wp_enqueue_script( 'e-szkielko-swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), $script_ver, true );
    wp_enqueue_script( 'e-szkielko-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $script_ver, true );
    // wp_enqueue_script( 'ajax-view', get_template_directory_uri() . '/assets/js/ajax-view.js', array('jquery'), $script_ver, true );
//    wp_localize_script('ajax-view','ajax_view', array(
//        'url' => admin_url('admin-ajax.php'),
//        'nonce' => wp_create_nonce('view-nonce')
//    ));
}
