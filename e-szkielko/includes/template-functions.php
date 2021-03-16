<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package e-szkielko
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function e_szkielko_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'e_szkielko_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function e_szkielko_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'e_szkielko_pingback_header' );

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_filter( 'wpcf7_load_css', '__return_false' );
add_action('get_header', 'remove_admin_login_header');

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
    register_nav_menu( 'footer_menu', 'Footer Menu' );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu2' );
function theme_register_nav_menu2() {
    register_nav_menu( 'header_menu', 'Header Menu' );
}
