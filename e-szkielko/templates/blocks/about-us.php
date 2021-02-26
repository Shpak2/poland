<?php
?>
<div class="bg-grey intro-wrap">
    <div class="intro container" id="onas">
        <div class="intro-wrapper">
            <div class="intro-preview">
                <div class="intro-preview__img">
                    <?php
                    $file_id = carbon_get_theme_option('intro_crb_image');
                    $thumbnail_url = wp_get_attachment_image_url($file_id,'full');
                    ?>
                    <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo carbon_get_theme_option('intro_crb_image_name')?>">
                </div>
            </div>
            <div class="intro-info">
                <div class="intro-info__body">
                    <div class="intro-info__title">
                        <h2><?php echo carbon_get_theme_option('intro_crb_text_h1')?></h2>
                    </div>
                    <div class="intro-info__text">
                        <?php $data = carbon_get_theme_option( 'intro_crb_text' );
                            if ( ! empty( $data ) ): foreach ( $data as $tr ): ?>
                                <p><?php echo $tr['textp'] ?></p>
                            <?php endforeach;
                            endif; ?>
                    </div>
                    <ul class="intro-info__list">
                        <li class="intro-info__list-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/present.svg" alt="present">
                            <span><?php echo carbon_get_theme_option('intro_crb_text_list1')?></span>
                        </li>
                        <li class="intro-info__list-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/relax.svg" alt="relax">
                            <span><?php echo carbon_get_theme_option('intro_crb_text_list2')?></span>
                        </li>
                        <li class="intro-info__list-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/custom/puzzle.svg" alt="puzzle">
                            <span><?php echo carbon_get_theme_option('intro_crb_text_list3')?></span>
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
<?php
