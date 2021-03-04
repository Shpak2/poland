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
            require get_template_directory() . '/templates/blocks/feedback-block.php';
        ?>
    </main>

<?php
//get_sidebar();
get_footer();