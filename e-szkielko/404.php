<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package e-szkielko
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
			</header><!-- .page-header -->

		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
