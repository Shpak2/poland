<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="<?php if( is_front_page() ){echo 'footer';}else{echo 'footer-page';} ?>">
    <div class="footer-wrapper">
        <div class="footer-container container">
            <div class="footer-logo">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/logo-footer.svg" alt="home">
                </a>
            </div>
            <div class="footer-nav">
                <?php wp_nav_menu( [
	'theme_location'  => 'footer_menu',
	'container'       => false,
	'echo'            => true,
	'link_before'     => '<span>',
	'link_after'      => '</span>',
	'items_wrap'      => '<ul class="footer-nav__wrapper">%3$s</ul>',
	'depth'           => 0,
]  ); ?>
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
            <p>SzkiełkoMusic | Copyright <?php echo date("Y"); ?> All Rights Reserved</p>
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
