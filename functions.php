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

//Walking for the burger menu on the right
class My_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
         
        $class_names = $value = '';
 
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
 
        $class_names = join( ' ', apply_filters( /*'nav_menu_css_class'*/'', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';
 
        $output .= $indent . '<h3 id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
 
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
 
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '<br /><p class="sub">' . $item->description . '</p>';
        $item_output .= '</a>';
        $item_output .= $args->after;
 
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}


//Declaring Menus
register_nav_menus( array(
	'main' => 'Menu Principal',
	'burger' => 'Menu Burger'
) );



