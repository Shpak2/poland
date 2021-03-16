<?php

require get_template_directory() . '/includes/custom-field-options/theme-options.php';
require get_template_directory() . '/includes/custom-field-options/metabox.php';

require get_template_directory() . '/includes/theme-settings.php';
require get_template_directory() . '/includes/widget-areas.php';
require get_template_directory() . '/includes/enqueue-script-style.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions.php';
    require get_template_directory() . '/woocommerce/includes/wc_function_cart.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-archive.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
    require get_template_directory() . '/woocommerce/custom-template/es_product-short.php';
}

add_action('woocommerce_cart_calculate_fees' , 'discount_based_on_customer_orders', 10, 1);
function discount_based_on_customer_orders( $cart_object ){

    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    // Getting "completed" customer orders
    $customer_orders = get_posts( array(
        'numberposts' => -1,
        'meta_key'    => '_customer_user',
        'meta_value'  => get_current_user_id(),
        'post_type'   => 'shop_order', // WC orders post type
        'post_status' => 'wc-completed' // Only orders with status "completed"
    ) );

    // Orders count
    $customer_orders_count = count($customer_orders);

    // The cart total
    $cart_total = WC()->cart->get_cart_contents_count(); // or WC()->cart->get_total_ex_tax()

    // First customer order
    if( $cart_total >= 3 ){
        $discount_text = __('Rabat "Kup trzy, płać mniej"', 'woocommerce');
        $discount = -20;
    }

    // Apply discount
    if( ! empty( $discount ) ){
        // Note: Last argument is related to applying the tax (false by default)
        $cart_object->add_fee( $discount_text, $discount, false);
    }
}
