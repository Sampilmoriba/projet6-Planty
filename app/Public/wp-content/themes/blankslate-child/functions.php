<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
        wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );
add_theme_support('menus');
register_nav_menu('header', 'En tête du menu');
register_nav_menu('footer', 'Pied de page');
// END ENQUEUE PARENT ACTION

$logo_width  = 300;
$logo_height = 100;

add_theme_support(
'custom-logo',
array(
    'height'               => $logo_height,
    'width'                => $logo_width,
    'flex-width'           => true,
    'flex-height'          => true,
    'unlink-homepage-logo' => true,
)
);



function add_login_link( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'header') {
        $items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items','add_login_link', 10, 2 );
