<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="footer">
    <div class="footer-wrapper">
        <div class="footer-container container">
            <div class="footer-logo">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/logo-footer.svg" alt="home">
                </a>
            </div>
            <div class="footer-nav">
                <ul class="footer-nav__wrapper">
                    <li class="footer-nav__item">
                        <a href="#" data-anchor="onas">
                            <span>O nas</span>
                        </a>
                    </li>
                    <li class="footer-nav__item">
                        <a href="#" data-anchor="help">
                            <span>FAQ</span>
                        </a>
                    </li>
                    <li class="footer-nav__item">
                        <a href="#" data-anchor="feedback">
                            <span>Kontakt</span>
                        </a>
                    </li>
                </ul>
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

<?php wp_footer(); ?>

</body>
</html>
