<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button alt wc-forward">
	<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
    <svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.8052 3.54332L13.3348 0.187869C13.0748 -0.0634537 12.6544 -0.0625185 12.3956 0.190062C12.1369 0.442611 12.1379 0.851095 12.3978 1.10245L14.7275 3.35484L0.664062 3.35484C0.297301 3.35484 0 3.64368 0 4C0 4.35632 0.297301 4.64516 0.664062 4.64516L14.7275 4.64516L12.3979 6.89755C12.1379 7.1489 12.1369 7.55739 12.3957 7.80994C12.6544 8.06255 13.0749 8.06342 13.3348 7.81213L16.8047 4.45729C17.0647 4.2051 17.0645 3.79468 16.8052 3.54332Z" fill="#F4F5F4"/>
    </svg>
</a>
