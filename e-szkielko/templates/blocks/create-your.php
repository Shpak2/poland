<?php

?>
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
                    <h2><?php echo carbon_get_theme_option('create_your_title')?></h2>
                </div>
                <div class="intro-info__text">
                    <?php
                        $text = carbon_get_theme_option('create_your_description');
                        echo wpautop( $text, $br = true );
                    ?>
                </div>
                <ul class="intro-info__list">
                    <?php $data = carbon_get_theme_option( 'create_your_pluses' );
                    $i = 0;
                    if ( ! empty( $data ) ): foreach ( $data as $tr ): ?>
                            <li class="intro-info__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/checkmark.svg" alt="present">
                                <span><?php echo $tr['advantages'] ?></span>
                            </li>
                    <?php endforeach;
                    endif; ?>
                </ul>
                <div class="intro-info__button">
                    <div class="product-create">
                        <span><?php echo carbon_get_theme_option('create_your_button')?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>