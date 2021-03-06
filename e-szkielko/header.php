<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package e-szkielko
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="mask-preloader">
    <div id='preloader' class="circles">
        <div></div>
        <div></div>
        <div></div>
        <span></span>
    </div>
</div>

<header class="header" id="header-js">
    <div class="header-inner container">
        <a href="<?php echo home_url() ?>" class="header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/logo.svg" alt="home">
            <span>SzkiełkoMusic</span>
        </a>
        <div class="header-nav">
            <nav class="primary-menu-wrapper">
                <?php wp_nav_menu( [
                    'theme_location'  => 'header_menu',
                    'container'       => false,
                    'echo'            => true,
                    'link_before'     => '<span>',
                    'link_after'      => '</span>',
                    'items_wrap'      => '<ul class="primary-menu">%3$s</ul>',
                    'depth'           => 0,
                ]  ); ?>
            </nav>
            <div class="header-button">
                <?php
                if( !is_front_page() ){
                    ?>
                    <a href="<?php echo home_url() ?>" class="product-create">
                        <span>Utwórz Szkiełko</span>
                    </a>

                <?php }else{ ?>
                    <div class="product-create js-product-all">
                        <span>Utwórz Szkiełko</span>
                    </div>
                <?php }
                e_szkielko_woocommerce_cart_link(); ?>
            </div>
        </div>
        <div class="mobile-btn">
            <div class="mobile-btn__wrapper">
                <span></span>
            </div>
        </div>
    </div>
</header>

