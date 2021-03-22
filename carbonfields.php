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
        ->add_tab(__('Socials'), array(
            Field::make('text', 'crb_twitter_url', __('Twitter URL')),
            Field::make('text', 'crb_facebook_url', __('Facebook URL')),
            Field::make('text', 'crb_instagram_url', __('Instagram URL')),
            Field::make('text', 'crb_rss_url', __('RSS Feed URL')),
            Field::make('text', 'crb_email_url', __('Email URL')),
        ))
        ->add_tab(__('About'), array(
            Field::make('text', 'crb_about', __('About Text')),
        ))
        ->add_tab(__('Mini Posts'), array(
            Field::make( 'association', 'crb_mini_posts')
            ->set_max( 5 )
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
