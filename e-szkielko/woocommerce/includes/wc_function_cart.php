<?php
if( ! defined('ABSPATH')){
    exit;
}

if ( ! function_exists( 'e_szkielko_woocommerce_cart_link_fragment' ) ) {
    /**
     * Cart Fragments.
     *
     * Ensure cart contents update when products are added to the cart via AJAX.
     *
     * @param array $fragments Fragments to refresh via AJAX.
     * @return array Fragments to refresh via AJAX.
     */
    function e_szkielko_woocommerce_cart_link_fragment( $fragments ) {
        ob_start();
        e_szkielko_woocommerce_cart_link();
        $fragments['a.cart-contents'] = ob_get_clean();

        return $fragments;
    }
}
add_filter( 'woocommerce_add_to_cart_fragments', 'e_szkielko_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'e_szkielko_woocommerce_cart_link' ) ) {
    /**
     * Cart Link.
     *
     * Displayed a link to the cart including the number of items present and the cart total.
     *
     * @return void
     */
    function e_szkielko_woocommerce_cart_link() {
        ?>
        <a class="product-cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'Sprawdź swój koszyk', 'e-szkielko' ); ?>">
            <span class="cart-btn">
                <img class="img-svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/cart.svg" alt="cart">
            </span>
            <span class="cart-num"><?php echo esc_html( WC()->cart->get_cart_contents_count()); ?></span>
        </a>
        <?php
    }
}