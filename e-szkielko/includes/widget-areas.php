<?php
if( ! defined('ABSPATH')){
    exit;
}

function e_szkielko_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'e-szkielko' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'e-szkielko' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
//    register_sidebar(
//        array(
//            'name'          => esc_html__( 'Category', 'e-szkielko' ),
//            'id'            => 'category-1',
//            'description'   => esc_html__( 'Add widgets here.', 'e-szkielko' ),
//            'before_widget' => '<section id="%1$s" class="widget %2$s">',
//            'after_widget'  => '</section>',
//            'before_title'  => '<h2 class="widget-title">',
//            'after_title'   => '</h2>',
//        )
//    );
//    if( is_active_sidebar('category-1') ){
//        dynamic_sidebar('category-1');
//    };
}
add_action( 'widgets_init', 'e_szkielko_widgets_init' );


