<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', ( 'Настройки блоков' ) )
        ->set_icon('dashicons-text')
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
            Field::make( 'text', 'faq_crb_text1', 'Текст над кнопкой первая строка' ),
            Field::make( 'text', 'faq_crb_text2', 'Текст над кнопкой вторая строка' ),
            Field::make( 'text', 'faq_crb_link_1_name', 'Имя кнопки' ),
        ) )
        ->add_tab('Size cost container', array(
            Field::make( 'image', 'sc_image', 'Картинка' )->set_width(50),
            Field::make( 'text', 'sc_image_name', 'Имя картинки' )->set_width(50),
            Field::make( 'text', 'sc_image_width_first', 'Ширина первой картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_height_first', 'Высота первой картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_text_name_first', 'Название размера первой картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_description_first', 'Описани размера первой картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_old_price_first', 'Цена старая первой картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_new_price_first', 'Цена новая первой картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_width_second', 'Ширина второй картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_height_second', 'Высота второй картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_text_name_second', 'Название размера второй картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_description_second', 'Описани размера второй картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_old_price_second', 'Цена старая второй картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_new_price_second', 'Цена новая второй картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_width_third', 'Ширина третьей картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_height_third', 'Высота третьей картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_text_name_third', 'Название размера третьей картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_description_third', 'Описани размера третьей картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_old_price_third', 'Цена старая третьей картинки' )->set_width(16.6),
            Field::make( 'text', 'sc_image_new_price_third', 'Цена новая третьей картинки' )->set_width(16.6),
        ) )
        ->add_tab('Take more container', array(
            Field::make( 'text', 'take_more_title', 'Заголовок блока' ),
            Field::make( 'text', 'take_more_under_title', 'Текст под заголовком' ),
            Field::make( 'rich_text', 'take_more_first_text', 'Первый абзац' )->help_text('Белый текст просто выделить любым цветом'),
            Field::make( 'rich_text', 'take_more_second_text', 'Второй абзац' )->help_text('Белый текст просто выделить любым цветом'),
            Field::make( 'image', 'take_more_image_one', 'Картинка мини' )->set_width(50),
            Field::make( 'text', 'take_more_image_one_name', 'Имя картинки мини' )->set_width(50),
            Field::make( 'image', 'take_more_image_two', 'Картинка классик' )->set_width(50),
            Field::make( 'text', 'take_more_image_two_name', 'Имя картинки классик' )->set_width(50),
            Field::make( 'image', 'take_more_image_three', 'Картинка макси' )->set_width(50),
            Field::make( 'text', 'take_more_image_three_name', 'Имя картинки макси' )->set_width(50),
        ) )
        ->add_tab('Create your container', array(
            Field::make( 'text', 'create_your_title', 'Заголовок блока' ),
            Field::make( 'rich_text', 'create_your_description', 'Описание блока' ),
            Field::make( 'complex', 'create_your_pluses', 'Преимущества' )
                ->add_fields( array(
                    Field::make( 'text', 'advantages', 'Текст преимущества' ),
                )),
            Field::make( 'text', 'create_your_button', 'Текст кнопки' ),
        ) )
        ->add_tab('How record container', array(
            Field::make( 'text', 'how_record_title', 'Заголовок блока' ),
            Field::make( 'text', 'how_record_description', 'Описание блока' ),
            Field::make( 'complex', 'how_record_steps', 'Как воспроизвести шаги' )
                ->add_fields( array(
                    Field::make( 'text', 'step', 'Текст шага' ),
                )),
        ) )
        ->add_tab('Вывод категорий', array(
            Field::make( 'complex', 'es_crb_category', 'Какие категории выводить на главной' )
                ->add_fields( array(
                    Field::make( 'text', 'name_cat', 'Название категории' )->set_width(50),
                    Field::make( 'text', 'slug_cat', 'Slug категории' )
                        ->set_width(50)
                        ->help_text('Slug - это латинской название категории(ярлык)'),
                )),
        ))
        ->add_tab('Contact container', array(
            Field::make( 'text', 'contact_title', 'Заголовок блока' ),
            Field::make( 'text', 'contact_insta_name', 'Инста имя' )->set_width(33),
            Field::make( 'text', 'contact_insta_name_adress', 'Инста имя адрес' )->set_width(33),
            Field::make( 'text', 'contact_insta_name_link', 'Инста имя ссылка' )->set_width(33),
            Field::make( 'text', 'contact_facebook_name', 'Фейсбук имя' )->set_width(33),
            Field::make( 'text', 'contact_facebook_name_adress', 'Фейсбук имя адрес' )->set_width(33),
            Field::make( 'text', 'contact_facebook_name_link', 'Фейсбук имя ссылка' )->set_width(33),
            Field::make( 'text', 'contact_email_name', 'Почта имя' )->set_width(33),
            Field::make( 'text', 'contact_email_name_adress', 'Почта имя адрес' )->set_width(33),
            Field::make( 'text', 'contact_email_name_link', 'Почта имя ссылка' )->set_width(33),
        ) );
    Container::make('theme_options', ('Настройки темы'))
        ->set_icon('dashicons-images-alt')
        ->add_tab('Take more container', array(
            Field::make( 'text', 'take_more_title', 'Заголовок блока' ),
            Field::make( 'text', 'take_more_under_title', 'Текст под заголовком' ),
            Field::make( 'rich_text', 'take_more_first_text', 'Первый абзац' )->help_text('Белый текст просто выделить любым цветом'),
            Field::make( 'rich_text', 'take_more_second_text', 'Второй абзац' )->help_text('Белый текст просто выделить любым цветом'),
            Field::make( 'image', 'take_more_image_one', 'Картинка мини' )->set_width(50),
            Field::make( 'text', 'take_more_image_one_name', 'Имя картинки мини' )->set_width(50),
            Field::make( 'image', 'take_more_image_two', 'Картинка классик' )->set_width(50),
            Field::make( 'text', 'take_more_image_two_name', 'Имя картинки классик' )->set_width(50),
            Field::make( 'image', 'take_more_image_three', 'Картинка макси' )->set_width(50),
            Field::make( 'text', 'take_more_image_three_name', 'Имя картинки макси' )->set_width(50),
        ));
}
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( get_template_directory() . '/includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}