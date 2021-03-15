<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function add_my_assets() {

    /*Declaring jQuery*/
    wp_enqueue_script('jquery');

    /*Enqueue Scripts*/
    wp_enqueue_script('stuffidk', get_template_directory_uri() . 'assets/js/breakpoints.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('stuffidk', get_template_directory_uri() . 'assets\js\browser.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('stuffidk', get_template_directory_uri() . 'assets/js/main.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('stuffidk', get_template_directory_uri() . 'assets/js/util.min.js', array('jquery'), '1.0', true);

    /*Enqueue The Styles*/
    wp_enqueue_style( 'stuffidk', get_template_directory_uri() . 'assets/css/main.css', array(), '1.0');
    wp_enqueue_style( 'stuffidk', get_template_directory_uri() . 'assets/css/fontawesome-all.min.css', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'add_my_assets' );