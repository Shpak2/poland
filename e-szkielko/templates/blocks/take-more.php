<?php

?>
<div class="bg-green" id="shares">
    <div class="shares container">
        <div class="shares-item">
            <div class="shares-info">
                <h2><?php echo carbon_get_theme_option('take_more_title')?></h2>
                <p><?php echo carbon_get_theme_option('take_more_under_title')?></p>
                <ul class="shares-info__list">
                    <li class="shares-info__list-item">
                        <?php
                            $text = carbon_get_theme_option('take_more_first_text');
                            echo wpautop( $text, $br = true );
                        ?>
                    </li>
                    <li class="shares-info__list-item">
                        <?php
                            $text = carbon_get_theme_option('take_more_second_text');
                            echo wpautop( $text, $br = true );
                        ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="shares-item">
            <div class="shares-preview">
                <div class="shares-preview img-mini">
                    <?php
                        $pictureOne = carbon_get_theme_option('take_more_image_one');
                        $pictureOne_url = wp_get_attachment_image_url($pictureOne, 'full');
                    ?>
                    <img src="<?php echo $pictureOne_url; ?>" alt="<?php echo carbon_get_theme_option('take_more_image_one_name')?>">
                </div>
                <div class="shares-preview img-classic">
                    <?php
                    $pictureOne = carbon_get_theme_option('take_more_image_two');
                    $pictureOne_url = wp_get_attachment_image_url($pictureOne, 'full');
                    ?>
                    <img src="<?php echo $pictureOne_url; ?>" alt="<?php echo carbon_get_theme_option('take_more_image_two_name')?>">
                </div>
                <div class="shares-preview img-maxi">
                    <?php
                    $pictureOne = carbon_get_theme_option('take_more_image_three');
                    $pictureOne_url = wp_get_attachment_image_url($pictureOne, 'full');
                    ?>
                    <img src="<?php echo $pictureOne_url; ?>" alt="<?php echo carbon_get_theme_option('take_more_image_three_name')?>">
                </div>
            </div>
        </div>
    </div>
</div>