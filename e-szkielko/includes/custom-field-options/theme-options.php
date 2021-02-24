<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', ( 'Настройки блоков' ) )
        ->set_icon('dashicons-admin-settings')
        ->add_tab('Banner main', array(
            Field::make( 'text', 'banner_crb_title', 'Заголовок блока' ),
            Field::make( 'text', 'banner_crb_text', 'Инфо текст блока' ),
            Field::make( 'text', 'banner_crb_link_1_name', 'Первая кнопка имя' )->set_width(50),
            Field::make( 'text', 'banner_crb_link_1', 'Первая кнопка ссылка' )->set_width(50),
            Field::make( 'text', 'banner_crb_link_2_name', 'Вторая кнопка имя' )->set_width(50),
            Field::make( 'text', 'banner_crb_link_2', 'Вторая кнопка ссылка' )->set_width(50),
            Field::make( 'image', 'banner_crb_image', 'Картинка' )->set_width(50),
            Field::make( 'text', 'banner_crb_img_name', 'Имя картинки' )->set_width(50),
        ) )
        ->add_tab('Decor container', array(
            Field::make( 'text', 'decor_crb_text1', 'Текст под первой картинкой' ),
            Field::make( 'text', 'decor_crb_text2', 'Текст под второй картинкой' ),
            Field::make( 'text', 'decor_crb_text3', 'Текст под третьей картинкой' ),
        ) )
        ->add_tab('Intro container', array(
            Field::make( 'text', 'intro_crb_text_h1', 'Заголовок' ),
            Field::make( 'complex', 'intro_crb_text', 'Текст под заголовком' )
                ->add_fields( array( Field::make( 'text', 'textp', 'Введите ваш текст' )
                        ->help_text('Каждый абзац в новом поле'))),
            Field::make( 'image', 'intro_crb_image', 'Картинка' )->set_width(50),
            Field::make( 'text', 'intro_crb_image_name', 'Имя картинки' )->set_width(50),
            Field::make( 'text', 'intro_crb_text_list1', 'Пункт 1' ),
            Field::make( 'text', 'intro_crb_text_list2', 'Пункт 2' ),
            Field::make( 'text', 'intro_crb_text_list3', 'Пункт 3' ),
        ) )
        ->add_tab('Reviews container', array(
            Field::make( 'complex', 'review_crb', 'Отзыв' )
                ->add_fields( array(
                    Field::make( 'text', 'r_name', 'Введите имя' )->set_width(50),
                    Field::make( 'text', 'r_date', 'Введите дату' )->set_width(50),
                    Field::make( 'rich_text', 'r_text', 'Введите текст отзыва' ),
                    Field::make( 'image', 'r_image', 'Картинка' ),
                )),
        ) )
        ->add_tab('FAQ container', array(
            Field::make( 'text', 'faq_crb_h1', 'Заголовок контейнера' ),
            Field::make( 'complex', 'faq_crb', 'Вопросы ответы' )
                ->add_fields( array(
                    Field::make( 'text', 'question', 'Введите вопрос' ),
                    Field::make( 'rich_text', 'answer', 'Введите ответ' ),
                )),
        ) );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( get_template_directory() . '/includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}