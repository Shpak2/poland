<?php
?>

<div class="bg-grey helper">
    <div class="help-cont container" id="help">
        <div class="help-cont__header">
            <h2>Pozostały Ci pytania?</h2>
        </div>
        <div class="help-cont__wrapper">
            <div class="help-cont__item">
                <ul class="help-cont__question-list">
                    <?php $data = carbon_get_theme_option( 'faq_crb' );
                        $i = 0;
                        if ( ! empty( $data ) ): foreach ( $data as $tr ): ?>
                        <li class="help-cont__question-item
                            <?php if ($i == 0){
                                echo 'active';
                                $i++;
                            }?>">
                            <h3><?php echo $tr['question'] ?></h3>
                            <ul class="help-cont__answer">
                                <li>
                                    <p><?php echo $tr['answer'] ?></p>
                                </li>
                            </ul>
                        </li>
                    <?php endforeach;
                    endif; ?>

                </ul>
            </div>
        </div>
        <div class="help-cont__footer">
            <div class="help-cont__footer-text">
                <span><?php echo carbon_get_theme_option('faq_crb_text1')?></span>
                <p><?php echo carbon_get_theme_option('faq_crb_text2')?></p>
            </div>
            <div class="help-cont__footer-btn">
                <a class="askQuestionBtn" href="http://localhost:8888/wordpress#feedback">
                    <span><?php echo carbon_get_theme_option('faq_crb_link_1_name')?></span>
                </a>
            </div>
        </div>
    </div>
</div>