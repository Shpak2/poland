<?php
/*
Template Name: Home page e-szhielko
*/
?>
<?php
get_header();
?>

    <main class="main">

        <?php
            require get_template_directory() . '/templates/blocks/main-banner.php';
            require get_template_directory() . '/templates/blocks/decor-block.php';
            require get_template_directory() . '/templates/blocks/main-cat.php';
            require get_template_directory() . '/templates/blocks/about-us.php';
            require get_template_directory() . '/templates/blocks/size-cost.php';
            require get_template_directory() . '/templates/blocks/take-more.php';
            require get_template_directory() . '/templates/blocks/create-your.php';
        ?>
        <div class="gallery parallax">
            <div class="gallery-bg"></div>
            <div class="gallery-container">
                <div class="gallery-container__icon icon-inst">
                    <img class="img-svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-inst.svg" alt="instagram">
                </div>
                <div class="gallery-container__text">
                    <p>Wejdź na nasz profil Instagram, aby zainspirować się przykładem własnego Szkiełka</p>
                </div>
                <div class="gallery-container__btn">
                    <a href="#" class="product-create"><span>Podążaj za nami</span></a>
                </div>
            </div>
            <div class="gallery-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/gl1.jpg" alt="gallery image">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/gl2.jpg" alt="gallery image">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/gl3.jpg" alt="gallery image">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/gl4.jpg" alt="gallery image">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/gl5.jpg" alt="gallery image">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/gl6.jpg" alt="gallery image">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/gl7.jpg" alt="gallery image">
                    </div>
                </div>
            </div>
        </div>
        <?php
            require get_template_directory() . '/templates/blocks/how-record.php';
            require get_template_directory() . '/templates/blocks/review-block.php';
            require get_template_directory() . '/templates/blocks/faq-block.php';
        ?>

        <div class="feedback" id="feedback">
            <div class="feedback-header">
                <h2>Kontakt</h2>
            </div>
            <div class="feedback-wrapper">
                <div class="feedback-item">
                    <div class="feedback-form">
                        <?php echo do_shortcode( '[contact-form-7 id="16" title="main feedback"]' ); ?>
<!--                        <form method="get" action="g.php">-->
<!--                            <h3>Napisz do nas</h3>-->
<!--                            <label for="fname">Imię i Nazwisko</label>-->
<!--                            <input type="text" id="fname" name="firstname" placeholder="Wprowadź imię i nazwisko">-->
<!---->
<!--                            <label for="ftel">Telefon kontaktowy</label>-->
<!--                            <input type="text" id="ftel" name="telephone" placeholder="Wpisz swój numer telefonu">-->
<!---->
<!--                            <label for="femail">Email</label>-->
<!--                            <input type="email" id="femail" name="emailname" placeholder="Wpisz swój adres e-mail">-->
<!---->
<!--                            <label for="subject">Wpisz wiadomość</label>-->
<!--                            <textarea id="subject" name="subject" placeholder="Wpisz tutaj swoją wiadomość.."></textarea>-->
<!---->
<!--                            <input type="submit" value="Wyślij wiadomość">-->
<!---->
<!--                        </form>-->
                    </div>
                </div>
                <div class="feedback-item">
                    <div class="feedback-social">
                        <ul class="feedback-social__list">
                            <li>
                                <a href="#" class="social-link">
                    <span class="social-name">
                      <span class="social-header">INSTAGRAM</span>
                      <span class="social-adress">@SzkielkoMusic</span>
                    </span>
                                    <span class="social-img">
                      <img class="img-svg icon-inst" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-inst.svg" alt="name social">
                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-link">
                    <span class="social-name">
                      <span class="social-header">FACEBOOK</span>
                      <span class="social-adress">/SzkielkoMusic</span>
                    </span>
                                    <span class="social-img">
                      <img class="img-svg icon-face" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-face.svg" alt="name social">
                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:pomoc@szkielkomusic.pl" class="social-link">
                    <span class="social-name">
                      <span class="social-header">Email</span>
                      <span class="social-adress">pomoc@szkielkomusic.pl</span>
                    </span>
                                    <span class="social-img">
                      <img class="img-svg icon-mail" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-mail.svg" alt="name social">
                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
//get_sidebar();
get_footer();