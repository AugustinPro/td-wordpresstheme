<?php

// -----------------------------------------------------------------
// CarbonFields setup
// -----------------------------------------------------------------
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');


function crb_attach_theme_options()
{
    Container::make('theme_options', __('Theme Options'))
        ->add_fields(array(
            Field::make('text', 'crb_text', 'Text Field'),
            Field::make('image', 'crb_photo', 'Mon Image'),
        ));
    Container::make('post_meta', __('Post Info'))
        ->where('post_type', '=', 'post')
        ->add_fields(array(
            Field::make('text', 'crb_post_subtitle', 'Subtitle'),
        ));
}


add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}


// -----------------------------------------------------------------
// CarbonFields code
// -----------------------------------------------------------------
