<?php
use Carbon_Fields\Field;
use Carbon_Fields\Container;

//add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
//function crb_attach_post_meta() {
//    Container::make( 'post_meta', __( 'Page Options' ) )
//        ->add_fields( array(
//
//            Field::make( 'complex', 'crb_slides', 'Slides' )
//                ->set_layout( 'tabbed-horizontal' )
//                ->add_fields( array(
//                    Field::make( 'image', 'image', 'Image' ),
//                ) ),
//        ) );
//}