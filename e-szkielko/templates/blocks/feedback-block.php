<?php
?>
<div class="feedback" id="feedback">
    <div class="feedback-header">
        <h2><?php echo carbon_get_theme_option('contact_title')?></h2>
    </div>
    <div class="feedback-wrapper">
        <div class="feedback-item">
            <div class="feedback-form">
                <?php echo do_shortcode( '[contact-form-7 id="16" title="main feedback"]' ); ?>
            </div>
        </div>
        <div class="feedback-item">
            <div class="feedback-social">
                <ul class="feedback-social__list">
                    <li>
                        <a href="<?php echo carbon_get_theme_option('contact_insta_name_link')?>" class="social-link">
                    <span class="social-name">
                      <span class="social-header"><?php echo carbon_get_theme_option('contact_insta_name')?></span>
                      <span class="social-adress"><?php echo carbon_get_theme_option('contact_insta_name_adress')?></span>
                    </span>
                            <span class="social-img">
                      <img class="img-svg icon-inst" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-inst.svg" alt="name social">
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo carbon_get_theme_option('contact_facebook_name_link')?>" class="social-link">
                    <span class="social-name">
                      <span class="social-header"><?php echo carbon_get_theme_option('contact_facebook_name')?></span>
                      <span class="social-adress"><?php echo carbon_get_theme_option('contact_facebook_name_adress')?></span>
                    </span>
                            <span class="social-img">
                      <img class="img-svg icon-face" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-face.svg" alt="name social">
                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:<?php echo carbon_get_theme_option('contact_email_name_link')?>" class="social-link">
                    <span class="social-name">
                      <span class="social-header"><?php echo carbon_get_theme_option('contact_email_name')?></span>
                      <span class="social-adress"><?php echo carbon_get_theme_option('contact_email_name_adress')?></span>
                    </span>
                            <span class="social-img">
                      <img class="img-svg icon-mail" src="<?php echo get_template_directory_uri(); ?>/assets/img/sys/icon-mail.svg" alt="name social">
                    </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>