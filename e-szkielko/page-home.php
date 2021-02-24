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
        ?>


        <div class="product container">
            <div class="product-heading">
                <h2>Nasze producty</h2>
            </div>
            <div class="product-cat">
                <ul class="product-cat__list">
                    <li class="product-cat__btn active" data-cat="music">
                        <span>Muzyka</span>
                    </li>
                    <li class="product-cat__btn" data-cat="paint">
                        <span>Obrazy</span>
                    </li>
                    <li class="product-cat__btn" data-cat="film">
                        <span>Filmy</span>
                    </li>
                    <li class="product-cat__btn" data-cat="app">
                        <span>Dodatki</span>
                    </li>
                </ul>
            </div>
            <div class="product-slider" style="position: relative;">
                <div id='slider-music' class="product-slider__wrapper swiper-container active" data-cat="music">
                    <div class="swiper-wrapper">
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide2.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide2.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide2.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide2.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide2.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide1.jpg" alt="title product">
                                    <h2>Spotify Album Tower</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide4.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide3.jpg" alt="title product">
                                    <h2>Apple Music Album Wall</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="load-more" data-cat="music">
                        <span>Więcej</span>
                    </div>
                </div>
                <div class="swiper-next"></div>
                <div class="swiper-prev"></div>
                <div id='slider-paint' class="product-slider__wrapper swiper-container" data-cat="paint">
                    <div class="swiper-wrapper">
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide2.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide1.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide4.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide3.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-prev" data-cat="paint"></div>
                    <div class="swiper-next" data-cat="paint"></div>
                </div>
                <div id='slider-film' class="product-slider__wrapper swiper-container" data-cat="film">
                    <div class="swiper-wrapper">
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide2.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide1.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide4.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide3.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-prev" data-cat="film"></div>
                    <div class="swiper-next" data-cat="film"></div>
                </div>
                <div id='slider-app' class="product-slider__wrapper swiper-container" data-cat="app">
                    <div class="swiper-wrapper">
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide2.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide1.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide4.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slider__item swiper-slide">
                            <div class="product-slider__card flip-card-inner">
                                <div class="product-slider__card-preview flip-card-front">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide3.jpg" alt="title product">
                                    <h2>Spotify song</h2>
                                </div>
                                <div class="product-slider__card-info flip-card-back">
                                    <p class="card-info__text">Jeżeli nie potrafisz wybrać tylko 1 piosenki, ulubionego wykonawcy - wybierz ten design,
                                        z którym wydrukujesz cały album lub wybrane przez Ciebie Hity - design w wersji poziomej</p>
                                    <span class="btn-product__add">Wybrac</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-prev"></div>
                    <div class="swiper-next"></div>
                </div>
            </div>
        </div>
        <?php
            require get_template_directory() . '/templates/blocks/about-us.php';
        ?>
        <div class="cont-price swiper-container">
            <div class="cont-price__list swiper-wrapper">
                <div class="cont-price__item swiper-slide">
                    <div class="cont-price__preview size-a3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide1.jpg" alt="slide name">
                        <div class="size-hor"><p>300 mm</p></div>
                        <div class="size-ver"><p>420 mm</p></div>
                    </div>
                    <div class="cont-price__body">
                        <div class="cont-price__title">
                            <h3>Maxi A3</h3>
                            <p>To specjalny format
                                - polecamy do designów
                                z tekstem/albumem</p>
                        </div>
                        <div class="cont-price__cena">
                            <span>99zl</span>
                        </div>
                    </div>
                </div>
                <div class="cont-price__item swiper-slide">
                    <div class="cont-price__preview size-a4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide1.jpg" alt="slide name">
                        <div class="size-hor"><p>210 mm</p></div>
                        <div class="size-ver"><p>300 mm</p></div>
                    </div>
                    <div class="cont-price__body">
                        <div class="cont-price__title">
                            <h3>Classic A4</h3>
                            <p>To klasyczny format
                                - Must-Have
                                dla każdego </p>
                        </div>
                        <div class="cont-price__cena">
                            <span>89zl</span>
                        </div>
                    </div>
                </div>
                <div class="cont-price__item swiper-slide">
                    <div class="cont-price__preview size-a5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temp/slide1.jpg" alt="slide name">
                        <div class="size-hor"><p>150 mm</p></div>
                        <div class="size-ver"><p>210 mm</p></div>
                    </div>
                    <div class="cont-price__body">
                        <div class="cont-price__title">
                            <h3>Mini A5</h3>
                            <p>To Najmniejszy format
                                - łatwo dopasujesz
                                go do wnętrza </p>
                        </div>
                        <div class="cont-price__cena">
                            <span>79zl</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-green" id="shares">
            <div class="shares container">
                <div class="shares-item">
                    <div class="shares-info">
                        <h2>Zyskuj więcej!</h2>
                        <p>Pamiętaj, że działają u nas promocje, dzięki którym zyskujesz więcej korzyści:</p>
                        <ul class="shares-info__list">
                            <li class="shares-info__list-item">
                                <p><span>Zamawiając dwa Szkiełka <br>dostaniesz </span>Darmową dostawę</p>
                            </li>
                            <li class="shares-info__list-item">
                                <p><span>Dodaj jeszcze jedno taniej -<br> Za trzecie Szkiełko zapłacisz nawet o </span>15% mniej</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="shares-item">
                    <div class="shares-preview">
                        <div class="shares-preview img-mini">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/mini.png" alt="mini">
                        </div>
                        <div class="shares-preview img-classic">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/classic.png" alt="classic">
                        </div>
                        <div class="shares-preview img-maxi">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/maxi.png" alt="maxi">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro container intro-second">
            <div class="intro-wrapper">
                <div class="intro-preview">
                    <div class="intro-preview__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/images.png" alt="intro name">
                    </div>
                </div>
                <div class="intro-info">
                    <div class="intro-info__body">
                        <div class="intro-info__title">
                            <h2>Utwórz własne Szkiełko - to bardzo proste!</h2>
                        </div>
                        <div class="intro-info__text">
                            <p>Wystarczy tylko wybrać design, a my stworzymy Twój unikalny nowoczesny plakat muzyczny i pomożemy Ci zrobić tak, aby</p>
                            <p>Twoja piosenka trwała wiecznie.</p>
                        </div>
                        <ul class="intro-info__list">
                            <li class="intro-info__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/checkmark.svg" alt="present">
                                <span>Wybierz ulubioną piosenkę</span>
                            </li>
                            <li class="intro-info__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/checkmark.svg" alt="relax">
                                <span>Piosenkę, która łączy Was razem</span>
                            </li>
                            <li class="intro-info__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/checkmark.svg" alt="puzzle">
                                <span>Piosenkę, z którą masz tak dużo wspomnień</span>
                            </li>
                        </ul>
                        <div class="intro-info__button">
                            <div class="product-create">
                                <span>Utwórz Szkiełko</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="cont-spot container" id="spot">
            <div class="cont-spot__item">
                <div class="cont-spot__review">
                    <div class="cont-spot__review-img">
              <span class="cont-spot__review-decor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/decoration2.svg" class="img-svg" alt="decor">
              </span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/spotn.jpg" alt="spotify">
                    </div>
                </div>
            </div>
            <div class="cont-spot__item">
                <div class="cont-spot__body">
                    <div class="cont-spot__body-header">
                        <h2>Jak nasze "płyty" mogą odtworzyć dźwięk</h2>
                        <p>Wyróżnikiem naszego Szkiełka jest to, że każdy może je
                            usłyszeć! Jedyne, czego potrzebujesz to Twój telefon i jego camera:
                        </p>
                    </div>
                    <ul class="cont-spot__body-list">
                        <li class="cont-spot__body-item">
                            <span>1</span><p>Wejdź na Spotify</p>
                        </li>
                        <li class="cont-spot__body-item">
                            <span>2</span><p>Kliknij szukać i wciśnij na ikonę kamerki</p>
                        </li>
                        <li class="cont-spot__body-item">
                            <span>3</span><p>Skieruj kamerę telefonu na kod umieszczony na plakacie</p>
                        </li>
                        <li class="cont-spot__body-item">
                            <span>4</span><p>Super! Teraz usłyszysz Swoją piosenkę</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
            require get_template_directory() . '/templates/blocks/review-block.php';
            require get_template_directory() . '/templates/blocks/faq-block.php';
        ?>

        <div class="feedback" data-anchor="feedback" id="feedback-js">
            <div class="feedback-header">
                <h2>Kontakt</h2>
            </div>
            <div class="feedback-wrapper">
                <div class="feedback-item">
                    <div class="feedback-form">
                        <?php echo do_shortcode( '[contact-form-7 id="31" title="Контактная форма 1"]' ); ?>
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
get_sidebar();
get_footer();