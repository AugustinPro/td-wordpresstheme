<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// function add_my_assets() {

//     wp_deregister_script('jquery');
// 	wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), false);

//     /*Declaring jQuery*/
//     wp_enqueue_script('jquery');

//     /*Enqueue Scripts*/
//     wp_enqueue_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array('jquery'), '1.0', true);
//     wp_enqueue_script('browser', get_template_directory_uri() . '/assets/js/browser.min.js', array('jquery'), '1.0', true);
//     wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), '1.0', true);
//     wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.min.js', array('jquery'), '1.0', true);

//     /*Enqueue The Styles*/
//     wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
//     wp_enqueue_style( 'fontstuff', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0' );

// }
// add_action( 'wp_enqueue_scripts', 'add_my_assets' );

// -----------------------------------------------------------------
// Déclarations des CSS et JS
// -----------------------------------------------------------------
function futimp_register_assets()
{
    // On supprime jQuery
    wp_deregister_script('jquery');
    // Déclarer jQuery
    wp_enqueue_script(
        'jquery',
        // 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        'https://code.jquery.com/jquery-3.6.0.min.js',
        false,
        '3.6.0',
        true
    );
    // Browser
    wp_enqueue_script(
        'browser',
        get_template_directory_uri() . '/assets/js/browser.min.js',
        ['jquery'],
        '1.0',
        true
    );
    // Breakpoints
    wp_enqueue_script(
        'breakpoints',
        get_template_directory_uri() . '/assets/js/breakpoints.min.js',
        ['jquery'],
        '1.0',
        true
    );
    // Utils
    wp_enqueue_script(
        'util',
        get_template_directory_uri() . '/assets/js/util.js',
        ['jquery'],
        '1.0',
        true
    );
    // Main JS
    wp_enqueue_script(
        'main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'],
        '1.0',
        true
    );
    // Main CSS
    wp_enqueue_style(
        'futimp_main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        '1.0'
    );
    // Fontawesome
    wp_enqueue_style(
        'futimp_fontawesome',
        get_template_directory_uri() . '/assets/css/fontawesome-all.min.css',
        [],
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'futimp_register_assets');

//Declaring a sidebar
register_sidebar( array(
	'id' => 'blog-sidebar',     //ID used to call the sidebar
	'name' => 'Blog',           //this is equivalent to the slug in wp
) );