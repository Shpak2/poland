<?php
?>
<div class="reviews">
    <div class="reviews-wrapper container">
        <div class="reviews-container swiper-container">
            <div class="swiper-wrapper">

                <?php $data = carbon_get_theme_option( 'review_crb' );
                $i = 0;
                if ( ! empty( $data ) ): foreach ( $data as $tr ): ?>
                    <div class="reviews-item
                    <?php if ($i == 0){
                        echo 'active';
                        $i++;
                    }?>
                    swiper-slide">
                        <div class="review">
                            <div class="reviews-item__wrapper">
                                <div class="reviews-item__photo">
                                    <div class="reviews-img">
                                        <div class="photo">
                                            <?php
                                                $thumbnail_url = wp_get_attachment_image_url($tr['r_image'],'full');
                                            ?>
                                            <img src="<?php echo $thumbnail_url; ?>" alt="review name">
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews-item__body">
                                    <div class="reviews-item__header">
                                        <span><?php echo $tr['r_name'] ?></span>
                                        <p><?php echo $tr['r_date'] ?></p>
                                    </div>
                                    <div class="reviews-item__text">
                                        <?php echo $tr['r_text'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
                endif; ?>

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
<?php
