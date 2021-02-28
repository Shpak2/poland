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
	'posts_per_page' => 4, // количество выводимых товаров
	'post_type' => 'product', // тип товара
	'orderby' => 'title', // сортировка
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
			<div class="btn-product__add add-ajax" data-ajax="<?php echo get_permalink( $loop->post->ID ) ?>">
                Wybrac
<!--				--><?php //woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
			</div>
        </div>
        </div>
	</div>

	<?php endwhile; ?>
	<?php wp_reset_query();
};