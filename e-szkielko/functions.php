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
    require get_template_directory() . '/woocomerce/includes/wc-functions-remove.php';
    require get_template_directory() . '/woocomerce/includes/wc-functions.php';
}


