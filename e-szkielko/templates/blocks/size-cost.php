<?php
    $pictureSize = carbon_get_theme_option('sc_image');
    $pictureSize_url = wp_get_attachment_image_url($pictureSize, 'full');
?>
<div class="cont-price swiper-container">
    <div class="cont-price__list swiper-wrapper">
        <div class="cont-price__item swiper-slide">
            <div class="cont-price__preview size-a3">
                <img src="<?php echo $pictureSize_url; ?>" alt="<?php echo carbon_get_theme_option('sc_image_name')?>">
                <div class="size-hor"><p><?php echo carbon_get_theme_option('sc_image_width_first')?></p></div>
                <div class="size-ver"><p><?php echo carbon_get_theme_option('sc_image_height_first')?></p></div>
            </div>
            <div class="cont-price__body">
                <div class="cont-price__title">
                    <h3><?php echo carbon_get_theme_option('sc_image_text_name_first')?></h3>
                    <p><?php echo carbon_get_theme_option('sc_image_description_first')?></p>
                </div>
                <div class="cont-price__cena">
                    <span class="cont-price__cena_old"><?php echo carbon_get_theme_option('sc_image_old_price_first')?></span>
                    <span><?php echo carbon_get_theme_option('sc_image_new_price_first')?></span>
                </div>
            </div>
        </div>
        <div class="cont-price__item swiper-slide">
            <div class="cont-price__preview size-a4">
                <img src="<?php echo $pictureSize_url; ?>" alt="<?php echo carbon_get_theme_option('sc_image_name')?>">
                <div class="size-hor"><p><?php echo carbon_get_theme_option('sc_image_width_second')?></p></div>
                <div class="size-ver"><p><?php echo carbon_get_theme_option('sc_image_height_second')?></p></div>
            </div>
            <div class="cont-price__body">
                <div class="cont-price__title">
                    <h3><?php echo carbon_get_theme_option('sc_image_text_name_second')?></h3>
                    <p><?php echo carbon_get_theme_option('sc_image_description_second')?></p>
                </div>
                <div class="cont-price__cena">
                    <span class="cont-price__cena_old"><?php echo carbon_get_theme_option('sc_image_old_price_second')?></span>
                    <span><?php echo carbon_get_theme_option('sc_image_new_price_second')?></span>
                </div>
            </div>
        </div>
        <div class="cont-price__item swiper-slide">
            <div class="cont-price__preview size-a5">
                <img src="<?php echo $pictureSize_url; ?>" alt="<?php echo carbon_get_theme_option('sc_image_name')?>">
                <div class="size-hor"><p><?php echo carbon_get_theme_option('sc_image_width_third')?></p></div>
                <div class="size-ver"><p><?php echo carbon_get_theme_option('sc_image_height_third')?></p></div>
            </div>
            <div class="cont-price__body">
                <div class="cont-price__title">
                    <h3><?php echo carbon_get_theme_option('sc_image_text_name_third')?></h3>
                    <p><?php echo carbon_get_theme_option('sc_image_description_third')?></p>
                </div>
                <div class="cont-price__cena">
                    <span class="cont-price__cena_old"><?php echo carbon_get_theme_option('sc_image_old_price_third')?></span>
                    <span><?php echo carbon_get_theme_option('sc_image_new_price_third')?></span>
                </div>
            </div>
        </div>
    </div>
</div>
