<?php

/* ======= Incluindo os scripts padrões ======= */
require dirname(__FILE__) . '/functions-fopa.php';

/* ======= Sidebar Menu Institucional ====== */
if (function_exists('register_sidebar')) {
    //register_sidebar(array('name' => 'Sidebar Principal'));
}

/* ====== suporte para imagem destacada ====== */
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

/* ====== suporte para Menus ====== */
add_theme_support('menus');

if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array('menu-principal' => 'Menu Principal','menu-encontro-economia-criativa'=>'Menu Encontro Economia Criativa','menu-lateral-encontro'=>'Menu Lateral Encontro')
    );
}

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');

    add_image_size('capa-full', 950, 0, true);
}

add_post_type_support('page','excerpt');

function ot_theme_options_page_capability( $capability ) {return 'edit_theme_options';}
add_filter( 'option_page_capability_option_tree', 'ot_theme_options_page_capability' );

$editor = get_role('editor');
$editor->add_cap( 'edit_theme_options' ); 

?>