<?php
/*
Template Name: Home page e-szhielko
*/
?>
<?php
get_header();
?>

    <main class="main">
        <div class="bg-grey">
            <div class="banner-wrapper container">
                <div class="banner-aside">
                    <div class="banner-content">
                        <div class="banner-header">
                            <h1 class="textheader">
                                Unikalny plakat muzyczny z Twoją piosenką
                            </h1>
                        </div>
                        <div class="banner-body">
                            <p class="banner-info">
                                Szkiełko to Twoja ulubiona piosenka drukowana na szkle
                                z designem Spotify, Apple Music lub SoundCloud!
                            </p>
                            <div class="banner-action">
                                <a href="#" class="banner-action__btn">
                                    Utwórz Szkiełko
                                </a>
                                <a href="#" class="banner-action__link">
                                    Poznaj szczegóły
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-figure">
                        <div class="banner-image" id="img-add">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/banner.png" alt="Plakat muzyczny">
                        </div>
                    </div>
                    <div class="banner-pulse">
                        <div class="banner-pulse__bg"></div>
                        <span>zamów</span>
                        <p>spersonalizowany prezent muzyczny</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="small-container">
            <ul class="small-container__list">
                <li class="small-container__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/item__1.svg" alt="urzeczywistniona piosenka" class="small-container__img">
                    <p class="small-container__text">
                        Twoja urzeczywistniona piosenka
                    </p>
                </li>
                <li class="small-container__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/item__2.svg" alt="oryginalny prezent" class="small-container__img">
                    <p class="small-container__text">
                        Najbardziej oryginalny prezent 2021
                    </p>
                </li>
                <li class="small-container__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/item__3.svg" alt="unikalna dekoracja" class="small-container__img">
                    <p class="small-container__text">
                        Twoja unikalna dekoracja wnętrza
                    </p>
                </li>
            </ul>
        </div>
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
        <div class="bg-grey intro-wrap">
            <div class="intro container" data-anchor="onas">
                <div class="intro-wrapper">
                    <div class="intro-preview">
                        <div class="intro-preview__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/intro2.jpg" alt="intro name">
                        </div>
                    </div>
                    <div class="intro-info">
                        <div class="intro-info__body">
                            <div class="intro-info__title">
                                <h2>Szkiełko - to Twój MUST-HAVE!</h2>
                            </div>
                            <div class="intro-info__text">
                                <p>Szkiełko jest dedykowane miłośnikom muzyki. Utrwala ono wartościowe
                                    wspomnienia powiązane z piosenkami.</p>
                                <p>Szkiełko to nie tylko przyjemność estetyczna, ale rownież element praktyczny:</p>
                            </div>
                            <ul class="intro-info__list">
                                <li class="intro-info__list-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/present.svg" alt="present">
                                    <span>Symboliczny oryginalny upominek,
                      którym zadziwisz bliską osobę</span>
                                </li>
                                <li class="intro-info__list-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/relax.svg" alt="relax">
                                    <span>Spersonalizowany element dekoracyjny wnętrza </span>
                                </li>
                                <li class="intro-info__list-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/puzzle.svg" alt="puzzle">
                                    <span>Odtwarzacz ulubionego utworu (przy pomocy kodu Spotify)</span>
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
        </div>
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
        <div class="reviews">
            <div class="reviews-wrapper container">
                <div class="reviews-container swiper-container">
                    <div class="swiper-wrapper">
                        <div class="reviews-item active swiper-slide">
                            <div class="review">
                                <div class="reviews-item__wrapper">
                                    <div class="reviews-item__photo">
                                        <div class="reviews-img">
                                            <div class="photo">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/user/photo1.jpg" alt="user photo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews-item__body">
                                        <div class="reviews-item__header">
                                            <span>Sara P.</span>
                                            <p>08.02.21</p>
                                        </div>
                                        <div class="reviews-item__text">
                                            <p>Bardzo dziękuje za szkiełko, jestem mega pozytywnie zaskoczona.
                                                Wykonane jest świetnie, wszystko jak najbardziej na plus ❤️ Na pewno
                                                skorzystam z waszych usług ponownie i będę Was polecać znajomym. Jeszcze raz dziękuje!❤️❤️</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-item swiper-slide">
                            <div class="review">
                                <div class="reviews-item__wrapper">
                                    <div class="reviews-item__photo">
                                        <div class="reviews-img">
                                            <div class="photo">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/user/photo2.jpg" alt="user photo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews-item__body">
                                        <div class="reviews-item__header">
                                            <span>Natalia S.</span>
                                            <p>12.02.21</p>
                                        </div>
                                        <div class="reviews-item__text">
                                            <p>Szkielko przyszło, jest super! Zdjęcie dobrej jakości, a o to się najbardziej obawiałam.
                                                Super ozdoba, mam nadzieję że przyjaciółka będzie zadowolona. Bo ja już jestem i żałuję że
                                                sobie nie zamówiłam 😅😅</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-item swiper-slide">
                            <div class="review">
                                <div class="reviews-item__wrapper">
                                    <div class="reviews-item__photo">
                                        <div class="reviews-img">
                                            <div class="photo">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/user/photo3.jpg" alt="user photo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews-item__body">
                                        <div class="reviews-item__header">
                                            <span>Tanu U.</span>
                                            <p>14.02.21</p>
                                        </div>
                                        <div class="reviews-item__text">
                                            <p>Helloo!! I opened the gift today!! Firstly thank you soo much for the wooden base which i got for free!! 😍♥️
                                                And i got this gift for my boyfriend which i gave it to him today for Valentines day and he is very happy with it as you can see in the picture below haha 😂<br>
                                                For sure will order again in future from you guys! 🥰🥰</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-item swiper-slide">
                            <div class="review">
                                <div class="reviews-item__wrapper">
                                    <div class="reviews-item__photo">
                                        <div class="reviews-img">
                                            <div class="photo">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/user/photo4.jpg" alt="user photo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews-item__body">
                                        <div class="reviews-item__header">
                                            <span>Oliwia P.</span>
                                            <p>14.02.21</p>
                                        </div>
                                        <div class="reviews-item__text">
                                            <p>Właśnie odebrałam szkiełko, jestem mile zaskoczona i na pewno nie ostatni raz skorzystam
                                                z waszej usługi, jest cudowne dziękuję wam ślicznie za uratowanie walentynek, uwielbiam
                                                was❤️✨Naprawdę jest świetnie wykonane, muszę polecić was dalej!!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews-next">
                    <img class="img-svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-arrow.svg" alt="icon">
                </div>
                <div class="reviews-prev">
                    <img class="img-svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-arrow.svg" alt="icon">
                </div>
            </div>
        </div>
        <div class="bg-grey helper">
            <div class="help-cont container" data-anchor="help">
                <div class="help-cont__header">
                    <h2>Pozostały Ci pytania?</h2>
                </div>
                <div class="help-cont__wrapper">
                    <div class="help-cont__item">
                        <ul class="help-cont__question-list">
                            <li class="help-cont__question-item active">
                                <h3>Jak zastosujesz Szkiełko?</h3>
                                <ul class="help-cont__answer">
                                    <li>
                                        <p>Ten produkt pokochać dzięki jego stylowości i jakościowemu wykonaniu.
                                            Jest to świetny spersonalizowany prezent oraz oryginalny element dekoracyjny,
                                            który łatwo dopasujesz do wystroju wnętrza. A dodatkowo zawiera ono wybrany przez
                                            Ciebie kod Spotify, który w sekundę przekieruje Cię do wybranego utworu.</p>
                                    </li>
                                </ul>
                            </li>
                            <li class="help-cont__question-item">
                                <h3>Z czego zrobione jest Szkiełko?</h3>
                                <ul class="help-cont__answer">
                                    <li>
                                        <p>Plakaty produkujemy z organicznego szkła (plexiglas), które jest 2 razy lżejsze
                                            i 5 razy mocniejsze od zwykłego szkła.</p>
                                        <p>Drukujemy przy pomocy profesjonalnej drukarki UV, aby uzyskać obraz wykonany w technologii
                                            ultrafioletowej. W ten sposób osiągamy intensywności kolorów i trwałości obrazu.</p>
                                        <p>Plexi z zastosowaniem druku najwyższej jakości robią Szkiełko doskonałym.</p>
                                    </li>
                                </ul>
                            </li>
                            <li class="help-cont__question-item">
                                <h3>Czy możesz użyć własnego zdjęcia na plakacie?</h3>
                                <ul class="help-cont__answer">
                                    <li>
                                        <p>Oczywiście! Możesz dokonać kastomizacji - zamiast okładki albumu lub piosenki umieść własne
                                            zdjęcie i wpisz piosenkę, którą wiążesz z tym wspomnieniem, aby jeszcze bardziej spersonalizować
                                            Twoje Szkiełko!
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li class="help-cont__question-item">
                                <h3>Czy umieszczenie własnego zdjęcia jest dodatkowo płatne?</h3>
                                <ul class="help-cont__answer">
                                    <li>
                                        <p>W żadnym razie! Umieszczenie własnego zdjęcia jest wliczone w cenę, zarówno jak i pełna
                                            personalizacja Szkiełka - dodatkowo możesz wkleić własny tekst zamiast tekstu do piosenki,
                                            wybrać czas odtwarzania. Przejdź do kreatora aby zobaczyć wszystkie możliwości wyboru.
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li class="help-cont__question-item">
                                <h3>Termin realizacji zamówienia i dostawy:</h3>
                                <ul class="help-cont__answer">
                                    <li>
                                        <p>Jesteśmy do Twojej dyspozycji 24/7. Zrobimy wszystko ze Swojej strony, abyś mógł się cieszyć
                                            swoim Szkiełkiem jak najszybciej. Napisz do nas, jeżeli potrzebujesz pomocy w wyborze lub
                                            zastanawiasz się nad zamówieniem!</p>
                                        <p>Szkiełko otrzymasz w ciągu 4-5 dni roboczych od złożenia zamówienia.</p>
                                    </li>
                                </ul>
                            </li>
                            <li class="help-cont__question-item">
                                <h3>Pakowanie:</h3>
                                <ul class="help-cont__answer">
                                    <li>
                                        <p>Szkiełko otrzymasz w stylowej kraftowej kopercie bąbelkowej zabezpieczającej,
                                            więc możesz się nie martwić o bezpieczeństwo przesyłki.
                                        </p>
                                    </li>
                                </ul>
                            </li>
                            <li class="help-cont__question-item">
                                <h3>Możliwość zwrotu:</h3>
                                <ul class="help-cont__answer">
                                    <li>
                                        <p>Niestety ten produkt nie będziesz mógł zwrócić, dlatego że jest on ręcznie robiony według
                                            Twoich spersonalizowanych kryterium. W razie wystąpienia wyjątkowych okoliczności możesz z
                                            nami się skontaktować przez tego maila: </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="help-cont__footer">
                    <div class="help-cont__footer-text">
                        <span>Masz więcej pytań?</span>
                        <p>Chętnie udzielimy odpowiedzi na każde Twoje pytanie!</p>
                    </div>
                    <div class="help-cont__footer-btn">
                        <div class="product-create">
                            <span>Zadaj pytanie</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feedback" data-anchor="feedback" id="feedback-js">
            <div class="feedback-header">
                <h2>Kontakt</h2>
            </div>
            <div class="feedback-wrapper">
                <div class="feedback-item">
                    <div class="feedback-form">
                        <form method="get" action="g.php">
                            <h3>Napisz do nas</h3>
                            <label for="fname">Imię i Nazwisko</label>
                            <input type="text" id="fname" name="firstname" placeholder="Wprowadź imię i nazwisko">

                            <label for="ftel">Telefon kontaktowy</label>
                            <input type="text" id="ftel" name="telephone" placeholder="Wpisz swój numer telefonu">

                            <label for="femail">Email</label>
                            <input type="email" id="femail" name="emailname" placeholder="Wpisz swój adres e-mail">

                            <label for="subject">Wpisz wiadomość</label>
                            <textarea id="subject" name="subject" placeholder="Wpisz tutaj swoją wiadomość.."></textarea>

                            <input type="submit" value="Wyślij wiadomość">

                        </form>
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