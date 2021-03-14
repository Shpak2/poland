<?php
?>
    <div class="bg-grey">
        <div class="mainCall-wrapper container">
            <div class="mainCall-aside">
                <div class="mainCall-content">
                    <div class="mainCall-header">
                        <h1 class="textheader">
                           <?php echo carbon_get_theme_option('banner_crb_title')?>
                        </h1>
                    </div>
                    <div class="mainCall-body">
                        <p class="mainCall-info">
                            <?php echo carbon_get_theme_option('banner_crb_text')?>
                        </p>
                        <div class="mainCall-action">
                            <a href="<?php echo carbon_get_theme_option('banner_crb_link_2')?>" class="mainCall-action__btn js-product-all">
                                <?php echo carbon_get_theme_option('banner_crb_link_1_name')?>
                            </a>
                            <a href="<?php echo carbon_get_theme_option('banner_crb_link_2')?>" class="mainCall-action__link">
                                <?php echo carbon_get_theme_option('banner_crb_link_2_name')?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mainCall-figure">
                    <div class="mainCall-image" id="img-add">
                        <?php
                            $file_id = carbon_get_theme_option('banner_crb_image');
                            $thumbnail_url = wp_get_attachment_image_url($file_id,'full');
                        ?>
                        <img src="<?php echo $thumbnail_url; ?>" alt="<?php echo carbon_get_theme_option('banner_crb_img_name')?>">
                    </div>
                </div>
                <div class="mainCall-pulse">
                    <div class="mainCall-pulse__bg"></div>
                    <span>zamów</span>
                    <p>spersonalizowany prezent muzyczny</p>
                </div>
            </div>
        </div>
    </div>
<?php
