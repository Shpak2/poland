<?php
if( ! defined('ABSPATH')){
    exit;
}

add_action('woocommerce_before_single_product','e_szkielko_wrapper_product_start',5);

function e_szkielko_wrapper_product_start(){
?>
    <div class="popupWrapper product-page" data-step="1">
      <div class="modal">
        <div class="chooseSong" id="ajax-data">
          <div class="modal__title">
            <p class="modal__title_text">Wybierz piosenkę i kształt</p>
          </div>
<?php
}

add_action('woocommerce_after_single_product','e_szkielko_wrapper_product_end',5);

function e_szkielko_wrapper_product_end(){
    ?>
            </div>
        </div>
    </div>
    <?php
}

add_action('woocommerce_before_single_product_summary','e_szkielko_wrapper_product_image_start',5);

function e_szkielko_wrapper_product_image_start(){
    ?>
    <div class="modal__body_left">
    <?php
}

add_action('woocommerce_before_single_product_summary','e_szkielko_wrapper_product_image_end',25);

function e_szkielko_wrapper_product_image_end(){
    ?>
    </div>
    <?php
}


add_action('woocommerce_before_single_product_summary','e_szkielko_wrapper_product_entry_start',30);

function e_szkielko_wrapper_product_entry_start(){
    ?>
    <div class="modal__body_right">
        <div class="customizeProduct">
    <?php
}

add_action('woocommerce_after_single_product_summary','e_szkielko_wrapper_product_entry_end',5);

function e_szkielko_wrapper_product_entry_end(){
    ?>
        </div>
    </div>
    <?php
}

add_action('woocommerce_before_single_product_summary','e_szkielko_wrapper_product_entry_wrapper_start',4);

function e_szkielko_wrapper_product_entry_wrapper_start(){
    ?>
    <div class="modal__body">
    <?php
}

add_action('woocommerce_after_single_product_summary','e_szkielko_wrapper_product_entry_wrapper_end',6);

function e_szkielko_wrapper_product_entry_wrapper_end(){
    ?>
    </div>
    <?php
}

add_action('woocommerce_before_single_product_summary','e_szkielko_wrapper_product_title',22);

function e_szkielko_wrapper_product_title(){
    the_title( '<h1 class="song__text_title">', '</h1>' );
    ?>
    <p class="song__text_description"><span>*</span>przykładowy wzór makietu</p>
    <?php

}

add_action('woocommerce_before_single_product_summary','woocommerce_show_product_custom_images',21);

function woocommerce_show_product_custom_images(){
    require get_template_directory() . '/woocomerce/custom-template/es_product-image.php' ;
};

add_action('wp_footer','es_popup');

function es_popup(){
    ?>
    <div class="jquery-quickviewmodal blocker current popupWrapper" id="modal-product-all" style="display: none;">
        <div class="modal">
                <div class="chooseSong">
                    <div class="modal__title">
                        <p class="modal__title_text">Wybierz piosenkę i kształt</p>
                        <div class="modal__title_button"></div>
                    </div>
                    <div class="modal__body">
                        <div class="modal__body_left">
                            <div class="imageWrapper">
                            </div>
                            <p class="song__text_title"></p>
                            <p class="song__text_description"><span>*</span>przykładowy wzór makietu</p>
                        </div>
                        <div class="modal__body_right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
};