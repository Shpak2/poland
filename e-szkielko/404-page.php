<?php
/*
Template Name: 404 e-szhielko
*/
get_header();
?>

    <main class="main-page">

        <section class="bg-grey">
            <header class="error-404 container">
                <h1 class="textheader"><?php esc_html_e( 'Ups! Strona nie została znaleziona!', 'e-szkielko' ); ?></h1>
                <p>Twój internet działa jak należy, jednak najprawdopodobniej ta strona została przeniesiona pod inny adres.
                    Dla pewności możesz sprawdzić czy adres internetowy nie zawiera literówki. <br>
                    PS <a href="<?php echo home_url() ?>">Zapraszamy na stronę główną </a> - zadziała na pewno :)</p>
                <br>
                <p>Przekierowanie na stronę główną <span id="time">8 sekund</span></p>
            </header><!-- .page-header -->

        </section><!-- .error-404 -->

    </main><!-- #main -->
    <script>
        var i = 8;
        var b = jQuery('#time');

        function timeOut() {
            setTimeout(function () {
                if (i > 1) {
                    b.html(i + " sekund");
                    i--;
                    timeOut();
                } else if (i == 1) {
                    b.html(i + " sekunda");
                    i--;
                    timeOut();
                } else if (i == 0) {
                    document.location.href = "<?php echo home_url() ?>";
                }
            }, 1000)
        }
        timeOut();
    </script>
<?php
get_footer();

