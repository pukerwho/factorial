<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( __('Загальні'), array(
        Field::make( 'text', 'crb_namesite', 'Назва' ),
        Field::make( 'text', 'crb_edrpoy', 'Код за ЄДРПОУ' ),
        Field::make( 'textarea', 'crb_uraddress', 'Юридична адреса' ),
        Field::make( 'complex', 'crb_emails', 'Emails' )->add_fields( array(
            Field::make( 'text', 'crb_email', 'Email' ),
        )), 
        Field::make( 'complex', 'crb_phones', 'Телефони' )->add_fields( array(
            Field::make( 'text', 'crb_phone', 'Телефон' ),
        )),
        Field::make( 'complex', 'crb_faxes', 'Факс' )->add_fields( array(
            Field::make( 'text', 'crb_fax', 'Факс' ),
        )),
    ) );
}

?>