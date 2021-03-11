<?php
    $pictureSize = carbon_get_theme_option('insta_image');
    $pictureSize_url = wp_get_attachment_image_url($pictureSize, 'full');
?>
<div class="gallery parallax">
    <div class="gallery-bg" style="background: url(<?php echo $pictureSize_url; ?>) 50% 50%/100% 100% no-repeat"></div>
    <div class="gallery-container">
        <div class="gallery-container__icon icon-inst">
            <img class="img-svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-inst.svg" alt="instagram">
        </div>
        <div class="gallery-container__text">
            <p><?php echo carbon_get_theme_option('insta_text')?></p>
        </div>
        <div class="gallery-container__btn">
            <a target="_blank" href="<?php echo carbon_get_theme_option('insta_follow_btn_link')?>" class="subscribe"><span><?php echo carbon_get_theme_option('insta_follow_btn_text')?></span></a>
        </div>
    </div>
    <div class="gallery-slider swiper-container">
        <div class="swiper-wrapper">
            <?php $data = carbon_get_theme_option( 'insta_images' );
            $i = 0;
            if ( ! empty( $data ) ): foreach ( $data as $tr ):

                $thumbnail_url = wp_get_attachment_image_url($tr['insta_images_picture'], 'full');
                ?>
                <div class="swiper-slide">
                    <img src="<?php echo $thumbnail_url; ?>" alt="gallery image">
                </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</div>