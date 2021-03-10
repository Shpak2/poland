<<<<<<< HEAD
<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="<?php if( is_home() ){echo 'footer';}else{echo 'footer-page';} ?>">
    <div class="footer-wrapper">
        <div class="footer-container container">
            <div class="footer-logo">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/logo-footer.svg" alt="home">
                </a>
            </div>
            <div class="footer-nav">
                <?php
                if( $menu_items = wp_get_nav_menu_items('menu_header') ) {
                    $menu_list = '';
                    foreach ( (array) $menu_items as $key => $menu_item ) {
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        if( !is_front_page() ){
                            $menu_list .= '<li class="footer-nav__item"><a href="' .home_url(). $url . '">' . $title . '</a></li>';
                        }else{
                            $menu_list .= '<li class="footer-nav__item"><a href="' . $url . '">' . $title . '</a></li>';
                        }
                    }
                    echo '<ul class="footer-nav__wrapper">'.$menu_list.'</ul>';
                }
                ?>
            </div>
            <div class="footer-social">
                <ul class="footer-social__wrapper">
                    <li class="footer-social__item">
                        <a href="#">
                            <img class="img-svg icon-mail" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-mail.svg" alt="title link">
                        </a>
                    </li>
                    <li class="footer-social__item">
                        <a href="#">
                            <img class="img-svg icon-inst" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-inst.svg" alt="title link">
                        </a>
                    </li>
                    <li class="footer-social__item">
                        <a href="#">
                            <img class="img-svg icon-face" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-face.svg" alt="title link">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-mobile">
            <p>SzkiełkoMusic | Copyright 2020 All Rights Reserved</p>
        </div>
    </div>
</footer>
<div id="scroll" class="scroll-top">
      <span class="scroll-top__btn">
        <img class="img-svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/arrow.svg" alt="arrow">
      </span>
</div>
<?php wp_footer();?>

</body>
</html>
=======
<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="<?php if( is_home() ){echo 'footer';}else{echo 'footer-page';} ?>">
    <div class="footer-wrapper">
        <div class="footer-container container">
            <div class="footer-logo">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/logo-footer.svg" alt="home">
                </a>
            </div>
            <div class="footer-nav">
                <?php
                if( $menu_items = wp_get_nav_menu_items('menu_header') ) {
                    $menu_list = '';
                    foreach ( (array) $menu_items as $key => $menu_item ) {
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        if( !is_front_page() ){
                            $menu_list .= '<li class="footer-nav__item"><a href="' .home_url(). $url . '">' . $title . '</a></li>';
                        }else{
                            $menu_list .= '<li class="footer-nav__item"><a href="' . $url . '"><span>' . $title . '</span></a></li>';
                        }
                    }
                    echo '<ul class="footer-nav__wrapper">'.$menu_list.'</ul>';
                }
                ?>
            </div>
            <div class="footer-social">
                <ul class="footer-social__wrapper">
                    <li class="footer-social__item">
                        <a href="#">
                            <img class="img-svg icon-mail" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-mail.svg" alt="title link">
                        </a>
                    </li>
                    <li class="footer-social__item">
                        <a href="#">
                            <img class="img-svg icon-inst" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-inst.svg" alt="title link">
                        </a>
                    </li>
                    <li class="footer-social__item">
                        <a href="#">
                            <img class="img-svg icon-face" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-face.svg" alt="title link">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-mobile">
            <p>SzkiełkoMusic | Copyright 2020 All Rights Reserved</p>
        </div>
    </div>
</footer>
<div id="scroll" class="scroll-top">
      <span class="scroll-top__btn">
        <img class="img-svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/arrow.svg" alt="arrow">
      </span>
</div>
<?php wp_footer();?>

</body>
</html>
>>>>>>> 5751b6d0b82ca59d241d0ed20f5dcb57d75a2451
