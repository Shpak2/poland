<?php
if( ! defined('ABSPATH')){
    exit;
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action('woocommerce_before_single_product_summary','woocommerce_show_product_images',20);
remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open',10);
remove_action( 'woocommerce_before_cart', 'woocommerce_output_all_notices', 10 );
remove_all_filters('woocommerce_after_single_product_summary');