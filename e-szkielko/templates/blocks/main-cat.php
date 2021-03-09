<?php
?>
    <div class="products container">
        <div class="products-heading">
            <h2>Kolekcja Szkiełek</h2>
        </div>
        <div class="product-cat">
            <ul class="product-cat__list">
                <?php $data = carbon_get_theme_option( 'es_crb_category' );
                $i = 0;
                if ( ! empty( $data ) ): foreach ( $data as $tr ): ?>
                    <li class="product-cat__btn
                            <?php if ($i == 0){
                        echo 'active';
                        $i++;
                    }?>" data-cat="<?php echo $tr['slug_cat'] ?>">
                        <span><?php echo $tr['name_cat'] ?></span>
                    </li>
                <?php endforeach;
                endif; ?>
            </ul>
        </div>
        <div class="product-slider">
            <?php $data = carbon_get_theme_option( 'es_crb_category' );
            $i = 0;
            if ( ! empty( $data ) ): foreach ( $data as $tr ): ?>
                <div id='slider-<?php echo $tr['slug_cat'] ?>' class="product-slider__wrapper swiper-container
                            <?php if ($i == 0){
                    echo 'active';
                    $i++;
                }?>" data-cat="<?php echo $tr['slug_cat'] ?>">
                    <div class="swiper-wrapper">
                        <?php es_show_short_product($tr['slug_cat']); ?>
                    </div>
                    <?php if($tr['slug_cat'] === 'music'){?>
                    <div class="load-more" data-cat="<?php echo $tr['slug_cat'] ?>">
                        <span>Więcej</span>
                    </div>
                    <?php };?>
                </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
<?php
