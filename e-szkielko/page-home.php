<?php
/*
Template Name: Home page e-szhielko
*/
?>
<?php
get_header();
?>

    <main class="main">

        <?php
        require get_template_directory() . '/templates/blocks/main-banner.php';
        require get_template_directory() . '/templates/blocks/decor-block.php';
        require get_template_directory() . '/templates/blocks/main-cat.php';
        require get_template_directory() . '/templates/blocks/about-us.php';
        require get_template_directory() . '/templates/blocks/size-cost.php';
        require get_template_directory() . '/templates/blocks/take-more.php';
        require get_template_directory() . '/templates/blocks/create-your.php';
        require get_template_directory() . '/templates/blocks/insta-block.php';
        require get_template_directory() . '/templates/blocks/how-record.php';
        require get_template_directory() . '/templates/blocks/review-block.php';
        require get_template_directory() . '/templates/blocks/faq-block.php';
        require get_template_directory() . '/templates/blocks/feedback-block.php';
        ?>
    </main>

<?php
//get_sidebar();
get_footer();