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

	<header id="masthead" class="site-header">
        <header class="header" id="header-js">
            <div class="header-inner container">
                <a href="/" class="header-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/logo.svg" alt="home">
                    <span>SzkiełkoMusic</span>
                </a>
                <div class="header-nav">
                    <nav class="primary-menu-wrapper">
                        <ul class="primary-menu">
                            <li class="menu-item">
                                <a href="#onas">O nas</a>
                            </li>
                            <li class="menu-item">
                                <a href="#help">FAQ</a>
                            </li>
                            <li class="menu-item">
                                <a href="#feedback">Kontakt</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-button">
                        <div class="product-create">
                            <span>Utwórz Szkiełko</span>
                        </div>
                        <div class="product-cart">
                            <button class="cart-btn">
                                <img class="img-svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/cart.svg" alt="cart">
                            </button>
                            <span class="cart-num">2</span>
                        </div>
                    </div>
                </div>
                <div class="mobile-btn">
                    <div class="mobile-btn__wrapper">
                        <span></span>
                    </div>
                </div>
            </div>
        </header>

	</header><!-- #masthead -->
