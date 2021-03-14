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
<html lang="pl">
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
                <?php
                if( $menu_items = wp_get_nav_menu_items('menu_header') ) {
                    $menu_list = '';
                    foreach ( (array) $menu_items as $key => $menu_item ) {
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        if( !is_front_page() ){
                            $menu_list .= '<li class="menu-item"><a href="' .home_url(). $url . '">' . $title . '</a></li>';
                        }else{
                            $menu_list .= '<li class="menu-item"><a href="' . $url . '">' . $title . '</a></li>';
                        }
                    }
                    echo '<ul class="primary-menu">'.$menu_list.'</ul>';
                }
                ?>
            </nav>
            <div class="header-button">
                <div class="product-create js-product-all">
                    <span>Utwórz Szkiełko</span>
                </div>
                <?php e_szkielko_woocommerce_cart_link(); ?>
            </div>
        </div>
        <div class="mobile-btn">
            <div class="mobile-btn__wrapper">
                <span></span>
            </div>
        </div>
    </div>
</header>

