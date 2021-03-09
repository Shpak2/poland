<?php
/*
Template Name: Cart page e-szhielko
*/
?>
<?php
get_header();
?>
    <div class="shoppingCartWrapper">
        <div class="shoppingCartWrapper__steps">
            <div class="shoppingCartWrapper__steps_step1 shoppingCartWrapper__steps_step active">
                <div class="stepIcon">
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.9918 15.3318L12.9625 4.4891C12.9345 4.193 12.6721 3.96619 12.3578 3.96619H10.2353V3.06065C10.2353 1.37301 8.78382 0 6.99976 0C5.21578 0 3.7645 1.37301 3.7645 3.06065V3.96619H1.64045C1.32621 3.96619 1.06385 4.193 1.03576 4.4891L0.0024276 15.3744C-0.012791 15.5351 0.0440359 15.6942 0.159066 15.8132C0.274096 15.9322 0.436725 16 0.607125 16H13.3913C13.3917 16 13.3924 16 13.3929 16C13.7283 16 14 15.7429 14 15.4257C13.9999 15.3938 13.9972 15.3623 13.9918 15.3318ZM4.97876 3.06065C4.97876 2.00634 5.8854 1.14858 6.99984 1.14858C8.11436 1.14858 9.02108 2.00634 9.02108 3.06065V3.96619H4.97876V3.06065ZM1.27124 14.8515L2.19553 5.11477H3.7645V6.14175C3.7645 6.45891 4.03625 6.71604 4.37163 6.71604C4.70701 6.71604 4.97876 6.45891 4.97876 6.14175V5.11477H9.02108V6.14175C9.02108 6.45891 9.29283 6.71604 9.62821 6.71604C9.96358 6.71604 10.2353 6.45891 10.2353 6.14175V5.11477H11.8029L12.7271 14.8515H1.27124Z" fill="#F4F5F4"></path>
                    </svg>
                </div>
                <p>Koszyk</p>
            </div>
            <div class="shoppingCartWrapper__steps_step2 shoppingCartWrapper__steps_step">
                <div class="stepIcon">
                    <svg width="22" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.94 7.649l-1.706-3.558a.651.651 0 00-.589-.363h-5.364V.627A.638.638 0 0013.632 0H.65C.291 0 0 .28 0 .627v10.546c0 .347.29.627.65.627h1.27c-.108.23-.19.474-.242.728H.65c-.358 0-.649.28-.649.627 0 .346.29.626.65.626h1.028c.304 1.506 1.68 2.646 3.327 2.646 1.646 0 3.022-1.14 3.325-2.646h5.418c.303 1.506 1.679 2.646 3.326 2.646 1.646 0 3.022-1.14 3.325-2.646h.952c.358 0 .649-.28.649-.626V7.912a.61.61 0 00-.06-.263zm-8.193 4.879H8.33a3.166 3.166 0 00-.242-.728h5.544a.659.659 0 00.444-.17c-.152.278-.264.58-.329.898zM1.298 1.253h11.685v9.294H7.048a3.45 3.45 0 00-2.044-.665 3.45 3.45 0 00-2.044.665H1.298V1.253zm3.706 13.92c-1.153 0-2.09-.905-2.09-2.018 0-1.114.937-2.02 2.09-2.02 1.153 0 2.091.906 2.091 2.02 0 1.113-.938 2.018-2.09 2.018zm12.07 0c-1.154 0-2.092-.905-2.092-2.018 0-1.114.939-2.02 2.091-2.02 1.153 0 2.091.906 2.091 2.02 0 1.113-.938 2.018-2.09 2.018zm3.628-2.645h-.303c-.304-1.506-1.679-2.646-3.326-2.646a3.422 3.422 0 00-2.814 1.452.61.61 0 00.022-.16V4.98h4.95l1.47 3.07v4.477z" fill="#DBE0E1"></path></svg>
                </div>
                Dostawa
            </div>
            <div class="shoppingCartWrapper__steps_step3 shoppingCartWrapper__steps_step">
                <div class="stepIcon">
                    <svg width="18" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.78.22a.75.75 0 00-1.06 0l-9.97 9.97-5.47-5.47A.75.75 0 00.22 5.78l6 6.001a.754.754 0 001.06 0L17.78 1.28a.75.75 0 000-1.06z" fill="#DBE0E1"></path></svg>
                </div>
                Potwierdzenie
            </div>
        </div>
        <div class="shoppingCartWrapper-step shoppingCartWrapper__cart">
                <main id="main" class="site-main">

                    <?php

                    while ( have_posts() ) : the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                            <div class="entry-content">
                                <?php

                                the_content();
                                ?>
                            </div><!-- .entry-content -->

                        </article><!-- #post-<?php the_ID(); ?> -->
                    <?php
                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
        </div>
    </div>
<?php
//get_sidebar();
get_footer();