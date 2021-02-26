<?php
?>
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
                <h2><?php echo carbon_get_theme_option('how_record_title')?></h2>
                <p><?php echo carbon_get_theme_option('how_record_description')?></p>
            </div>
            <ul class="cont-spot__body-list">
                <?php $data = carbon_get_theme_option( 'how_record_steps' );
                $i = 0;
                if ( ! empty( $data ) ): foreach ( $data as $tr ): ?>
                    <li class="cont-spot__body-item">
                        <span><?php echo ++$i ?></span><p><?php echo $tr['step'] ?></p>
                    </li>
                <?php endforeach;
                endif; ?>
            </ul>
        </div>
    </div>
</div>
