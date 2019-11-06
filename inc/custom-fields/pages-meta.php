<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_main.php' )
    ->add_fields( array(
        Field::make( 'text', 'crb_smallname', 'Скорочена назва компанії' ),
    	Field::make( 'text', 'crb_pib', 'ПІБ керівника' ),
        Field::make( 'text', 'crb_buh', 'Головний бухгалтер' ),
        Field::make( 'text', 'crb_city', 'Місто' ),
        Field::make( 'text', 'crb_index', 'Поштовий індекс' ),
        Field::make( 'textarea', 'crb_place', 'Місцезнаходження' ),
        Field::make( 'separator', 'crb_separator', 'Серія та номер свідоцтва про державну реєстрацію та запису в ЄДР юридичних осіб та фізичних осіб підприємців' ),
        Field::make( 'text', 'crb_registration_date', 'Дата реєстрації' ),
        Field::make( 'text', 'crb_registration_seria', 'Серія' ),
        Field::make( 'text', 'crb_registration_number', 'Номер' ),
        Field::make( 'separator', 'crb_separator_two', 'Свідоцтво Нацфінпослуг або НКЦПФР про реєстрацію фінансової установи' ),
        Field::make( 'text', 'crb_registration_two_date', 'Дата реєстрації' ),
        Field::make( 'text', 'crb_registration_two_regnumber', 'Реєстраційний номер' ),
        Field::make( 'text', 'crb_registration_two_seria', 'Серія свідоцтва' ),
        Field::make( 'text', 'crb_registration_two_number', 'Номер свідоцтва' ),
        Field::make( 'separator', 'crb_separator_license', 'Ліцензія' ),
        Field::make( 'textarea', 'crb_license', 'Ліцензія' ),
    ) );
}

?>