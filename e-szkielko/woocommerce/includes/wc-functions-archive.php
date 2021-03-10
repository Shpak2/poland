<?php
if( ! defined('ABSPATH')){
    exit;
}
if(! function_exists('get_pr')) {
    function get_pr($var, $die = true)
    {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        if ($die) {
            die();
        }
    }
}

add_filter( 'post_class', 'e_szkielko_add_class_loop_item' );

function e_szkielko_add_class_loop_item($clasess){
    if(is_woocommerce()){
        $clasess[] = 'popupWrapper product-page';
    }
    return $clasess;
}