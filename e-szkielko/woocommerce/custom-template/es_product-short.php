<?php
if( ! defined('ABSPATH')){
    exit;
}

function es_show_short_product($categoryName){
//        echo do_shortcode('[product_category per_page="8" orderby="date" order="desc" category="music"]');

	// Выполнение запроса по категориям и атрибутам
	$args = array(
		// Использование аргумента tax_query для установки параметров терминов таксономии
		'tax_query' => array(
		// Использование нескольких таксономий требует параметр relation
		'relation' => 'AND', // значение AND для выборки товаров принадлежащим одновременно ко всем указанным терминам
		// массив для категории имеющей слаг slug-category-1
		array(
		 'taxonomy' => 'product_cat',
		 'field' => 'slug',
		 'terms' => $categoryName
		),
		// массив для категории имеющей слаг slug-category-2
//		array(
//		 'taxonomy' => 'product_cat',
//		 'field' => 'slug',
//		 'terms' => 'slug-category-2'
//		),
//		// массив для атрибута pa_attribute-1 имеющим значение attribute-1
//		array(
//		 'taxonomy' => 'pa_attribute-1',
//		 'field' => 'slug',
//		 'terms' => 'attribute-1'
//		)
	),
	// Параметры отображения выведенных товаров
	'posts_per_page' => 40, // количество выводимых товаров
	'post_type' => 'product', // тип товара
	'orderby' => 'date', // сортировка
);

$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
global $product;
?>
	<div class="product-slider__item swiper-slide">
        <div class="product-slider__card flip-card-inner">
            <div class="product-slider__card-preview flip-card-front">
                  <?php
                  echo get_the_post_thumbnail($loop->post->ID, '');
                  ?>
                <h2 class="es_product-title"><?php the_title(); ?></h2>
            </div>
		<div class="product-slider__card-info flip-card-back">
			<div class="card-info__text"><?php echo $product->get_description(); ?></div>
            <div class="button quick-view-button btn button btn-default theme-button theme-btn btn-product__add"
                 data-product-id="<?php echo $product->get_id(); ?>" rel="nofollow">
                Wybrac
            </div>
        </div>
        </div>
	</div>

	<?php endwhile; ?>
	<?php wp_reset_query();
};

add_action('wp_ajax_ajax_view_product', 'es_view_product_calback');
add_action('wp_ajax_nopriv_ajax_view_product', 'es_view_product_calback');

function es_view_product_calback(){
    if( ! wp_verify_nonce( $_POST['nonce'], 'view-nonce')){
        wp_die('FUCK, ERROR');
    }
    $product = wc_get_product($_POST['id']);
//    get_pr($product,false);
    ob_start();
    ?>

        <div class="modal__body_left">
            <div class="imageWrapper">
                <?php
                $attachment_id = get_post_thumbnail_id($product->get_id());
                $product_thumb = wp_get_attachment_image_url($attachment_id,'shop_single');
                ?>
                <img src="<?php echo $product_thumb; ?>" alt="song">
            </div>
            <p class="song__text_title"><?php echo $product->get_name(); ?></p>
            <p class="song__text_description"><span>*</span>przykładowy wzór makietu</p>
        </div>
        <div class="modal__body_right">
            <?php echo apply_filters(
                'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                sprintf(
                    '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                    esc_url( $product->add_to_cart_url() ),
                    esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                    'form-stepWrap__btn popUpBtnNext',
                    'data-product_id="' . $product->get_id() . '" data-product_sku="' . $product->get_sku() . '" aria-label="' . $product->get_description() . '"',
                    esc_html( $product->add_to_cart_text() )
                )
            ); ?>
        </div>
    <?php
    $data['product'] = ob_get_clean();
    wp_send_json($data);
    wp_die();
};